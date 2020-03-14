<?php
global $_GPC, $_W;
$GLOBALS['frames'] = $this->getMainMenu2();
$storeid=$_COOKIE["storeid"];
$cur_store = $this->getStoreById($storeid);
$type=isset($_GPC['type'])?$_GPC['type']:'today';
$pageindex = max(1, intval($_GPC['page']));
$pagesize=10;
$where=" where a.uniacid=:uniacid and a.type=3 and a.store_id=:store_id and a.pay_type in (1,2,5) and a.yy_state in (2,3,4)" ;
$data[':uniacid']=$_W['uniacid'];
$data[':store_id']=$storeid;
if($_GPC['time']){
  $start=strtotime($_GPC['time']['start']);
  $end=strtotime($_GPC['time']['end']);
  $where.=" and UNIX_TIMESTAMP(a.time) >='{$start}' and UNIX_TIMESTAMP(a.time)<='{$end}'";
  $type='all';
}else{
 if($type=='today'){
  $time=date("Y-m-d",time());
  $where.="  and a.time LIKE '%{$time}%' ";
}
if($type=='yesterday'){
	$time=date("Y-m-d",strtotime("-1 day"));
 $where.="  and a.time LIKE '%{$time}%' ";
}
if($type=='week'){
$time=strtotime(date("Y-m-d",strtotime("-7 day")));

  $where.=" and UNIX_TIMESTAMP(a.time) >".$time;
}
if($type=='month'){
  $time=date("Y-m");
  $where.="  and a.time LIKE '%{$time}%' ";
}
}
//总数统计
$sql2="select sum(money) as 'total_money', sum(discount) as 'discount' from" . tablename("cjdc_order") ." as a".$where;
$list2=pdo_fetch($sql2,$data);
//退款统计
$sql3="select sum(money) as 'tk_money' from" . tablename("cjdc_order") ." as a".$where." and (a.yy_state=4)";
$list3=pdo_fetch($sql3,$data);
//优惠券佣金统计
$sql6="select sum(commission) as commission from" . tablename("cjdc_order") ." as a".$where;
$list6=pdo_fetch($sql6,$data);
$commission=$list6['commission'];
//异业佣金统计
$sql7="select sum(yycommission) as yycommission from" . tablename("cjdc_order") ." as a".$where;
$list7=pdo_fetch($sql7,$data);
$yycommission=$list7['yycommission'];
//服务员佣金统计
$sql8="select sum(fwycommission) as fwycommission from" . tablename("cjdc_order") ." as a".$where;
$list8=pdo_fetch($sql8,$data);
$fwycommission=$list8['fwycommission'];

$list4=$this->storePoundage($storeid);
$sql="SELECT a.* FROM ".tablename('cjdc_order'). " a".$where." ORDER BY a.id DESC";
$total=pdo_fetchcolumn("SELECT count(*) FROM ".tablename('cjdc_order'). " a"  .$where." ORDER BY a.id DESC",$data);
$select_sql =$sql." LIMIT " .($pageindex - 1) * $pagesize.",".$pagesize;
$pager = pagination($total, $pageindex, $pagesize);
$list=pdo_fetchall($select_sql,$data);

$fw_money= number_format(($list4['yd_poundage']+$list4['tg_ydpoundage'])/100*($list2['total_money']+$list2['hb_money']),2);
if(checksubmit('export_submit', true)) {
  $start=strtotime($_GPC['time']['start']);
  $end=strtotime($_GPC['time']['end']);
  $count = pdo_fetchcolumn("SELECT COUNT(*) FROM". tablename("cjdc_order")." WHERE type=3 and store_id={$storeid} and pay_type in (1,2,5) and yy_state in (2,3,4) and UNIX_TIMESTAMP(time) >='{$start}' and UNIX_TIMESTAMP(time)<='{$end}'");
  $pagesize = ceil($count/5000);
        //array_unshift( $names,  '活动名称'); 
		
  $header = array(
    'item'=>'序号',
    'order_num' => '订单编号',
    'time' => '支付时间', 
    'pay_type' => '支付渠道', 
    'sh_money' => '商户实收',
    'xf_money' => '消费金额',
    'yh_money' => '优惠金额',
    'commission' => '优惠券佣金',
    'yycommission' => '异业佣金',
    'fwycommission' => '服务员佣金',
    'tk_money' => '累计退款金额',
    'fw_money' => '服务费',
    'state' => '状态',
    );

  $keys = array_keys($header);
  $html = "\xEF\xBB\xBF";
  foreach ($header as $li) {
    $html .= $li . "\t ,";
  }
  $html .= "\n";
  for ($j = 1; $j <= $pagesize; $j++) {
    $sql = "select * from " . tablename("cjdc_order")." WHERE type=3 and store_id={$storeid} and pay_type in (1,2,5) and yy_state in (2,3,4) and UNIX_TIMESTAMP(time) >='{$start}' and UNIX_TIMESTAMP(time)<='{$end}' ORDER BY id DESC limit " . ($j - 1) * 5000 . ",5000 ";
    $list = pdo_fetchall($sql);            
  }

  if (!empty($list)) {
    $size = ceil(count($list) / 500);
    for ($i = 0; $i < $size; $i++) {
      $buffer = array_slice($list, $i * 500, 500);
      $user = array();
      foreach ($buffer as $k =>$row) {
        $row['item']= $k+1;
        if($row['pay_type']==1){
          $row['pay_type']='微信支付';
        }elseif($row['pay_type']==2){
          $row['pay_type']='余额支付';
        }elseif($row['pay_type']==3){
          $row['pay_type']='积分支付';
        }elseif($row['pay_type']==4){
          $row['pay_type']='货到付款';
        }elseif($row['pay_type']==5){
          $row['pay_type']='储值卡支付';
        }
        if($row['yy_state']==4 ){
          $row['sh_money']='0.00';
          $row['xf_money']='0.00';
          $row['yh_money']='0.00';
          $row['commission']='0.00';
          $row['yycommission']='0.00';
          $row['fwycommission']='0.00';
          $row['tk_money']='0.00';
          $row['fw_money']='0.00';
        }else{
          $row['sh_money']=number_format($row['money']-$row['commission']-$row['yycommission']-$row['fwycommission']-(($list4['yd_poundage']+$list4['tg_ydpoundage'])/100*$row['money']),2);
          $row['xf_money']=number_format($row['money']+$row['discount'],2);
          $row['yh_money']=$row['discount'];
          $row['commission']=$row['commission'];
          $row['yycommission']=$row['yycommission'];
          $row['fwycommission']=$row['fwycommission'];
          $row['tk_money']='0.00';
          $row['fw_money']=number_format((($list4['yd_poundage']+$list4['tg_ydpoundage'])/100*$row['money']),2);
        }
        if($row['yy_state']==2 ){
          $row['state']='未入账';
      
        }elseif($row['yy_state']==3){
          $row['state']='已入账';
        }elseif($row['yy_state']==4  ){
          $row['state']='已退款';
        }  
        foreach ($keys as $key) {
          $data5[] = $row[$key];
        }
        $user[] = implode("\t ,", $data5) . "\t ,";
        unset($data5);
      }
      $html .= implode("\n", $user) . "\n";
    }
  }
  
  header("Content-type:text/csv");
  header("Content-Disposition:attachment; filename=预约资金数据.csv");
  echo $html;
  exit();
}

include $this->template('web/yyzjlist');

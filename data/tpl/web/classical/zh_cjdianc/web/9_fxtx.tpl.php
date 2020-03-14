<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>

<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<link rel="stylesheet" type="text/css" href="../addons/zh_cjdianc/template/public/ygcsslist.css">
<style type="text/css">
    .yg5_key>div{float: left;line-height: 34px;}

    .store_td1{height: 45px;}

    .store_list_img{width: 60px;height: 60px;}

    .yg5_tabel{border-color: #e5e5e5;outline: 1px solid #e5e5e5;text-align: center;}

    .yg5_tr2>td{padding: 15px;border: 1px solid #e5e5e5;}

    .yg5_tr1>td{

        border: 1px solid #e5e5e5;
        background-color: #FAFAFA;

        font-weight: bold;

    }

    .yg5_btn{background-color: #EEEEEE;color: #333;border: 1px solid #E4E4E4;border-radius: 6px;width: 100px;height: 34px;}
    .check_img{width: 45px;height: 45px;}
    .ygrow{margin-top: 20px;}
    /*#frame-9{display: block;visibility: visible;}*/
</style>


<ul class="nav nav-tabs">
  <span class="ygxian"></span>
    <div class="ygdangq">当前位置:</div>
  

  <li   <?php  if($type=='wait') { ?> class="active" <?php  } ?>><a href="<?php  echo $this->createWebUrl('fxtx',array('type'=>wait,'state'=>1));?>">待提现</a></li>

  <li   <?php  if($type=='now') { ?> class="active" <?php  } ?>><a href="<?php  echo $this->createWebUrl('fxtx',array('type'=>now,'state'=>2));?>">提现通过</a></li>

  <li   <?php  if($type=='delivery') { ?> class="active" <?php  } ?>><a href="<?php  echo $this->createWebUrl('fxtx',array('type'=>delivery,'state'=>3));?>">提现拒绝</a></li>
  <li  <?php  if($type=='all') { ?> class="active" <?php  } ?>><a href="<?php  echo $this->createWebUrl('fxtx',array('type'=>all));?>">全部</a></li>
</ul>



<div class="row ygrow">

    <div class="col-lg-12">

        <form action="" method="POST" class="col-md-6">

            <div class="input-group" style="width: 300px">

                <input type="text" name="keywords" class="form-control" placeholder="请输入用户名称">

                <span class="input-group-btn">

                    <input type="submit" class="btn btn-default" name="submit" value="查找"/>

                </span>

            </div>

            <input type="hidden" name="token" value="<?php  echo $_W['token'];?>"/>

        </form>

        

    </div><!-- /.col-lg-6 -->

</div>  

<div class="main">
    <div class="panel panel-default">
        <div class="panel-heading">
            审核管理
        </div>
        <div class="panel-body" style="padding: 0px 15px;">
            <div class="row">
                <table class="yg5_tabel col-md-12">
                    <tr class="yg5_tr1">
                        <td class="store_td1">用户姓名</td>
                         <td>联系电话</td>
                        <td>提现金额</td>
                        <td>实际金额</td> 
                       
                        <td>申请时间</td>
                        <td>审核状态</td>
                        <td>操作</td>
                    </tr>
                    <?php  if(is_array($list)) { foreach($list as $key => $item) { ?>
                    <tr class="yg5_tr2">
                      <td class="store_td1"><?php  echo $item['user_name'];?></td>
                       <td><?php  echo $item['account'];?></td>
                      <td><?php  echo $item['tx_cost'];?></td>
                      <td><?php  echo $item['sj_cost'];?></td>
                    
                     <td><?php  echo date("Y-m-d H:i:s",$item['time'])?></td>


                     <?php  if($item['state']==1) { ?>
                     <td >
                        <span class="label label-warning">待审核</span>
                    </td >
                    <?php  } else if($item['state']==2) { ?>
                    <td >
                        <span class="label label-success">已提现</span>
                    </td>
                    <?php  } else if($item['state']==3) { ?>
                    <td >
                       <span class="label label-primary">已拒绝</span>
                   </td>

                   <?php  } ?>  
                   <td>
                      <?php  if($item['state']==1) { ?>
                      
                      <a class="btn storesuccess btn-xs" href="<?php  echo $this->createWebUrl('fxtx',array('id'=>$item['id'],'op'=>'adopt2'))?>" >微信打款</a>
                   
                      <a class="btn storeinfo btn-xs" href="<?php  echo $this->createWebUrl('fxtx',array('id'=>$item['id'],'op'=>'adopt'))?>" >线下打款</a>
                      <a class="btn storewarning btn-xs" href="<?php  echo $this->createWebUrl('fxtx', array('id' => $item['id'],'op'=>'reject'))?>" title="拒绝">拒绝</a>
                      <?php  } else { ?>
                       <a class="btn storeinfo btn-xs" href="" >已操作</a>
                      <?php  } ?>
                 <!--      <a href="<?php  echo $this->createWebUrl('fxtx', array('id' => $item['id'],'op'=>'delete'))?>" class="storespan btn btn-xs" onclick="return confirm('确认删除吗？');return false;">
                          <span class="fa fa-trash-o"></span>
                          <span class="bianji">删除
                              <span class="arrowdown"></span>
                          </span>
                      </a> -->
                      <!-- <a class="btn btn-danger btn-xs" href="<?php  echo $this->createWebUrl('fxtx', array('id' => $item['id'],'op'=>'delete'))?>" onclick="return confirm('确认删除吗？');return false;" title="删除">删</a> -->

                  </td>

              </td>

          </tr>

          <?php  } } ?>
          <?php  if(empty($list)) { ?>
          <tr class="yg5_tr2">
            <td colspan="9">
              暂无提现信息
          </td>
      </tr> 
      <?php  } ?>        



  </table>

</div>

</div>

</div>

</div>

<div class="text-right we7-margin-top">

   <?php  echo $pager;?>

</div>
<script type="text/javascript">
    $(function(){
        // $("#frame-9").addClass("in");
        $("#frame-9").show();
        $("#yframe-9").addClass("wyactive");
    })
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>

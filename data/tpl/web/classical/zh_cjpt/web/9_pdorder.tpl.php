<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<link rel="stylesheet" type="text/css" href="../addons/zh_cjpt/template/public/ygcsslist.css">
<style type="text/css">
    .yg5_key>div{float: left;line-height: 34px;}
    .store_td1{height: 45px;}
    .store_list_img{width: 60px;height: 60px;}
    .yg5_tabel{border-color: #e5e5e5;outline: 1px solid #e5e5e5;}
    .yg5_tr2>td{padding: 10px 15px;border: 1px solid #e5e5e5;text-align: center;}
    .yg5_tr1>th{
        border: 1px solid #e5e5e5;
        background-color: #FAFAFA;
        font-weight: bold;
        text-align: center;
    }
    .yg5_btn{background-color: #EEEEEE;color: #333;border: 1px solid #E4E4E4;border-radius: 6px;width: 100px;height: 34px;}
    .nav{
      margin-bottom: 20px;
    }
</style>
<ul class="nav nav-tabs">
  <span class="ygxian"></span>
  <div class="ygdangq">当前位置:</div> 
  <li  <?php  if($type=='all') { ?> class="active" <?php  } ?>><a href="">派单记录</a></li>
</ul>

<div class="row ygrow">
  <div class="col-lg-11 nav_head">
    <form action="" method="get" class="col-md-4" style="padding-left: 0">
      <input type="hidden" name="c" value="site" />
      <input type="hidden" name="a" value="entry" />
      <input type="hidden" name="m" value="zh_cjpt" />
      <input type="hidden" name="do" value="pdorder" />
      <div class="input-group" style="width: 300px">
        <input type="text" name="keywords" class="form-control" placeholder="请输入骑手名称或手机号" value="<?php  echo $_GPC['keywords'];?>">
        <span class="input-group-btn">
          <input type="submit" class="btn btn-default" name="submit" value="查找"/>
        </span>
      </div>
      <input type="hidden" name="token" value="<?php  echo $_W['token'];?>"/>
    </form>  
    <form action="" method="get" class="col-md-4">
      <input type="hidden" name="c" value="site" />
      <input type="hidden" name="a" value="entry" />
      <input type="hidden" name="m" value="zh_cjpt" />
      <input type="hidden" name="do" value="pdorder" />
      <div class="input-group" style="width: 100px">
        <?php  echo tpl_form_field_daterange('time',$_GPC['time']);?>
        <span class="input-group-btn">
          <input type="submit" class="btn btn-default" name="submit2" value="查找"/>
          <input type="hidden" name="token" value="<?php  echo $_W['token'];?>"/>
        </span>
      </div><!-- /input-group -->
    </form>
    
  </div><!-- /.col-lg-6 -->
</div> 
<div class="main">
    <div class="panel panel-default">
        <div class="panel-heading">
            派单记录
        </div>
        <div class="panel-body" style="padding: 0px 15px;">
            <div class="row">
                <table class="yg5_tabel col-md-12">
                    <tr class="yg5_tr1">
                        <th class="store_td1 col-md-2">骑手</th>
                        <th class="col-md-1">联系电话</th>
                        <th class="col-md-1">接单</th>
                        <th class="col-md-2">完成订单数量</th>
                        <th class="col-md-2">日期</th>
                    </tr>

                      <?php  if(is_array($list)) { foreach($list as $key => $row) { ?>
                    
                    <tr class="yg5_tr2">
                      <td><?php  echo $row['name'];?></td>
                         <td><?php  echo $row['tel'];?></td>
                        <td><?php  echo $row['jd']+$row['dsd']+$row['wc']?></td>
                        <td><?php  echo $row['wc'];?></td>
                        <td><?php  echo $row['days'];?></td>
                  
                    </tr>  
          
            </div>
                    <?php  } } ?>  
                    <?php  if(empty($list)) { ?>
                    <tr class="yg5_tr2">
                        <td colspan="5">
                          暂无配送费
                        </td>
                    </tr>             
                    <?php  } ?>             
                </table>
            </div>
        </form>
    </div>
</div>

 <div class="text-right we7-margin-top">
 <?php  echo $pager;?>
</div>
  <script type="text/javascript">
    $(function(){
        // $("#frame-1").addClass("in");
        $("#frame-4").show();
        $("#yframe-4").addClass("wyactive");
      })
    </script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>
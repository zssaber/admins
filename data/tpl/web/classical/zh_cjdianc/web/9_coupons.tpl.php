<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<link rel="stylesheet" type="text/css" href="../addons/zh_cjdianc/template/public/ygcsslist.css">
<style type="text/css">
    .yg5_key>div{float: left;line-height: 34px;}
    .store_td1{height: 45px;}
    .store_list_img{width: 60px;height: 60px;}
    .yg5_tabel{border-color: #e5e5e5;outline: 1px solid #e5e5e5;}
    .yg5_tr2>td{padding: 10px 15px;border: 1px solid #e5e5e5;text-align: center;}
    .yg5_tr1>th{
        border: 1px solid #e5e5e5;
        padding-left: 15px;
        background-color: #FAFAFA;
        font-weight: bold;
        text-align: center;
    }
    .yg5_btn{background-color: #EEEEEE;color: #333;border: 1px solid #E4E4E4;border-radius: 6px;width: 100px;height: 34px;}
</style>
<ul class="nav nav-tabs">
    <span class="ygxian"></span>
    <div class="ygdangq">当前位置:</div> 
    <li class="active"><a href="<?php  echo $this->createWebUrl('coupons')?>">红包管理</a></li>
    <li><a href="<?php  echo $this->createWebUrl('addcoupons')?>">添加/编辑红包</a></li>
</ul>
<div class="main">
    <div class="panel panel-default">
        <div class="panel-heading">
            红包管理
        </div>
        <div class="panel-body" style="padding: 0px 15px;">
            <div class="row">
                <table class="yg5_tabel col-md-12">
                    <tr class="yg5_tr1">
                        <th class="store_td1 col-md-2">红包名称</th>
                        <th class="col-md-1">优惠条件</th>
                        <th class="col-md-1">优惠金额</th>
                        <th class="col-md-1">数量</th>
                        <th class="col-md-1">剩余数量</th>
                        <th class="col-md-1">开始时间</th>
                        <th class="col-md-1">结束时间</th>
                        <th class="col-md-2">使用范围</th>
                        <th class="col-md-2">操作</th>
                    </tr>
                    <?php  if(is_array($list)) { foreach($list as $key => $item) { ?>
                    <tr class="yg5_tr2">
                        <td><?php  echo $item['name'];?></td>
                        <td><?php  echo $item['full'];?></td>
                        <td><?php  echo $item['reduce'];?></td>
                        <td><?php  echo $item['number'];?></td>
                        <td><?php  echo $item['stock'];?></td>
                        <td><?php  echo $item['start_time'];?></td>
                        <td><?php  echo $item['end_time'];?></td>
                         <?php  if($item['type']==1) { ?>
                  <td>
                  <span class="label label-warning"> 仅限外卖使用</span>
                 
                  </td>
                   <?php  } else if($item['type']==2) { ?>
                    <td>
                    <span class="label label-info"> 仅限店内使用</span>              
                  </td>
                  <?php  } else if($item['type']==3) { ?>
                    <td>
                    <span class="label label-default">两者都可使用</span> 
                  </td>
                   <?php  } ?>
                    <td>
                        <a href="<?php  echo $this->createWebUrl('addcoupons', array('id' => $item['id']))?>" class="storespan btn btn-xs">
                            <span class="fa fa-pencil"></span>
                            <span class="bianji">编辑
                                <span class="arrowdown"></span>
                            </span>
                        </a>
                        <a href="javascript:void(0);" class="storespan btn btn-xs" data-toggle="modal" data-target="#myModal<?php  echo $item['id'];?>">
                            <span class="fa fa-trash-o"></span>
                            <span class="bianji">删除
                                <span class="arrowdown"></span>
                            </span>
                        </a>
                        <!-- <a class="btn btn-warning btn-sm" href="<?php  echo $this->createWebUrl('addcoupons', array('id' => $item['id']))?>" title="编辑">改</a>&nbsp;&nbsp;
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal<?php  echo $item['id'];?>">删</button> -->
                    </td>
                    </tr>  
                     <div class="modal fade" id="myModal<?php  echo $item['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel" style="font-size: 20px;">提示</h4>
                        </div>
                        <div class="modal-body" style="font-size: 20px">
                            确定删除么？
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                            <a href="<?php  echo $this->createWebUrl('coupons', array('op' => 'delete', 'id' => $item['id']))?>" type="button" class="btn btn-info" >确定</a>
                        </div>
                    </div>
                </div>
            </div>
                    <?php  } } ?>
                    <?php  if(empty($list)) { ?>
                    <tr class="yg5_tr2">
                        <td colspan="7">
                          暂无优惠活动
                        </td>
                    </tr>             
                    <?php  } ?>
                </table>
            </div>
        </form>
    </div>
    <?php  echo $pager;?>
</div>
<script type="text/javascript">
    $(function(){
        $("#frame-5").show();
        $("#yframe-5").addClass("wyactive");
    })
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>
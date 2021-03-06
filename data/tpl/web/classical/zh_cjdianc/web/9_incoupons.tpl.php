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
    .navback{width: 0}
    .main{margin: 16px 0px 30px 45px;}
    .nav_box{
        left: 150px;
        top: 48px;
        bottom: 0;
        color: #333;
        border-right: 1px solid #efefef;
        text-align: center;
        position: fixed;
        background: #fff;
        z-index: 99;   
        padding:0;     
    }
    .left_nav{
        padding-top: 20px
    }
    .left_nav li{
        line-height: 45px;
    }
    .left_nav li.active{
        color: #00aeff;
        background: #edf6ff
    }
    .left_nav li:hover{
        background: #edf6ff;
    }
    .left_nav li:hover a{
        color: #00aeff;
    }

</style>
<div class="nav_box col-md-1">
    <ul class="left_nav">
    <!--     <span class="ygxian"></span>
        <div class="ygdangq">当前位置:</div>  -->   
        <li class="active"><a href="<?php  echo $this->createWebUrl('incoupons')?>">优惠券列表</a></li>
        <li><a href="<?php  echo $this->createWebUrl('inaddcoupons')?>">添加/编辑优惠券</a></li>
    </ul>
</div>

<!-- <ul class="nav nav-tabs">
    <span class="ygxian"></span>
    <div class="ygdangq">当前位置:</div> 
    <li class="active"><a href="<?php  echo $this->createWebUrl('incoupons')?>">优惠券管理</a></li>
    <li><a href="<?php  echo $this->createWebUrl('inaddcoupons')?>">添加/编辑优惠券</a></li>
</ul> -->
<div class="main">
    <div class="panel panel-default">
        <div class="panel-heading">
            优惠券列表
        </div>
        <div class="panel-body" style="padding: 0px 15px;">
            <div class="row">
                <table class="yg5_tabel col-md-12">
                    <tr class="yg5_tr1">
                        <th class="store_td1 col-md-2">优惠券名称</th>
						<th class="col-md-1">优惠劵类型</th>
                        <th class="col-md-1">优惠条件</th>
                        <th class="col-md-1">优惠金额</th>
						<th class="col-md-1">优惠券佣金</th>
                        <th class="col-md-1">数量</th>
                        <th class="col-md-1">剩余数量</th>
                        <th class="col-md-1">开始时间</th>
                        <th class="col-md-1">结束时间</th>
                        <th class="col-md-1">使用范围</th>
                        <th class="col-md-2">操作</th>
                    </tr>
                    <?php  if(is_array($list)) { foreach($list as $key => $item) { ?>
                    <tr class="yg5_tr2">
                        <td><?php  echo $item['name'];?></td>
						<?php  if($item['category']==1) { ?>
						<td>
						 <span class="label label-warning"> 普通券</span>
						</td>
					<?php  } else if($item['category']==2) { ?>
						<td>
					 	 <span class="label label-info"><?php  if($item['is_dj']==1) { ?>独家<?php  } ?>异业券</span>              
						</td>
					<?php  } ?>
                        <td><?php  echo $item['full'];?></td>
                        <td><?php  echo $item['reduce'];?></td>
						<?php  if($item['commission']>0) { ?>
						<td><?php  echo $item['commission'];?>元</td>
						<?php  } else if($item['commission_td']>0) { ?>
						<td><?php  echo $item['commission_td'];?>%</td>
						<?php  } else { ?>
						<td>0元</td>
						<?php  } ?>
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
                        <a href="<?php  echo $this->createWebUrl('inaddcoupons', array('id' => $item['id']))?>" class="storespan btn btn-xs">
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
                            <a href="<?php  echo $this->createWebUrl('incoupons', array('op' => 'delete', 'id' => $item['id']))?>" type="button" class="btn btn-info" >确定</a>
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
        $("#frame-4").show();
        $("#yframe-4").addClass("wyactive");
    })
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>
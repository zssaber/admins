<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<link rel="stylesheet" type="text/css" href="../addons/zh_cjdianc/template/public/ygcsslist.css">
<style type="text/css">
    .yg14{margin-top: 30px;}
    .navback{width: 0}
    .yg_back{margin-left: 136px}
    .store_td1{height: 45px;}
    .yg5_tabel{border-color: #e5e5e5;outline: 1px solid #e5e5e5;}
    .yg5_tr2>td{padding: 10px 20px;border: 1px solid #e5e5e5;text-align: center;}
    .yg5_tr1>th{
        border: 1px solid #e5e5e5;
        background-color: #FAFAFA;
        font-weight: bold;
        text-align: center;
    }
    .tab{border-bottom: 1px solid #cdcdcd;overflow: hidden;}
    .tab li{float: left;padding:10px;}
    .tab li.on{border-bottom: 2px solid #44ABF7;color:#44ABF7}
</style>
<ul class="tab">
<!--    <span class="ygxian"></span>
    <div class="ygdangq">当前位置:</div>  --> 
    <li><a href="<?php  echo $this->createWebUrl2('dldishes2')?>">商品列表</a></li>
    <li class="on"><a href="<?php  echo $this->createWebUrl2('dldishestype')?>">商品分类</a></li>
</ul>
<ul class="nav nav-tabs" style="margin-top:20px ">
    <span class="ygxian"></span>
    <div class="ygdangq">当前位置:</div>    
    <li class="active"><a href="<?php  echo $this->createWebUrl2('dldishestype')?>">分类列表</a></li>
    <li><a href="<?php  echo $this->createWebUrl2('dladddishestype')?>">添加分类</a></li>
</ul>
<div class="main"> 
    <div class="panel panel-default">
        <div class="panel-heading">
            分类列表
        </div>
        <div class="panel-body" style="padding: 0px 15px;">
            <div class="row">              
                <table class="yg5_tabel col-md-12">
                    <tr class="yg5_tr1">
                    <th class="store_td1">id</th>
                        <th>分类名称</th>
                        <th>状态</th>
                        <th>查看</th>
                        <th>操作</th>
                    </tr>
                     <?php  if(is_array($list)) { foreach($list as $key => $item) { ?>
              <tr class="yg5_tr2">
              <td>
                <?php  echo $item['id'];?>
                </td>

               
                <td>
                <?php  echo $item['type_name'];?>
                </td>
                <td>
                <?php  if($item['is_open']==1) { ?>
                <a href="<?php  echo $this->createWebUrl2('dldishestype',array('op'=>'upd','state'=>2,'id'=>$item['id']));?>" class="btn storeblue btn-xs"  >显示</a>
                <?php  } else if($item['is_open']==2) { ?>
                <a  href="<?php  echo $this->createWebUrl2('dldishestype',array('op'=>'upd','state'=>1,'id'=>$item['id']));?>" class="btn storegrey btn-xs" >隐藏</a>
                <?php  } ?>
                </td>
                <td>
                    <a href="<?php  echo $this->createWebUrl2('dladddishestype',array('id'=>$item['id']));?>" class="storespan btn btn-xs">
                        <span class="fa fa-pencil"></span>
                        <span class="bianji">编辑
                            <span class="arrowdown"></span>
                        </span>                  
                    </a>
                    <!-- <a class="btn btn-warning btn-sm" href="<?php  echo $this->createWebUrl2('dladddishestype',array('id'=>$item['id']));?>">编辑</a> -->
                </td>
                <td>
                    <a href="javascript:void(0);" class="storespan btn btn-xs" data-toggle="modal" data-target="#myModal<?php  echo $item['id'];?>">
                        <span class="fa fa-trash-o"></span>
                        <span class="bianji">删除
                            <span class="arrowdown"></span>
                        </span>
                    </a>
                    <!-- <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal<?php  echo $item['id'];?>">删</button> -->
                
                </td>
               <!--  <td> <?php  echo $pager;?></td> -->
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
                            <a href="<?php  echo $this->createWebUrl2('dldishestype', array('op'=>'del','id'=>$item['id']));?>" type="button" class="btn btn-info" >确定</a>
                        </div>
                    </div>
                </div>
            </div>
               <?php  } } ?>
               
              <?php  if(empty($list)) { ?>
             <tr class="yg5_tr2">
                <td colspan="5">
                  尚未添加分类
                </td>
              </tr>
             
              <?php  } ?>
          </table>
        </div>
      </div>
    </div>
  
</div>
<script type="text/javascript">
    $(function(){
        // $("#frame-2").addClass("in");
        $("#frame-2").show();
        $("#yframe-2").addClass("wyactive");
    })
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>
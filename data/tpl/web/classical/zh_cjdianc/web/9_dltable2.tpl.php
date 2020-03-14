<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<link rel="stylesheet" type="text/css" href="../addons/zh_cjdianc/template/public/ygcsslist.css">
<style type="text/css">
  .store_td1{height: 45px;}
  .yg5_tabel{border-color: #e5e5e5;outline: 1px solid #e5e5e5;}
    .yg5_td{
        padding: 10px;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;        
    }
    .tabel_yuan{width: 15px;height: 15px;border: 3px solid white;border-radius: 50%;margin-right: 5px;}
    .tabel_btn{margin-right: 10px;}
    .tabel_btn>div{float: left;line-height: 15px;}
    .tabel_wai{margin: 20px 0px;}
    .tabel_erwei{width: 17px;height: 17px;float: left;margin-right: 5px;}
    .tabel_seach{padding-left: 10px;width: 150px;height: 30px;border-radius: 4px;border: 1px solid #e5e5e5;}
    .tabel_sele{width: 120px;height: 30px;margin-right: 10px;}
    .tabel1{background-color: #555555;}
    .tabel2{background-color: #EF4437;}
    .tabel3{background-color: #428BCA;}
    .tabel4{background-color: #5CB85C;}
    .tabel1_label{color: #5CB85C;margin-top: 20px;}
    .tabel_in{width: 100px;}
    .tabel1_labe2{width: 140px;padding: 10px 0px;background-color: #EEEEEE;margin:10px auto 0px;}
    .yg5_td>a>div:nth-child(1){margin:0px auto;width: 100px;height: 100px;line-height: 100px;color: white;border-radius: 50%;font-size: 18px;}
    .yg5_td{position: relative;}
    .tabel_cha{position: absolute;font-size: 28px;top: 0px;right: 0px;font-weight: bold;}
    .tabel_cha>a{color: red;}
    .spanyg{color: #999;font-size: 12px;display: none;}
    .tabel_cha>a:hover .spanyg{display: block;}
</style>
<ul class="nav nav-tabs">
    <span class="ygxian"></span>
    <div class="ygdangq">当前位置:</div>    
    <li class="active"><a href="<?php  echo $this->createWebUrl2('dltable2')?>">餐桌列表</a></li>
    <li><a href="<?php  echo $this->createWebUrl2('dladdtable')?>">添加餐桌</a></li>
</ul> 
<div class="main"> 
    <div class="panel panel-default">
        <div class="panel-heading wyheader">
            桌台列表
        </div>
        <div class="panel-body" style="padding: 0px 15px;">
            <div class="row">
                <div class="col-md-12 tabel_wai">
<!--                   <a class="btn btn-success btn-sm tabel_btn" href="javascript:void(0);">
                    <div class="tabel_yuan"></div>
                    <div>桌台状态</div>
                  </a>
                  <a class="btn btn-success btn-sm tabel_btn" href="javascript:void(0);">
                    <img class="tabel_erwei" src="../addons/zh_cjdianc/template/images/saoma.png">
                    <div>二维码</div>
                  </a> -->
                   <form  action="" method="POST">
                  <a class="btn storeblue btn-sm tabel_btn" href="<?php  echo $this->createWebUrl2('dladdtable')?>">
                    新建桌台
                  </a>
                  <a class="btn storered btn-sm tabel_btn" href="<?php  echo $this->createWebUrl2('dltable2',array('op'=>'qt'))?>">
                    一键清台
                  </a>
                  <a class="btn btn-primary btn-sm tabel_btn" href="<?php  echo $this->createWebUrl2('dlbatch')?>">
                    批量新增
                  </a>
             
                  <input class="tabel_seach" type="text" name="keywords" placeholder="餐桌名称">
                  <select class="tabel_sele" name="type">
                   <?php  if(is_array($type)) { foreach($type as $row2) { ?>
                    <option value="<?php  echo $row2['id'];?>"><?php  echo $row2['name'];?></option>
                   <?php  } } ?>
                  </select>
                  <input class="btn btn-success btn-sm tabel_btn" type="submit" name="submit" value="搜索">
                   <input type="hidden" name="token" value="<?php  echo $_W['token'];?>"/>
                  </form>
<!--                     <a href="javascript:;" class="storespan btn btn-xs">
                        <span class="fa fa-pencil"></span>
                        <span class="bianji">查看订单
                            <span class="arrowdown"></span>
                        </span>                                
                    </a> -->
                </div>

                <div class="yg5_tabel col-md-12">
                        <div class="yg5_tr1">
                         <?php  if(is_array($list)) { foreach($list as $row) { ?>
                        <div class="col-md-2 yg5_td">
                            <div class="tabel_cha">
                                <a onclick="if(!confirm('删除后将不可恢复,确定删除吗?')) return false;" href="<?php  echo $this->createWebUrl2('dltable2',array('id'=>$row['id'],'op'=>'del'))?>"><span class="">×</span>
                                    <span class="spanyg">删除</span>
                                </a>
                            </div>
                        <?php  if($row['status']==0) { ?>
                            <a href="<?php  echo $this->createWebUrl2('dladdtable',array('id'=>$row['id']))?>"><div class="tabel1">空闲</div></a>
                        <?php  } else if($row['status']==1) { ?>
                            <a href="<?php  echo $this->createWebUrl2('dladdtable',array('id'=>$row['id']))?>"><div class="tabel2">已开台</div></a>
                        <?php  } else if($row['status']==2) { ?>
                            <a href="<?php  echo $this->createWebUrl2('dladdtable',array('id'=>$row['id']))?>"><div class="tabel3">已下单</div></a>
                        <?php  } else if($row['status']==3) { ?>
                            <a href="<?php  echo $this->createWebUrl2('dladdtable',array('id'=>$row['id']))?>"><div class="tabel4">已支付</div></a>
                        <?php  } ?>
                            <div class="tabel1_label">类型：<?php  echo $row['type_name'];?></div>
                            <div class="tabel1_label">标签：<?php  echo $row['tag'];?></div>
                            <div class="tabel1_labe2">
                                <div><?php  echo $row['name'];?></div>
                                <form action="" method="POST" style="width: 100px;float: left;">
                                <select style="margin-top: 10px;" id="status" name="status" onchange="$(this.form).submit();">
                                    <option value="4" <?php  if($row['status']==0) { ?> selected <?php  } ?>>空闲</option>
                                    <option value="1" <?php  if($row['status']==1) { ?> selected <?php  } ?>>已开台</option>
<!--                                     <option value="2" <?php  if($row['status']==2) { ?> selected <?php  } ?>>已下单</option>
                                    <option value="3" <?php  if($row['status']==3) { ?> selected <?php  } ?>>已支付</option> -->
                                </select>
                                <input type="hidden" value="<?php  echo $row['id'];?>" name="id" />
                                <input type="hidden" name="token" value="<?php  echo $_W['token'];?>"/>
                                </form>
                               <a href="<?php  echo $this->createWebUrl2('dltableorder',array('table_id'=>$row['id']))?>" class="storespan btn btn-xs" style="margin-top: 16px; border: 1px solid;margin-right: 12px;">
                                    <span class="fa fa-pencil"></span>
                                    <span class="bianji" style="left:-100%">查看订单
                                        <span class="arrowdown"></span>
                                    </span>                                
                                </a> 
                            </div>
                        </div>
                        <?php  } } ?>
                       
                    </div>
                    <div class="yg5_tr2">
                    </div>
                </div>
            </div>
        </div>
    </div>
  
</div>
<script type="text/javascript">
    $(function(){
        // $("#frame-3").addClass("in");
        $("#frame-3").show();
        $("#yframe-3").addClass("wyactive");
    })
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>
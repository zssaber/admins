<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<link rel="stylesheet" type="text/css" href="../addons/zh_cjdianc/template/public/ygcss.css">
<ul class="nav nav-tabs">
    <span class="ygxian"></span>
    <div class="ygdangq">当前位置:</div>    
    <li><a href="<?php  echo $this->createWebUrl2('dltabletype2')?>">餐桌分类</a></li>
    <li class="active"><a href="<?php  echo $this->createWebUrl2('dladdtabletype')?>">添加餐桌分类</a></li>
</ul>
<div class="main">
  <div class="panel panel-default ygdefault">

        <div class="panel-heading wyheader">添加/编辑分类</div>

        <div class="panel-body">

<form class="form-horizontal" action="" method="POST">



  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">分类名称</label>
    <div class="col-sm-10">
      <input type="text"  name="name" value="<?php  echo $list['name'];?>" class="form-control" id="inputEmail3" placeholder="请填写分类名称">
    </div>
  </div>


   <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">服务金额</label>
    <div class="col-sm-10">
          <input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')" name="fw_cost" value="<?php  echo $list['fw_cost'];?>" class="form-control" id="inputEmail3" placeholder="请填写服务金额">
         
    </div>
  </div>


   <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">最低消费</label>
    <div class="col-sm-10">
      <input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')" name="zd_cost" value="<?php  echo $list['zd_cost'];?>" class="form-control" id="inputEmail3" placeholder="请填写最低消费">
    </div>
  </div>


   <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">预订预付款</label>
    <div class="col-sm-10">
      <input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')" name="yd_cost" value="<?php  echo $list['yd_cost'];?>" class="form-control" id="inputEmail3" placeholder="请填写预订预付款">
    </div>
  </div>


   <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">数量</label>
    <div class="col-sm-10">
      <input type="number"  name="num" value="<?php  echo $list['num'];?>" class="form-control" id="inputEmail3" placeholder="请填写数量">
    </div>
  </div>





<div class="form-group">

    <label for="inputEmail3" class="col-sm-2 control-label">排序序号</label>

    <div class="col-sm-10">

      <input type="number"  name="orderby" value="<?php  echo $list['orderby'];?>" class="form-control" id="inputEmail3" placeholder="请填写排序序号">
      <span class="help-block">*从小到大排序</span>
    </div>

  </div>






    <div class="form-group">
          <input type="submit" name="submit" value="提交" class="btn col-lg-3 col-lg-offset-3" style="color: white;background-color: #44ABF7;"/>
          <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
          <input type="hidden" name="id" value="<?php  echo $list['id'];?>" />
      </div>
   <input type="hidden" name="id" value="<?php  echo $list['id'];?>"/>

  <input type="hidden" name="token" value="<?php  echo $_W['token'];?>"/>

</form>

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
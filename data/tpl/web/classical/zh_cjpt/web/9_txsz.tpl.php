<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<link rel="stylesheet" type="text/css" href="../addons/zh_cjpt/template/public/ygcss.css">
<ul class="nav nav-tabs">
  <span class="ygxian"></span>
  <div class="ygdangq">当前位置:</div>    
  <li class="active"><a href="javascript:void(0);">提现设置</a></li>
</ul>
<div class="main">
  <form action="" method="post" class="form-horizontal form" enctype="multipart/form-data">
    <!--<input type="hidden" name="parentid" value="<?php  echo $parent['id'];?>" />-->
    <div class="panel panel-default ygdefault">
      <div class="panel-heading wyheader">
        提现设置
      </div>
      <div class="panel-body">

        <div class="form-group">
          <label class="col-xs-12 col-sm-3 col-md-2 control-label">最低提现金额</label>
          <div class="col-sm-9">
            <p class="input-group">
             <input type="text" name="tx_zdmoney" value="<?php  echo $item['tx_zdmoney'];?>" id="points" class="form-control" />
             <span class="input-group-addon">元</span>
           </p>
           <div class="help-block">*最低提现金额不能小于1元，建议填写整数，不填写为不限制</div>
         </div>
       </div>
       <div class="form-group ygyi3 two">
        <label class="col-xs-12 col-sm-3 col-md-2 control-label">提现手续费</label>
        <div class="col-sm-9">
          <p class="input-group">
           <input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')" name="tx_sxf" value="<?php  echo $item['tx_sxf'];?>" id="points" class="form-control" />
           <span class="input-group-addon">%</span>
         </p>
         <span class="help-block">*不填写为无手续费</span>
       </div>
     </div>  
   </div>   
   <div class="form-group">
    <label class="col-xs-12 col-sm-3 col-md-2 control-label">提现须知</label>
    <div class="col-sm-9">
     <?php  echo tpl_ueditor('tx_notice',$item['tx_notice']);?>
   </div>
 </div>
</div>
</div>
<div class="form-group">
  <input type="submit" name="submit" value="提交" class="btn col-sm-3" style="color: white;background-color: #44ABF7;"/>
  <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
  <input type="hidden" name="id" value="<?php  echo $item['id'];?>" />
</div>
</form>
</div>
<script type="text/javascript">
  $(function(){
        // $("#frame-13").addClass("in");
        $("#frame-5").show();
        $("#yframe-5").addClass("wyactive");
      })
    </script><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>
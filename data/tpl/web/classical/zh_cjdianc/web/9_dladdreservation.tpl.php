<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<link rel="stylesheet" type="text/css" href="../addons/zh_cjdianc/template/public/ygcss.css">
<ul class="nav nav-tabs">
	<span class="ygxian"></span>
	<div class="ygdangq">当前位置:</div>    
	<li ><a href="<?php  echo $this->createWebUrl2('dlreservation')?>">预定时间</a></li>
	<li class="active"><a href="<?php  echo $this->createWebUrl2('dladdreservation',array('op'=>'post'))?>">添加预定开放时间段</a></li>
	<li><a href="<?php  echo $this->createWebUrl2('dlallreservation',array('op'=>'batch'))?>">批量新建</a></li>
</ul>
<div class="main">
	<div class="panel panel-default ygdefault">

		<div class="panel-heading wyheader">预订开放时间段 详情</div>

		<div class="panel-body">

			<form class="form-horizontal" action="" method="POST">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">排序</label>
					<div class="col-sm-9">
						<input type="number" class="form-control" value="<?php  echo $item['num'];?>" name="num">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">时间点</label>
					<div class="col-sm-10">
						<?php  echo tpl_form_field_clock('time', $item['time']);?>
					</div>
				</div>
			<!-- 	<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">标签</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" value="<?php  echo $item['label'];?>" name="label">
					</div>
				</div>

 -->
				<div class="form-group">
					<input type="submit" name="submit" value="提交" class="btn col-lg-3 col-lg-offset-3" style="color: white;background-color: #44ABF7;"/>
					<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
					<input type="hidden" name="id" value="<?php  echo $item['id'];?>" />
				</div>

			</form>

		</div>
	</div>
</div>
<script type="text/javascript">
	$(function(){
		$("#frame-3").show();
		$("#yframe-3").addClass("wyactive");
	})
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>
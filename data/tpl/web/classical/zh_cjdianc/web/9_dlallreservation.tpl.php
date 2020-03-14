<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<link rel="stylesheet" type="text/css" href="../addons/zh_cjdianc/template/public/ygcss.css">
<ul class="nav nav-tabs">
	<span class="ygxian"></span>
	<div class="ygdangq">当前位置:</div>    
	<li ><a href="<?php  echo $this->createWebUrl2('dlreservation')?>">预定时间</a></li>
	<li ><a href="<?php  echo $this->createWebUrl2('dladdreservation',array('op'=>'post'))?>">添加预定开放时间段</a></li>
	<li class="active"><a href="<?php  echo $this->createWebUrl2('dlallreservation',array('op'=>'batch'))?>">批量新建</a></li>
</ul>
<div class="main">
	<div class="panel panel-default ygdefault">

		<div class="panel-heading wyheader">批量创建预订时间点</div>

		<div class="panel-body">
		    <div class="alert alert-info">
        <strong>温馨提示：</strong>
        <p>
            系统会根据您填写的起始时间点，和创建间隔, 批量创建预订时间点。
            <br>
            例如： 想要在 18:00 开始预订， 每隔30分钟创建一个预订时间点， 创建4个预订时间点。
            <br>
            系统会创建: 18:00, 18:30, 19:00, 19:30 共4个时间点
             <br>
            排序会在初始设置值上累加
        </p>
    </div>
			<form class="form-horizontal" action="" method="POST">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">排序</label>
					<div class="col-sm-9">
						<input type="number" class="form-control" value="<?php  echo $item['num'];?>" name="num">
					</div>
				</div>
				<div class="form-group">
					<label  class="col-xs-12 col-sm-3 col-md-2 control-label">时间点</label>
					<div class="col-sm-10">
						<?php  echo tpl_form_field_clock('time', $item['time']);?>
					</div>
				</div>
<!-- 				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">标签</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" value="<?php  echo $item['label'];?>" name="label">
					</div>
				</div> -->
				<div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">创建间隔(单位： 分钟)</label>
                    <div class="col-sm-9">
                        <input type="number" name="time_point" class="form-control" value="30" placeholder=""/>
                        <span class="help-block">
                            例如每30分钟设立一个预订时间点： 30
                        </span>
                    </div>
                </div>
				 <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">创建数量</label>
                    <div class="col-sm-9">
                        <input type="number" name="time_count" class="form-control" value="1" placeholder=""/>
                        <span class="help-block">
                            一次最多创建15个预订时间点
                        </span>
                    </div>
                </div>


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
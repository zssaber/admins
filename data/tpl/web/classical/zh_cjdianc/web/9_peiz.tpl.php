<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<link rel="stylesheet" type="text/css" href="../addons/zh_cjdianc/template/public/ygcss.css">
<style type="text/css">
    .ygmargin{margin-top: 10px;color: #999;}
</style>
<ul class="nav nav-tabs">
    <span class="ygxian"></span>
    <div class="ygdangq">当前位置:</div>    
    <li class="active"><a href="javascript:void(0);">小程序设置</a></li>
</ul>
<div class="main">
    <form action="" method="post" class="form-horizontal form" enctype="multipart/form-data" id="invitative">
        <div class="panel panel-default ygdefault">
            <div class="panel-heading wyheader">
                系统设置&nbsp;>&nbsp;小程序设置
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">小程序Appid：</label>
                    <div class="col-sm-9">
                        <input type="text" name="appid" value="<?php  echo $item['appid'];?>" id="web_name" class="form-control" />
                        <div class="help-block">
                        * 请填写小程序的Appid
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">小程序Appsecret：</label>
                    <div class="col-sm-9">
                        <input type="text" name="appsecret" value="<?php  echo $item['appsecret'];?>" id="web_name" class="form-control" />
                        <div class="help-block">
                        * 请填写小程序的Appsecret
                        </div>
                    </div>
                </div>
                <!-- <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">小程序商户号：</label>
                    <div class="col-sm-9">
                        <input type="text" name="mchid" value="<?php  echo $item['mchid'];?>" id="web_name" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">小程序商户号密钥：</label>
                    <div class="col-sm-9">
                        <input type="text" name="wxkey" value="<?php  echo $item['wxkey'];?>" id="web_name" class="form-control" />
                    </div>
                </div> -->
                 <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">微信小程序JavaScript SDK的key</label>
                    <div class="col-sm-9">
                        <input type="text" name="map_key" class="form-control" value="<?php  echo $item['map_key'];?>" />
                        <div class="ygmargin">*须填写真实有效数据，否则会出现商家不显示问题，腾讯地图key申请地址 http://lbs.qq.com/qqmap_wx_jssdk/index.html</div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="form-group">
            <input type="submit" name="submit" value="保存设置" class="btn col-lg-3" style="color: white;background-color: #44ABF7;" />
            <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
            <input type="hidden" name="id" value="<?php  echo $item['id'];?>" />
        </div>
    </form>
</div>
<script type="text/javascript">
    $(function(){
        // $("#frame-14").addClass("in");
        $("#frame-14").show();
        $("#yframe-14").addClass("wyactive");
    })
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>
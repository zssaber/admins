<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<link rel="stylesheet" type="text/css" href="../addons/zh_cjdianc/template/public/ygcss.css">
<style type="text/css">
    .ygmargin{margin-top: 10px;color: #999;}
    input[type="radio"] + label::before {
        content: "\a0"; /*不换行空格*/
        display: inline-block;
        vertical-align: middle;
        font-size: 16px;
        width: 1em;
        height: 1em;
        margin-right: .4em;
        border-radius: 50%;
        border: 2px solid #ddd;
        text-indent: .15em;
        line-height: 1; 
    }
    input[type="radio"]:checked + label::before {
        background-color: #44ABF7;
        background-clip: content-box;
        padding: .1em;
        border: 2px solid #44ABF7;
    }
    input[type="radio"] {
        position: absolute;
        clip: rect(0, 0, 0, 0);
    }
</style>
<ul class="nav nav-tabs">
    <span class="ygxian"></span>
    <div class="ygdangq">当前位置:</div>    
    <li class="active"><a href="javascript:void(0);">充值设置</a></li>
</ul>
<div class="main">
    <form action="" method="post" class="form-horizontal form" enctype="multipart/form-data">
        <!--<input type="hidden" name="parentid" value="<?php  echo $parent['id'];?>" />-->
        <div class="panel panel-default ygdefault">
            <div class="panel-heading wyheader">
                充值设置
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">充值中心</label>
                    <div class="col-sm-9">
                        <span class="radio-inline">
                            <input id="mored" type="radio" name="is_cz" value="1" <?php  if($item['is_cz']==1) { ?>checked<?php  } ?> />
                            <label for="mored">开启</label>              
                        </span>
                        <span class="radio-inline">
                            <input id="moredan" type="radio" name="is_cz" value="2" <?php  if($item['is_cz']==2 || empty($item['is_cz'])) { ?>checked<?php  } ?> /> 
                            <label for="moredan">关闭</label>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-xs-12 col-sm-3 col-md-2 control-label">充值协议</label>
                  <div class="col-sm-9">
                       <?php  echo tpl_ueditor('cz_notice',$item['cz_notice']);?>
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-xs-12 col-sm-3 col-md-2 control-label">短信充值协议</label>
                  <div class="col-sm-9">
                       <?php  echo tpl_ueditor('dx_notice',$item['dx_notice']);?>
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
        $("#frame-13").show();
        $("#yframe-13").addClass("wyactive");
    })
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>
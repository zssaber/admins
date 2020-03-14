<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<link rel="stylesheet" type="text/css" href="../addons/zh_cjdianc/template/public/ygcss.css">
<style type="text/css">
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
        <li class="active"><a href="javascript:void(0);">自动接单</a></li>
    </ul>
</div>
<!-- <ul class="nav nav-tabs">
    <span class="ygxian"></span>
    <div class="ygdangq">当前位置:</div>    
    <li class="active"><a href="javascript:void(0);">自动接单</a></li>
</ul> -->
<div class="main">
    <form action="" method="post" class="form-horizontal form" enctype="multipart/form-data" id="invitative">
        <div class="panel panel-default ygdefault">
            <div class="panel-heading wyheader">
                自动接单
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">自动接单</label>
                    <div class="col-sm-9">
                        <label class="radio-inline">
                            <input type="radio" id="emailwy1" name="is_jd" value="1" <?php  if($info['is_jd']==1) { ?>checked<?php  } ?> />
                            <label for="emailwy1">开启</label>
                        </label>
                        <label class="radio-inline">
                            <input type="radio" id="emailwy2" name="is_jd" value="2" <?php  if($info['is_jd']==2 || empty($info['is_jd'])) { ?>checked<?php  } ?> />
                            <label for="emailwy2">关闭</label>
                        </label>    
                        <span class="help-block">*选择关闭，则需要商户手动接单</span>
                    </div>

                </div>
            </div>
        </div>
        
        <div class="form-group">
            <input type="submit" name="submit" value="保存设置" class="btn col-lg-3" style="color: white;background-color: #44ABF7;" />
            <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
            <input type="hidden" name="id" value="<?php  echo $info['id'];?>" />
        </div>
    </form>
</div>
<script type="text/javascript">
    $(function(){
        $("#frame-4").show();
        $("#yframe-4").addClass("wyactive");
    })
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>

<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<link rel="stylesheet" type="text/css" href="../addons/zh_cjdianc/template/public/ygcss.css">
<style type="text/css">
    .ygmargin{margin-top: 10px;color: #999;}
</style>
<ul class="nav nav-tabs">
    <span class="ygxian"></span>
    <div class="ygdangq">当前位置:</div>    
    <li class="active"><a href="javascript:void(0);">入驻设置</a></li>
</ul>
<div class="main">
    <form action="" method="post" class="form-horizontal form" enctype="multipart/form-data" id="invitative">
        <div class="panel panel-default ygdefault">
            <div class="panel-heading wyheader">
                门店管理&nbsp;>&nbsp;入驻设置
            </div>
            <div class="panel-body">
             <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">门店入驻 </label>
                    <div class="col-sm-9">
                        <span class="radio-inline">
                            <input id="is_psxx1" type="radio" name="is_mdrz" value="1" <?php  if($item['is_mdrz']==1) { ?>checked<?php  } ?> />
                            <label for="is_psxx1">开启</label>              
                        </span>
                        <span class="radio-inline">
                            <input id="is_psxx2" type="radio" name="is_mdrz" value="2" <?php  if($item['is_mdrz']==2 || empty($item['is_mdrz'])) { ?>checked<?php  } ?> /> 
                            <label for="is_psxx2">关闭</label>
                        </span>
                     
                        
                    </div>
                </div>
             <!--      <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">付费 </label>
                    <div class="col-sm-9">
                        <span class="radio-inline">
                            <input id="is_psxx1" type="radio" name="md_sf" value="1" <?php  if($item['md_sf']==1) { ?>checked<?php  } ?> />
                            <label for="is_psxx1">开启</label>              
                        </span>
                        <span class="radio-inline">
                            <input id="is_psxx2" type="radio" name="md_sf" value="2" <?php  if($item['md_sf']==2 || empty($item['md_sf'])) { ?>checked<?php  } ?> /> 
                            <label for="is_psxx2">关闭</label>
                        </span>
                       
                        
                    </div>
                </div> -->
              <!--    <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">审核类型 </label>
                    <div class="col-sm-9">
                        <span class="radio-inline">
                            <input id="is_psxx1" type="radio" name="md_sh" value="1" <?php  if($item['md_sh']==1) { ?>checked<?php  } ?> />
                            <label for="is_psxx1">手动审核</label>              
                        </span>
                        <span class="radio-inline">
                            <input id="is_psxx2" type="radio" name="md_sh" value="2" <?php  if($item['md_sh']==2 || empty($item['is_mdrz'])) { ?>checked<?php  } ?> /> 
                            <label for="is_psxx2">自动审核</label>
                        </span>
                     
                        
                    </div>
                </div> -->
                   <div class="panel-body">
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">入驻标题</label>
                    <div class="col-sm-9">
                       <input type="text" name="rz_title" class="form-control" value="<?php  echo $item['rz_title'];?>" />
                    </div>
                </div>  
                 <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">入驻描述</label>
                    <div class="col-sm-9">
                         <?php  echo tpl_ueditor('rz_ms',$item['rz_ms']);?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">入驻申请协议</label>
                    <div class="col-sm-9">
                         <?php  echo tpl_ueditor('rz_details',$item['rz_details']);?>
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
        $("#frame-0").show();
        $("#yframe-0").addClass("wyactive");
    })
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>
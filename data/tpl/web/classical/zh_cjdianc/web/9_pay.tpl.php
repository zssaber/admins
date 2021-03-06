<?php defined('IN_IA') or exit('Access Denied');?>﻿<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
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
    <li class="active"><a href="javascript:void(0);">支付配置</a></li>
</ul>
 <div class="main">
    <form action="" method="post" class="form-horizontal form" enctype="multipart/form-data" id="invitative">
        <div class="panel panel-default ygdefault">
            <div class="panel-heading wyheader">
                系统设置&nbsp;>&nbsp;支付配置
            </div>
            <div class="panel-body">
<!--                 <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">自动收货：</label>
                    <div class="col-sm-9">
                       <input type="number" name="day" class="form-control" value="<?php  echo $item['day'];?>" />
                       <div class="ygmargin">*订单发货后，用户收货的天数，如果在期间未确认收货，系统自动完成收货，空为不自动收货</div>
                    </div>
                </div> -->
                 <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">余额支付</label>
                    <div class="col-sm-9">
                        <label class="radio-inline">
                            <input type="radio" id="paywy1" name="is_yuepay" value="1" <?php  if($item2['is_yuepay']==1 || empty($item2['is_yuepay'])) { ?>checked<?php  } ?> />
                            <label for="paywy1">开启</label>
                        </label>
                        <label class="radio-inline">
                            <input type="radio" id="paywy2" name="is_yuepay" value="2" <?php  if($item2['is_yuepay']==2) { ?>checked<?php  } ?> />
                            <label for="paywy2">关闭</label>
                        </label>    
                        <div class="help-block">
                        * 如选择关闭选项，单店开启余额支付无效
                        </div>
                    </div>

                </div>
               <!-- <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启积分支付：</label>
                    <div class="col-sm-9">
                        <label class="radio-inline">
                            <input type="radio" id="yuewy" name="is_jf" value="1" <?php  if($item['is_jf']==1 || empty($item['is_jf'])) { ?>checked<?php  } ?> />
                            <label for="yuewy">开启</label>
                        </label>
                        <label class="radio-inline">
                            <input type="radio" id="yuewy2" name="is_jf" value="2" <?php  if($item['is_jf']==2) { ?>checked<?php  } ?> />
                            <label for="yuewy2">关闭</label>
                        </label>    
                        <div class="help-block">
                        * 如选择关闭选项，单店开启积分支付无效
                        </div>
                    </div>

                </div> -->
             <!--    <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">积分支付比例：</label>
                    <div class="col-sm-9">
                        <input type="text" name="jf_proportion" value="<?php  echo $item['jf_proportion'];?>" id="web_name" class="form-control" />
                        <div class="ygmargin">*例如填10 代表10积分等于1元钱</div>
                    </div>
                </div>  -->
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">小程序支付商户号：</label>
                    <div class="col-sm-9">
                        <input type="text" name="mchid" value="<?php  echo $item['mchid'];?>" id="web_name" class="form-control" />
                        <div class="help-block">
                        * 请输入小程序的商户号
                        </div>
                    </div>
                </div>                
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">小程序支付Api密钥：</label>
                    <div class="col-sm-9">
                        <input type="text" name="wxkey" value="<?php  echo $item['wxkey'];?>" id="web_name" class="form-control" />
                        <div class="help-block">
                        * 请输入小程序的32位支付Api密钥，如出现不能支付或支付时提示id为空，则将密钥重置
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">小程序支付apiclient_cert.pem<?php  if($item['apiclient_cert']) { ?><font color="red">(已上传)</font><?php  } ?>：</label>
                    <div class="col-sm-9">
                        <p class="form-control-static">
                          <textarea name="apiclient_cert" class="form-control" placeholder="为保证安全性, 不显示证书内容. 若要修改, 请直接输入" cols="30" rows="7"></textarea>
                        </p>
                        <div style="color: #999;">*使用文本编辑器打开apiclient_cert.pem文件，将文件的全部内容复制进来</div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">小程序支付apiclient_key.pem<?php  if($item['apiclient_key']) { ?><font color="red">(已上传)</font><?php  } ?>：</label>
                    <div class="col-sm-9">
                        <p class="form-control-static">
                                 <textarea name="apiclient_key" class="form-control" placeholder="为保证安全性, 不显示证书内容. 若要修改, 请直接输入" cols="30" rows="7"></textarea>
                        </p>
                        <div style="color: #999;">*使用文本编辑器打开apiclient_key.pem文件，将文件的全部内容复制进来</div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">IP地址：</label>
                    <div class="col-sm-9">
                        <input type="text" name="ip" value="<?php  if($item['ip']) { ?>******<?php  } ?>" id="web_name" class="form-control" />
                         <div style="color: #999;margin-top: 10px;">*请输入当前站点的服务器ip地址</div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="form-group">
            <input type="submit" name="submit" value="保存设置" class="btn col-lg-3" style="color: white;background-color: #44ABF7;" />
            <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
            <input type="hidden" name="id" value="<?php  echo $item['id'];?>"/>
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
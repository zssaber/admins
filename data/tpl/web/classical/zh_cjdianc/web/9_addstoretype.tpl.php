<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<link rel="stylesheet" type="text/css" href="../addons/zh_cjdianc/template/public/ygcss.css">
<style type="text/css">
    .ygmargin{margin-top: 10px;color: #999;}
</style>
<ul class="nav nav-tabs">
    <span class="ygxian"></span>
    <div class="ygdangq">当前位置:</div>    
    <li><a href="<?php  echo $this->createWebUrl('storetype')?>">门店类型管理</a></li>
    <li class="active"><a href="<?php  echo $this->createWebUrl('addstoretype')?>">添加/编辑门店类型</a></li>
</ul>
<div class="main">
    <form action="" method="post" class="form-horizontal form" enctype="multipart/form-data">
        <div class="panel panel-default ygdefault">
          <div class="ygrow reset">
    <div class="reset_box">
        <font color="red">中途修改平台手续费可能会导致商家余额不正常,解决方法如下：当你中途准备修改商家提成比例时，需在修改之前跟商家结清余额，然后在修改比例，此时商家余额会变得不正常，点击数据清零按钮即可恢复正常（商家->管理->资金管理->财务管理->数据清空）</font>
    </div>

</div>
            <div class="panel-heading wyheader">
                内容编辑
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">类型名称</label>
                    <div class="col-sm-9">
                        <input type="text" name="type_name" class="form-control" value="<?php  echo $info['type_name'];?>" />
                    </div>
                </div>
               <!--  <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">简介</label>
                    <div class="col-sm-9">
                        <input type="text" name="mark" class="form-control" value="<?php  echo $info['mark'];?>" />
                    </div>
                </div> -->
                <!-- <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">链接</label>
                    <div class="col-sm-9">
                        <input type="text" name="link" class="form-control" value="<?php  echo $info['link'];?>" />
                    </div>
                </div> -->
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">图标</label>
                    <div class="col-sm-9">
                        <?php  echo tpl_form_field_image('img', $info['img'])?>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-xs-12 col-sm-3 col-md-2 control-label">外卖平台手续费</label>
                  <div class="col-sm-9">
                        <p class="input-group">
                             <input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')" name="poundage" value="<?php  echo $info['poundage'];?>" id="points" class="form-control" />
                             <span class="input-group-addon">%</span>
                        </p>
                        <div class="ygmargin">*分类下商户收取该分类对应的手续费</div>
                  </div>
                </div>
                          <div class="form-group">
                  <label class="col-xs-12 col-sm-3 col-md-2 control-label">店内平台手续费</label>
                  <div class="col-sm-9">
                        <p class="input-group">
                             <input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')" name="dn_poundage" value="<?php  echo $info['dn_poundage'];?>" id="points" class="form-control" />
                             <span class="input-group-addon">%</span>
                        </p>
                        <div class="ygmargin">*分类下商户收取该分类对应的手续费</div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-xs-12 col-sm-3 col-md-2 control-label">当面平台手续费</label>
                  <div class="col-sm-9">
                        <p class="input-group">
                             <input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')" name="dm_poundage" value="<?php  echo $info['dm_poundage'];?>" id="points" class="form-control" />
                             <span class="input-group-addon">%</span>
                        </p>
                        <div class="ygmargin">*分类下商户收取该分类对应的手续费</div>
                  </div>
                </div>
              <div class="form-group">
                  <label class="col-xs-12 col-sm-3 col-md-2 control-label">预约平台手续费</label>
                  <div class="col-sm-9">
                        <p class="input-group">
                             <input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')" name="yd_poundage" value="<?php  echo $info['yd_poundage'];?>" id="points" class="form-control" />
                             <span class="input-group-addon">%</span>
                        </p>
                        <div class="ygmargin">*分类下商户收取该分类对应的手续费</div>
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-xs-12 col-sm-3 col-md-2 control-label">分销员外卖订单提点</label>
                  <div class="col-sm-9">
                        <p class="input-group">
                             <input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')" name="tg_poundage" value="<?php  echo $info['tg_poundage'];?>" id="points" class="form-control" />
                             <span class="input-group-addon">%</span>
                        </p>
                        <div class="ygmargin">*分销员下级商户流水对应该分类的提点</div>
                  </div>
                </div>
                          <div class="form-group">
                  <label class="col-xs-12 col-sm-3 col-md-2 control-label">分销员店内订单提点</label>
                  <div class="col-sm-9">
                        <p class="input-group">
                             <input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')" name="tg_dnpoundage" value="<?php  echo $info['tg_dnpoundage'];?>" id="points" class="form-control" />
                             <span class="input-group-addon">%</span>
                        </p>
                        <div class="ygmargin">*分销员下级商户流水对应该分类的提点</div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-xs-12 col-sm-3 col-md-2 control-label">分销员当面订单提点</label>
                  <div class="col-sm-9">
                        <p class="input-group">
                             <input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')" name="tg_dmpoundage" value="<?php  echo $info['tg_dmpoundage'];?>" id="points" class="form-control" />
                             <span class="input-group-addon">%</span>
                        </p>
                        <div class="ygmargin">*分销员下级商户流水对应该分类的提点</div>
                  </div>
                </div>
              <div class="form-group">
                  <label class="col-xs-12 col-sm-3 col-md-2 control-label">分销员预约订单提点</label>
                  <div class="col-sm-9">
                        <p class="input-group">
                             <input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')" name="tg_ydpoundage" value="<?php  echo $info['tg_ydpoundage'];?>" id="points" class="form-control" />
                             <span class="input-group-addon">%</span>
                        </p>
                        <div class="ygmargin">*分销员下级商户流水对应该分类的提点</div>
                  </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">排序</label>
                    <div class="col-sm-9">
                        <input type="number" name="num" class="form-control" value="<?php  echo $info['num'];?>" />
                        <div class="ygmargin">*从小到大排序</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <input type="submit" name="submit" value="提交" class="btn col-lg-3" style="color: white;background-color: #44ABF7;"/>
            <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
            <input type="hidden" name="id" value="<?php  echo $info['id'];?>" />
        </div>
    </form>
</div>
<script type="text/javascript">
    $(function(){
        // $("#frame-4").addClass("in");
        $("#frame-4").show();
        $("#yframe-4").addClass("wyactive");
    })
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>

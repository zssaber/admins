<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<style>
.panel-default>.wyheader{font-weight: bold;background-color: #F3F3F3;}
  .chongzhi{margin-bottom: 10px;height: 35px;padding: 0px;}
  .ygminp,.man2,.man,.man3,.money,.money2{
    float: left;
    border:1px solid #eee;
    height: 35px;
    line-height: 35px;
    margin-left: 0px;
    margin-right: 0px;
    background-color: white;
  }
  .man{
    padding: 0px 12px;
    text-align: center;
    background-color: #f2f2f2;
  }
  .man3{
    padding: 0px 5px;
    width: 100px;
    background-color: #f2f2f2;
  }
  .man3>span{float: right;}
  .man2{
    width: 130px;
    padding: 0px 12px;
    text-align: center;
  }
  .man4{
    float: left;
    height: 34px;
    border-radius: 0px;
    line-height: 20px;
  }
  .money{
    width: 60%;
    text-indent: 1em;
  }
  .money2{
    width: 70%;
    text-indent: 1em;
  }
  .ygminp{
    padding: 0 15px;
  }
  .shanchu{
    color: white;
    background-color: #ED5565;
    cursor: pointer;
  }
  .fa-plus{margin-right: 5px;}
  .tianj1{
    cursor: pointer;
  }
  .formbox1{border:1px solid #eee;padding-top: 20px;padding-bottom: 20px;background-color: #f2f2f2;margin-top: 10px;margin-bottom: 10px;}
  .sizecon{
    display: none;
  }
  .sizetop{
    color: #666;
    line-height: 20px;
  }
  .sizetop .size{
    height: 20px;
    line-height: 20px;
  }
  .sizetop .size input{
    margin-right:5px; 
    float: left;
  }
  .sizetop p{
    color: #999;
  }
  .explain{
    display: none;
    border-radius: 5px;
    color: #00c1de;
    background-color: #dff6fa;
    border:1px solid #c1e7ee;
    padding-top: 10px;
    margin-bottom: 15px;
  }
  .yginter,.table2{padding: 0px;}
  .guigebox>.form-group{margin-bottom: 8px;}
  .addgui{margin: 20px 0;}
  .table{background-color: #F2F2F2;font-size: 12px;}
  .table>thead>tr{background-color: #eae9e9;}
  .table>thead>tr>th{padding: 5px;vertical-align: middle;text-align: left;min-width: 68px;border:none;}
  .table>tbody>tr>td{border:none;padding: 5px;vertical-align: middle;}
  .kucun{text-align: center;padding-bottom: 10px;}
  .input-group-addon{background-color: white;}
  .disbtn{border:none;background-color: #F2F2F2;}
  #lv_table_con{padding: 0px;margin-top: 20px;}
  .xiainp1,.xiainp2{font-weight: normal;}
  .shcg,.czcg{
    position: fixed;
    top: 10px;
    left: 10%;
    display: none;
    z-index: 100;
  }
  .table .disbtn,.table>thead>tr>.guigebig{text-align: center;}
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
<link rel="stylesheet" type="text/css" href="../addons/zh_cjdianc/template/public/ygcss.css">
<div class="nav_box col-md-1">
    <ul class="left_nav">
    <!--     <span class="ygxian"></span>
        <div class="ygdangq">当前位置:</div>  -->   
      <li><a href="<?php  echo $this->createWebUrl2('dldishes2')?>">商品列表</a></li>
      <li class="active"><a href="javascript:void(0);">添加/编辑商品</a></li> 
    </ul>
</div>
<!-- <ul class="nav nav-tabs">
    <span class="ygxian"></span>
    <div class="ygdangq">当前位置:</div>
    <li><a href="<?php  echo $this->createWebUrl2('dldishes2')?>">商品列表</a></li>
    <li class="active"><a href="javascript:void(0);">添加/编辑商品</a></li>    
</ul> -->
 <input type="hidden" name="storeid" value="<?php  echo $storeid;?>">
<div class="main">
    <form action="" method="post" class="form-horizontal form" enctype="multipart/form-data">
        <div class="panel panel-default ygdefault">
            <div class="panel-heading wyheader">
                内容编辑
            </div>
            <div class="panel-body">
                <div class="col-md-12 czcg">
                  <div class="col-md-8 col-md-push-2 btn btn-sm btn-success">操作成功！</div>
                </div>
                <div class="col-md-12 shcg">
                  <div class="col-md-8 col-md-push-2 btn btn-sm btn-danger">删除成功！</div>
                </div>
                 <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label" style="margin-right: 15px;">商品分类</label>
                    <select class="col-sm-8" id="onefenlei">
                        <?php  if(is_array($type)) { foreach($type as $key => $item) { ?>
                        <?php  if($item['id']==$info['type_id']) { ?>
                        <option value="<?php  echo $item['id'];?>" selected="selected"><?php  echo $item['type_name'];?></option>
                        <?php  } else { ?>
                        <option value="<?php  echo $item['id'];?>" ><?php  echo $item['type_name'];?></option>
                        <?php  } ?>
                        
                        <?php  } } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label" style="margin-right: 15px;">打印标签</label>
                    <select class="col-sm-8" id="printing_label">
                        <?php  if(is_array($dytag)) { foreach($dytag as $key => $item2) { ?>
                        <?php  if($item2['id']==$info['label_id']) { ?>
                        <option value="<?php  echo $item2['id'];?>" selected="selected"><?php  echo $item2['tag_name'];?></option>
                        <?php  } else { ?>
                        <option value="<?php  echo $item2['id'];?>" ><?php  echo $item2['tag_name'];?></option>
                        <?php  } ?>
                        
                        <?php  } } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label" style="margin-right: 15px;">商品类型</label>
                    <select class="col-sm-8" name="type" id="shop_state">
                      <option value="1" <?php  if($info['type']==1) { ?> selected="selected"<?php  } ?>>外卖</option>
                      <option value="2" <?php  if($info['type']==2) { ?> selected="selected"<?php  } ?>>店内</option>
                      <option value="3" <?php  if($info['type']==3) { ?> selected="selected"<?php  } ?>>店内+外卖</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">排序</label>
                    <div class="col-sm-9">
                        <input type="number" name="num" class="form-control" value="<?php  echo $info['num'];?>" id="numpai" />
                        <span class="help-block">*从小到大排序</span>
                    </div>
                </div>  
                <div class="form-group">
                    <label class="col-md-2 control-label">商品名称</label>
                    <div class="col-sm-9">
                        <input type="text" name="name" id="goodname" class="form-control" value="<?php  echo $info['name'];?>" />
                    </div>
                </div>                                       
                <div class="form-group">
                    <label class="col-md-2 control-label">商品logo</label>
                    <div class="col-sm-9">
                        <?php  echo tpl_form_field_image('logo', $info['logo'])?>
                        <span class="help-block">* 建议尺寸大小:180*180</span>
                    </div>
                </div>  
                <div class="form-group">
                    <label class="col-md-2 control-label">商品库存</label>
                    <div class="col-sm-9">
                        <input type="text" id="flstock" name="inventory" class="form-control" value="<?php  echo $info['inventory'];?>" />
                    </div>
                </div> 
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">外卖价格</label>
                    <div class="col-sm-10">
                        <div class="col-md-10 chongzhi">
                     
                            <div class="man col-md-1"><span>售价</span></div>
                            <input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')" id="flshou" name="money" value="<?php  echo $info['money'];?>" class="ygminp inp1
                              col-md-2">
                            <div class="man3 col-md-1">元 
                              <span>原价</span>
                           </div>
                            <input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')"  id="money2" name="money2" value="<?php  echo $info['money2'];?>" class="ygminp inp1  col-md-2" id="flyuan">
                            <div class="man3 col-md-1">元 
                              <span>会员价</span>
                           </div>
                            <input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')" id="vip_money" name="vip_money" value="<?php  echo $info['vip_money'];?>" class="ygminp inp1  col-md-2" id="flyuan">
                           <div class="man col-md-1">元</div>
                       </div>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">店内价格</label>
                    <div class="col-sm-10">
                        <div class="col-md-10 chongzhi">
                            <div class="man col-md-1"><span>售价</span></div>
                            <input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')"  id="dn_money" name="dn_money"  value="<?php  echo $info['dn_money'];?>" class="ygminp inp1  col-md-2" id="flyuan"/>
                            <div class="man3 col-md-1">元 
                              <span>会员价</span>
                           </div>
                            <input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')" id="dn_hymoney" name="dn_hymoney" value="<?php  echo $info['dn_hymoney'];?>" class="ygminp inp1  col-md-2" id="flyuan">
                           <div class="man col-md-1">元</div>
                       </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">餐盒费</label>
                    <div class="col-sm-9">
                        <input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')" id="box_money" name="box_money" class="form-control" value="<?php  echo $info['box_money'];?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">限购(份)</label>
                    <div class="col-sm-9">
                        <input type="number" id="restrict_num" name="sales" class="form-control" value="<?php  echo $info['restrict_num'];?>" />
                        <span class="help-block">*设置商品每单只能买多少份(仅限外卖和无规格商品)</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">起售(份)</label>
                    <div class="col-sm-9">
                        <input type="number" id="start_num" name="sales" class="form-control" value="<?php  echo $info['start_num'];?>" />
                        <span class="help-block">*设置商品至少多少份起售(仅限外卖和无规格商品)</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">简介</label>
                    <div class="col-sm-9">
                        <input type="text" id="content" name="content" class="form-control" value="<?php  echo $info['content'];?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">商品详情</label>
                    <div class="col-sm-10">
                    <?php  echo tpl_ueditor('details',$info['details']);?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">状态</label>
                    <div class="col-sm-9">
                        <label class="radio-inline">
                            <input type="radio" id="emailwy1" name="is_show" value="1" <?php  if($info['is_show']==1) { ?>checked<?php  } ?> />
                            <label for="emailwy1">上架</label>
                        </label>
                        <label class="radio-inline">
                            <input type="radio" id="emailwy2" name="is_show" value="2" <?php  if($info['is_show']==2 || empty($info['is_show'])) { ?>checked<?php  } ?> />
                            <label for="emailwy2">下架</label>
                        </label>
                    </div>
                </div>
               <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">属性</label>
                    <div class="col-sm-9">
                    <?php  if($info['is_hot']==1) { ?>
                        <label class="radio-inline" style="padding-top: 5px;padding-left: 0">
                            <input type="checkbox" id="emailwy3" name="hot" value="1" style="float:left;margin-right: 5px" checked/>
                            <label for="emailwy3">热销</label>
                        </label>
                    <?php  } else { ?>
                    <label class="radio-inline" style="padding-top: 5px;padding-left: 0">
                            <input type="checkbox" id="emailwy3" name="hot" value="1" style="float:left;margin-right: 5px"/>
                            <label for="emailwy3">热销</label>
                        </label>
                    <?php  } ?>
                    <?php  if($info['is_tj']==1) { ?>
                        <label class="radio-inline"  style="padding-top: 5px;padding-left: 0">
                            <input type="checkbox" id="emailwy4" name="is_recommend" value="1" style="float:left;margin-right: 5px" checked/>
                            <label for="emailwy4">推荐</label>
                        </label>
                    <?php  } else { ?>
                    <label class="radio-inline"  style="padding-top: 5px;padding-left: 0">
                            <input type="checkbox" id="emailwy4" name="is_recommend" value="1" style="float:left;margin-right: 5px"/>
                            <label for="emailwy4">推荐</label>
                        </label>
                    <?php  } ?>
                    <?php  if($info['is_new']==1) { ?>
                        <label class="radio-inline"  style="padding-top: 5px;padding-left: 0">
                            <input type="checkbox" id="emailwy5" name="is_new" value="1" style="float:left;margin-right: 5px" checked/>
                            <label for="emailwy5">新品</label>
                        </label>
                    <?php  } else { ?>
                    <label class="radio-inline"  style="padding-top: 5px;padding-left: 0">
                            <input type="checkbox" id="emailwy5" name="is_new" value="1" style="float:left;margin-right: 5px"/>
                            <label for="emailwy5">新品</label>
                        </label>
                    <?php  } ?>
                    <?php  if($info['is_zp']==1) { ?>
                        <label class="radio-inline"  style="padding-top: 5px;padding-left: 0">
                            <input type="checkbox" id="emailwy6" name="is_zp" value="1" style="float:left;margin-right: 5px" checked/>
                            <label for="emailwy6">招牌</label>
                        </label>
                    <?php  } else { ?>
                    <label class="radio-inline"  style="padding-top: 5px;padding-left: 0">
                            <input type="checkbox" id="emailwy6" name="is_zp" value="1" style="float:left;margin-right: 5px"/>
                            <label for="emailwy6">招牌</label>
                        </label>
                    <?php  } ?>
                    </div>
                </div>
<!--                   <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">招牌</label>
                    <div class="col-sm-9">
                        <label class="radio-inline">
                            <input type="radio" id="emailwy5" name="is_zp" value="1" <?php  if($info['is_zp']==1) { ?>checked<?php  } ?> />
                            <label for="emailwy5">是</label>
                        </label>
                        <label class="radio-inline">
                            <input type="radio" id="emailwy6" name="is_zp" value="2" <?php  if($info['is_zp']==2 || empty($info['is_zp'])) { ?>checked<?php  } ?> />
                            <label for="emailwy6">否</label>
                        </label>
                    </div>
                </div> -->
                <div class="panel-body" style="padding: 20px 15px;">
            <div class="form-group sizetop"> 
                <label for="check" class="size"><input type="checkbox" name="checkbox" id="checktype">启用商品规格<input type="hidden" name="" class="checkval" value="<?php  echo $info['is_gg'];?>"></label>
                <p>启用商品规格后，商品的价格及库存以商品规格为准,库存设置为0则会到”已售罄“中，手机也不会显示, -1为不限制</p>
            </div>
            <div class="col-md-12 explain">
                <p>1.添加更改规格及规格项后请点击下方的【刷新规格项目表】来更新数据。</p>
                <p>2. 每一种规格代表不同型号，例如颜色为一种规格，尺寸为一种规格，如果设置多规格，手机用户必须每一种规格都选择一个规格项，才能添加购物车或购买。</p>
                <p>3.最多只能添加三个规格</p>
            </div>

<div class="sizecon">
  <div class="control-group col-md-12" style="margin-bottom: 10px;">
    <div class="col-md-12">
        <!-- <button id="add_lv1" class="btn btn-primary" type="button">添加规格项</button>
        <button id="update_table" class="btn btn-success" type="button">刷新规格项目表</button> -->
        <div class="tianj1 col-md-2 btn storeblue" id="add_lv1">
            <span class="fa fa-plus"></span>添加一个规格
        </div>
        <div class="col-md-2 btn storeblue col-md-offset-1" id="update_table">
            <span class="fa fa-refresh"></span>刷新规格项目表
        </div>
    </div>
  </div>
  <div id="lv_table_con" class="control-group col-md-12" style="display: none;">
      <div class="controls">
          <div id="lv_table">
              
          </div>
      </div>
  </div>
<div>
    <!-- <div style="margin-top: 30px;" class="btn btn-md btn-success" id="savebtn">保存商品</div> -->
</div>
                </div>
                 
            </div>
        </div>
            </div>
        </div>
        <div class="form-group">
        <input type="hidden" name="good_id" value="<?php  echo $info['id'];?>">
        <input type="hidden" name="is_gg" value="<?php  echo $info['is_gg'];?>">
            <input type="button" id="savebtn" name="submit" value="提交" class="btn col-lg-3" style="color: white;background-color: #44ABF7;"/>
        </div>
    </form>

</div>
<script type="text/javascript">

    // 获取商品类型
    // var shop_state = $("#shop_state option:selected").val()
    // console.log('获取商品默认的类型')
    // console.log(shop_state)
    // $("#shop_state").change(function(){
    //   console.log("aaa")
    //   var shop_state_type=$("#shop_state option:selected").val()
    //   console.log(shop_state_type)
    // })
    // console.log(shop_state_type)
   
    var namenum = 0;
    var lv2HTML = '<div class="col-md-4 chongzhi smname" id="namenum_'+namenum+'">' +
            '<div class="ygminp">规格</div>'+
                    '<input type="text" name="lv2" placeholder="参数名称" class="smallshu ygminp">' +
                    '<button class="man shanchu remove_lv2" type="button"><span class="fa fa-times"></span></button>' +
                '</div>';
    $(function(){
      var is_gg = $("input[name='is_gg']").val();
      var good_id = $("input[name='good_id']").val();
      console.log("good_id商品的id是："+good_id);
      console.log("is_gg是否开启规格："+is_gg);
      if(is_gg==2){
          $(".sizecon").show();
          $(".size").children("#checktype").attr('checked',"false");
          $(".explain").show(); 
          $('#lv_table_con').show();
          // $("#lv_table_con").show()
      $.ajax({
          type:"post",
          url:"<?php  echo $_W['siteroot'];?>/app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&do=GoodInfo&m=zh_cjdianc",
          dataType:"text",
          data:{good_id:good_id},
          success:function(data){
            // console.log(data)
              var data = eval('(' + data + ')');
              // console.log("数据");
              console.log(data.combination);
              if(data.spec.length>0){
                for (var i = 0; i < data.spec.length; i++) {
                  $("#add_lv1").parents('.control-group').eq(0).before('<div class="control-group col-md-12 lv1 formbox1" id="'+data.spec[i].id+'">' +
                      '<div class="controls col-md-12 chongzhi">' +
                          '<input type="text" name="lv1" placeholder="规格名称" class="money2 gtype guigenum'+i+'" value="'+data.spec[i].sepc_name+'">' +
                            '<button class="btn btn-info man4 add_lv2" type="button">'+
                            '<span class="fa fa-plus"></span>添加规格</button>' +
                            '<button class="man shanchu remove_lv1" type="button"><span class="fa fa-times"></span></button>' +                     
                      '</div>' +
                      '<div class="controls col-md-12 lv2s boxbig_'+i+'"></div>' +
                  '</div>');
                  // console.log("小规格的长度："+data.spec[i].sepc_val.length)
                  for(var j=0;j<data.spec[i].sepc_val.length;j++){
                    $(".boxbig_"+i).append('<div class="col-md-4 chongzhi" id="'+data.spec[i].sepc_val[j].id+'">' +
                    '<div class="ygminp">规格</div>'+
                      '<input type="text" name="lv2" placeholder="参数名称" class="smallshu ygminp">' +
                      '<button class="man shanchu remove_lv2" type="button"><span class="fa fa-times"></span></button>' +
                    '</div>');
                    $(".boxbig_"+i).children().children(".smallshu").eq(j).val(data.spec[i].sepc_val[j].name);
                  }
                  
                }
              

              var tableHTML = '';
              tableHTML += '<table class="table table-bordered">';
              tableHTML += '<thead>';
              tableHTML += '<tr>';
              for (var i = 0; i < data.spec.length; i++) {
                  tableHTML += '<th width="50" class="guigebig">' + data.spec[i].sepc_name + '</th>';
              }
              tableHTML += '<th><div class="kucun">库存</div>\
                                <div class="input-group">\
                                    <input type="" name="" class="form-control input-sm xiainp1">\
                                    <a href="javascript:void(0);" class="addxiala1 input-group-addon" title="批量设置">\
                                      <span class="fa fa-angle-double-down"></span>\
                                    </a>\
                                </div></th>';
              tableHTML += '<th><div class="kucun">外卖价格</div>\
                                <div class="input-group">\
                                    <input type="" name="" class="form-control input-sm xiainp2">\
                                    <a href="javascript:void(0);" class="addxiala2 input-group-addon" title="批量设置">\
                                      <span class="fa fa-angle-double-down"></span>\
                                    </a>\
                                </div></th>';
            tableHTML += '<th><div class="kucun">店内价格</div>\
                              <div class="input-group">\
                                  <input type="" name="" class="form-control input-sm xiainp3">\
                                  <a href="javascript:void(0);" class="addxiala3 input-group-addon" title="批量设置">\
                                    <span class="fa fa-angle-double-down"></span>\
                                  </a>\
                              </div></th>';
              tableHTML += '</tr>';
              tableHTML += '</thead>';
              tableHTML += '<tbody>';
              
              // console.log("数据");
              // console.log(data.combination);
              for (var p = 0; p < data.combination.length; p++) {

                  tableHTML += '<tr data-row="' + (p+1) + '" class="contr trlen_'+p+'" id="'+data.combination[p].id+'">';                
                  var small = data.combination[p].combination.split(',')
                  // console.log(small);
                  for(var r=0;r<small.length;r++){
                    // console.log(small[r]);
                    tableHTML += '<td width="50" class="smallzhi'+(r+1)+'" data-rc="' + (p+1) + '_' + (r+1) + '"><input class="disbtn" type="text" value="' + small[r] + '" disabled="disabled"/></td>';
                  }                
                  tableHTML += '<td class="priceinp"><input class="form-control stockinp" type="text" name="stock" value="'+data.combination[p].number+'"/></td>';
                  tableHTML += '<td class="priceinp"><input class="form-control priceinp" type="text" name="saleprice" value="'+data.combination[p].wm_money+'"/></td>';
                   tableHTML += '<td class="priceinp"><input class="form-control priceinps" type="text" name="cost" value="'+data.combination[p].dn_money+'"/></td>';
                  tableHTML += '</tr>';
              }
              tableHTML += '</tbody>';
              tableHTML += '</table>';
               
              $('#lv_table_con').show();
              $('#lv_table').html(tableHTML);
              }
          }
      })
      }else if(is_gg==1){
          $(".sizecon").hide();
          $(".size").children("#checktype").is('');
          $(".explain").hide();
      }

        // $("#frame-8").addClass("in");
        $("#frame-2").show();
        $("#yframe-2").addClass("wyactive");

        //点击启用实现下拉        
        $(".size").click(function(){          
            var status=$(this).children("#checktype").is(':checked');
            // console.log(status)
            if(status==true){
                $(".checkval").val(2);
                $(".sizecon").show();
                $(this).children("#checktype").attr('checked',"false");
                $(".explain").show();
            }else if(status==false){
                $(".checkval").val(1);
                $(".sizecon").hide();
                $(this).children("#checktype").attr('checked',"true");
                $(".explain").hide();
            }
        })

        $('#add_lv1').on('click', function() {
          // console.log("列表的长度"+$(".formbox1").length)
          var num = $(".formbox1").length;
            $(".guigenum").val(num);
            var last = $('.control-group.lv1:last');
            if(num>=4){
                alert("只能添加三个规格")
            }else if (!last || last.length == 0) {
                $(this).parents('.control-group').eq(0).after('<div class="control-group col-md-12 lv1 formbox1">' +
                    '<div class="controls col-md-12 chongzhi">' +
                        '<input type="text" name="lv1" placeholder="规格名称" class="money2 gtype guigenum'+num+'">' +
                          '<button class="btn btn-info man4 add_lv2" type="button">'+
                          '<span class="fa fa-plus"></span>添加规格</button>' +
                          '<button class="man shanchu remove_lv1" type="button"><span class="fa fa-times"></span></button>' +               
                    '</div>' +
                    '<div class="controls col-md-12 lv2s boxbig_'+num+'"></div>' +
                '</div>');
            }else {
                last.after('<div class="control-group col-md-12 lv1 formbox1">' +
                    '<div class="controls col-md-12 chongzhi">' +
                        '<input type="text" name="lv1" placeholder="规格名称" class="money2 gtype guigenum'+num+'">' +
                          '<button class="btn btn-info man4 add_lv2" type="button">'+
                          '<span class="fa fa-plus"></span>添加规格</button>' +
                          '<button class="man shanchu remove_lv1" type="button"><span class="fa fa-times"></span></button>' +                     
                    '</div>' +
                    '<div class="controls col-md-12 lv2s boxbig_'+num+'"></div>' +
                '</div>');
            }
            num++;
        });

        var scid = [];
        $(document).on('click', '.remove_lv1', function() {                   
          var bigidone = $(this).parents('.lv1').attr("id");
          scid.push({"id":bigidone});
          // console.log(scid);
          $(this).parents('.lv1').remove();
          shualist();
        });
        
        $(document).on('click', '.add_lv2', function() {
          $(this).parents('.lv1').find('.lv2s').append('<div class="col-md-4 chongzhi smname" id="namenum_'+namenum+'">' +
            '<div class="ygminp">规格</div>'+
                    '<input type="text" name="lv2" placeholder="参数名称" class="smallshu ygminp">' +
                    '<button class="man shanchu remove_lv2" type="button"><span class="fa fa-times"></span></button>' +
                '</div>');
            namenum++;
        });

        var smallid = [];
        $(document).on('click', '.remove_lv2', function() {
          var bigidone = $(this).parents().attr("id")
          smallid.push({"id":bigidone});
          // console.log(smallid);
          $(this).parent().remove();
          shualist();
        });

        function shualist(){
          var lv1Arr = $('input[name="lv1"]');
            if (!lv1Arr || lv1Arr.length == 0) {
                $('#lv_table_con').hide();
                $('#lv_table').html('');
                return;
            }
            for (var i = 0; i < lv1Arr.length; i++) {
                var lv2Arr = $(lv1Arr[i]).parents('.lv1').find('input[name="lv2"]');
                if (!lv2Arr || lv2Arr.length == 0) {
                    alert('请先删除无参数的规格项！');
                    return;
                }
            }
          var tableHTML = '';
            tableHTML += '<table class="table table-bordered">';
            tableHTML += '<thead>';
            tableHTML += '<tr>';
            for (var i = 0; i < lv1Arr.length; i++) {
                tableHTML += '<th width="50" class="guigebig">' + $(lv1Arr[i]).val() + '</th>';
            }
            tableHTML += '<th><div class="kucun">库存</div>\
                              <div class="input-group">\
                                  <input type="" name="" class="form-control input-sm xiainp1">\
                                  <a href="javascript:void(0);" class="addxiala1 input-group-addon" title="批量设置">\
                                    <span class="fa fa-angle-double-down"></span>\
                                  </a>\
                              </div></th>';
            tableHTML += '<th><div class="kucun">外卖价格</div>\
                              <div class="input-group">\
                                  <input type="" name="" class="form-control input-sm xiainp2">\
                                  <a href="javascript:void(0);" class="addxiala2 input-group-addon" title="批量设置">\
                                    <span class="fa fa-angle-double-down"></span>\
                                  </a>\
                              </div></th>';
            tableHTML += '<th><div class="kucun">店内价格</div>\
                              <div class="input-group">\
                                  <input type="" name="" class="form-control input-sm xiainp3">\
                                  <a href="javascript:void(0);" class="addxiala3 input-group-addon" title="批量设置">\
                                    <span class="fa fa-angle-double-down"></span>\
                                  </a>\
                              </div></th>';
            tableHTML += '</tr>';
            tableHTML += '</thead>';
            tableHTML += '<tbody>';
             
            var numsArr = new Array();
            var idxArr = new Array();
            for (var i = 0; i < lv1Arr.length; i++) {
                numsArr.push($(lv1Arr[i]).parents('.lv1').find('input[name="lv2"]').length);
                idxArr[i] = 0;
            }
             
            var len = 1;
            var rowsArr = new Array();
            for (var i = 0; i < numsArr.length; i++) {
                len = len * numsArr[i];
                 
                var tmpnum = 1;
                for (var j = numsArr.length - 1; j > i; j--) {
                    tmpnum = tmpnum * numsArr[j];
                }
                rowsArr.push(tmpnum);
            }
             
            for (var i = 0; i < len; i++) {
                tableHTML += '<tr data-row="' + (i+1) + '" class="contr trlen_'+i+'">';                 
                var name = '';
                for (var j = 0; j < lv1Arr.length; j++) {
                    var n = parseInt(i / rowsArr[j]);
                    if (j == 0) {
                    } else if (j == lv1Arr.length - 1) {
                        n = idxArr[j];
                        if (idxArr[j] + 1 >= numsArr[j]) {
                            idxArr[j] = 0;
                        } else {
                            idxArr[j]++;
                        }
                    } else {
                        var m = parseInt(i / rowsArr[j]);
                        n = m % numsArr[j];
                    }
                     
                    var text = $(lv1Arr[j]).parents('.lv1').find('input[name="lv2"]').eq(n).val();
                    if (j != lv1Arr.length - 1) {
                        name += text + '_';
                    } else {
                        name += text;
                    }
                        tableHTML += '<td width="50" class="smallzhi'+(j+1)+'" data-rc="' + (i+1) + '_' + (j+1) + '"><input class="disbtn" type="text" value="' + text + '" disabled="disabled"/></td>';
                }
                 
                tableHTML += '<td class="priceinp"><input class="form-control stockinp" type="text" name="' + name + 'stock" /></td>';
                tableHTML += '<td class="priceinp"><input class="form-control priceinp" type="text" name="' + name + 'saleprice" /></td>';
                tableHTML += '<td class="priceinp"><input class="form-control priceinps" type="text" name="' + name + 'cost" /></td>';
                tableHTML += '</tr>';
            }
            tableHTML += '</tbody>';
            tableHTML += '</table>';             
            $('#lv_table_con').show();
            $('#lv_table').html(tableHTML);
        }


        $('#update_table').on('click', function() {
            shualist();
        });   

        $("#savebtn").on('click', function(){          
           var checkval = $(".checkval").val();          
          var fenlei = $('#onefenlei option:selected').val();
          var numpai = $("#numpai").val();
          var restrict_num = $("#restrict_num").val();
          var start_num = $("#start_num").val();
          var money2 = $("#money2").val();
          var vip_money = $("#vip_money").val();
          var goodname = $("#goodname").val();
          var box_money = $("#box_money").val();
          var dn_money = $("#dn_money").val();
          var content = $("#content").val();
          var logo = $("input[name='logo']").val();
          var storeid = $("input[name='storeid']").val();
          var huanurl= new Array();
          for(var h=0;h<$('.multi-item').length;h++){
              
              huanurl[h] = $('.multi-item').children("input").eq(h).val();
          }
          // console.log(huanurl);//幻灯片
          
          var flxiao = $("#flxiao").val();
          var flstock = $("#flstock").val();
          var flshou = $("#flshou").val();
          var flyuan = $("#flyuan").val();
          $album1 = $(window.frames["ueditor_0"].document);
          var viewval = $(document.getElementById('ueditor_0').contentWindow.document.body).html();
          var statu = $('input[name="is_show"]:checked').val();
          console.log("状态"+statu)

          // obj = document.getElementsByName("checkbox");
          //     check_val = [];
          //     for(k in obj){
          //         if(obj[k].checked)
          //             check_val.push(obj[k].value);
          //     }
          //     var is_hot=check_val.toString()
          var is_hot = $('input[name="hot"]:checked').val();
          console.log("热销"+is_hot)
          var is_recommend = $('input[name="is_recommend"]:checked').val();
          console.log("推荐"+is_recommend)
          var is_new = $('input[name="is_new"]:checked').val();
          console.log("新品"+is_new)

          var is_zp = $('input[name="is_zp"]:checked').val();
          console.log("招牌"+is_zp)

          // console.log("是否启用商品的值："+checkval);
          // console.log("大分类的值："+fenlei);
          // console.log("二级分类的值："+erflval);
          // console.log("排序的值："+numpai);
          console.log("商品名称的值："+goodname);
          console.log("商品logo的值："+logo);
          // console.log("商品库存的值："+flstock);
          // console.log("商品销量的值："+flxiao);          
          // console.log("售价的值："+flshou);
          // console.log("原价的值："+flyuan);
          // console.log("富文本里面的值："+viewval);
          // console.log("状态的值："+statu);
		  var title = ''
          	if(goodname==''){
          		title = '请输入商品名称'
          	}else if(logo==''){
          		title = '请上传商品logo'
          	}else if(flstock==''){
				title = '请输入商品库存'
          	}else if(flxiao==''){
          		title = '请输入商品销量'
          	}else if(flshou==''){
          		title = '请输入售价'
          	}else if(flyuan==''){
          		title = '请输入原价'
          	}else if(dn_money==''){
          		title = '请输入店内价格'
          	}
           // 获取打印标签的id
            var con=$("#printing_label option:selected").val()
            // console.log('获取打印标签默认的id')
            // console.log(con)
        
            // 获取商品类型
             var shop_state = $("#shop_state option:selected").val()
              // console.log('获取商品默认的类型')
              // console.log(shop_state)
            var list = [];
            for(var i = 0;i<$(".lv1").length;i++){
                var color = $(".gtype").eq(i).find($(".gtype")).val();
                // var coid = $(".lv1").eq(i).find($(".lv1")).attr("id");                
                var obj = {};
                obj.color = $(".gtype").eq(i).val();
                obj.coid = $(".lv1").eq(i).attr("id");
                 if(obj.coid==null){
                  obj.coid= ''
                }
                obj.ggarr=[];
                for(var k=0;k<$(".boxbig_"+i).children().length;k++){
                    var guigebig = $(".boxbig_"+i).children().children(".smallshu").eq(k).val();
                    var shuju = {};
                    shuju.guigebig = $(".boxbig_"+i).children().children(".smallshu").eq(k).val();
                    shuju.shuid = $(".boxbig_"+i).children(".chongzhi").eq(k).attr("id");
                    obj.ggarr.push(shuju);
                }
                
                list.push(obj);
            }
            console.log('一级列表')
            console.log(list);
            var menu = [];
            // console.log($(".contr").length);            
            for(var j=0;j<$(".contr").length;j++){
                var val = {};
                val.id = $(".contr").eq(j).attr("id");
                if(val.id==null){
                  val.id= ''
                }
                val.biao=[];
                for(var t=0;t<$(".trlen_"+j).children("td").length;t++){
                    var price = {};
                    price.inpval = $(".trlen_"+j).children("td").eq(t).children("input").val();
                    val.biao.push(price)
                }
                menu.push(val);
            }
            
            console.log(menu);
            if(title!=''){
              alert(title)
            }else if(Number(start_num)>Number(restrict_num) && Number(start_num)!=0 && Number(restrict_num)!=0){
                alert("起售不能大于限购")
            }else{
               if(good_id==''){//如果good是空的就调用添加接口
              $.ajax({
                type:"post",
                 url:"<?php  echo $_W['siteroot'];?>/app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&do=AddGood&m=zh_cjdianc",
                dataType:"text",
                data:{                  
                  storeid:storeid,
                  checkval:checkval,//是否启用商品的值
                  fenlei:fenlei,//分类的值：
                  numpai:numpai,//商品名称的值：
                  goodname:goodname,//商品名称的值：
                  logo:logo,//商品logo的值：
                  flstock:flstock,//商品库存的值：
                  flxiao:flxiao,//商品销量的值：
                  flshou:flshou,//售价的值：
                  flyuan:flyuan,//原价的值：
                  viewval:viewval,//富文本里面的值：
                  statu:statu,//状态的值：
                  list:list,//列表的值
                  menu:menu, //组合列表的值
                  is_hot:is_hot, //热销
                  restrict_num:restrict_num, //限购
                  start_num:start_num, //起售
                  is_recommend:is_recommend,//推荐
                  is_new:is_new, //新品
                  is_zp:is_zp,//招牌                  
                  con:con, //打印标签
                  shop_state:shop_state, //商品类型
                  money2:money2, //原价
                  vip_money:vip_money, //vip价格
                  box_money:box_money, //餐盒费
                  dn_money:dn_money, //店内价格
                  content:content, //简介
                },
                success:function(data){
                    // var data = eval('(' + data + ')');
                     console.log(data);
                    $(".czcg").fadeIn()
                    setTimeout(function(){
                        $(".czcg").fadeOut();
                        history.go(-1);location.reload();
                    },1500)
                }
              })
            }else{//如果good是有值的就调用修改接口
              $.ajax({
                type:"post",
                url:"<?php  echo $_W['siteroot'];?>/app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&do=UpdGood&m=zh_cjdianc",
                dataType:"text",
                data:{
                  box_money:box_money, //餐盒费
                  dn_money:dn_money, //店内价格
                  content:content, //简介
                  money2:money2, //原价
                  vip_money:vip_money, //vip价格
                  con:con, //打印标签
                  shop_state:shop_state, //商品类型
                  is_hot:is_hot, //热销
                   is_recommend:is_recommend,//推荐
                  is_new:is_new, //新品
                  is_zp:is_zp, //招牌
                   restrict_num:restrict_num, //限购
                  start_num:start_num, //起售
                  scid:scid,//大规格的id
                  smallid:smallid,//小规格的id
                  good_id:good_id,//商品id
                  storeid:storeid,
                  checkval:checkval,//是否启用商品的值
                  fenlei:fenlei,//分类的值：
                  numpai:numpai,//商品名称的值：
                  goodname:goodname,//商品名称的值：
                  logo:logo,//商品logo的值：
                  flstock:flstock,//商品库存的值：
                  flxiao:flxiao,//商品销量的值：
                  flshou:flshou,//售价的值：
                  flyuan:flyuan,//原价的值：
                  viewval:viewval,//富文本里面的值：
                  statu:statu,//状态的值：
                  list:list,//列表的值
                  menu:menu, //列表的值
                },
                success:function(data){
                    // var data = eval('(' + data + ')');
                    console.log(data);
                    $(".czcg").fadeIn()
                    setTimeout(function(){
                        $(".czcg").fadeOut();
                        history.go(-1);location.reload();
                    },1500)
                }
              })
            }
            }
        })

        $(document).on('click', '.addxiala1', function() {
            var xiaval = $(".xiainp1").val();
      // console.log(xiaval)
      $(".stockinp").val(xiaval);
        });

        $(document).on('click', '.addxiala2', function() {
            var xiaval = $(".xiainp2").val();
        // console.log(xiaval)
        $(".priceinp").val(xiaval);
        });

      $(document).on('click', '.addxiala3', function() {
            var xiaval = $(".xiainp3").val();
        // console.log(xiaval)
        $(".priceinps").val(xiaval);
        });


    });        
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>
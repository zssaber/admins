<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<link rel="stylesheet" type="text/css" href="../addons/zh_cjdianc/template/public/ygcss.css">
<link rel="stylesheet" href="https://a.amap.com/jsapi_demos/static/demo-center/css/demo-center.css" />
<script src="https://webapi.amap.com/maps?v=1.4.15&key=623360891cf77a33966d4ccc357b0e52&plugin=AMap.CircleEditor"></script>
<script src="https://a.amap.com/jsapi_demos/static/demo-center/js/demoutils.js"></script>
<style type="text/css">
    .form-horizontal .control-label{text-align: left;}
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
	#container {
      width: 100%;
      height: 100%;
    }
</style>
<ul class="nav nav-tabs">
    <span class="ygxian"></span>
    <div class="ygdangq">当前位置:</div>    
    <li class="active"><a href="javascript:void(0);">配送设置</a></li>
</ul>
<div class="main">
    <form action="" method="post" class="form-horizontal form" enctype="multipart/form-data" id="invitative">
        <div class="panel panel-default ygdefault">
            <div class="panel-heading wyheader">
                配送设置
            </div>
            <div class="panel-body">
             <div class="form-group">
                <label class="col-sm-offset-1 col-sm-1 control-label">外卖配送</label>
                <div class="col-sm-9">
                    <label class="radio-inline">
                        <input type="radio" id="emailwy5" name="is_ps" value="1" <?php  if($info['is_ps']==1) { ?>checked<?php  } ?> />
                        <label for="emailwy5">开启</label>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" id="emailwy6" name="is_ps" value="2" <?php  if($info['is_ps']==2 || empty($info['is_ps'])) { ?>checked<?php  } ?> />
                        <label for="emailwy6">关闭</label>
                    </label>
                    <div class="ygmargin">*用户下订单时是否有外卖配送按钮选项</div>
                </div>

            </div>
            <div class="form-group">
              <label class="col-sm-offset-1 col-sm-1 control-label">到店自提</label>
              <div class="col-sm-9">
                <label class="radio-inline">
                    <input type="radio" id="emailwy1" name="is_zt" value="1" <?php  if($info['is_zt']==1) { ?>checked<?php  } ?> />
                    <label for="emailwy1">开启</label>
                </label>
                <label class="radio-inline">
                    <input type="radio" id="emailwy2" name="is_zt" value="2" <?php  if($info['is_zt']==2 || empty($info['is_zt'])) { ?>checked<?php  } ?> />
                    <label for="emailwy2">关闭</label>
                </label>
                <div class="ygmargin">*用户下订单时是否有到店自提按钮选项</div>
            </div>

        </div>
        <div class="form-group">
            <label class="col-sm-offset-1 col-sm-1 control-label">餐具用量</label>
            <div class="col-sm-9">
                <label class="radio-inline">
                    <input type="radio" id="emailwy7" name="is_cj" value="1" <?php  if($info['is_cj']==1) { ?>checked<?php  } ?> />
                    <label for="emailwy7">开启</label>
                </label>
                <label class="radio-inline">
                    <input type="radio" id="emailwy8" name="is_cj" value="2" <?php  if($info['is_cj']==2 || empty($info['is_cj'])) { ?>checked<?php  } ?> />
                    <label for="emailwy8">关闭</label>
                </label>
                <div class="ygmargin">*用户下订单时是否有餐具用量按钮选项</div>
            </div>

        </div>
        <div class="form-group">
          <label class="col-sm-offset-1 col-sm-1 control-label">货到付款</label>
          <div class="col-sm-9">
            <label class="radio-inline">
                <input type="radio" id="emailwy3" name="is_hdfk" value="1" <?php  if($info['is_hdfk']==1) { ?>checked<?php  } ?> />
                <label for="emailwy3">开启</label>
            </label>
            <label class="radio-inline">
                <input type="radio" id="emailwy4" name="is_hdfk" value="2" <?php  if($info['is_hdfk']==2 || empty($info['is_hdfk'])) { ?>checked<?php  } ?> />
                <label for="emailwy4">关闭</label>
            </label>
            <div class="ygmargin">*用户下订单时是否有货到付款按钮选项</div>
        </div>

    </div>
    <div class="form-group">
        <label class="col-sm-offset-1 col-sm-1 control-label">配送时间</label>
        <div class="col-sm-10">
            <input type="text" name="ps_time" value="<?php  echo $info['ps_time'];?>" class="form-control" id="inputEmail3"
            placeholder="请填写配送时间">
            <div class="ygmargin">*例如 : 30分钟</div>
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-offset-1 col-sm-1 control-label">配送方式</label>
        <div class="col-sm-10">
            <select class="form-control" name="ps_mode">                    
                <?php  if($sys['is_sj']==1) { ?>
                <option value="商家配送" <?php  if($info['ps_mode']=='商家配送' ) { ?>selected<?php  } ?>>商家配送</option>
                <?php  } ?>
                <?php  if($sys['is_dada']==1) { ?>
                <option value="达达配送" <?php  if($info['ps_mode']=='达达配送' ) { ?>selected<?php  } ?> >达达配送</option>
                <?php  } ?>
                <?php  if($sys['is_kfw']==1) { ?>
                <option value="快服务配送" <?php  if($info['ps_mode']=='快服务配送' ) { ?>selected<?php  } ?>>快服务配送</option>
                <?php  } ?>
                <?php  if($sys['is_pt']==1) { ?>
                <option value="<?php  echo $ps_name;?>" <?php  if($info['ps_mode']==$ps_name ) { ?>selected<?php  } ?>><?php  echo $ps_name;?></option>
                <?php  } ?>

            </select>
            <div class="ygmargin">选择<?php  echo $ps_name;?>配送,请确保安装跑腿小程序并在跑腿小程序中绑定此小程序</div>

        </div>
    </div>
    <div class="form-group dada">
                <label class="col-sm-offset-1 col-sm-1 control-label">商家ID(source_id)</label>
                <div class="col-sm-10">
                 <input type="text"  name="source_id" value="<?php  echo $dadainfo['source_id'];?>" id="web_name" class="form-control" />
                    <div class="ygmargin">*请去http://newopen.imdada.cn申请(账户中心->基本资料)</div>
             </div>
         	</div> 
         	<div class="form-group dada">
                <label class="col-sm-offset-1 col-sm-1 control-label">门店编号</label>
                <div class="col-sm-10">
                 <input type="text"  name="shop_no" value="<?php  echo $dadainfo['shop_no'];?>" id="web_name" class="form-control" />
                    <div class="ygmargin">*请去http://newopen.imdada.cn申请(商户中心->门店管理)</div>
             </div>
         	</div>
<div class="form-group kfw">
    <label class="col-sm-offset-1 col-sm-1 control-label">商户ID(user_id)</label>
    <div class="col-sm-10">
        <input type="text" name="user_id" class="form-control" value="<?php  echo $kfwinfo['user_id'];?>" />
    </div>
</div> 
<div class="form-group">
                <label class="col-sm-offset-1 col-sm-1 control-label">配送距离设置</label>
                <div class="col-sm-10">
					<input type="text" value="<?php  echo $store['coordinates'];?>" style="display:none" id="coordinates">
                   <input type="text" name="ps_jl" value="<?php  echo $info['ps_jl'];?>" class="form-control" id="inputEmail3a"
                   placeholder="请填写配送的最大距离,单位千米">
                   <div class="ygmargin">*单位为:米</div>
                   
                    <div class="ygmargin" style="margin-top:20px; height:400px; border:1px solid #e7e7eb;">

                    <div id="container"></div>
                    
                    <div class="input-card" style="width: 120px;display:none">
					   <div class="btn" id="caozuo" onclick="circleEditor.open()" style="margin-bottom: 5px">开始编辑</div> 
					</div>
                    </div>
               </div>
           </div>
<!--<div class="form-group">
    <label class="col-sm-offset-1 col-sm-1 control-label">到店自提协议</label>
    <div class="col-sm-9">
       <?php  echo tpl_ueditor('ztxy',$info['ztxy']);?>
   </div>
</div>-->

</div>
</div>
<div class="form-group">
    <input type="submit" name="submit" value="保存设置" class="btn col-xs-3" style="color: white;background-color: #44ABF7;" />
    <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
    <input type="hidden" name="id" value="<?php  echo $item['id'];?>" />
</div>
</form>
</div>
<script type="text/javascript">
    $(function(){
        $("#frame-0").show();
        $("#yframe-0").addClass("wyactive");
        $("select[name=ps_mode]").bind("change",function(){
         var seleVal = $("select option:selected").val();
         console.log(seleVal)
         waiter(seleVal)
     })
        var val = $("select option:selected").val();
        waiter(val)
        function waiter(val){
        	if(val=='达达配送'){
        		$(".dada").show()
        		$(".kfw").hide()
        	}else if(val=='快服务配送'){
        		$(".dada").hide()
        		$(".kfw").show()
        	}else if(val!='达达配送'&&val!='快服务配送'){
        		$(".dada").hide()
        		$(".kfw").hide()
        	}
        }
    })
</script>
<script type="text/javascript">
    var as=document.getElementById('inputEmail3a').value;
	var a = as/1000;
	var asd=document.getElementById('coordinates').value;
	var arr = asd.split(",");
    var map = new AMap.Map("container", {
        center: [arr[1],arr[0]],
        zoom: 17
    });
setTimeout(function() {
    // IE浏览器
    if(document.all) {
        document.getElementById("caozuo").click();
    }
    // 其它浏览器
    else {
        var e = document.createEvent("MouseEvents");
        e.initEvent("click", true, true);
        document.getElementById("caozuo").dispatchEvent(e);
    }
},100);
    var circle = new AMap.Circle({
        center: [arr[1],arr[0]],
        radius: a*1000, //半径
        borderWeight: 3,
		strokeColor: "#FF33FF", 
        strokeOpacity: 1,
        strokeWeight: 6,
        strokeOpacity: 0,
        fillOpacity: 0.4,
        strokeStyle: 'dashed',
        strokeDasharray: [10, 10], 
        // 线样式还支持 'dashed'
        fillColor: '#1791fc',
        zIndex: 50,
    })

    circle.setMap(map)
    // 缩放地图到合适的视野级别
    map.setFitView([ circle ])

    var circleEditor = new AMap.CircleEditor(map, circle)

    circleEditor.on('move', function(event) {
        log.info('触发事件：move')
    })

    circleEditor.on('adjust', function(event) {
        log.info('触发事件：adjust')
    })

    circleEditor.on('end', function(event) {
        log.info('触发事件： end')
        // event.target 即为编辑后的圆形对象
    })
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>


<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<style type="text/css">
    .nav-tabs>li>a:hover{
        color: #333;
        border-color: #31C2A5;
        background-color: white;
    }
    .nav-tabs > li.active > a,.nav-tabs > li.active > a:hover{
        background-color: #31C2A5;
        color: white;
        border-color: #31C2A5;
    }
    .nav.nav-tabs{border-color: #31C2A5;margin-top: 30px;}
    .yg5_key>div{float: left;line-height: 34px;}
    .store_td1{height: 45px;}
    .store_list_img{width: 60px;height: 60px;}
    .yg5_tabel{border-color: #e5e5e5;outline: 1px solid #e5e5e5;}
    .yg5_tr2>td{padding: 10px 15px;border: 1px solid #e5e5e5;}
    .yg5_tr1>th{
        border: 1px solid #e5e5e5;
        padding-left: 15px;
        background-color: #FAFAFA;
        font-weight: bold;
    }
    .yg5_btn{background-color: #EEEEEE;color: #333;border: 1px solid #E4E4E4;border-radius: 6px;width: 100px;height: 34px;}
	.navback{display:none}
	.yg_back{margin-left: 150px;}
	.therji{display:none !important}
</style>
<ul class="nav nav-tabs">    
    <li><a href="<?php  echo $this->createWebUrl2('test2')?>">员工管理</a></li>
    <li class="active"><a href="<?php  echo $this->createWebUrl2('yg17')?>" style="background: #44ABF7;">添加员工</a></li>
	<li><a style="color:red;">注：此功能慎用</a></li>
</ul>
<div class="main">
    <form action="" method="post" class="form-horizontal form" enctype="multipart/form-data">
	 <div class="panel panel-default ygdefault">
	  <div class="panel-body panel">
	  
	    <div class="form-group">
          <label class="col-xs-12 col-sm-3 col-md-2 control-label"><font color="red">*</font>员工姓名</label>
            <div class="col-sm-9">
            <input type="text" name="name" class="form-control" value="<?php  echo $info['fw_name'];?>" />
          </div>
        </div>
		
		<div class="form-group">
          <label class="col-xs-12 col-sm-3 col-md-2 control-label"><font color="red">*</font>员工电话</label>
            <div class="col-sm-9">
            <input type="text" name="phone" class="form-control" value="<?php  echo $info['phone'];?>" />
          </div>
        </div>
		
		<div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label"><font color="red">*</font>员工照片</label>
                    <div class="col-sm-9">
                        <?php  echo tpl_form_field_image('picture',$info['picture'])?>
                    </div>
                </div>
				
		 <div class="form-group">
                <label for="inputEmail3" class="col-xs-12 col-sm-3 col-md-2 control-label">员工用户绑定</label>
                <div class="col-sm-10">
                    <div class="col-sm-12" style="padding: 0px;">
                        <select class="col-sm-6" name="user_id" id="username" style="pointer-events: none;">
							<?php  if($userinfo['name']) { ?>
                            <option value="<?php  echo $userinfo['id'];?>" selected="selected"><?php  echo $userinfo['name'];?></option>
                            <?php  } ?>
                            <?php  if(!$userinfo['name']) { ?> <option value="">请搜索用户</option><?php  } ?>
                            <?php  if(is_array($user)) { foreach($user as $key => $item3) { ?>
                            <option value="<?php  echo $item3['id'];?>"><?php  echo $item3['name'];?></option>
                            <?php  } } ?>
                        </select>
                        <span class="btn btn-sm storeblue" data-toggle="modal" data-target="#myModal1" style="margin-left: 30px;">搜索用户</span>
                    </div>                    
                </div>
				
                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h5 class="modal-title" id="myModalLabel" style="font-size: 16px;">提示</h5>
                            </div>
                            <div class="modal-body ygsearch" style="font-size: 20px;padding: 15px 30px;">
                                <input type="text" id="ygsinput" placeholder="请输入微信昵称/openid">
                                <span class="btn btn-sm storeblue ygbtn">搜索</span>
                                <div class="searchname" style="margin-top: 8px;"></div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                            </div>
                        </div>
                    </div>
                </div>
				
            </div>
			 <?php  if($img2!='') { ?>
			  <div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">店员收银小程序码</label>
				<?php  if(strlen($img2)>20) { ?>
				<?php  echo "<img src='".$img2."'>"?>
				<?php  } else { ?> 
				<div class="col-sm-10">
				 <input type="text" style="color:red" name="orderby" value="该二维码必须在小程序发布后才能生成" class="form-control" id="inputEmail3" readonly>
				</div>
			  <?php  } ?>
			  </div>
				<?php  } ?>
				
	  </div>
	 </div>
	 
	    <div class="form-group">
            <input type="submit" name="submit" value="提交" class="btn col-lg-3" style="color: white;background-color: #44ABF7;margin-left: 30%;"/>
            <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
        </div>
	</form>
	<script type="text/javascript">
    $(function(){
        $("#frame-0").show();
        $("#yframe-0").addClass("wyactive");
        $(".ygbtn").on("click",function(){
            var ygsinput = $("#ygsinput").val();
            if(ygsinput.length==''){
              $(".searchname").html('');
            }else{
              $(".searchname").html('')  
              var keywords = $("#ygsinput").val()
              $.ajax({
                  type:"post",
                  url:"<?php  echo $_W['siteroot'];?>/app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&do=SelectUser&m=zh_cjdianc",
                  dataType:"text",
                  data:{keywords:keywords},
                  success:function(data){                    
                      var data = eval('(' + data + ')')
                      console.log(data);
                      $(".searchname").show();
                      for(var i=0;i<data.length;i++){
                        $(".searchname").append('<div class="shnbox" data-dismiss="modal" id="'+data[i].id+'"><a href="javascript:void(0);"><p>'+data[i].name+'</p></a></div>')
                      }
                      $(".shnbox").each(function(){
                        $(this).click(function(){
                            var thid = $(this).attr("id");
                            $('#username option[value='+thid+']').attr("selected", true);
                        })
                        
                      })
                      
                  }
              }) 
            }
            
        })    
    })
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>

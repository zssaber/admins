<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<link rel="stylesheet" type="text/css" href="../addons/zh_cjdianc/template/public/ygcsslist.css">
<style type="text/css">
    .yg5_key>div{float: left;line-height: 34px;}
    .store_td1{height: 45px;}
    .store_list_img{width: 40px;height: 40px;}
    .yg5_tabel{border-color: #e5e5e5;outline: 1px solid #e5e5e5;font-size: 12px;}
    .yg5_tr2>td{padding: 10px 15px;border: 1px solid #e5e5e5;text-align: center;}
    .yg5_tr1>th{
        border: 1px solid #e5e5e5;
        padding-left: 15px;
        background-color: #FAFAFA;
        font-weight: bold;
        text-align: center;
    }
    .yg5_btn{background-color: #EEEEEE;color: #333;border: 1px solid #E4E4E4;border-radius: 6px;width: 100px;height: 34px;}

    .ygshanchu{color: white;background-color: #44ABF7;}
    .accout_inp{width: 100%;height: 35px;border: 1px solid #cccccc;font-size: 14px;color: #333;}
    .navback{display: none;}
    .yg_back{margin-left: 170px;}
    .scour{
      position: relative;
      width: 100%;
      display: block;
    }
    .scour:hover .scour_tip{
      display: block;
    }
    .scour_tip{
      display: none;
      position: absolute;
      left: 50%;
      bottom: 27px;
      background-color: #333;
      color: white;
      padding: 2px 7px;
      border-radius: 2px;
      font-size: 10px;
      margin-left: -20px
    }
    .scour_tip:after{
      content: "";
      display:block;
      width: 0;
      height: 0;
      border-bottom: 10px solid #333;
      border-left: 10px solid transparent;
      transform: rotate(45deg);
      position: absolute;
      left: 40%;
      top: 78%;
    }
	.textarea{
        width: 100%;
        border:1px solid #cdcdcd;
        padding: 10px;
        resize: none;
        font-size: 15px;
    }
</style>
<ul class="nav nav-tabs">
    <span class="ygxian"></span>
    <div class="ygdangq">当前位置:</div>    
    <li class="active"><a href="<?php  echo $this->createWebUrl2('dlinzh')?>">用户列表</a></li>
	<li class=""><a href="<?php  echo $this->createWebUrl2('dlinzhlist')?>">发送记录</a></li>
</ul>
<div class="main">
   <div class="dishes">
		<a href="javascript:void(0);" data-toggle="modal" data-target="#myModalcc"><span class="btn btn-xs ygyouhui2">发送短信</span> </a>
		<div class="col-md-1" style="padding: 0px;">
	                    <div class="yg_name">剩余短信：<?php  echo $store['note_num'];?>条</div>
	                    
	                </div>
		</div>
		<br>
   <!-- <div class="panel panel-default">
        <div class="panel-body">

        <form action="" method="get" class="col-md-4">
              <input type="hidden" name="c" value="site" />
                   <input type="hidden" name="a" value="entry" />
                   <input type="hidden" name="m" value="zh_cjdianc" />
                   <input type="hidden" name="do" value="dlinuser" />
            <div class="input-group" style="width: 300px">
                <input type="text" name="keywords" class="form-control" placeholder="请输入昵称">
                <span class="input-group-btn">
                    <input type="submit" class="btn btn-default" name="submit" value="查找"/>
                </span>
            </div>
            <input type="hidden" name="token" value="<?php  echo $_W['token'];?>"/>
        </form>
       
    
        </div>
    </div>-->
    <div class="panel panel-default">
        <div class="panel-heading">
            会员列表
        </div>
        <div class="panel-body" style="padding: 0px 15px;">
            <div class="row">
                <table class="yg5_tabel col-md-12" id="test_table">
                    <tr class="yg5_tr1">
						<th class="store_td1 col-md-1">
                            <input type="checkbox" class="allcheck" />
                            <span class="store_inp">全选</span>
                        </th>
                        <th class="store_td1 col-md-1" >id</th>
                        <th class="col-md-1">会员昵称</th>
                        <th class="store_td1 col-md-1">会员头像</th>
						<th class="col-md-2">会员手机号码</th>
                    </tr>
                      <?php  if(is_array($list)) { foreach($list as $row) { ?>
                    <tr class="yg5_tr2">
						<td>
                        <input type="checkbox" name="test" value="<?php  echo $row['id'];?>">
						</td>
                        <td ><?php  echo $row['id'];?></td>
                        <td><?php  echo $row['name'];?></td>
                        <td><img class="store_list_img" src="<?php  echo $row['img'];?>"/></td>
                        <td><?php  if($row['tel']) { ?><?php  echo $row['tel'];?><?php  } else { ?>无<?php  } ?></td>
                    </tr>
					<div class="modal fade" id="myModalcc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                          <form action="" method="post" enctype="multipart/form-data">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                      <h4 class="modal-title" id="myModalLabel" style="font-size: 20px;">编辑短信</h4>
                                  </div>
                                  <div class="modal-body" style="font-size:20px">
                                      <div class="modal-body" style="font-size:20px">
									  <textarea name="con" id="" rows="5" class="textarea"  placeholder="输入短信内容"></textarea>
                                  </div>
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                                      <button type="button" class="btn btn-info" id="allshang">发送</button>
                                      <input type="hidden" name="token" value="<?php  echo $_W['token'];?>"/>
									  <input type="hidden" class="storeid" value="<?php  echo $_COOKIE['storeid'];?>"/>
                                      <input type="hidden" name="ids2" value=""/>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
                  

                    <?php  } } ?>
                      <?php  if(empty($list)) { ?>
                    <tr class="yg5_tr2">
                        <td colspan="9">
                          暂无会员信息
                        </td>
                    </tr>
                    <?php  } ?>
                     
                    
                </table>
            </div>
        </div>
    </div>
</div>
<div class="text-right we7-margin-top">
     <?php  echo $pager;?>
</div>


<!-- <?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?> -->
<script type="text/javascript">
    $(function(){
         $("#frame-4").show();
        $("#yframe-4").addClass("wyactive");
		
		$(".allcheck").on('click',function(){
            var checked = $(this).get(0).checked;
            $("input[type=checkbox]").prop("checked",checked);
        });
		
		$("#allshang").on('click',function(){
            var check = $("input[name='test']:checked");
			var document = $('.textarea').val();
			var storeid = $('.storeid').val();
			var id = "";
			$("input[name='test']:checked").each(function (index, item) {
        
				if ($("input[name='test']:checked").length-1==index) {
					id += $(this).val();
				} else {
					id += $(this).val() + ",";
				}  
			});
            if(check.length < 1){
                alert('请选择需要发送的用户!');
                return false;
            }else if(document==""){
			alert('请输入短信内容!');
			}else if(confirm("确认发送短信?")){
                var datas = {
				 id:id,
				 storeid:storeid,
				 document:document
				};
                
                $.ajax({
                    type:"post",
                    url:"<?php  echo $_W['siteroot'];?>/app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&do=zh&m=zh_cjdianc",
                    dataType:"text",
                    data:datas,
                    success:function(data){
                        if(data==1){
						alert('提交成功!');
						location.reload();
						}else{
						alert('剩余短信不足，请在手机端充值短信!');
						location.reload();
						}  
                        
                    }
                })
               
            }
        });
       
        
    })
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>

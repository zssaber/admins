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
    .store_inp{margin-left: 5px;}
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
    <li class=""><a href="<?php  echo $this->createWebUrl2('dlinzh')?>">会员列表</a></li>
	<li class="active"><a href="<?php  echo $this->createWebUrl2('dlinzhlist')?>">发送记录</a></li>
</ul>
<div class="main">
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
                        <th class="store_td1 col-md-1" >id</th>
                        <th class="col-md-2">会员信息</th>
                        <th class="store_td1 col-md-1">短信内容</th>
						<th class="col-md-2">提交时间</th>
						<th class="col-md-1">状态</th>
                    </tr>
                      <?php  if(is_array($list)) { foreach($list as $row) { ?>
                    <tr class="yg5_tr2">
                        <td ><?php  echo $row['id'];?></td>
                        
                         <td>
						 <?php  if(is_array($row['lists'])) { foreach($row['lists'] as $rows) { ?>
						  用户名：<?php  echo $rows['name'];?> -- 号码：<?php  echo $rows['tel'];?></br>
						 <?php  } } ?>
						 </td>
					    
                        <td><?php  echo $row['document'];?></td>
						<td><?php  echo date("Y-m-d H:i:s",$row['sq_time']);?></td> 
                     <?php  if($row['state']==1) { ?>
                     <td >
                        <span class="label storered">审核中</span>
                    </td >
                    <?php  } else if($row['state']==2) { ?>
                    <td >
                        <span class="label storeblue">已通过</span>
                    </td>
                    <?php  } else if($row['state']==3) { ?>
                    <td >
                       <span class="label storegrey">已拒绝</span>
                   </td>
                   <?php  } ?>  
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
        
    })
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>

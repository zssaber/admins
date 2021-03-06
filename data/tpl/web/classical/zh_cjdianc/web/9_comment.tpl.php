<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<link rel="stylesheet" type="text/css" href="../addons/zh_cjdianc/template/public/ygcsslist.css">
<style type="text/css">
    .download{
        float: right;
        line-height: 30px;
        color: #44ABF7;
    }
    .download i{margin:0 10px;}
    .first{
        width: 100px;
        position: relative;
    }
    .user_name{
    	font-size: 16px;
    }
    .use_img{
        position: absolute;
        top:20px;
        left:10px;
        width: 80px;
        height: 80px;
        background: #ccc;
        border-radius: 100%;
        vertical-align: top;
    }
    .user_name i{
        color: #fcd700;
        margin-left: 10px;
    }
    .comment_con td{
        font-size: 14px;
    }
    .border{
/*        border-bottom: 1px solid #cdcdcd;
*/        
		padding: 20px 0 0
    }
    .star i{
        color:#fa952f;
        margin:5px 0;
        font-size: 16px;
    }
    .star i.gray{
        color: #e9e9e9;
    }
    .use_comment{
        margin:10px 0;
    }
    .other{
        margin-bottom: 20px;
    }
    .other img{
        width: 80px;
        height: 80px;
        margin-right: 10px;
    }
    .other img.on{
        width: 300px;
        height: auto;
    }
    .record{
    	position: relative;
        color: #888;
        padding: 10px;
		background: #F5F7F9;
    	border-radius: 8px;  
    	margin-top: 15px;
    	margin-bottom: 20px;
    }
    .record:before{
    	content: "";
	    width: 0;
	    height: 0;
	    border-width: 0 12px 12px;
	    border-style: solid;
	    border-color: transparent transparent #F5F7F9;
	    position: absolute;
	    top: -11px;
    }
    .record p{
        margin:0;
        font-size: 14px;
    }
    .recive_time{
        font-size: 12px;
        margin-top: 10px;
    	color:#999;   
    	text-align: right;   
    }
    .recive_box{
    	border-bottom: 1px solid #ccc;
    }
    .bottom{
        text-align: right;
    }
    .time{
        color: #999;
        padding-right: 10px;
        font-size: 12px;
    }
    .shop_ca{
        padding-right: 10px;
        margin-top: 50px;
    }
    .shop_ca a{
        color: #44ABF7;
        margin-left: 20px;
    }
    .shop_ca a i{
        margin-right: 5px;
    }
    .yg5_tr2{
        height: 45px;
        text-align: center;;
        color: #888;
    }
    .textarea{
        width: 100%;
        border:1px solid #cdcdcd;
        padding: 10px;
        resize: none;
        font-size: 15px;
    }
    .tip{
        display: none;
        position: fixed;
        background: rgba(0,0,0,0.5);
        width: 100%;
        height: 100%;
        top: 1px;
        left: 1px; 
    }
    .tip span{
        float: right;
        color: #fff;
        font-size: 45px;
        margin: 25px;
        line-height: 130px;
    }
    .tip img{
        width: 400px;
        height: auto;
        display: relative;
        position: absolute;
        top: 150px;
        left: 50%;
        margin-left: -200px;
    }
</style>
<ul class="nav nav-tabs">
    <span class="ygxian"></span>
    <div class="ygdangq">当前位置:</div>
    <li <?php  if($_GPC['type']==1) { ?> class="active" <?php  } ?>><a href="<?php  echo $this->createWebUrl('comment',array('type'=>1));?>">全部(<?php  echo count($qb)?>)</a></li>
    <li <?php  if($_GPC['type']==2) { ?> class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('comment',array('type'=>2));?>">未回复(<?php  echo count($whf)?>)</a></li>
<!--     <p class="download">下载评价列表<i class="fa fa-download" aria-hidden="true"></i></p>
 -->
 </ul>
<div class="main">
    <div class="panel">
        <div class="panel-body">
            <div class="row">
                <table class="col-md-12 comment_con">
                <?php  if(is_array($list)) { foreach($list as $row) { ?>
                    <tr class="">
                        <td class="first"><img src="<?php  echo $row['user_img'];?>" alt="" class="use_img"></td>                        
                        <td class="col-md-9 border">
                            <div class="user_name"><?php  echo $row['name'];?>  (<?php  echo $row['store_name'];?>)</div>
                            <?php  if($row['stars']==5) { ?>
                            <div class="star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <?php  } ?>
                            <?php  if($row['stars']==4) { ?>
                            <div class="star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star gray"></i>
                            </div>
                            <?php  } ?>
                            <?php  if($row['stars']==3) { ?>
                            <div class="star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star gray"></i>
                                <i class="fa fa-star gray"></i>
                            </div>
                            <?php  } ?>
                            <?php  if($row['stars']==2) { ?>
                            <div class="star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star gray"></i>
                                <i class="fa fa-star gray"></i>
                                <i class="fa fa-star gray"></i>
                            </div>
                            <?php  } ?>
                            <?php  if($row['stars']==1) { ?>
                            <div class="star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star gray"></i>
                                <i class="fa fa-star gray"></i>
                                <i class="fa fa-star gray"></i>
                                <i class="fa fa-star gray"></i>
                            </div>
                            <?php  } ?>

                            
                            <p class="use_comment"><?php  echo $row['content'];?></p>
                            <div class="other">
                            <?php  if(is_array($row['img'])) { foreach($row['img'] as $key => $row2) { ?>
                                <img src="<?php  echo tomedia($row2);?>" alt="">
                        <?php  } } ?>
                            </div>
<!--                             <?php  if($row['state']==2) { ?>
                            <div class="record">
                                <p class="recive_con">商家回复:  <?php  echo $row['hf'];?></p>
                                <p class="recive_time">回复时间:  <?php  echo $row['hf_time'];?></p>
                            </div>
                            <?php  } ?> -->
                        </td>
                        <td class="bottom border">
                            <div class="time">评价时间 <?php  echo $row['time'];?></div>
                            <div class="shop_ca">
                               <!--  <a href="javascript:;">举报</a> -->
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#myModal<?php  echo $row['id'];?>">
                               <span class="recive"><i class="fa fa-envelope-o"></i>回复</span>
                                </a>
                            </div>
                        </td>                        
                        <div class="modal fade" id="myModal<?php  echo $row['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel" style="font-size: 20px;">提示</h4>
                                </div>
                                <form action="" method="post">
                                    <div class="modal-body" style="font-size: 20px">
                                        <textarea name="con" id="" rows="5" class="textarea"  placeholder="请输入你想说的话!"></textarea>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                                        <input type="submit" name="submit" value="发送" style="background: #44ABF7;color: #fff" class="btn">
                                         <input type="hidden" name="token" value="<?php  echo $_W['token'];?>"/>
                                            <input type="hidden" name="id" value="<?php  echo $row['id'];?>"/>
                
                                    </div>
                                </form>
                            </div>
                        </div>
                    </tr>
                    <tr>
                    	<td></td>
	                    <td colspan="2" class="recive_box">
                            <?php  if($row['state']==2) { ?>
                            <div class="record">
                                <p class="recive_con">商家回复:  <?php  echo $row['hf'];?></p>
                            </div>
                            <p class="recive_time">回复时间:  <?php  echo $row['hf_time'];?></p>

                            <?php  } ?>
	                    </td>
                    </tr>
                    <?php  } } ?>







                    <?php  if(!$list) { ?>
                    <tr class="yg5_tr2">
                        <td colspan="3">
                          没有更多评论啦
                      </td>
                    </tr> 
                    <?php  } ?>
                </table>  

             <!--图片放大-->
                <div class="tip col-md-11">
                    <span class="error">×</span>
                    <img src="" alt="" class="big">
                </div>                
            </div>
        </div>
    </div>
</div>
<div class="text-right we7-margin-top">
     <?php  echo $pager;?>
</div>
<script type="text/javascript">
    $(function(){
        $("#frame-7").show();
        $("#yframe-7").addClass("wyactive");
        // $("#frame-2").addClass("in");
        // 
        //点击图片放大
        $(".other img").click(function(){
            var src=$(this).attr("src")
            console.log(src)
            console.log($(this).index())
            $(".tip").show()
            $(".tip img").attr("src",src)
        })
        $(".tip").click(function(){
            $(this).hide()
        })
    })
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>
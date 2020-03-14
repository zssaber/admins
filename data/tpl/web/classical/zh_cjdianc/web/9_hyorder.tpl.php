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
/*    .navback{display: none;}
    .yg_back{margin-left: 170px;}*/
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
    .ygrow{margin-top: 20px;}
        .ordersucess{background-color: #44ABF7;color: white;}
    .ordersucess:hover{background-color: #44ABF7;color: white;}
        .reset_box{background: #fff;padding: 20px;overflow: hidden;margin-top: 20px}
    .reset_tip{font-size: 14px;}
    .reset_tip b{font-size: 26px;margin:0 5px 0 40px;color: #FFB025}
    .reset_tip span{font-size: 16px;font-weight: normal;color: #FFB025}
    .reset_tip a{color: #2589ff;background: #fff;border-color: #2589ff;margin-top: -15px;margin-left: 20px}
    .reset_tip a:hover{color: #fff;background: #2589ff}
    .reset_detail{margin-top: 20px}
    .reset_detail ul li{margin-top: 10px}
    .reset_detail ul li a{color: #2589ff}
</style>
<ul class="nav nav-tabs">
    <span class="ygxian"></span>
    <div class="ygdangq">当前位置:</div>    
    <li class="active"><a href="javascript:void(0);">开卡记录</a></li>
</ul>
<div class="ygrow reset">
    <div class="reset_box">
        <div class="reset_tip">总开卡金额<b><?php  if($orderMoney['money']) { ?><?php  echo $orderMoney['money'];?><?php  } else { ?>0.00<?php  } ?></b><span>元</span></div>
    </div>

</div>
<div class="main">
    <div class="panel panel-default">
        <div class="panel-body">

        <form action="" method="get" class="col-md-4">
              <input type="hidden" name="c" value="site" />
                   <input type="hidden" name="a" value="entry" />
                   <input type="hidden" name="m" value="zh_cjdianc" />
                   <input type="hidden" name="do" value="hyorder" />
            <div class="input-group" style="width: 300px">
                <input type="text" name="keywords" class="form-control" placeholder="请输入昵称">

                <span class="input-group-btn">
                    <input type="submit" class="btn btn-default" name="submit" value="查找"/>
                </span>
            </div>
            <input type="hidden" name="token" value="<?php  echo $_W['token'];?>"/>
        </form>
       
    
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            开卡记录
        </div>
        <div class="panel-body" style="padding: 0px 15px;">
            <div class="row">
                <table class="yg5_tabel col-md-12" id="test_table">
                    <tr class="yg5_tr1">
                        <th class="store_td1 col-md-1" >用户id</th>
                        <th class="col-md-1">会员昵称</th>
                        <th class="store_td1 col-md-1">会员头像</th>
                        <th class="col-md-1">支付时间</th>
                         <th class="col-md-1">支付金额</th>
                         <th class="col-md-1">支付类型</th>
                    </tr>
                      <?php  if(is_array($list)) { foreach($list as $row) { ?>
                    <tr class="yg5_tr2">
                        <td ><?php  echo $row['user_id'];?></td>
                        <td><?php  echo $row['name'];?></td>
                        <td><img class="store_list_img" src="<?php  echo $row['img'];?>"/></td>
                        <td><?php  echo $row['time'];?></td>
                        <td><?php  echo $row['money'];?></td>
                        <td><?php  if($row['pay_type']==1) { ?>微信支付<?php  } else { ?>余额支付<?php  } ?></td>         
                    </tr>
                    <?php  } } ?>
                      <?php  if(empty($list)) { ?>
                    <tr class="yg5_tr2">
                        <td colspan="9">
                          暂无信息
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
        $("#frame-16").addClass("in");
        $("#frame-16").show();
        $("#yframe-16").addClass("wyactive");
    })
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>

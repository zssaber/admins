<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<style type="text/css">
    .yg9_content{padding:0px;font-size: 12px;}
    .yg9_content>li{padding-left: 0px;margin-top: 15px;}
    .yg9_content>li:nth-child(2)>.col-md-12{
        border:1px solid #eee;
    }
    .gkfour,.gkthree{
        padding: 8px 0px;
        border:1px solid #eee;
    }
    .gkfour{margin-top: 10px;}
    .gkbackimg,.backimg{text-align: center;}
    .backimg>img{
        width: 40px;
        height: 40px;
        margin-top: 17px;
    }
    .gkbackimg>img{
        width: 40px;
        height: 40px;
        margin-top: 17px;
    }
    .datanum{line-height: 23px;}
    .datanum2{line-height: 35px;font-size: 16px;text-align: center;}
    .datanum3{padding: 15px 15px 0px;border:1px solid #eee;}
    .tmoney{font-size: 26px;text-align: center;}
    .today{font-size: 14px;text-align: center;cursor: pointer;}    
    .todaybox2,.todaybox3,.todaybox4,.todaybox1{position: absolute;left: -10%;top: -22px;z-index: 10;width: 200px;height: 65px;padding: 10px;
        background-color: rgba(0,0,0,0.7);border-radius: 6px;color: white;font-size: 12px;text-indent: 1em;display: none;}
    .arrow-down{width: 0;height: 0;border-bottom: 10px solid rgba(0,0,0,0.7);  border-left: 10px solid transparent;transform: rotate(45deg);
        position: absolute;left: 50%;top: 60px;
    }
    .gkborder{margin-top: 15px;}
    .gkborder2{margin-top: 16px;}
    .gkborder2,.gkborder{border-top: 1px solid #eee;padding: 20px 0px;border-bottom-right-radius: 6px;border-bottom-left-radius: 6px;}
    .gkborder>li{padding: 10px 5px 10px 5px;text-align: center;}
    .gkborder2>li{padding: 9px 5px;text-align: center;}
    .gkborder2>li:nth-child(3),.gkborder2>li:nth-child(1),.gkborder>li:nth-child(1){border-right: 1px solid #eee;}
    .gkborder2>li:nth-child(2),.gkborder>li:nth-child(2){border-right: 1px solid #eee;}
    .gkfont1{line-height: 30px;font-weight: bold;}
    .gkfont2{line-height: 30px;font-size: 12px;}
    .gktitle{padding-left: 30px;font-size: 12px;}
    .ygxian{width: 3px;height: 17px;float:left;background-color: #44ABF7;margin-top: 6px;border:none;}
       

    .list_one{padding-right: 30px;}
    .list_one>li{
      width: 100%;
      height: 54px;
      border-bottom: 1px solid #E5E5E5;
      color: #666666;
      padding-top: 25px;
      padding-left: 20px;
      padding-right: 20px;
    }
    .list_one>li>div:nth-child(1){float: left;}
    .list_one>li>div:nth-child(2){float: right;}
    .list_one_num{color: #ff6161;}
    .yg9_quie{
      padding: 0px 100px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      -webkit-align-items: center;
      -webkit-justify-content: space-between;
    }
    .yg9_quie>li{
      font-size: 14px;
      color: #666666;
      font-weight: bold;
      text-align: center;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      -webkit-flex-direction: column;
      -webkit-align-items: center;
      -webkit-align-items: center;
    }
    .yg9_quie>a>li>p{margin-top: 9px;text-align: center;}
    .yg9_quie>a>li>img{height: 72px;width: 72px;}
    .content_seller{
          margin-top: 20px;
          height: 230px;
        }
      .content_seller_left{
          height: 200px;          
      }
      .seller_red{color: #ff6161;font-size: 20px;}
      .seller_text{margin-top: 15px;}
      .content_seller_ul{
          padding: 40px 30px 0px;
      }
      .content_seller_ul>li{
          float: left;
          text-align: center;
      }
      .content_thing_title{
          height: 45px;
          background-color: #F3F3F3;
          font-weight: bold;
          color: #333;
          line-height: 45px;
          text-indent: 2em;
          border-bottom: 1px solid #E5E5E5;
      }
      .yg9_left{
        height: 200px;
        border: 1px solid #E5E5E5;
        background-color: white;
      }
      .con{
        margin-bottom: 40px;
        overflow: hidden;
        clear: both;
      }
      .left,
      .right{
        background: #fff;
        height: 220px
      }
      .left{
        padding: 0 30px
      }
      .right{
        border-left:40px solid #F5F7F9;
      }
      .head{
        font-size: 16px;
        margin:15px 0;
      }
      .box i{
        margin-left: 10px;
      }
      .list_list{
        display: flex;
        align-items: center;
        justify-content: space-between;
        -webkit-align-items: center;
        -webkit-justify-content: space-between;
      }
      .list_list li{
        float: left;
        color: #fff;
        height: 158px;
        padding: 0;
/*        margin: 0 15px;
*/      }
/*      .list_list li:first-child{
        margin-left: 0;
      }
      .list_list li:last-child{
        margin-right: 0;
      }*/
      .list_list li h1{
        font-size: 14px;
        margin: 0;
        height: 40px;
        line-height: 40px;
        text-align: center;
      }
      .list_bottom{
        background: rgba(225,225,225,0.2);
        height: 115px;
      }
      .list_bottom b{
        font-weight: normal;
        text-align: center;
        width: 100%;
        display: block;
        padding-top: 30px;
        font-size: 22px;
        margin-bottom: 20px;
      }
      .list_bottom p{
        text-align: center;
      }
      .list_list li:nth-child(1) .box{
        background: #1baaa5
      }
      .list_list li:nth-child(2) .box{
        background: #fd684a
      }
      .list_list li:nth-child(3) .box{
        background: #46a1d8
      }
      .list_list li:nth-child(4) .box{
        background: #1ccf6b
      }
      .list_list li:nth-child(5) .box{
        background: #fca65b
      }
      .list_list li:nth-child(6) .box{
        background: #b345f1
      }
      .money{
        width: 110px;
        height: 110px;
        border: 2px solid #fe7e10;
        border-radius: 100%;
/*        float: left;
*/        cursor: pointer;
        margin-bottom: 15px;
        position: relative;
      }
/*      .product{
        margin-right: 30px
      }
      .weixin{
        margin-left: 30px
      } */   
      .money:hover .tip{
        display: block;
      }  
      .all_money{
        display: flex;
        align-items: center;
        justify-content: center;
        -webkit-align-items: center;
        -webkit-justify-content: space-around;        
      }
      .w_tip2,
      .p_tip2,
      .w_tip,
      .p_tip{
        display: none;
        position: absolute;
        top: -45px;
        background: rgba(0,0,0,0.6);
        padding: 2px 10px;
        color: #fff;
        border-radius: 10px;
        font-size: 12px;
      }
      .money i{
        position: absolute;
        top: 70px;
        left: 50%;
        font-size: 16px;
        margin-left: -8px;
        color: #fff;
      }
      .money p{
        width: 100px;
        height: 100px;
        background: #fca65b;
        border-radius: 100%;
        margin: 3px;
        line-height: 100px;
        text-align: center;
        color: #fff;
        font-size: 14px;
      }
      .tixian{
        display: block;
        border: 1px solid #00aeff;
        margin: 0 auto;
        width: 120px;
        height: 35px;
        text-align: center;
        line-height: 35px;
        border-radius: 35px;
        color:#00aeff;
        clear: both;
      }
      .tixian:hover{
        background: #00aeff;
        color:#fff;
      }
      .detail{
        float: right;
        color: #00aeff;        
      }
      .date_box{
        padding: 15px 30px 30px;
        margin-bottom: 40px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        -webkit-align-items: center;
        -webkit-justify-content: space-between;
        background: #fff;
      }
      .date_box h1{
        text-align: left;;
        padding-left: 10px;
        font-size: 16px;
        margin: 20px 0
      }
      .date_box b{
        font-size: 30px;
        text-align: right;
        display: block;
        margin-bottom: 15px;
      }
      .date_box p{
        text-align: left;
        padding-left: 10px;
        margin-bottom: 10px;
      }
      .today{
         background: -webkit-linear-gradient(left, #4b9fff , #75b5fb); /* Safari 5.1 - 6.0 */
          background: -o-linear-gradient(right, #4b9fff, #75b5fb); /* Opera 11.1 - 12.0 */
          background: -moz-linear-gradient(right, #4b9fff, #75b5fb); /* Firefox 3.6 - 15 */
          background: linear-gradient(to right, #4b9fff , #75b5fb); /* 标准的语法 */
          color: #fff;
          border-radius: 10px;
          height: 155px
      }
      .yesterday{
         background: -webkit-linear-gradient(left, #24dcb3 , #50dfc3); /* Safari 5.1 - 6.0 */
          background: -o-linear-gradient(right, #24dcb3, #50dfc3); /* Opera 11.1 - 12.0 */
          background: -moz-linear-gradient(right, #24dcb3, #50dfc3); /* Firefox 3.6 - 15 */
          background: linear-gradient(to right, #24dcb3 , #50dfc3); /* 标准的语法 */
          color: #fff;  
          border-radius: 10px;
          height: 155px
      }
      .all_total{
         background: -webkit-linear-gradient(left, #ffb64f , #ffc675); /* Safari 5.1 - 6.0 */
          background: -o-linear-gradient(right, #ffb64f, #ffc675); /* Opera 11.1 - 12.0 */
          background: -moz-linear-gradient(right, #ffb64f, #ffc675); /* Firefox 3.6 - 15 */
          background: linear-gradient(to right, #ffb64f , #ffc675); /* 标准的语法 */
          color: #fff;  
          border-radius: 10px;
          height: 155px;
      }
      .all_total>p{
      	display: block;
      	width: 100%;
      	height: 20px;
      }
      .login_state{
        width: 145px;
        height: 145px;
        border-radius: 100%;
      }
      .login_state img{
        width: 130px;
        height: 130px;
        border-radius: 100%;
        margin:0 auto;
        display: block;
      }
      .login_state p{
        text-align: center;
        margin-top: 5px;
        padding: 0
      }
      .date_box p.code_tip{
        display: none;
        position: absolute;
        width: 150px;
        height: 150px;
        background: #1ccf6b;
        top: -60px;
        right: 88px;
        padding: 0;
      }
      .code_tip img{
        width: 120px;
        height: 120px;
        display: block;
        margin:15px auto;
      }
      .nav_head{
        background: #fff;
        padding: 15px 0 0 30px;
        font-size: 16px;
        margin:0;
      }
      .pay{
        float: left;
      }
      .tixian_money{
        float: right;
      }
</style>
<div class="main">
<h1 class="nav_head col-md-12">营业状况</h1>
<div class="col-md-12 date_box">
  <div class="col-md-3 today">
  <!--   <h1>今日营业额</h1>
    <b><?php  echo $jryye;?></b>
    <p>在线支付:<?php  echo $jrzxyye;?></p> -->
    <h1 style="font-size: 20px;">
		<text>今日营业额</text>
		<text style="margin-left: 40px;"><?php  echo $jryye;?></text>
    </h1>
    <p>到店支付: <?php  echo $jrddzf;?></p>
    <p>余额支付: <?php  echo $jryezf;?></p>
    <p>在线支付: <?php  echo $jrzxyye;?></p>
  </div>
  <div class="col-md-3 yesterday">
<!--     <h1>今日订单</h1>
    <b><?php  echo $jrordernum;?></b>
   <div  class="col-md-12" style="padding:0">
    <p class="col-md-4" style="padding:0;text-align: center">外卖: <?php  echo $total['total_order'];?></p>
    <p class="col-md-4" style="padding:0;text-align: center">店内: <?php  echo $dntotal['total_order'];?></p>
    <p class="col-md-4" style="padding:0;text-align: center">当面付: <?php  echo $dmordernum['total_order'];?></p>
   </div> -->
 	<h1 style="font-size: 20px;">
		<text>今日订单</text>
		<text style="margin-left: 40px;"><?php  echo $jrordernum;?></text>
    </h1>
    <p>外卖: <?php  echo $total['total_order'];?></p>
    <p>店内: <?php  echo $dntotal['total_order'];?></p>
    <p>当面付: <?php  echo $dmordernum['total_order'];?></p>
  </div>
  <div class="col-md-3 all_total">
   <!--  <h1>总营业额</h1>
    <b><?php  echo $cost;?></b>
    <a href="<?php  echo $this->createWebUrl2('dlzjlist');?>" class="pay">在线支付:<?php  echo $zxcost;?></a>
    <a href="<?php  echo $this->createWebUrl2('dlfinance');?>" class="tixian_money">提现</a> -->
    <h1 style="font-size: 20px;">
		<text>总营业额</text>
		<text style="margin-left: 40px;"><?php  echo $cost;?></text>
    </h1>
    <p>
    	<a href="" class="pay">到店支付:<?php  echo $xxcost;?></a>
    </p>
     <p>
    	<a href="" class="pay">余额支付:<?php  echo $yecost;?></a>
    </p>
    <p>
    	<a href="<?php  echo $this->createWebUrl2('dlzjlist');?>" class="pay">在线支付:<?php  echo $zxcost;?></a>
		<a style="float: right;" href="<?php  echo $this->createWebUrl2('dlfinance');?>" class="tixian_money">提现</a>
    </p>
  </div>  
  <div class="login_state">
    <?php  echo "<img src='".$img."'>"?>
    <p>店铺二维码</p>
  </div>
</div>
<div class="con">
  <div class="col-md-8 left">
    <h1 class="head">外卖订单概况</h1>
    <ul class="list_list">

       <li class="col-md-2">
         <div class="box">
            <h1>今日有效订单<i class="fa fa-question-circle" aria-hidden="true"></i></h1>
            <div class="list_bottom">
              <b><?php  echo $jryx['total_order'];?></b>
              <p>单位  (单)</p>
            </div>
          </div>
       </li>  
       <li class="col-md-2">
         <div class="box">
            <h1>今日自提订单<i class="fa fa-question-circle" aria-hidden="true"></i></h1>
            <div class="list_bottom">
              <b><?php  echo $jrzt['total_order'];?></b>
              <p>单位  (单)</p>
            </div>
          </div>
       </li>  
       <li class="col-md-2">
         <div class="box">
            <h1>今日货到付款订单<i class="fa fa-question-circle" aria-hidden="true"></i></h1>
            <div class="list_bottom">
              <b><?php  echo $jrfdfk['total_order'];?></b>
              <p>单位  (单)</p>
            </div>
          </div>
       </li>  
       <li class="col-md-2">
         <div class="box">
            <h1>今日待退款订单<i class="fa fa-question-circle" aria-hidden="true"></i></h1>
            <div class="list_bottom">
              <b><?php  echo $jrdtk['total_order'];?></b>
              <p>单位  (单)</p>
            </div>
          </div>
       </li>  
       <li class="col-md-2">
         <div class="box">
            <h1>有效订单总数<i class="fa fa-question-circle" aria-hidden="true"></i></h1>
            <div class="list_bottom">
              <b><?php  echo $total['total_order'];?></b>
              <p>单位  (单)</p>
            </div>
          </div>
       </li>  
     </ul> 
  </div>
  <div class="right  col-md-4">
    <h1 class="head">外卖收益<a href="<?php  echo $this->createWebUrl2('dlzjlist');?>" class="detail">收益详细</a></h1>
    <div class="all_money">
     <div class="money weixin">
        <p>￥<?php  echo $jr_wxmoney;?></p>
        <i class="fa fa-question-circle" aria-hidden="true"></i>
        <div class="w_tip tip">此金额为微信付款且已完成状态的金额</div>
      </div>
      <div class="money product">
        <p>￥<?php  echo $jr_ddmoney;?></p>
        <i class="fa fa-question-circle" aria-hidden="true"></i>
        <div class="p_tip tip">此金额为货到付款的金额</div>
      </div>
     

    </div>
<!--     <a href="<?php  echo $this->createWebUrl2('dlfinance');?>" class="tixian">提现</a>
 -->  
 </div>
</div>
<div class="con">
  <div class="col-md-8 left">
    <h1 class="head">店内订单概况</h1>
    <ul class="list_list">

       <li class="col-md-2">
         <div class="box" style="background: #1baaa58c">
            <h1>今日有效订单<i class="fa fa-question-circle" aria-hidden="true"></i></h1>
            <div class="list_bottom">
              <b><?php  echo $dnjryx['total_order'];?></b>
              <p>单位  (单)</p>
            </div>
          </div>
       </li>  
       <li class="col-md-2">
         <div class="box" style="background: #fd684a9c">
            <h1>今日在线付订单<i class="fa fa-question-circle" aria-hidden="true"></i></h1>
            <div class="list_bottom">
              <b><?php  echo $dnjrzxf['total_order'];?></b>
              <p>单位  (单)</p>
            </div>
          </div>
       </li>  
       <li class="col-md-2">
         <div class="box" style="background: #46a1d88a">
            <h1>今日餐后付订单<i class="fa fa-question-circle" aria-hidden="true"></i></h1>
            <div class="list_bottom">
              <b><?php  echo $dnjrchf['total_order'];?></b>
              <p>单位  (单)</p>
            </div>
          </div>
       </li>  
       <li class="col-md-2">
         <div class="box" style="background: #1ccf6b9c">
            <h1>今日关闭订单<i class="fa fa-question-circle" aria-hidden="true"></i></h1>
            <div class="list_bottom">
              <b><?php  echo $dnjrgb['total_order'];?></b>
              <p>单位  (单)</p>
            </div>
          </div>
       </li>  
       <li class="col-md-2">
         <div class="box" style="background: #fca65bc7">
            <h1>有效订单总数<i class="fa fa-question-circle" aria-hidden="true"></i></h1>
            <div class="list_bottom">
              <b><?php  echo $dntotal['total_order'];?></b>
              <p>单位  (单)</p>
            </div>
          </div>
       </li>  
     </ul> 
  </div>
  <div class="right  col-md-4">
    <h1 class="head">店内收益<a href="<?php  echo $this->createWebUrl2('dldnzjlist');?>" class="detail">收益详细</a></h1>
    <div class="all_money" >
     <div class="money weixin2" data-toggle="tooltip"  title="此金额为微信付款的金额">
        <p>￥<?php  echo $dnjr_wxmoney;?></p>
        <i class="fa fa-question-circle" aria-hidden="true"></i>
        <div class="w_tip2 tip" data-toggle="tooltip" data-placement="top">此金额为微信付款且已完成状态的金额</div>
      </div>
      <div class="money product2">
        <p>￥<?php  echo $dnjr_ddmoney;?></p>
        <i class="fa fa-question-circle" aria-hidden="true"></i>
        <div class="p_tip2 tip">此金额为餐后付款的金额</div>
      </div>
    </div>
  </div>
</div>
<div class="con">
  <div class="col-md-8 left">
    <h1 class="head">预定订单概况</h1>
    <ul class="list_list">

       <li class="col-md-2">
         <div class="box">
            <h1>今日有效订单<i class="fa fa-question-circle" aria-hidden="true"></i></h1>
            <div class="list_bottom">
              <b><?php  echo $ydtotal['total_order'];?></b>
              <p>单位  (单)</p>
            </div>
          </div>
       </li>  
       <li class="col-md-2">
         <div class="box">
            <h1>今日在线付订单<i class="fa fa-question-circle" aria-hidden="true"></i></h1>
            <div class="list_bottom">
              <b><?php  echo $ydjrzxf['total_order'];?></b>
              <p>单位  (单)</p>
            </div>
          </div>
       </li>  
       <li class="col-md-2">
         <div class="box">
            <h1>今日余额付订单<i class="fa fa-question-circle" aria-hidden="true"></i></h1>
            <div class="list_bottom">
              <b><?php  echo $ydjrchf['total_order'];?></b>
              <p>单位  (单)</p>
            </div>
          </div>
       </li>  
       <li class="col-md-2">
         <div class="box">
            <h1>今日关闭订单<i class="fa fa-question-circle" aria-hidden="true"></i></h1>
            <div class="list_bottom">
              <b><?php  echo $ydjrgb['total_order'];?></b>
              <p>单位  (单)</p>
            </div>
          </div>
       </li>  
       <li class="col-md-2">
         <div class="box">
            <h1>有效订单总数<i class="fa fa-question-circle" aria-hidden="true"></i></h1>
            <div class="list_bottom">
              <b><?php  echo $ydjryx['total_order'];?></b>
              <p>单位  (单)</p>
            </div>
          </div>
       </li>  
     </ul> 
  </div>
  <div class="right  col-md-4">
    <h1 class="head">预定订单收益<a href="<?php  echo $this->createWebUrl2('dldnzjlist');?>" class="detail">收益详细</a></h1>
    <div class="all_money">
     <div class="money weixin">
        <p>￥<?php  echo $ydjr_wxmoney;?></p>
        <i class="fa fa-question-circle" aria-hidden="true"></i>
        <div class="w_tip tip">此金额为微信付款且已完成状态的金额</div>
      </div>
      <div class="money product">
        <p>￥<?php  echo $ydjr_yemoney;?></p>
        <i class="fa fa-question-circle" aria-hidden="true"></i>
        <div class="p_tip tip">此金额为余额付款的金额</div>
      </div>
    </div> 
 </div>
</div>
<div class="con">
  <div class="col-md-8 left">
    <h1 class="head">当面付订单概况</h1>
    <ul class="list_list">

       <li class="col-md-2">
         <div class="box">
            <h1>今日有效订单<i class="fa fa-question-circle" aria-hidden="true"></i></h1>
            <div class="list_bottom">
              <b><?php  echo $dmtotal['total_order'];?></b>
              <p>单位  (单)</p>
            </div>
          </div>
       </li>  
       <li class="col-md-2">
         <div class="box">
            <h1>今日在线付订单<i class="fa fa-question-circle" aria-hidden="true"></i></h1>
            <div class="list_bottom">
              <b><?php  echo $dmjrzxf['total_order'];?></b>
              <p>单位  (单)</p>
            </div>
          </div>
       </li>  
       <li class="col-md-2">
         <div class="box">
            <h1>今日余额付订单<i class="fa fa-question-circle" aria-hidden="true"></i></h1>
            <div class="list_bottom">
              <b><?php  echo $dmjrchf['total_order'];?></b>
              <p>单位  (单)</p>
            </div>
          </div>
       </li>  
       <li class="col-md-2">
         <div class="box">
            <h1>有效订单总数<i class="fa fa-question-circle" aria-hidden="true"></i></h1>
            <div class="list_bottom">
              <b><?php  echo $dmjryx['total_order'];?></b>
              <p>单位  (单)</p>
            </div>
          </div>
       </li>  
     </ul> 
  </div>
  <div class="right  col-md-4">
    <h1 class="head">当面付收益<a href="<?php  echo $this->createWebUrl2('dldnzjlist');?>" class="detail">收益详细</a></h1>
    <div class="all_money">
     <div class="money weixin">
        <p>￥<?php  echo $dmjr_zxmoney;?></p>
        <i class="fa fa-question-circle" aria-hidden="true"></i>
        <div class="w_tip tip">此金额为微信付款且已完成状态的金额</div>
      </div>
      <div class="money product">
        <p>￥<?php  echo $dmjr_yemoney;?></p>
        <i class="fa fa-question-circle" aria-hidden="true"></i>
        <div class="p_tip tip">此金额为余额付款的金额</div>
      </div>
    </div> 
 </div>
</div>


    <!-- 待处理的事物 -->
    <div class="panel panel-default" style="clear: both;">
        <div class="panel-heading">运营快捷入口</div>
        <div class="panel-body">
          <ul class="col-md-12 yg9_quie">
          <a href="<?php  echo $this->createWebUrl2('dladddishes');?>">
            <li class="">
              <img src="../addons/zh_cjdianc/template/images/zu.png">
              <p>添加商品</p>
            </li>
            </a>
<!--             <li class="col-md-1">
              <img src="../addons/zh_cjdianc/template/images/xiaoshou.png">
              <div>菜品管理</div>
            </li> -->
             <a href="<?php  echo $this->createWebUrl2('dlinorder');?>">
            <li class="">
              <img src="../addons/zh_cjdianc/template/images/dingdan.png">
              <p>订单列表</p>
            </li>
             </a>
<!--               <a href="<?php  echo $this->createWebUrl('table2');?>">
            <li class="">
              <img src="../addons/zh_cjdianc/template/images/duanxin.png">
              <p>餐桌管理</p>
            </li>
            </a> -->
            <a href="<?php  echo $this->createWebUrl2('dlygquan');?>">
            <li class="">
              <img src="../addons/zh_cjdianc/template/images/yuanxing.png">
              <p>营销管理</p>
            </li>
            </a>
             <a href="<?php  echo $this->createWebUrl2('dlprint');?>">
            <li class="">
              <img src="../addons/zh_cjdianc/template/images/miaosha.png">
              <p>打印管理</p>
            </li>
            </a>
             <a href="<?php  echo $this->createWebUrl2('dlstoreinfo');?>">
            <li class="">
              <img src="../addons/zh_cjdianc/template/images/tuijian.png">
              <p>门店信息</p>
            </li>
            </a>
          </ul>
        </div>
    </div>

    <!-- 运营快捷入口结束 -->
    <!-- 商品总览 -->
    <!-- 待处理的事物 -->
    <div class="content_seller col-md-12" style="padding: 0px;">
            <div class="content_seller_left col-md-6" style="padding-right: 20px;padding-left: 0px;">
                <div class="yg9_left">
                    <div class="content_thing_title">外卖菜品总览</div>
                    <ul class="content_seller_ul">
                        <li class="col-md-3">
                            <div class="seller_red"><?php  echo $goods['sj'];?></div>
                            <div class="seller_text">已上架</div>
                        </li>
                        <li class="col-md-3">
                            <div class="seller_red"><?php  echo $goods['xj'];?></div>
                            <div class="seller_text">已下架</div>
                        </li>
                       <!--  <li class="col-md-3">
                            <div class="seller_red">100</div>
                            <div class="seller_text">已下架</div>
                        </li>
                        <li class="col-md-3">
                            <div class="seller_red">100</div>
                            <div class="seller_text">已下架</div>
                        </li> -->
                    </ul>
                </div>
            </div>
            <div class="content_seller_left col-md-6" style="padding: 0px;">
                <div class="yg9_left">
                    <div class="content_thing_title">店内菜品总览</div>
                    <ul class="content_seller_ul col-md-12">
                        <li class="col-md-3">
                            <div class="seller_red"><?php  echo $dngoods['sj'];?></div>
                            <div class="seller_text">已上架</div>
                        </li>
                        <li class="col-md-3">
                            <div class="seller_red"><?php  echo $dngoods['xj'];?></div>
                            <div class="seller_text">已下架</div>
                        </li>
                       <!--  <li class="col-md-3">
                            <div class="seller_red">100</div>
                            <div class="seller_text">已下架</div>
                        </li>
                        <li class="col-md-3">
                            <div class="seller_red">100</div>
                            <div class="seller_text">已下架</div>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
 </div>
 <div class="tip"></div>
<audio id="myaudio5" src="../addons/zh_dianc/template/images/wm.wav" controls="controls"  hidden="true" ></audio>
<audio id="myaudio6" src="../addons/zh_dianc/template/images/dn.wav" controls="controls"  hidden="true" ></audio>
<audio id="myaudio7" src="../addons/zh_dianc/template/images/yy.wav" controls="controls"  hidden="true" ></audio>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>
<script type="text/javascript">
    $(function(){
        // $("#frame-0").addClass("in");
        $("#frame-0").show();
        $("#yframe-0").addClass("wyactive");
    })
   
</script>
<script type="text/javascript">
$(function(){
    setInterval(function(){
               $.ajax({ 
                type: "post",
                dataType: "json",
                url: "<?php  echo $_W['siteroot'];?>/app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&do=neworder&m=zh_cjdianc&store=<?php  echo $_COOKIE['storeid'];?>",
                success: function (data) {
                    console.log(data);
                   if(data==1){
                     var myAuto5 = document.getElementById('myaudio5');
                     myAuto5.play(); 
                     // $(".tip").append('<audio id="myaudio" src="../addons/zh_dianc/template/images/wm.wav" controls="controls"  hidden="true" autoplay></audio>')
                    }else if(data==2){
                        var myAuto6 = document.getElementById('myaudio6');
                     myAuto6.play(); 
                    }else if(data==3){
                        var myAuto7 = document.getElementById('myaudio7');
                     myAuto7.play(); 
                    }
                },
                error:function (data) {
                    console.log(data)
                }

            })
          },10000);
})
    
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>

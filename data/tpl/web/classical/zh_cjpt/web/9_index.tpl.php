<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<style type="text/css">
  .flex_bet{
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .flex_around{
    display: flex;
    justify-content: space-around;
    align-items: center;
  }
  .order_box.col-md-12{
    padding: 0;
  }
  .order{
    background: #fff;
    border:1px solid #e4ebf1;
    width: 24%;
    padding: 15px;
  }
  .order p{
    margin-bottom: 0
  }
  .order span{
    padding: 0 5px;
    color: #fff;
    font-size: 15px;
    border-radius: 2px
  }
  .title{
    font-size:16px;
    line-height: 24px;
    margin:0 0 10px;
  }
  .green{
    background: #4b0
  }
  .orange{
    background: #f60
  }
  .blue{
    background: #35b8eb
  }
  .red{
    background: #f30
  }
  .order3 p,
  .order2 p{
    text-align: center;
    margin-bottom: 5px;
  }
  .order3 span,
  .order2 span{
    color: #35b8eb;
    display: block;
    text-align: center;
    font-size: 22px;
  }
  .order3{
    width: 32%;
  }
  .footer{
        background:none !important;
        color:#666;
        position: fixed;
        bottom: 0;
        /*z-index: -100;*/
        opacity: 1;
        width: 100%;
    }
</style>
<div class="main">
  <div class="panel panel-default ygdefault">
    <div class="panel-body">
      <h2 class="title">所有数据监控</h2>
      <div class="col-md-12 flex_bet order_box">
        <div class="order">
          <a href="" class="flex_bet">
            <p>待接单</p>
            <span class="green"><?php  echo $orders['djd'];?></span>
          </a>
        </div>
        <div class="order">
          <a href="" class="flex_bet">
            <p>已接单</p>
            <span class="orange"><?php  echo $orders['yjd'];?></span>
          </a>
        </div>
        <div class="order">
          <a href="" class="flex_bet">
            <p>配送中</p>
            <span class="blue"><?php  echo $orders['psz'];?></span>
          </a>
        </div>    
        <div class="order">
          <a href="" class="flex_bet">
            <p>已完成</p>
            <span class="orange"><?php  echo $orders['ywc'];?></span>
          </a>
        </div>
      </div>
    </div><!--panel-body-->
  </div><!--panel-->

  <div class="panel panel-default ygdefault">
    <div class="panel-body">
      <h2 class="title">今日数据监控</h2>
      <div class="col-md-12 flex_bet order_box">
        <div class="order2 order">
            <p>接单量</p>
            <span><?php  echo $jrorders['jdl'];?></span>
        </div>
        <div class="order2 order">
            <p>完成单量</p>
            <span><?php  echo $jrorders['ywcl'];?></span>
        </div>
        <div class="order2 order">
            <p>取消单量</p>
            <span><?php  echo $jrorders['qx'];?></span>
        </div>    
        <div class="order2 order">
            <p>待接单量</p>
            <span><?php  echo $jrorders['djdl'];?></span>
        </div>
      </div>
    </div><!--panel-body-->
  </div><!--panel-->
  <div class="panel panel-default ygdefault">
    <div class="panel-body">
      <h2 class="title">骑手情况</h2>
      <div class="col-md-12 flex_bet order_box">
        <div class="order3 order">
            <p>所有骑手</p>
            <span><?php  echo $qs['total'];?></span>
        </div>
        <div class="order3 order">
            <p>在岗骑手</p>
            <span><?php  echo $qs['zg'];?></span>
        </div>
        <div class="order3 order">
            <p>休息骑手</p>
            <span><?php  echo $qs['xx'];?></span>
        </div>    
      </div>
    </div><!--panel-body-->
  </div><!--panel-->
</div><!--main-->

<script type="text/javascript">
    $(function(){
        // $("#frame-0").addClass("in");
        $("#frame-0").show();
        $("#yframe-0").addClass("wyactive");
    })
   
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>
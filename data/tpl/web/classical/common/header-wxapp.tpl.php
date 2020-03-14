<?php defined('IN_IA') or exit('Access Denied');?><div class="menu-title"><i class="wi wi-small-routine"></i>小程序</div>
<div class="wxapp-info">
	<span class="nav-icon" data-container="body" data-toggle="tooltip" data-placement="right" title="<?php  echo $_W['account']['name'];?>">
		<img src="<?php  echo tomedia('headimg_'.$_W['account']['acid'].'.jpg')?>?time=<?php  echo time()?>" class="head-logo">
	</span>
	<div class="wxapp-name"><?php  echo $_W['account']['name'];?></div>
	<div class="wxapp-version">
		版本：<?php  echo $version_info['version'];?>
	</div>
</div>
<div class="wxapp-operate">
	<a href="<?php  echo url('wxapp/display/version_display')?>" class="h"><i class="wi wi-cut" data-toggle="tooltip" data-placement="bottom" title="切换版本"></i></a>
	<?php  if(in_array($_W['role'], array(ACCOUNT_MANAGE_NAME_OWNER, ACCOUNT_MANAGE_NAME_MANAGER)) || $_W['isfounder']) { ?>
	<a href="<?php  echo url('wxapp/manage/display', array('uniacid' => $_W['uniacid']))?>" class="h"><i class="wi wi-text" data-toggle="tooltip" data-placement="bottom" title="管理"></i></a>
	<?php  } ?>
	<a href="<?php  echo url('account/display', array('type' => 'all'))?>"><i class="wi wi-small-routine" data-toggle="tooltip" data-placement="bottom" title="切换平台"></i></a>
</div>
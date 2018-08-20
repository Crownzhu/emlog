<?php 
/**
 * 首页文章列表部分
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="mainbody">
<?php doAction('index_loglist_top'); ?>
<!--加载banner页面-->
<?php
 include View::getView('Interface/banner');
?>
<!--加载banner结束-->
  
<div class="blank"></div>
<div class="blogs">
	
<!--加载日志列表循环页面与侧边栏-->
<?php
 include View::getView('Interface/list');
?>
<?php
 include View::getView('Interface/side');
?>
<!--加载日志列表循环页面与侧边栏结束-->
  </div>
  </div>
<?php
 include View::getView('footer');
?>
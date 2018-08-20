<?php 
/*
* 自定义404页面
*/
if(!defined('EMLOG_ROOT')) {exit('error!');}
?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>错误提示-页面未找到...</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<style>
		body {width:600px;margin:0 auto;background:#fff;font-family: Verdana, Tahoma;}
		a {color:#CE4614;}
		.nav{text-align:center;}
	</style>
</head>
<body>
  <div id='msg-box'>
	<img src="<?php echo TEMPLATE_URL; ?>images/404.png"></img>
    <div class='nav'><a href="javascript:history.go(-1)">返回上页</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?php echo BLOG_URL; ?>">返回首页</a></div>
  </div>
</body>
</html>

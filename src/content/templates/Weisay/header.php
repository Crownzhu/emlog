<?php
/*
页面头部
Template Name:Weisay
Description:Weisay简洁，好看
Version:1.6
Author:射雕天龙
Author Url:http://www.wangyanxiang.com
Sidebar Amount:1
ForEmlog:5.1.2
*/
if(!defined('EMLOG_ROOT')) {exit('error!');}
require_once View::getView('module');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php echo $site_title; ?></title>
	<meta name="keywords" content="<?php echo $site_key; ?>" />
	<meta name="description" content="<?php echo $site_description; ?>" />
	<meta name="generator" content="emlog" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php echo BLOG_URL; ?>xmlrpc.php?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php echo BLOG_URL; ?>wlwmanifest.xml" />
	<link rel="alternate" type="application/rss+xml" title="RSS"  href="<?php echo BLOG_URL; ?>rss.php" />
	<link type="text/css" href="<?php echo TEMPLATE_URL; ?>main.css" rel="stylesheet" />
	<script src="<?php echo BLOG_URL; ?>include/lib/js/jquery/jquery-1.7.1.js" type="text/javascript"></script>
	<script src="<?php echo BLOG_URL; ?>include/lib/js/common_tpl.js" type="text/javascript"></script>
	<script src="<?php echo TEMPLATE_URL; ?>js/weisay.js" type="text/javascript"></script>
	<?php doAction('index_head'); ?>
</head>
<body>
<div id="page">
<div id="header">
<div id="top">
<div id="top_logo">
	<div id="blogname">
		<a href="<?php echo BLOG_URL; ?>"><?php echo $blogname; ?></a>
		<div id="blogtitle"><?php echo $bloginfo; ?></div>
	</div>
		<div class="search">		
			<form id="searchform" method="get" action="<?php echo BLOG_URL; ?>index.php">
				<input type="text" value="" name="keyword" id="s" size="30" />
				<button type="submit">搜索</button>
			</form>
		</div>
		<div class="clear"></div>
		<div class="topnav">
			<?php blog_navi();?>
		</div>
		<div id="rss"><ul>
			<li class="rssfeed"><a href="<?php echo BLOG_URL; ?>rss.php" target="_blank" class="icon1" title="欢迎订阅<?php echo $blogname; ?>"></a></li>
		</ul></div>
		<div class="clear"></div>
</div>
</div>

				
			
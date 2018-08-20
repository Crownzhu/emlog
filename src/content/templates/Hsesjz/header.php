<?php
/*
Template Name:黑色时间轴
Description:黑色时间轴个人博客模板颜色以黑色为主色，添加了彩色作为网页的一个亮点，导航高亮显示、banner图片鼠标划过，可以看到隐藏的文字。css3动画应用在banner和右边“我的名片”个人信息。重点在时间轴部分，三角形和圆形均是css代码写出来的，postion定位，增加页面返回到顶部的代码....
Version:3.0
Author:陈子文
Author Url:http://vps.lantk.com
Sidebar Amount:1
ForEmlog:5.1.2
*/
if(!defined('EMLOG_ROOT')) {exit('error!');}
require_once View::getView('module');
?>
<!doctype html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=10;IE=EDGE">	
<meta charset="gb2312">
<!--emlog模板固定格式开始-->
<title><?php echo $site_title; ?></title>
<meta name="keywords" content="<?php echo $site_key; ?>" />
<meta name="description" content="<?php echo $site_description; ?>" />
<meta name="generator" content="emlog" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php echo BLOG_URL; ?>xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php echo BLOG_URL; ?>wlwmanifest.xml" />
<link rel="alternate" type="application/rss+xml" title="RSS"  href="<?php echo BLOG_URL; ?>rss.php" />
<script src="<?php echo BLOG_URL; ?>include/lib/js/common_tpl.js" type="text/javascript"></script>
<!--emlog模板固定格式结束-->

<!--调用模板的CSS与JS开始-->
<link href="<?php echo TEMPLATE_URL; ?>css/styles.css" rel="stylesheet">
<link href="<?php echo TEMPLATE_URL; ?>css/animation.css" rel="stylesheet">
<!-- 返回顶部调用 begin -->
<link href="<?php echo TEMPLATE_URL; ?>css/lrtk.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo TEMPLATE_URL; ?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE_URL; ?>js/js.js"></script>
<link href="<?php echo TEMPLATE_URL; ?>css/view.css" rel="stylesheet">
<!-- 返回顶部调用 end-->
<!--调用模板的CSS结束-->
<!--[if lt IE 9]>
<script src="<?php echo TEMPLATE_URL; ?>js/modernizr.js"></script>
<![endif]-->
<?php doAction('index_head'); ?>
</head>
<body><!--body标签开始-->
<header>
  <nav id="nav">
<?php blog_navi();?>    
<script src="<?php echo TEMPLATE_URL; ?>js/silder.js"></script><!--获取当前页导航 高亮显示标题--> 
  </nav>
</header>
<!--header 结束-->

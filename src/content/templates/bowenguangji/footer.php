<?php 
/**
 * 页面底部信息  博闻广记古风主题免费版 qpjk.cc
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
</div><!--end #content-->
<div class="clear"></div>

<div id="footerbar" data-kui-anim="fadeInUp">
<div id="dibu">
	<a id="gotop" href="javascript:void(0);">返回顶部</a>|
	<a href="<?php echo BLOG_URL; ?>">首页</a>|
	<a href="<?php echo rand_log(); ?>">手气不错</a>|
<?php echo _g('dibu-zdy');?>
<a href="<?php echo BLOG_URL; ?>admin/" class="hint--left hint--error" data-hint="站长的后花园，闲人止步！ ^_^">后花园</a>


<p id="db_bqwz">
<span>
Copyright © <?php echo _g('dibu_tj');?> <a href="<?php echo BLOG_URL; ?>" class="db_emlog"><?php echo $blogname; ?></a>
</span>
<!-- 如需去掉版权，请联系作者http://qpjk.cc  QQ：1921257873 -->
<a href="http://www.miibeian.gov.cn" target="_blank">&nbsp;&nbsp;<?php echo $icp; ?></a>
<?php echo $footer_info; ?>
</p>


<?php doAction('index_footer'); ?>

<!-- 底部友情链接 -->
<?php if (_g('cbl_link') == "yes"): ?>
	<div id="link2"><?php index_link();?></div>
<?php endif; ?>


</div><!--end #dibu-->
</div><!--end #footerbar-->
</div><!--end #wrap-->


<!-- 返回顶部代码开始 -->
<div id="shangxia" class="animated bounceInUp">
	<div id="shang"></div>

	<?php if (blog_tool_ishome() || $tws || $tag || $record || $sortName) :?>
	<div id="comt">
	<a class="hint--left hint--bounce" data-hint="去留言" href="<?php echo _g('bowen_book');?>"><img src="<?php echo TEMPLATE_URL; ?>images/kongbai.png"></a>
	</div>
	<?php endif; ?>

	<?php if ($logid) :?>
	<div id="comt"></div>
	<?php endif; ?>

	<div id="xia"></div>
</div>
<!-- 返回顶部代码 结束 -->






<!-- 底部横幅代码开始 -->
<?php if (_g('dibuhf') == "yes"): ?>
	<div id="bottom_banner">
		<img src="<?php echo TEMPLATE_URL; ?>images/dibuhengfu.png">
	</div>
<?php endif; ?> 
<!-- 底部横幅代码结束 -->


<!-- js 请不要删除以下js，或者模板很多功能将失效。 -->
<script src="<?php echo TEMPLATE_URL; ?>jcss/bowen_qpjk.cc.min.js"></script>

<script src="http://cdn.bootcss.com/gsap/1.19.0/TweenMax.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo TEMPLATE_URL; ?>jcss/TweenMax.min.js">\x3C/script>')</script>
<script src="<?php echo TEMPLATE_URL; ?>jcss/ScrollToPlugin.min.js"></script>
<script>prettyPrint();</script>

</body>
</html>
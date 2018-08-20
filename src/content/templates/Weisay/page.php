<?php 
/*
* 自建页面模板
*/
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="roll"><div title="回到顶部" id="roll_top"></div><div title="查看评论" id="ct"></div><div title="转到底部" id="fall"></div></div>
<div id="content">
<div class="main">
<div class="left">
<div class="post_date"><span class="date_m"><?php echo date('n'); ?>月</span><span class="date_d"><?php echo date('j'); ?></span><span class="date_y"><?php echo date('Y'); ?></span></div>
<div class="article">
<h2 class="page_title"><?php echo $log_title; ?></h2>
        <div class="context"><?php echo $log_content; ?></div>
</div>
</div>

<div class="pinglun">
<?php if($allow_remark == 'y'): ?>
			<?php $comnum = ($comnum != 0) ? '目前有 '.$comnum.' 条留言' : '等您坐沙发呢！'; ?>
			<h3 id="comments" style="margin-bottom:10px"><?php echo $log_title; ?>：<?php echo $comnum; ?></h3>
			<?php blog_comments($comments,$params); ?>
			<?php blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark); ?>
			<?php endif; ?>
</div>

</div>
<div id="sidebar">
		<?php include View::getView('side');?>
	</div>
	<div class="clear"></div>
</div>
	<?php include View::getView('footer');?>

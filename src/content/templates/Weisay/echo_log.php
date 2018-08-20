<?php 
/*
* 阅读日志页面
*/
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="roll"><div title="回到顶部" id="roll_top"></div><div title="查看评论" id="ct"></div><div title="转到底部" id="fall"></div></div>
<div id="content">
	<div class="main">
		<div class="left">
			<div class="post_date"><span class="date_m"><?php echo gmdate('n', $date); ?>月</span><span class="date_d"><?php echo gmdate('j', $date); ?></span><span class="date_y"><?php echo gmdate('Y', $date); ?></span></div>
<div class="article">
<h2><?php topflg($top); ?><?php echo $log_title; ?></h2>
<div class="article_info">作者：<?php blog_author($author); ?> &nbsp; 发布：<?php echo gmdate('Y-n-j G:i l', $date); ?> &nbsp; 分类：<?php blog_sort($logid); ?> &nbsp; 阅读：<?php echo $views; ?>次 &nbsp; 评论：<a href="<?php echo $value['log_url']; ?>#comments"><?php echo $comnum; ?>条</a> &nbsp;<?php editflg($logid,$author); ?></div><div class="clear"></div>
        <div class="context"><div id="adsense1"></div><?php echo $log_content; ?><br/>
		<div id="share">
						<!-- Baidu Button BEGIN -->
						<div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare">
						<a class="bds_tsina"></a>
						<a class="bds_qzone"></a>
						<a class="bds_renren"></a>
						<a class="bds_t163"></a>
						<a class="bds_tqq"></a>
						<a class="bds_kaixin001"></a>
						<a class="bds_tieba"></a>
						<a class="bds_diandian"></a>
						<a class="bds_mail"></a>
						<a class="bds_bdhome"></a>
						<a class="bds_sqq"></a>
						<a class="bds_fx"></a>
						<a class="bds_ty"></a>
						<span class="bds_more"></span>
						<a class="shareCount"></a>
						</div>
						<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=3134744" ></script>
						<script type="text/javascript" id="bdshell_js"></script>
						<script type="text/javascript">
						document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
						</script>
						<!-- Baidu Button END -->
					</div><br/>
		<p><br/>本文固定链接: <a title="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>" href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>"><?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?></a></p></div>
        <div id="adsense2"></div>
</div>
</div>

<div class="articles">
<div class="author_pic">
					<a href="#" title="<?php echo $name; ?>"><img src=" http://www.gravatar.com/avatar/<?php global $CACHE;
	$user_cache = $CACHE->readCache('user'); echo md5($user_cache[$author]['mail']);  ?>" width="49px" height="48px" alt="blogger" /></a>
				</div>
<div class="author_text">
			<span class="spostinfo">
				该日志由 <?php blog_author($author); ?> 于<?php echo gmdate('Y-n-j G:i l', $date); ?>发表在 <?php blog_sort($logid); ?> 分类下。<br/>
				版权所有：《<a href="<?php echo BLOG_URL; ?>" title="<?php echo $blogname; ?>"><?php echo $blogname; ?></a>》 → 《<a title="<?php echo $log_title; ?>" href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>"><?php echo $log_title; ?></a>》；<br>
				除特别标注,本博客所有文章均为原创. 互联分享,尊重版权,转载请以链接形式标明本文地址；<br/>
				本文标签：<?php blog_tag($logid); ?>
			</span>
				</div><div class="clear"></div>
</div>
<?php doAction('log_related', $logData); ?>
<div class="articles">
<?php neighbor_log($neighborLog); ?>
</div>



<div class="articles">
<div class="remen">
						<div style="float:right; width:49%; word-break:keep-all;white-space:nowrap;overflow:hidden;text-overflow:ellipsis">
						<h3>热门文章</h3>
						<?php $date = time() - 3600 * 24 * 360;
							  $Log_Model = new Log_Model();
							  $viewslogs = $Log_Model->getLogsForHome("AND date > {$date} ORDER BY views DESC,date DESC", 1, 5);?>
						<ul>
						<?php foreach($viewslogs as $value): ?>
						<li><a href="<?php echo $value['log_url']; ?>" title="查看文章:<?php echo $value['log_title']; ?>"><?php echo $value['log_title']; ?></a></li>
						<?php endforeach; ?>
						</ul>
						</div>
						<div style="float:left; width:49%; word-break:keep-all;white-space:nowrap;overflow:hidden;text-overflow:ellipsis">
						<h3>相关文章</h3>
						<?php $Log_Model = new Log_Model();
							  $randlogs = $Log_Model->getLogsForHome("AND sortid = {$sortid} ORDER BY rand() DESC,date DESC", 1, 5);?>
						<ul>
						<?php foreach($randlogs as $value): ?>
						<li><a href="<?php echo $value['log_url']; ?>" title="查看文章:<?php echo $value['log_title']; ?>"><?php echo $value['log_title']; ?></a></li>
						<?php endforeach; ?>
						</ul>
						</div>
					</div>
</div><div class="clear"></div>


<div class="articles">
<div class="">
						<?php blog_comments($comments,$params); ?>
						<?php blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark); ?>
					</div>
</div>

</div>
	﻿<div id="sidebar">
		<?php include View::getView('side');?>
	</div>
	<div class="clear"></div>
</div>
	<?php include View::getView('footer');?>
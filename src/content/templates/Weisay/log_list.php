<?php
/*
功能：显示日志列表内容
Template Name:Weisay
Description:Weisay简洁，好看
Version:1.0
Author:射雕天龙
Author Url:http://www.shediaotianlong.cn
Sidebar Amount:1
ForEmlog:5.1.2
*/
if(!defined('EMLOG_ROOT')) {exit('error!');}
?>
<!--当前位置开始-->
<div id="roll"><div title="回到顶部" id="roll_top"></div><div title="转到底部" id="fall"></div></div>
<div id="content">
<div class="main">

<div id="map">
	<div class="position">
		您的位置：<?php if($pageurl == Url::logPage()){ ?>
        <a title="返回首页" href="<?php echo BLOG_URL; ?>">首页</a>
		<?php }elseif ($params[1]=='sort'){ ?>
		<a title="返回首页" href="<?php echo BLOG_URL; ?>">首页</a> <em>></em> <?php echo '<a href="'.Url::sort($sortid).'">'.$sortName.'</a>';?>
        <?php }elseif ($params[1]=='tag'){ ?>
		<a title="返回首页" href="<?php echo BLOG_URL; ?>">首页</a> <em>></em> 标签 <?php echo htmlspecialchars(urldecode($params[2]));?> 的所有文章
        <?php }elseif($params[1]=='author'){ ?>
		<a title="返回首页" href="<?php echo BLOG_URL; ?>">首页</a> <em>></em> 作者 <?php echo blog_author($author);?> 的所有文章
        <?php }elseif($params[1]=='keyword'){ ?>
		<a title="返回首页" href="<?php echo BLOG_URL; ?>">首页</a> <em>></em> 关键词 <?php echo htmlspecialchars(urldecode($params[2]));?> 的搜索结果
        <?php }elseif($params[1]=='record'){ ?>
		<a title="返回首页" href="<?php echo BLOG_URL; ?>">首页</a> <em>></em> 发表在 <?php echo substr($params[2],0,4).'年'.substr($params[2],4,2).'月';?><?php if(strlen($params[2])=="8"){echo substr($params[2],6,2).'日';}?> 的所有文章
        <?php }?>
	</div>
</div>


<?php doAction('index_loglist_top'); ?>
<?php foreach($logs as $value): ?>
<ul class="post-40 post type-post status-publish format-standard hentry" id="post-40">
<div class="post_date"><span class="date_m"><?php echo gmdate('n', $value['date']);?>月</span><span class="date_d"><?php echo gmdate('j', $value['date']); ?></span><span class="date_y"><?php echo gmdate('Y', $value['date']); ?></span></div>
<div class="article">
<h2><?php topflg($value['top']); ?><a href="<?php echo $value['log_url']; ?>" rel="bookmark" title="详细阅读 <?php echo $value['log_title']; ?>"><?php echo $value['log_title']; ?></a></h2>
<div class="thumbnail_box">
	<div class="thumbnail">
	<?php 
		preg_match_all("|<img[^>]+src=\"([^>\"]+)\"?[^>]*>|is", $value['content'], $img);
		$rand_img = TEMPLATE_URL.'images/random/tb'.rand(1,20).'.jpg';
		$imgsrc = !empty($img[1]) ? $img[1][0] : $rand_img;
	?>
		<a href="<?php echo $value['log_url']; ?>" rel="bookmark" title="<?php echo $value['log_title']; ?>"><img width="140px" height="100px" src="<?php echo $imgsrc; ?>" alt="<?php echo $value['log_title']; ?>" title="<?php echo $value['log_title']; ?>" /></a>
	</div></div>
<div class="entry_post"><?php echo subString(strip_tags($value['content']),0,170,"..."); ?><span class="more"><a href="<?php echo $value['log_url']; ?>" title="详细阅读 <?php echo $value['log_title']; ?>" rel="bookmark">阅读全文</a></span></div>
<div class="clear"></div>
<div class="info">作者：<?php blog_author($value['author']); ?> | 分类：<?php blog_sort($value['logid']); ?> | 阅读：<?php echo $value['views']; ?> 次 | <?php blog_tag($value['logid']); ?></div><div class="comments_num">评论：<?php echo $value['comnum']; ?>条</div>
</div></ul><div class="clear"></div>
<?php endforeach; ?>
<div class="navigation"><div class="pagination"><?php echo $page_url;?></div></div>
</div>
	<div id="sidebar">
		<?php include View::getView('side');?>
	</div>
</div>
<?php include View::getView('footer');?>
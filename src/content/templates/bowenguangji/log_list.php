<?php 
/**
 * 站点首页模板   清萍工作室制作  www.qpjk.cc
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="content">
<div id="contentleft">
<?php doAction('index_loglist_top'); ?>

<?php 
if (!empty($logs)):
foreach($logs as $value): 
?>

<div id="bowen_list" data-kui-anim="fadeInUp">
	<h2 class="loading">	
		<!-- 说明：判断时间 -->
<?php 
$t=time() - 1*24*60*60;
$log_t=gmdate('Y-m-d',$value['date']);
$diy_t=date("Y-m-d",$t);
if($log_t > $diy_t) echo '<img src="'.TEMPLATE_URL.'images/new.gif" alt="最新文章">';
?>
<!-- 说明：判断浏览量 -->
<?php 
if ($value['views'] >= 500) echo '<img src="'.TEMPLATE_URL.'images/hot.gif" alt="热门文章">';
?>		
<!-- 判断代码完 -->
	<?php topflg($value['top'], $value['sortop'], isset($sortid)?$sortid:''); ?><a href="<?php echo $value['log_url']; ?>"><?php echo $value['log_title']; ?></a>
	</h2>


	<div class="date1">

	<li><span class="ptime"></span>时间：<?php echo gmdate('Y-n-j', $value['date']); ?></li>
	<li class="date_zuozhe"><span class="pauthor"></span>作者：<?php blog_author($value['author']); ?></li>
	<li class="date_fl"><span class="pcata"></span>分类：<?php blog_sort($value['logid']); ?></li>
	<li><span class="pview"></span>浏览：<a href="<?php echo $value['log_url']; ?>"><?php echo $value['views']; ?></a></li>

<?php if (_g('sy_pinglun') == "yes"): ?>

<li><span class="plun"></span><a href="<?php echo $value['log_url']; ?>#comments">评论：<?php echo $value['comnum']; ?></a></li>

<?php else: ?>

<li><span class="plun"></span><a href="<?php echo $value['log_url']; ?>#comments"><span class="ds-thread-count" data-thread-key="<?php echo $value['logid']; ?>" data-count-type="comments"></span></a></li>

<?php endif; ?>

	<?php editflg($value['logid'],$value['author']); ?>
	<!-- 当管理员或作者登陆时显示“编辑”链接 -->

	</div><!-- end .date1 -->

	
	<?php echo $value['log_description']; ?>   <!-- 输出日志摘要（没有摘要则输出全文 -->
	<div style="clear:both;"></div>
	<div class="r">
	<a href="<?php echo $value['log_url']; ?>">
	<img src="<?php echo TEMPLATE_URL; ?>images/ydqw1.gif" onmouseover="this.src='<?php echo TEMPLATE_URL; ?>images/ydqw2.gif'" onmouseout="this.src='<?php echo TEMPLATE_URL; ?>images/ydqw1.gif'" alt="继续阅读全文。"></a>
	</div>
	<div class="clear"></div>
	<div class="line"></div>
</div> <!-- end #bowen_list -->

<?php 
endforeach;
else:
?>
<style>
#contentleft {width: 95%; float: none; }
#sidebar{display:none;}
</style>
<div class="weizhaodao">
	<h2>未找到</h2>
	<p>抱歉，没有符合您查询条件的结果。</p>
</div>
<?php endif;?>

<div id="pagenavi" data-kui-anim="fadeInUp">
	<?php echo $page_url;?>
</div>

</div><!-- end #contentleft-->
<?php
 include View::getView('side');
 include View::getView('footer');
?>
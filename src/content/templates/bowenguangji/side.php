<?php 
/**
 * 侧边栏
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="sidebar">
<?php if (_g('music-kh') == "yes"): ?>
<div id="music" data-kui-anim="fadeInUp">
	<div id="music_biaoti">
		<span><?php echo _g('music-bt');?></span>
	</div>
	<div id="music_bfq"><?php echo _g('music');?></div>
</div>
<?php endif; ?>


<?php 
$widgets = !empty($options_cache['widgets1']) ? unserialize($options_cache['widgets1']) : array();
doAction('diff_side');
foreach ($widgets as $val)
{
	$widget_title = @unserialize($options_cache['widget_title']);
	$custom_widget = @unserialize($options_cache['custom_widget']);
	if(strpos($val, 'custom_wg_') === 0)
	{
		$callback = 'widget_custom_text';
		if(function_exists($callback))
		{
			call_user_func($callback, htmlspecialchars($custom_widget[$val]['title']), $custom_widget[$val]['content']);
		}
	}else{
		$callback = 'widget_'.$val;
		if(function_exists($callback))
		{
			preg_match("/^.*\s\((.*)\)/", $widget_title[$val], $matchs);
			$wgTitle = isset($matchs[1]) ? $matchs[1] : $widget_title[$val];
			call_user_func($callback, htmlspecialchars($wgTitle));
		}
	}
}
?>

<?php if (_g('tongji-kh') == "yes"): ?>
<?php if("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] == BLOG_URL):?>
<div id="tongji" data-kui-anim="fadeInUp">
<div id="tongji_biaoti"><span>网站统计</span></div>
<div id="tongjibiankuang">
<div class="neirong">
<li>建站日期：<?php echo _g('tjrq');?></li>
 <?php ja_sta(); ?>
<?php
$Log_Model = new Log_Model();
$today = strtotime(date('Y-m-d'));
$threeday = strtotime(date('Y-m-d',strtotime('-3 day')));
$tenday = strtotime(date('Y-m-d',strtotime('-10 day')));
$today_sql = "and date>$today";
$today_num = $Log_Model->getLogNum('n', $today_sql);
$threeday_sql = "and date>$threeday";
$threeday_num = $Log_Model->getLogNum('n', $threeday_sql);
$tenday_sql = "and date>$tenday";
$tenday_num = $Log_Model->getLogNum('n', $tenday_sql);
if($tenday_num=='0'){echo '<li>站长好勤快！长达<span id="hongsezi" class="shake shake-little shake-constant"><b>10</b></span>天未更新内容了</li>';}
elseif($threeday_num=='0'){echo '<li>站长很牛逼！连续<span id="hongsezi" class="shake shake-little shake-constant"><b>3</b></span>天没打理网站了</li>';}
elseif($today_num=='0'){echo '<li>今日站长很懒，<span id="hongsezi" class="shake shake-little shake-constant"><b>1</b></span>篇文章都没更新</li>';}
else{echo '<li>站长今日很勤快，更新了<span id="hongsezi" class="shake shake-little shake-constant"><b>'.$today_num.'</b></span>篇文章</li>';}
?>
<li>最后更新时间：<span id="gxsj"><?php echo last_post_log();?></span></li>
</div>
</div>
</div>
<?php endif;?>
<?php else: ?><?php endif; ?>


<?php if (_g('ad-kh') == "yes"): ?>
<!-- 广告 -->
<div id="cbl_gg" data-kui-anim="fadeInUp">
	<div class="gg_nr">
		<?php echo _g('cbl_adgg');?>
	</div>
</div>
<?php endif; ?>


</div><!--end #siderbar-->
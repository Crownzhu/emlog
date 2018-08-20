<?php 
/**
 * 阅读文章页面 博闻广记 www.qpjk.cc
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="content">
<div id="contentleft">

<!-- 显示置顶标记,日志标题 -->
<div class="biaoti" id="masked"><?php topflg($top); ?><?php echo $log_title; ?></div>
<!-- 标题下文章信息 -->


	<div class="date2">

	<li class="date2_home"><span class="home"></span><a href="/" title="返回网站首页">首页</a> <b>></b>
    <?php 
     //父分类和子分类
     $ery = mysql_query("SELECT * FROM ".DB_PREFIX."sort WHERE sid ='$sortid'"); $rest = mysql_fetch_array($ery); if($rest['pid'] == "0"){
   echo '<a href="'.Url::sort($rest['sid']).'">'.$rest['sortname'].'</a>'; 
  }else{
  $ery1 = mysql_query("SELECT * FROM ".DB_PREFIX."sort WHERE sid ='".$rest['pid']."'"); $rest1 = mysql_fetch_array($ery1); echo '<a href="'.Url::sort($rest1['sid']).'">'.$rest1['sortname'].'</a>'; echo ' <b>></b> <a href="'.Url::sort($rest['sid']).'">'.$rest['sortname'].'</a>';}
    ?>
	</li>

	<li class="date2_zz"><span class="pauthor"></span>作者：<?php blog_author($author); ?></li>

	<li><span class="ptime"></span> <?php $weekarray=array("日","一","二","三","四","五","六"); 
echo gmdate('Y年n月j日 G:i', $date);echo " 星期".$weekarray[gmdate('w', $date)];?></li>

	<li><span class="pview"></span>浏览：<?php echo $views; ?></li>

	<li class="date2_ziti"><span class="zihao"></span>字号：
	<a href="javascript:doZoom(16)" class="hint--top  hint--success" data-hint="16号字体">小</a>
    <a href="javascript:doZoom(18)" class="hint--top  hint--info" data-hint="18号字体">中</a>
    <a href="javascript:doZoom(20)" class="hint--top  hint--error" data-hint="20号字体">大</a>
    </li>


<?php if (_g('rz_pinglun') == "yes"): ?>
<li>
	<span class="plun"></span><a id="rz_pl" href="javascript:void(0);" class="hint--top  hint--error" data-hint="去评论">评论：<?php echo $comnum; ?></a>
</li>
<?php else: ?>
<li><span class="plun"></span>评论：<a href="<?php echo $value['log_url']; ?>#comments"><span class="ds-thread-count" data-thread-key="<?php echo $logid; ?>"></span></a></li>
<?php endif; ?>

	<?php editflg($logid,$author); ?>

	</div>
	

	<div class="xiantiao">
		<img src="<?php echo TEMPLATE_URL; ?>images/xiantiao1.png">
	</div>
	
	<?php if (_g('ad_2') == "yes"): ?>
	<!-- 日志页广告 -->
	<div id="ad_2" class="animated flipInX">
		<?php echo _g('ad2_dm');?>
		<div class="clear"></div>
	</div>
	<?php endif; ?>

	<!--  改变正文字号代码  -->
<script type="text/javascript">function doZoom(size){document.getElementById('zhengwen').style.fontSize=size+'px'}</script>
    <!-- 改变字号代码结束 -->
	
	<!-- 日志全文内容 -->
	<div id="zhengwen">
		<?php echo $log_content; ?>
		<div class="clear"></div>
	</div>
	
	<!-- 统计访客停留时间 -->
	<div id="tingliu">
		<span class="tingliu2 hint--top hint--bounce" data-hint="发表评论">
			<a href="javascript:void(0);"><img src="<?php echo TEMPLATE_URL; ?>images/tishi.gif" class="tingliu5"></a>
		</span> &nbsp;
		<span class="tingliu2">您阅读这篇文章共花了：</span>
		&nbsp;<span class="tingliu3" id="stime"></span>
	</div>

<script>
var ss=0,mm=0,hh=0;function TimeGo(){ss++;if(ss>=60){mm+=1;ss=0}if(mm>=60){hh+=1;mm=0}ss_str=(ss<10?"0"+ss:ss);mm_str=(mm<10?"0"+mm:mm);tMsg=""+hh+"小时"+mm_str+"分"+ss_str+"秒";document.getElementById("stime").innerHTML=tMsg;setTimeout("TimeGo()",1000)}TimeGo();
</script>
	
<!-- 分享 -->
<?php if(em_is_mobile()):?>

<div class="jiathis_style_24x24 fenxiang_sj">
	<a class="jiathis_button_weixin"></a>
	<a class="jiathis_button_qzone"></a>
	<a class="jiathis_button_tsina"></a>
	<a class="jiathis_button_tqq"></a>
	<a class="jiathis_button_tieba"></a>
	<a class="jiathis_button_cqq"></a>
	<a class="jiathis_button_douban"></a>
	<a href="http://www.jiathis.com/share?uid=1792395" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
	<a class="jiathis_counter_style"></a>
</div>
<script type="text/javascript">
var jiathis_config = {data_track_clickback:'true'};
</script>
<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=1367996005907460" charset="utf-8"></script>

<?php else:?>

<div class="jiathis_style_24x24 fenxiang"><a class="jiathis_button_weixin"></a><a class="jiathis_button_cqq"></a><a class="jiathis_button_qzone"></a><a class="jiathis_button_tsina"></a><a class="jiathis_button_tqq"></a><a class="jiathis_button_renren"></a><a class="jiathis_button_hi"></a><a class="jiathis_button_tieba"></a><a class="jiathis_button_tsohu"></a><a class="jiathis_button_t163"></a><a class="jiathis_button_douban"></a><a class="jiathis_button_tianya"></a><a class="jiathis_button_xiaoyou"></a><a class="jiathis_button_qq"></a><a class="jiathis_button_i139"></a><a class="jiathis_button_copy"></a><a class="jiathis_button_email"></a><a class="jiathis_button_ishare"></a><a href="http://www.jiathis.com/share?uid=1792395"class="jiathis jiathis_txt jtico jtico_jiathis"target="_blank"></a><a class="jiathis_counter_style"></a></div>
<script>var jiathis_config = {data_track_clickback:'true'};</script>
<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=1367996005907460" charset="utf-8"></script>

<?php endif;?>

	<!-- 结束分割线 -->
	<div class="jieshu"><img src="<?php echo TEMPLATE_URL; ?>images/jieshu.png"></div>
	<div class="jieshu2"><img src="<?php echo TEMPLATE_URL; ?>images/jieshu3.gif"></div>
	
	<!-- 上一篇及下一篇 -->
	<div id="shangxiapian_2"><?php neighbor_log2($neighborLog); ?><div id="gaodu1"></div></div>
	<div id="shangxiapian"><?php neighbor_log($neighborLog); ?><div id="gaodu1"></div></div> 
	

	<!-- 日志标签 -->
	<div id="tag"><?php blog_tag($logid); ?></div>

	<!-- 感兴趣文章 -->
	<?php if (_g('xgrz-kh') == "yes"): ?>
   <div class="gxq"><div class="bti"><img src="<?php echo TEMPLATE_URL; ?>images/xiangguan.png">&nbsp;<span class="chaffle" data-lang="zh">相关文章</span></div>
    <?php $Log_Model = new Log_Model();
          $randlogs = $Log_Model->getLogsForHome("AND sortid = {$sortid} ORDER BY rand() DESC,date DESC", 1, 10);?>
        <ul>
        <?php foreach($randlogs as $value): ?>
            <li>
            <a href="<?php echo $value['log_url']; ?>" title="查看文章:<?php echo $value['log_title']; ?>" class="shake shake-little"><?php echo $value['log_title']; ?></a>
            </li>
        <?php endforeach; ?>
        </ul>
    <div id="gaodu1"></div></div>
     <?php else: ?><?php endif; ?>
     <!-- 感兴趣文章代码结束 -->






<?php if (_g('banquan-kh') == "yes"): ?>
	<div id="banquan">
	<!-- 二维码地址生成 -->
	<div class="tupian hint--right hint--rounded" data-hint="这篇文章太棒了，我要分享给我的小伙伴们！
	1、用手机扫二维码。2、点右上角分享到朋友圈。">
	<img src="http://qr.liantu.com/api.php?&bg=ffffff&w=100&m=6&fg=000000&text=<?php $url_this =  "http://".$_SERVER ['HTTP_HOST'].$_SERVER['REQUEST_URI'];echo $url_this; ?>" alt="二维码加载中..."></div>

<div class="xinxi">
<span class="zuozhe">本文作者：</span><?php blog_author($author); ?> &nbsp;&nbsp;&nbsp;&nbsp;
<span class="biaoti2">文章标题：</span> <a href="<?php echo Url::log($logid); ?>"><?php echo $log_title; ?></a><br>
<span class="blog_url">本文地址：</span><a href="<?php echo Url::log($logid); ?>"><?php echo Url::log($logid); ?></a><br>
<b>版权声明：</b>若无注明，本文皆为“<span class="blog_name"><?php echo $blogname; ?></span>”原创，转载请保留文章出处。
	</div>
		<div class="clear"></div>
	</div>
<?php endif; ?>

	<?php doAction('log_related', $logData); ?> <!-- 相关日志的挂载点 -->

	<?php blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark); ?>
	<!-- 输出发表评论框 -->
	<?php blog_comments($comments); ?><!-- 输出该日志评论列表 -->
	<div class="clear"></div>
</div><!--end #contentleft-->


<?php
 include View::getView('side');
 include View::getView('footer');
?>
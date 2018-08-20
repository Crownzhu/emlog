<?php 
/**
 * 侧边栏组件、页面模块
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
if (!function_exists('_g')) {emMsg('<div style="color: #BA3C2E; height:50px; line-height:40px; text-align: center; font-size:20px; font-family:\5FAE\8F6F\96C5\9ED1,\5b8b\4f53;"><strong>欢迎你使用古风模板<span style="color: #EB4640;">【博闻广记免费版】</span></strong></div><div style="line-height: 2; font-size: 16px; color: #EB4640; font-family:\5FAE\8F6F\96C5\9ED1,\5b8b\4f53;"><strong>你现在无法正常使用本模板的原因：</strong><br><span style="color: #7F6856;">1、你还未安装【模板设置插件】，<a href="http://www.emlog.net/plugin/144" target="_blank">点击此处下载安装↓</a>，或登陆“后台”，進入“<strong>应用</strong>”，点“<strong>插件</strong>”找到“模板设置插件”并在线安装。</span><br><span style="color: #513529;">2、你还<strong>未启用</strong>模板设置插件，请在“<strong>后台</strong>”点“<strong>插件</strong>”，在<strong>“插件管理”</strong>中启用“<strong>模板设置插件</strong>”。</span><br><br><span style="font-size: 14px;color: #2F2114;">注：本主题由清萍剑客负责维护，如有疑问请阅读【<a href="http://www.xunzhenji.com/post-114.html" target="_blank">模板使用说明</a>】视频教程。联系QQ：1921257873</span></div>
', BLOG_URL . 'admin/plugin.php');}?>
<?php
//widget：blogger 分类
function widget_blogger($title){
	global $CACHE;
	$user_cache = $CACHE->readCache('user');
	$name = $user_cache[1]['mail'] != '' ? "<a href=\"mailto:".$user_cache[1]['mail']."\">".$user_cache[1]['name']."</a>" : $user_cache[1]['name'];?>
	<div id="zhanzhang" data-kui-anim="fadeInUp">
	<div id="zhanzhang_biaoti"><span><?php echo $title; ?></span></div>
	<div id="zhanzhang_biankuang">
	<div id="zhanzhang_img">
	<?php if (!empty($user_cache[1]['photo']['src'])): ?>
	<img src="<?php echo BLOG_URL.$user_cache[1]['photo']['src']; ?>" width="<?php echo $user_cache[1]['photo']['width']; ?>" height="<?php echo $user_cache[1]['photo']['height']; ?>" alt="blogger" />
	<?php endif;?>
	</div>
	<div id="zhanzhang_wenzi"><b>站长：</b><?php echo $name; ?><br>
    <b>签名：</b><?php echo $user_cache[1]['des']; ?></div>
	<div id="gaodu1"></div></div></div>
<?php }?>
<?php
//widget：日历
function widget_calendar($title){ 
    if (!blog_tool_ishome()) return;
    ?>
    <div id="rili" data-kui-anim="fadeInUp">
	<div id="rili_biaoti"><span><?php echo $title; ?></span></div>
	<div id="rili_biankuang">
	<div id="calendar">
	</div></div></div>
	<script>sendinfo('<?php echo Calendar::url(); ?>','calendar');</script>
<?php }?>


<?php
//widget：分类
function widget_sort($title){
	global $CACHE;
	$sort_cache = $CACHE->readCache('sort'); ?>
	<div id="fenlei" data-kui-anim="fadeInUp">
	<div id="fenlei_biaoti"><span><?php echo $title; ?></span></div>
	<div id="fenlei_biankuang">
	<ul id="blogsort">
	<?php
	foreach($sort_cache as $value):
		if ($value['pid'] != 0) continue;
	?>
	<li>
	<a href="<?php echo Url::sort($value['sid']); ?>"><?php echo $value['sortname']; ?> (<?php echo $value['lognum'] ?>)</a>
	<?php if (!empty($value['children'])): ?>
		<ul>
		<?php
		$children = $value['children'];
		foreach ($children as $key):
			$value = $sort_cache[$key];
		?>
		<li>
			<a href="<?php echo Url::sort($value['sid']); ?>"><?php echo $value['sortname']; ?> (<?php echo $value['lognum'] ?>)</a>
		</li>
		<?php endforeach; ?>
		</ul>
    </li>
	<?php endif; ?>
	<?php endforeach; ?>
	</ul></div></div>
<?php }?>


<?php
//widget：最新微语
function widget_twitter($title){
	global $CACHE; 
	$newtws_cache = $CACHE->readCache('newtw');
	$istwitter = Option::get('istwitter');
	?>
	<div id="weiyu" data-kui-anim="fadeInUp">
	<div id="weiyu_biaoti"><span><?php echo $title; ?></span></div>
	<div id="weiyu_biankuang">
	<ul id="twitter">
	<?php foreach($newtws_cache as $value): ?>
	<?php $img = empty($value['img']) ? "" : '<a title="查看图片" class="t_img" href="'.BLOG_URL.str_replace('thum-', '', $value['img']).'" target="_blank">&nbsp;</a>';?>
	<li><?php echo $value['t']; ?><?php echo $img;?><p><?php echo smartDate($value['date']); ?></p></li>
	<?php endforeach; ?>
    <?php if ($istwitter == 'y') :?>
	<p><a href="<?php echo BLOG_URL . 't/'; ?>">更多&raquo;</a></p>
	<?php endif;?>
	</ul></div></div>
<?php }?>
<?php
//widget：最新评论
function widget_newcomm($title){
	global $CACHE; 
	$com_cache = $CACHE->readCache('comment');
	?>
	<div id="pinglun" data-kui-anim="fadeInUp">
	<div id="pinglun_biaoti"><span><?php echo $title; ?></span></div>
	<div id="pinglun_wenzi">
	<ul id="newcomment">
	<?php
	foreach($com_cache as $value):
	$url = Url::comment($value['gid'], $value['page'], $value['cid']);
	?>
	<li id="comment">
<script>
var str=new Array("<?php echo TEMPLATE_URL; ?>images/user1.png","<?php echo TEMPLATE_URL; ?>images/user2.png","<?php echo TEMPLATE_URL; ?>images/user3.png","<?php echo TEMPLATE_URL; ?>images/user4.png","<?php echo TEMPLATE_URL; ?>images/user5.png","<?php echo TEMPLATE_URL; ?>images/user6.png","<?php echo TEMPLATE_URL; ?>images/user7.png","<?php echo TEMPLATE_URL; ?>images/user8.png","<?php echo TEMPLATE_URL; ?>images/user9.png");
var a;
a=str[parseInt(Math.random()*(str.length))];
document.write("<img src="+a+">");
</script>
	<span id="mzi"><?php echo $value['name']; ?></span> 说：<a title="<?php echo $value['content']; ?>" href="<?php echo $url; ?>"><?php echo $value['content']; ?></a></li>
	<?php endforeach; ?>
	</ul></div></div>
<?php }?>
<?php
//widget：最新文章
function widget_newlog($title){
	global $CACHE; 
	$newLogs_cache = $CACHE->readCache('newlog');
	?>
	<div id="zuixinwenzhang" data-kui-anim="fadeInUp">
	<div id="zuixin_biaoti"><span><?php echo $title; ?></span></div>
	<div id="zuixin_biankuang"><div class="wenzhang">
	<ul>
	<?php foreach($newLogs_cache as $value): ?>
	<li><a href="<?php echo Url::log($value['gid']); ?>"><?php echo subString(strip_tags($value['title']),0,16); ?></a></li>
	<?php endforeach; ?>
	</ul>
	</div></div></div>
<?php }?>
<?php
//widget：热门文章
function widget_hotlog($title){
	$index_hotlognum = Option::get('index_hotlognum');
	$Log_Model = new Log_Model();
	$randLogs = $Log_Model->getHotLog($index_hotlognum);?>
	<div id="remenwenzhang" data-kui-anim="fadeInUp">
	<div id="remen_biaoti"><span><?php echo $title; ?></span></div>
	<div id="remen_biankuang"><div class="wenzhang">
	<ul>
	<?php foreach($randLogs as $value): ?>
	<li><a href="<?php echo Url::log($value['gid']); ?>"><?php echo subString(strip_tags($value['title']),0,16); ?></a></li>
	<?php endforeach; ?>
	</ul>
	</div></div></div>
<?php }?>
<?php
//widget：随机文章
function widget_random_log($title){
	$index_randlognum = Option::get('index_randlognum');
	$Log_Model = new Log_Model();
	$randLogs = $Log_Model->getRandLog($index_randlognum);?>
	<div id="suijiwenzhang" data-kui-anim="fadeInUp">
	<div id="suiji_biaoti"><span><?php echo $title; ?></span></div>
	<div id="suiji_biankuang"><div class="wenzhang">
	<ul>
	<?php foreach($randLogs as $value): ?>
	<li><a href="<?php echo Url::log($value['gid']); ?>"><?php echo subString(strip_tags($value['title']),0,16); ?></a></li>
	<?php endforeach; ?>
	</ul>
	</div></div></div>
<?php }?>
<?php
//widget：搜索
function widget_search($title){ ?>
	<div id="sousuo" data-kui-anim="fadeInUp">
	<ul id="logsearch">
	<form name="keyform" method="get" action="<?php echo BLOG_URL; ?>index.php">
	<input name="keyword" class="search" type="text"  placeholder="请输入搜索关键字">
    <input type="submit" name="submit" value="搜索" class="submit button">
	</form>
	</ul>
	</div>
<?php } ?>
<?php
//widget：归档
function widget_archive($title){
	global $CACHE; 
	$record_cache = $CACHE->readCache('record');
	?>
	<div id="cundang" data-kui-anim="fadeInUp">
	<div id="cundang_biaoti"><span><?php echo $title; ?></span></div>
	<div id="cundang_biankuang">
	<ul id="record">
	<?php foreach($record_cache as $value): ?>
	<li><a href="<?php echo Url::record($value['date']); ?>"><?php echo $value['record']; ?>(<?php echo $value['lognum']; ?>)</a></li>
	<?php endforeach; ?>
	</ul><div id="gaodu1"></div></div></div>
<?php } ?>
<?php
//widget：自定义组件
function widget_custom_text($title, $content){ ?>
	<div id="zidingyi" data-kui-anim="fadeInUp">
	<div id="zidingyi_biaoti"><span><?php echo $title; ?></span></div>
	<ul>
	<?php echo $content; ?>
	</ul>
	</div>
<?php } ?>

<?php
//blog：导航
function blog_navi(){
	global $CACHE; 
	$navi_cache = $CACHE->readCache('navi');
	?>
	<ul class="bar">
	<?php
	foreach($navi_cache as $value):

        if ($value['pid'] != 0) {
            continue;
        }

		if($value['url'] == ROLE_ADMIN && (ROLE == ROLE_ADMIN || ROLE == ROLE_WRITER)):
			?>	
            <li class="item common"><a href="<?php echo BLOG_URL; ?>admin/">管理站点</a></li>
			<li class="item common"><a href="<?php echo BLOG_URL; ?>admin/?action=logout">退出</a></li>
			<?php 
			continue;
		endif;
		$newtab = $value['newtab'] == 'y' ? 'target="_blank"' : '';
        $value['url'] = $value['isdefault'] == 'y' ? BLOG_URL . $value['url'] : trim($value['url'], '/');
        $current_tab = BLOG_URL . trim(Dispatcher::setPath(), '/') == $value['url'] ? 'current' : 'common';
		?>
		
		<li class="item <?php echo $current_tab;?>">
			<a href="<?php echo $value['url']; ?>" <?php echo $newtab;?> class="chaffle" data-lang="zh"><?php echo $value['naviname']; ?></a>
			<?php if (!empty($value['children'])) :?>
            <ul class="sub-nav animated flipInY">
                <?php foreach ($value['children'] as $row){
                        echo '<li><a href="'.Url::sort($row['sid']).'" class="chaffle" data-lang="zh">'.$row['sortname'].'</a></li>';
                }?>
			</ul>
            <?php endif;?>

            <?php if (!empty($value['childnavi'])) :?>
            <ul class="sub-nav animated flipInY">
                <?php foreach ($value['childnavi'] as $row){
                        $newtab = $row['newtab'] == 'y' ? 'target="_blank"' : '';
                        echo '<li><a class="chaffle" data-lang="zh" href="' . $row['url'] . "\" $newtab >" . $row['naviname'].'</a></li>';
                }?>
			</ul>
			
            <?php endif;?>

		</li>
	<?php endforeach; ?>
		<?php if (_g('nav_shouqi') == "yes"): ?>
		<li class="item common">
			<a href="<?php echo rand_log(); ?>" class="shake shake-little hint--top hint--error" data-hint="今日手气好，没事乱翻书。">手气不错</a>
		</li>
		<?php endif; ?>
	</ul>
<?php }?>


<?php
//blog：手机端导航
function blog_navi_sj(){
	global $CACHE; 
	$navi_cache = $CACHE->readCache('navi');
	?>
	<ul class="bar">
	<?php
	foreach($navi_cache as $value):

        if ($value['pid'] != 0) {
            continue;
        }

		if($value['url'] == ROLE_ADMIN && (ROLE == ROLE_ADMIN || ROLE == ROLE_WRITER)):
			?>	
            <li class="item common"><a href="<?php echo BLOG_URL; ?>admin/">管理站点</a></li>
			<li class="item common"><a href="<?php echo BLOG_URL; ?>admin/?action=logout">退出</a></li>
			<?php 
			continue;
		endif;
		$newtab = $value['newtab'] == 'y' ? 'target="_blank"' : '';
        $value['url'] = $value['isdefault'] == 'y' ? BLOG_URL . $value['url'] : trim($value['url'], '/');
        $current_tab = BLOG_URL . trim(Dispatcher::setPath(), '/') == $value['url'] ? 'current' : 'common';
		?>
		
		<li class="item <?php echo $current_tab;?>">
			<a href="<?php echo $value['url']; ?>" <?php echo $newtab;?>><?php echo $value['naviname']; ?></a>
			<?php if (!empty($value['children'])) :?>
            <ul class="sub-nav">
                <?php foreach ($value['children'] as $row){
                        echo '<li><a href="'.Url::sort($row['sid']).'">'.$row['sortname'].'</a></li>';
                }?>
			</ul>
            <?php endif;?>

            <?php if (!empty($value['childnavi'])) :?>
            <ul class="sub-nav">
                <?php foreach ($value['childnavi'] as $row){
                        $newtab = $row['newtab'] == 'y' ? 'target="_blank"' : '';
                        echo '<li><a href="' . $row['url'] . "\" $newtab >" . $row['naviname'].'</a></li>';
                }?>
			</ul>
			
            <?php endif;?>

		</li>
	<?php endforeach; ?>
		<?php if (_g('nav_shouqi') == "yes"): ?>
		<li class="item common">
			<a href="<?php echo rand_log(); ?>">手气不错</a>
		</li>
		<?php endif; ?>
		<li id="nav_ss" class="item common">
	<form name="keyform" method="get" action="<?php echo BLOG_URL; ?>index.php">
	<input name="keyword" class="search" type="text" placeholder="请输入搜索关键字">
    <input type="submit" name="submit" value="搜索" class="submit button">
	</form>
		</li>
	</ul>
<?php }?>


<?php
//检测是否为手机
function em_is_mobile() {
    static $is_mobile;
    if ( isset($is_mobile) )
        return $is_mobile;
    if ( empty($_SERVER['HTTP_USER_AGENT']) ) {
        $is_mobile = false;
    } elseif ( strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Android') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Silk/') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Kindle') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'BlackBerry') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mobi') !== false ) {
            $is_mobile = true;
    } else {
        $is_mobile = false;
    }
    return $is_mobile;
}
?>

<?php
//blog：置顶
function topflg($top, $sortop='n', $sortid=null){
    if(blog_tool_ishome()) {
       echo $top == 'y' ? "<img src=\"".TEMPLATE_URL."/images/top.png\" title=\"首页置顶文章\" /> " : '';
    } elseif($sortid){
       echo $sortop == 'y' ? "<img src=\"".TEMPLATE_URL."/images/sortop.gif\" title=\"分类置顶文章\" /> " : '';
    }
}
?>
<?php
//blog：编辑
function editflg($logid,$author){
	$editflg = ROLE == ROLE_ADMIN || $author == UID ? '<li class="date_bj"><span class="bianji"></span><a href="'.BLOG_URL.'admin/write_log.php?action=edit&gid='.$logid.'" target="_blank">编辑</a></li>' : '';
	echo $editflg;
}
?>
<?php
//blog：分类
function blog_sort($blogid){
	global $CACHE; 
	$log_cache_sort = $CACHE->readCache('logsort');
	?>
	<?php if(!empty($log_cache_sort[$blogid])): ?>
    <a href="<?php echo Url::sort($log_cache_sort[$blogid]['id']); ?>"><?php echo $log_cache_sort[$blogid]['name']; ?></a>
	<?php endif;?>
<?php }?>
<?php
//blog：日志页标签
function blog_tag($blogid){
	global $CACHE;
	$log_cache_tags = $CACHE->readCache('logtags');
	if (!empty($log_cache_tags[$blogid])){
		foreach ($log_cache_tags[$blogid] as $value){
		$tag = '';
		echo 	'<li id="tag-'.rand(1, 5).'"><a href="'.Url::tag($value['tagurl']).'" rel="tag">'.$value['tagname'].'</a></li>';
		}
		echo $tag;
	}
	else {$tag = '<span class="color">&nbsp;本文无需标签！</span>';
	    echo $tag;}
}
?>
<?php
//widget：侧边栏标签
function widget_tag($title){
	global $CACHE;
	$tag_cache = $CACHE->readCache('tags');?>
	<div id="biaoqian" data-kui-anim="fadeInUp">
	<div id="biaoqian_biaoti"><span><?php echo $title; ?></span></div>
	<div id="biaoqian_biankuang">
	<div class="tagcloud">
	<?php 
		shuffle ($tag_cache);
		 $tag_cache = array_slice($tag_cache,0,36);
		foreach($tag_cache as $value): ?>
		<span class="hint--top shake shake-little" data-hint="“<?php if(empty($value['tagname'])){ echo "无标签";}else{echo $value['tagname'];}?>” 有<?php echo $value['usenum']; ?>篇文章">
        <a href="<?php echo Url::tag($value['tagurl']); ?>"  class="tag-link-<?php echo rand(12, 49) ?>"><?php echo $value['tagname']; ?> <?php echo $value['usenum']; ?>篇</a></span>
	<?php endforeach; ?>
	</div></div></div>
<?php }?>
<?php
//blog：文章作者
function blog_author($uid){
	global $CACHE;
	$user_cache = $CACHE->readCache('user');
	$author = $user_cache[$uid]['name'];
	$mail = $user_cache[$uid]['mail'];
	$des = $user_cache[$uid]['des'];
	$title = !empty($mail) || !empty($des) ? "title=\"$des $mail\"" : '';
	echo '<a href="'.Url::author($uid)."\" $title>$author</a>";
}
?>
<?php
//blog：相邻文章
function neighbor_log($neighborLog){
	extract($neighborLog);?>
	<?php if($prevLog):?>
	<div id="sxpbk1"><div id="anniu1">
	<a href="<?php echo Url::log($prevLog['gid']) ?>" class="hint--right hint--bounce" data-hint="<?php echo $prevLog['title'];?>">
	<img src="<?php echo TEMPLATE_URL; ?>images/shangpian1.png" onmouseover="this.src='<?php echo TEMPLATE_URL; ?>images/shangpian2.png'" onmouseout="this.src='<?php echo TEMPLATE_URL; ?>images/shangpian1.png'"></a></div>
<div id="wzlj1"><a href="<?php echo Url::log($prevLog['gid']) ?>"><?php echo $prevLog['title'];?></a></div></div>
    <?php else:?>
    <div id="sxpbk1"><div id="anniu1">
	<a rel="prev" class="hint--right hint--bounce" data-hint="没有上一篇咯，看看别的吧！？">
	<img src="<?php echo TEMPLATE_URL; ?>images/shangpian1.png" onmouseover="this.src='<?php echo TEMPLATE_URL; ?>images/shangpian2.png'" onmouseout="this.src='<?php echo TEMPLATE_URL; ?>images/shangpian1.png'"></a></div>
<div id="wzlj1"><a rel="prev">没有上一篇咯，看看别的吧！？</a></div></div>
    <?php endif;?>
	<?php if($nextLog):?>
	<div id="sxpbk2"><div id="wzlj2"><a href="<?php echo Url::log($nextLog['gid']) ?>"><?php echo $nextLog['title'];?></a></div>
		<div id="anniu2"><a href="<?php echo Url::log($nextLog['gid']) ?>" class="hint--left hint--bounce" data-hint="<?php echo $nextLog['title'];?>">
		<img src="<?php echo TEMPLATE_URL; ?>images/xiapian1.png" onmouseover="this.src='<?php echo TEMPLATE_URL; ?>images/xiapian2.png'" onmouseout="this.src='<?php echo TEMPLATE_URL; ?>images/xiapian1.png'"></a></div></div>
	<?php else:?>
    <div id="sxpbk2"><div id="wzlj2"><a rel="next">没有下一篇咯，看看别的吧！？</a></div>
	<div id="anniu2"><a rel="next" class="hint--left hint--bounce" data-hint="没有下一篇咯，看看别的吧！？">
	<img src="<?php echo TEMPLATE_URL; ?>images/xiapian1.png" onmouseover="this.src='<?php echo TEMPLATE_URL; ?>images/xiapian2.png'" onmouseout="this.src='<?php echo TEMPLATE_URL; ?>images/xiapian1.png'"></a></div></div>
	<?php endif;?>
<?php }?>
<?php
//blog：相邻文章2 手机低分辨率下才显示
function neighbor_log2($neighborLog){
	extract($neighborLog);?>
	<?php if($prevLog):?>
	<div id="shangxiapian3">
	<a href="<?php echo Url::log($prevLog['gid']) ?>">
	<img src="<?php echo TEMPLATE_URL; ?>images/shang2.png" onmouseover="this.src='<?php echo TEMPLATE_URL; ?>images/shang1.png'" onmouseout="this.src='<?php echo TEMPLATE_URL; ?>images/shang2.png'"></a></div>
	<?php else:?>
    <div id="shangxiapian3"><a rel="prev" class="shake shake-opacity">上一篇没咯！</a></div>
    <?php endif;?>
	<?php if($nextLog):?>
	<div id="shangxiapian4"><a href="<?php echo Url::log($nextLog['gid']) ?>"><img src="<?php echo TEMPLATE_URL; ?>images/xia2.png" onmouseover="this.src='<?php echo TEMPLATE_URL; ?>images/xia1.png'" onmouseout="this.src='<?php echo TEMPLATE_URL; ?>images/xia2.png'"></a></div>
	<?php else:?>
    <div id="shangxiapian4"><a rel="next" class="shake shake-opacity">下一篇没咯！</a></div>
	<?php endif;?>
<?php }?>
<?php
//blog：评论列表
function blog_comments($comments){
    extract($comments);
    if($commentStacks): ?>
	<a name="comments"></a>
	<div class="comment-header">
	<img src="<?php echo TEMPLATE_URL; ?>images/plun.png"></div>
	<?php endif; ?>
	<?php
	$isGravatar = Option::get('isgravatar');
	foreach($commentStacks as $cid):
    $comment = $comments[$cid];
	$comment['poster'] = $comment['url'] ? '<a href="'.$comment['url'].'" target="_blank">'.$comment['poster'].'</a>' : $comment['poster'];
	?>
	<div class="comment" id="comment-<?php echo $comment['cid']; ?>" data-kui-anim="fadeInRight">
		<a name="<?php echo $comment['cid']; ?>"></a>
		<?php if($isGravatar == 'y'): ?><div class="avatar"><img src="<?php echo myGravatar($comment['mail']); ?>" /></div>
		<div id="mzsj"><span class="juli1"><?php echo $comment['poster']; ?></span><span class="comment-time"><?php echo $comment['date']; ?></span></div><?php endif; ?>
		<div class="comment-info">
			<div class="comment-content"><?php echo $comment['content']; ?></div>
			<div class="comment-reply"><a href="#comment-<?php echo $comment['cid']; ?>" onclick="commentReply(<?php echo $comment['cid']; ?>,this)">回复</a></div>
		</div>
		<?php blog_comments_children($comments, $comment['children']); ?>
	</div>
	<?php endforeach; ?>
    <div id="pagenavi">
	    <?php echo $commentPageUrl;?>
    </div>
<?php }?>
<?php
//blog：子评论列表
function blog_comments_children($comments, $children){
	$isGravatar = Option::get('isgravatar');
	foreach($children as $child):
	$comment = $comments[$child];
	$comment['poster'] = $comment['url'] ? '<a href="'.$comment['url'].'" target="_blank">'.$comment['poster'].'</a>' : $comment['poster'];
	?>
	<div class="comment comment-children" id="comment-<?php echo $comment['cid']; ?>">
		<a name="<?php echo $comment['cid']; ?>"></a>
		<?php if($isGravatar == 'y'): ?><div class="avatar"><img src="<?php echo myGravatar($comment['mail']); ?>" /></div>
		<div id="mzsj_2"><span class="juli2"><?php echo $comment['poster']; ?></span><span class="comment-time"><?php echo $comment['date']; ?></span></div>
		<?php endif; ?>
		<div class="comment-info">
			<div class="comment-content"><?php echo $comment['content']; ?></div>
			<?php if($comment['level'] < 4): ?><div class="comment-reply"><a href="#comment-<?php echo $comment['cid']; ?>" onclick="commentReply(<?php echo $comment['cid']; ?>,this)">回复</a></div><?php endif; ?>
		</div>
		<?php blog_comments_children($comments, $comment['children']);?>
	</div>
	<?php endforeach; ?>
<?php }?>
<?php
//blog：发表评论表单
function blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark){
	if($allow_remark == 'y'): ?>
	<div id="comment-place">
	<div class="comment-post" id="comment-post">
		<div class="cancel-reply" id="cancel-reply" style="display:none"><a href="javascript:void(0);" onclick="cancelReply()">取消回复</a></div>
		<div id="bw_rz_pl" class="comment-header">

		<img src="<?php echo TEMPLATE_URL; ?>images/bi.png"> 
		<img src="<?php echo TEMPLATE_URL; ?>images/fbpl1.png">
						<a name="respond"></a></div>
		<form method="post" name="commentform" action="<?php echo BLOG_URL; ?>index.php?action=addcom" id="commentform">
			<input type="hidden" name="gid" value="<?php echo $logid; ?>">


	<p><textarea name="comment" id="comment" rows="12" tabindex="1" placeholder="评论一下……"></textarea></p>

			<?php if(ROLE == ROLE_VISITOR): ?>

			<div id="rz_plkxx">	
			<p>
				<input type="text" name="comname" maxlength="49" value="<?php echo $ckname; ?>" size="22" tabindex="2" placeholder="昵称">
			</p>
			<p>
				<input type="text" name="commail"  maxlength="128"  value="<?php echo $ckmail; ?>" size="22" tabindex="3" placeholder="邮箱(选填)">
			</p>
			<p>
				<input type="text" name="comurl" maxlength="128"  value="<?php echo $ckurl; ?>" size="22" tabindex="4" placeholder="主页(选填)">
			</p>
			</div>

			<?php endif; ?>

	<div class="fbpl">
		<?php echo $verifyCode; ?> <input type="submit" id="comment_submit" value="发表评论" tabindex="6">
	</div>

	<input type="hidden" name="pid" id="comment-pid" value="0" size="22" tabindex="1">

		</form>
	</div>
	</div>
	<?php endif; ?>
<?php }?>
<?php
//blog-tool:判断是否是首页
function blog_tool_ishome(){
    if (BLOG_URL . trim(Dispatcher::setPath(), '/') == BLOG_URL){
        return true;
    } else {
        return FALSE;
    }
}
?>
<?php
//试试手气代码
function rand_log() {
    $db = MySql::getInstance();
    $sql =         "SELECT gid,title,content FROM ".DB_PREFIX."blog WHERE type='blog' ORDER BY rand() LIMIT 0,1";
    $list = $db->query($sql);
    while($row = $db->fetch_array($list)){
        echo Url::log($row['gid']);
    }
}
?>
<?php
//格式化内容工具
function blog_tool_purecontent($content, $strlen = null){
        $content = str_replace('继续阅读', '', strip_tags($content));
        if ($strlen) {
            $content = subString($content, 0, $strlen);
        }
        return $content;
}
?>
<?php
//友情链接
function index_link(){
	global $CACHE; 
	$link_cache = $CACHE->readCache('link');
	?>
	<?php foreach($link_cache as $value): ?>
	<a href="<?php echo $value['url']; ?>" title="<?php echo $value['des']; ?>" target="_blank"><?php echo $value['link']; ?></a>
	<?php endforeach; ?>
<?php }?>

<?php
//widget：侧边栏链接
function widget_link($title){
	global $CACHE; 
	$link_cache = $CACHE->readCache('link');
    if (!blog_tool_ishome()) return;
	?>
	<div id="cbl_yqlj" data-kui-anim="fadeInUp">
		<div id="cbl_link">
			<span><?php echo $title; ?></span>
		</div>
		<div id="cbl_link_bk">
	<?php foreach($link_cache as $value): ?>
	<li><a href="<?php echo $value['url']; ?>" title="<?php echo $value['des']; ?>" target="_blank"><?php echo $value['link']; ?></a></li>
	<?php endforeach; ?>
		</div>
	</div>
<?php }?> 

<?php
//首页微语调用
function index_t($num){
	$t = MySql::getInstance();
	if (!blog_tool_ishome()) return;
	?>
	<?php
	$sql = "SELECT id,content,img,author,date,replynum FROM ".DB_PREFIX."twitter ORDER BY `date` DESC LIMIT $num";
	$list = $t->query($sql);
	while($row = $t->fetch_array($list)){
	?>
	<div id="gonggao">
     <div id="ggwz"><a href="/t"><?php echo $row['content'];?></a></div>
     <div id="gonggao_img"><img src="<?php echo TEMPLATE_URL; ?>images/gonggao.png"></div>
    </div>
	<div id="gonggao_bk">
     <div class="ggwz2"><img src="<?php echo TEMPLATE_URL; ?>images/gonggao_xlb.gif"> <b>公告：</b><a href="/t"><?php echo $row['content'];?></a></div>
	 </div>
	<?php }?>
<?php } ?>

<?php
//侧边栏统计
function ja_sta(){
  global $CACHE;
  $JA_STA = $CACHE->readCache('sta');
  $JA_STA['linknum'] = count($CACHE->readCache('link'));
  $JA_STA['sortnum'] = count($CACHE->readCache('sort'));
  $JA_STA['tagsnum'] = count($CACHE->readCache('tags'));
  $JA_STA['usernum'] = count($CACHE->readCache('user'));
  $JA_STA['days']    = round((time() - strtotime(_g('tjrq'))) / 3600 / 24);
  extract($JA_STA);
  echo "
  <li>立足江湖: $days 天</li>
  <li>鸿篇巨著: $lognum 篇</li>
  <li>草稿文章: $draftnum 篇</li>
  <li>江湖美誉: $comnum 条</li>
  <li>待审评论: $hidecomnum 条</li>
  <li>微语数量: $twnum 条</li>
  <li>友情链接: $linknum 个</li>
  <li>分类总数: $sortnum 个</li>
  <li>标签数量: $tagsnum 个</li>
  <li>管理掌教: $usernum 人</li>
  ";
}
//最后发表文章时间
function last_post_log(){
$db = MySql::getInstance();
$sql = "SELECT * FROM " . DB_PREFIX . "blog WHERE type='blog' ORDER BY date DESC LIMIT 0,1";
                $res = $db->query($sql);
                $row = $db->fetch_array($res);
                $date = date('Y-n-j H:i',$row['date']);
        return $date;        
}
?>

<?php
//获取Gravatar头像
function myGravatar($email, $s = 40, $d = 'mm', $g = 'g') {
$hash = md5($email);
$avatar = "http://cn.gravatar.com/avatar/$hash?s=$s&d=$d&r=$g";
return $avatar;
}?>


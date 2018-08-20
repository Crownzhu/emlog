<?php 
/**
 * 阅读文章页面
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="mainbody">
  
<div class="blank"></div>
<div class="blogs">
	
<div id="index_view">
      <h2 class="t_nav"><a href="/">网站首页</a><?php blog_sort($logid); ?></h2>
      <h1 class="c_titile"><?php topflg($top); ?><?php echo $log_title; ?></h1>
      <p class="box">发布时间：<?php echo gmdate('Y-n-j G:i l', $date); ?><span>编辑：<?php blog_author($author); ?></span>阅读（<?php echo $views; ?>）</p>
      <ul>
        <p><?php echo $log_content; ?></p>
      </ul>

      <div class="otherlink">
<?php doAction('log_related', $logData); ?> 
	 		<?php blog_comments($comments); ?>
	<?php blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark); ?>
	  </div>     

    </div>



<?php
 include View::getView('Interface/wzside');
?>
  </div>
  </div>
<?php
 include View::getView('footer');
?>
	
	
	

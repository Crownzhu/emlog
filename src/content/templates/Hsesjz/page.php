<?php 
/**
 * 自建页面模板
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
      <div class="share"> 
        <!-- Baidu Button BEGIN -->
        <div class="bdshare_t bds_tools get-codes-bdshare" id="bdshare"> <span class="bds_more">分享到：</span> <a class="bds_qzone" title="分享到QQ空间" href="#"></a> <a class="bds_tsina" title="分享到新浪微博" href="#"></a> <a class="bds_tqq" title="分享到腾讯微博" href="#"></a> <a class="bds_renren" title="分享到人人网" href="#"></a> <a class="bds_t163" title="分享到网易微博" href="#"></a> <a class="shareCount" href="#" title="累计分享0次">0</a> </div>
        <script data="type=tools&amp;uid=6574585" id="bdshare_js" type="text/javascript" src="http://bdimg.share.baidu.com/static/js/bds_s_v2.js?cdnversion=384894"></script> 
         
        <script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
</script> 
        <!-- Baidu Button 结束 --> 
      </div>
      <div class="otherlink">
<?php doAction('log_related', $logData); ?> 
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

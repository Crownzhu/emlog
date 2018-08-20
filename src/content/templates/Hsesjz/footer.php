<?php 
/**
 * 页面底部信息
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<footer>
  <div class="footer-mid">
    <div class="links">
      <h2>随机文章</h2>
      <ul><?php randlog();?></ul>
    </div>
	<div class="visitors">
      <h2>最新文章</h2>
      <?php newlog();?>    
    </div>
	<section class="flickr">
      <h2>最新图文</h2>
      <ul>
        <?php get_flash_data(6); ?>
      </ul>
    </section>
  </div>
  <div class="footer-bottom">
    <p>Powered by emlog 主题由陈子文提供 在此致谢 <?php echo $footer_info; ?> <?php echo $icp; ?></p>
	<br/><?php doAction('index_footer'); ?>
  </div>
</footer>
<!-- jQuery仿腾讯回顶部和建议 代码开始 -->
<div id="tbox"> <a id="togbook" href="#"></a> <a id="gotop" href="javascript:void(0)"></a> </div>
<!-- 代码结束 -->
</body>
</html>

 
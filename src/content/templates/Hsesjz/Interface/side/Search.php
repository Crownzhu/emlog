<?php 
/**
 * 侧边栏搜索
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
      <div class="search">
	      <form name="keyform" method="get" action="<?php echo BLOG_URL; ?>index.php">
          <input name="keyword" class="search" type="text" />
		 <button type="submit" name="sa">搜索</button>
        </form>
      </div>


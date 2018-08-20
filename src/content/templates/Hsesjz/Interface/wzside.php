<?php 
/**
 * 文章页侧边栏
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<aside>
<?php
 include View::getView('Interface/side/Search');//侧边栏搜索
 include View::getView('Interface/side/fenlei');//侧边栏分类
 include View::getView('Interface/side/top');//侧边栏置顶图文
 include View::getView('Interface/side/Hot');//侧边栏热门点击
  include View::getView('Interface/side/link');//侧边栏友情链接

?>
</aside>	  
	 







   


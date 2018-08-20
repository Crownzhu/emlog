<?php 
/**
 * 侧边栏CD专辑
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
      <div class="viny">
        <dl>
          <dt class="art"><img alt="专辑" src="<?php echo TEMPLATE_URL; ?>images/artwork.png"></dt>
          <dd class="icon-song"><span></span><?php echo _g('song');?></dd>
          <dd class="icon-artist"><span></span><?php echo _g('singer');?></dd>
          <dd class="icon-album"><span></span><?php echo _g('list');?></dd>
          <dd class="icon-like"><span></span><a href="/">喜欢</a></dd>
          <dd class="music">
            <audio controls="" src="<?php echo _g('music');?>"></audio>
			
          </dd>
        </dl>
      </div>
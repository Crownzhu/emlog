<?php 
/**
 * banner页面
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div class="info">
    <figure> <img src="<?php echo TEMPLATE_URL; ?>images/art.jpg"  alt="Panama Hat">
      <figcaption><strong><?php echo _g('dabiaoti');?></strong> <?php echo _g('xiaobiaoti');?></figcaption>
    </figure>
    <div class="card">
      <h1>我的名片</h1>
      <p>姓名：Crown | Zhu</p>
      <p>职业：学生 能源动力工程</p>
      <p>Q  Q：874981445</p>
      <p>Email：eric.zcf@qq.com</p>
      <ul class="linkmore">
        <li><a href="<?php echo BLOG_URL; ?>book" class="talk" title="给我留言"></a></li>
        <li><a href="<?php echo BLOG_URL; ?>" class="address" title="主页"></a></li>
        <li><a href="https://mail.qq.com/" class="email" title="给我写信"></a></li>
        <li><a href="<?php echo BLOG_URL; ?>photo" class="photos" title="生活照片"></a></li>
        <li><a href="<?php echo BLOG_URL; ?>aboutme" class="heart" title="关注我"></a></li>
      </ul>
    </div>
  </div>
  <!--info 结束-->

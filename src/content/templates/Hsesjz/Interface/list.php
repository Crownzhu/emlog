<?php 
/**
 * 日志列表循环页面
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<ul class="bloglist">
         <?php if (!empty($logs)):foreach($logs as $value): ?>
	  <li>
        <div class="arrow_box">
          <div class="ti"></div>
          <!--三角形-->
          <div class="ci"></div>
          <!--圆形-->
          <h2 class="title"><a href="<?php echo $value['log_url']; ?>"><?php echo $value['log_title']; ?></a></h2>
          <ul class="textinfo">
            <a href="<?php echo $value['log_url']; ?>">
<?php
 //拉取附件第一张图片，如果没有，则随机拉取random文件夹图片，图片名称任意
$thum_src = getThumbnail($value['logid']);
 $imgFileArray = glob("content/templates/Hsesjz/images/random/*.*");
 if(!empty($thum_src)){ ?>
 <img width="150" height="122" src="<?php echo $thum_src; ?>" alt="<?php echo $value['log_title']; ?>" title="<?php echo $value['log_title'] ?>" />
<?php
 }else{
 ?>
 <img width="150" height="122" src="<?php echo $imgFileArray[array_rand($imgFileArray)]; ?>" alt="<?php echo $value['log_title']; ?>" title="<?php echo $value['log_title'] ?>" />
 <?php
 }
 ?>
 </a>
 <!--随机图片部分-->
            <p><?php echo subString(strip_tags($value['log_description']),0,190,"..."); ?></p>
          </ul>
          <ul class="details">
            <li class="likes"><a href="#"><?php echo $value['views']; ?></a></li>
            <li class="comments"><a href="#"><?php echo $value['comnum']; ?></a></li>
            <li class="icon-time"><a href="#"><?php echo gmdate('Y-n-j G:i l', $value['date']); ?></a></li>
          </ul>
        </div>
        <!--arrow_box 结束--> 
      </li>
	      <?php endforeach;else:?>
	<h2>未找到</h2>
	<p>抱歉，没有符合您查询条件的结果。</p>
   <?php endif;?>
	
		<div class="pages">
<?php echo $page_url;?></div>
    </ul>
    <!--bloglist 结束-->

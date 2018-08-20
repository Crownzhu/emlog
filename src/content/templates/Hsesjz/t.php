<?php 
/**
 * 首页文章列表部分
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="mainbody">

<div class="blogs">
	
<!--加载日志列表循环页面与侧边栏-->

<ul class="bloglist">
    <?php 
    foreach($tws as $val):
    $author = $user_cache[$val['author']]['name'];
    $avatar = empty($user_cache[$val['author']]['avatar']) ? 
                BLOG_URL . 'admin/views/images/avatar.jpg' : 
                BLOG_URL . $user_cache[$val['author']]['avatar'];
    $tid = (int)$val['id'];
    $img = empty($val['img']) ? "" : '<a title="查看图片" href="'.BLOG_URL.str_replace('thum-', '', $val['img']).'" target="_blank"><img style="border: 1px solid #EFEFEF;" src="'.BLOG_URL.$val['img'].'"/></a>';
    ?> 
    <li>
        <div class="arrow_box">
          <div class="ti"></div>
          <!--三角形-->
          <div class="ci"></div>
          <!--圆形-->
          <h2 class="title"><?php echo $author; ?> 在 <?php echo $val['date'];?> 说：</h2>
          <ul class="textinfo">
 <img height="50" width="50" src="<?php echo $avatar; ?>">
 </a>
 <!--随机图片部分-->
            <p> <?php echo $val['t'].'<br/>'.$img;?></p>
          </ul>
          <ul class="details">
            <li class="comments"><a href="javascript:loadr('<?php echo DYNAMIC_BLOGURL; ?>?action=getr&tid=<?php echo $tid;?>','<?php echo $tid;?>');">回复(<span id="rn_<?php echo $tid;?>"><?php echo $val['replynum'];?></span>)</a></li>
            <li class="icon-time"><a href="#"><?php echo $val['date'];?></a></li>
			<ul id="r_<?php echo $tid;?>" class="r"></ul>
			<?php if ($istreply == 'y'):?>
    <div class="huifu" id="rp_<?php echo $tid;?>">
	<textarea id="rtext_<?php echo $tid; ?>"></textarea>
    <div class="tbutton">
        <div class="tinfo" style="display:<?php if(ROLE == 'admin' || ROLE == 'writer'){echo 'none';}?>">
        昵称：<input type="text" id="rname_<?php echo $tid; ?>" value="" />
        <span style="display:<?php if($reply_code == 'n'){echo 'none';}?>">验证码：<input type="text" id="rcode_<?php echo $tid; ?>" value="" /><?php echo $rcode; ?></span>        
        </div>
        <input class="button_p" type="button" onclick="reply('<?php echo DYNAMIC_BLOGURL; ?>index.php?action=reply',<?php echo $tid;?>);" value="回复" /> 
        <div class="msg"><span id="rmsg_<?php echo $tid; ?>" style="color:#FF0000"></span></div>
    </div>
    </div>
    <?php endif;?>
          </ul>
        </div>
		</li>
		 <?php endforeach;?>
	<div class="pages"><?php echo $pageurl;?></div>   
        <!--arrow_box 结束--> 
   
	 
  




	      	  
	      	  
	      	  
	      	  
    	  
	  
	      	
    </ul>


	 <!--加载日志列表循环页面与侧边栏-->
<?php
 include View::getView('Interface/wzside');
?>
<!--加载日志列表循环页面与侧边栏结束-->   










  </div>
  </div>
<?php
 include View::getView('footer');
?>


















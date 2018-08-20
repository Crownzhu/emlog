<?php

/*@support tpl_options*/
!defined('EMLOG_ROOT') && exit('access deined!');
$options = array(
	'logo' => array(
        'type' => 'image',
        'name' => 'LOGO',
        'values' => array(
            TEMPLATE_URL . 'images/art.jpg',
        ),
		'description' => '<span style="color:#484848; font-size:14px;"><b>默认宽高：630x250像素  </b>建议用jpg格式，若不能上传请改用ftp手动上传。</span><br><br>',
    ),  
	'dabiaoti' => array(
		'type' => 'text',
		'name' => '大标题',
		'default' => 'P.K.T.遇见你是缘',
	),	
	'xiaobiaoti' => array(
		'type' => 'text',
		'name' => '小标题',
		'multi' => true,
		'default' => '有人说恋爱最美的时期，就是暧昧不清的阶段。彼此探询对方的呼吸，小心翼翼辨别对方释出的心意，戒慎恐惧给予响应。每一个小动作似乎都有意义，也开始被赋予意义。',
	),	
	'music' => array(
		'type' => 'text',
		'name' => '边栏-音乐播放器',
		'description' => '<span style="color:#579184;">粘贴您的音乐外链在这里。</span>',
		'multi' => true,
		'default' => 'http://m2.music.126.net/tgX4Zs37Pkd9yc1P5-ILCA==/1070924325461918.mp3',
	),
	'song' => array(
		'type' => 'text',
		'name' => '歌名',
		'default' => '约定',
	),
	'singer' => array(
		'type' => 'text',
		'name' => '歌手',
		'default' => '歌手：周蕙',
	),
	'list' => array(
		'type' => 'text',
		'name' => '专辑',
		'default' => '所属专辑：《周蕙精选》',
	),
);
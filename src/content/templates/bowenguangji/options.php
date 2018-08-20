<?php

/*@support tpl_options*/
!defined('EMLOG_ROOT') && exit('access deined!');
$options = array(
	    'logo' => array(
        'type' => 'image',
        'name' => 'LOGO',
        'values' => array(
            TEMPLATE_URL . 'images/logo.png',
        ),
		'description' => '<span style="color:#484848; font-size:14px;">该logo只会在浏览器低分辨低于<b>800px</b>下显示。<b>默认宽高：260X60  </b>宽高没有限制，建议用png格式，若不能上传请改用ftp手动上传。</span><br><br>',
    ),

// 个性化鼠标
	'bwgj_cur' => array(
	    'type' => 'radio',
		'name' => '个性化鼠标开关',
		'values' => array(
			'yes' => '要个性',
			'no' => '不要个性',
		),
		'default' => 'yes',
	),

	'bwgj_logo2' => array(
	    'type' => 'radio',
		'name' => '顶部大图l是否显示logo',
		'values' => array(
			'yes' => '显示',
			'no' => '不显示',
		),
		'default' => 'yes',
	),
	
	'nav_shouqi' => array(
	    'type' => 'radio',
		'name' => 'PC和手机端的手气不错',
		'values' => array(
			'yes' => '显示',
			'no' => '不显示',
		),
		'default' => 'yes',
	),

	    'sygg' => array(
	    'type' => 'radio',
		'name' => '首页公告开关',
		'description' => '<span style="color:#579184;">公告调用的信息是来自“微语”的，并且只在首页显示，日志页、自建页、微语页不显示。</span>',
		'values' => array(
			'yes' => '开启',
			'no' => '关闭',
		),
		'default' => 'yes',
	),

	    'ad_1' => array(
	    'type' => 'radio',
		'name' => '广告位置1',
		'values' => array(
			'yes' => '开启',
			'no' => '关闭',
		),
		'default' => 'no',
	),

	    'ad1_dm' => array(
		'type' => 'text',
		'name' => '广告1代码',
		'description' => '<span style="color:#579184;">可以是任何类型的广告，高度不限，默认是一张图片占位。</span>',
		'multi' => true,
		'default' => '<img src="/content/templates/bowenguangji/images/ad.png" alt="广告">',
	),

	    'ad_2' => array(
	    'type' => 'radio',
		'name' => '日志页广告位置',
		'values' => array(
			'yes' => '开启',
			'no' => '关闭',
		),
		'default' => 'no',
	),

	    'ad2_dm' => array(
		'type' => 'text',
		'name' => '日志页广告代码',
		'description' => '<span style="color:#579184;">可以是任何类型的广告，宽度840，高度不限，默认是一张图片占位。</span>',
		'multi' => true,
		'default' => '<img src="/content/templates/bowenguangji/images/ad2.png" alt="广告">',
	),

	'sy_pinglun' => array(
		'type' => 'radio',
		'name' => '首页显示两种评论数开关',
		'description' => '<span style="color:#579184;">默认显示的是EM自带的评论数，如果你关闭它则显示多说评论数，前提是你安装了多说社会化评论插件，如果未安装则不要关闭。</span>',
		'values' => array(
			'yes' => '开启',
			'no' => '关闭',
		),
		'default' => 'yes',
	),
	'rz_pinglun' => array(
		'type' => 'radio',
		'name' => '日志页显示两种评论数开关',
		'description' => '<span style="color:#579184;">默认显示的是EM自带的评论数，如果你关闭它则显示多说评论数，前提是你安装了多说社会化评论插件，如果未安装则不要关闭。</span>',
		'values' => array(
			'yes' => '开启',
			'no' => '关闭',
		),
		'default' => 'yes',
	),


	'dibuhf' => array(
	    'type' => 'radio',
		'name' => '底部横幅开关',
		'description' => '<span style="color:#579184;">底部横幅1张，如果嫌它多余，这里可以关闭它。</span>',
		'values' => array(
			'yes' => '开启',
			'no' => '关闭',
		),
		'default' => 'yes',
	),

	'bowen_book' => array(
	    'type' => 'text',
		'name' => '返回顶部中间“评”字链接',
		'description' => '<span style="color:#579184;">这个在首页点击是跳转到留言板的，如果是内页则跳转到评论处，一举两用。留言板可以用文章、页面来做，然后把地址粘贴在这里。如：http://crown.cf/book/</span>',
		'default' => '/book/',
	),

	'xgrz-kh' => array(
	    'type' => 'radio',
		'name' => '日志页“相关文章”',
		'values' => array(
			'yes' => '开启',
			'no' => '关闭',
		),
		'default' => 'yes',
	),
		'banquan-kh' => array(
	    'type' => 'radio',
		'name' => '日志页“版权信息”',
		'description' => '<span style="color:#579184;">版权信息包括二维码、作者、网址、声明等，对于原创性较高的博客比较有用。现在网民版权意识很弱，建议开启。</span>',
		'values' => array(
			'yes' => '开启',
			'no' => '关闭',
		),
		'default' => 'yes',
	),
	'music-kh' => array(
	    'type' => 'radio',
		'name' => '边栏-网易云音乐播放器',
		'values' => array(
			'yes' => '开启',
			'no' => '关闭',
		),
		'default' => 'yes',
	),

	'music' => array(
		'type' => 'text',
		'name' => '边栏-网易云音乐播放器',
		'description' => '<span style="color:#579184;">粘贴您的“网易云音乐播放器”代码在这里。進入<a href="http://music.163.com/">http://music.163.com/</a>，然后点一个音乐专辑，点下面的“生成外链播放器”，然后得到调用代码，宽度请修改成276，高度不变。框架的宽度必须是296。auto=0，0是不自动播放，1是自动播放。</span>',
		'multi' => true,
		'default' => '<iframe frameborder="no" border="0" marginwidth="0" marginheight="0" width=296 height=450 src="http://music.163.com/outchain/player?type=1&id=3164858&auto=0&height=430"></iframe>',
	),

	'music-bt' => array(
	    'type' => 'text',
		'name' => '播放器标题文字',
		'default' => '推荐音乐',
	),
	'tongji-kh' => array(
	    'type' => 'radio',
		'name' => '侧边栏“网站统计”',
		'values' => array(
			'yes' => '开启',
			'no' => '关闭',
		),
		'default' => 'yes',
	),
	'tjrq' => array(
	    'type' => 'text',
		'name' => '侧边栏“网站统计” - 建站日期',
		'default' => '2014-04-24',
	),

	'dibu_tj' => array(
	    'type' => 'text',
		'name' => '底部版权年份',
		'default' => '2014-2016',
	),

	'ad-kh' => array(
	    'type' => 'radio',
		'name' => '侧边栏“跟随广告”',
		'values' => array(
			'yes' => '开启',
			'no' => '关闭',
		),
		'default' => 'yes',
	),

	'cbl_adgg' => array(
		'type' => 'text',
		'name' => '侧边栏跟随浮动广告',
		'description' => '<span style="color:#579184;">广告宽不要超过276px，侧边栏最大宽是276px。广告类型不限，自己琢磨。</span>',
		'multi' => true,
		'default' => '<a href="/post-179.html" title="图片广告招租，150元1月。" target="_blank"><img src="/content/templates/bowenguangji/images/guanggao.gif"></a><br>
<li class="wzgg1"><a href="/post-179.html" class="shake shake-little" title="文字招租：1月100元起" target="_blank">
文字招租1：1月100元起
</a></li>
<li class="wzgg2"><a href="/186" class="shake shake-little" title="文字招租：1月100元起" target="_blank">
文字招租2：1月100元起
</a></li>
<li class="wzgg3"><a href="/post-1.html##ggao" class="shake shake-little" title="本广告文字招租" target="_blank">
文字招租3：1月100元起
</a></li>
<li class="wzgg4"><a href="/" title="返回首页">文字招租4：1月100元起</a></li>',
	),
	'dibu-zdy' => array(
		'type' => 'text',
		'name' => '自定义底部一些文字导航',
		'description' => '<span style="color:#579184;">你可以随便添加、删除，这里的链接仅是演示。</span>',
		'multi' => true,
		'default' => '<a href="http://www.qpjk.cc/19" title="喜欢本站，捐赠支持！">捐赠支持</a>|
<a href="http://#" title="自定义链接">自定义链接</a>|
<a href="http://#" title="自定义链接！">自定义链接</a>|
<a href="http://#" title="站长到底是何方人物！？">自定义链接</a>|
<a href="m/" title="手机版本">手机版本</a>|',
	),

	'cbl_link' => array(
	    'type' => 'radio',
		'name' => '底部友情链接开关',
		'description' => '<span style="color:#579184;">默认是关闭的，因为侧边栏的友情链接是开启的。如需底部显示友情链接，请先关闭侧边栏的，否则重复显示不好看。</span>',
		'values' => array(
			'yes' => '开启',
			'no' => '关闭',
		),
		'default' => 'no',
	),

);
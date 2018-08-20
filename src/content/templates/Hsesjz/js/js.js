function b(){
	h = $(window).height();
	t = $(document).scrollTop();
	if(t > h){
		$('#gotop').show();
	}else{
		$('#gotop').hide();
	}
}
$(document).ready(function(e) {
	b();
	$('#gotop').click(function(){
		$(document).scrollTop(0);	
	})
});

$(window).scroll(function(e){
	b();		
})

//侧栏跟随浏览器
$(function () {
if ($(".fixed_side").length > 0) {
var offset = $(".fixed_side").offset();
$(window).scroll(function () {
var scrollTop = $(window).scrollTop();
//如果距离顶部的距离小于浏览器滚动的距离，则添加fixed属性。
if (offset.top < scrollTop) $(".fixed_side").addClass("fixed");
//否则清除fixed的css属性
else $(".fixed_side").removeClass("fixed");
});
}
});

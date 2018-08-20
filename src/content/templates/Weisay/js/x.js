$(document).ready(function($) {
	$(window).scroll(function() {
		if ($(window).scrollTop() > 200) {
			$("#go-top").fadeIn()
		} else {
			$("#go-top").fadeOut()
		}
	});
	$body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
	$('#go-top').click(function() {
		$body.animate({
			scrollTop: $('#wrap').offset().top
		},
		1000);
		return false
	});
	$body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
	$('#go-comment-place').click(function() {
		$body.animate({
			scrollTop: $('#footer').offset().top
		},
		1000);
		return false
	});
	$body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
	$('#go-comments').click(function() {
		$body.animate({
			scrollTop: $('#comments').offset().top
		},
		1000);
		return false
	});
	$(function() {
		$('#content .post h2 a').click(function(e) {
			e.preventDefault();
			var htm = '用尽吃奶的力气载入中',
			t = $(this).html(htm).unbind('click'),
			i = 9;
			ct();
			window.location = this.href;
			function ct() { (i < 0) ? (i = 9, t.html(htm), ct()) : (t[0].innerHTML += 'z', i--, setTimeout(ct, 200))
			}
		})
	});
	$("#to_author_info a").toggle(function() {
		$("#userinfo").slideDown(400);
		$(this).text("[ Complete ]")
	},
	function() {
		$("#userinfo").slideUp(400);
		$(this).text("[ Modify ]")
	});
});
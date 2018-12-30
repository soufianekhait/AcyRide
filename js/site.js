$(document).ready(function () {
	var scrollTop = 0;
	$(window).scroll(function () {
		scrollTop = $(window).scrollTop();
		$('.counter').html(scrollTop);
		var iframe = document.getElementById('video');
		// $f == Froogaloop
		var player = $f(iframe);

		if (scrollTop >= 100) {
			$('.navbar-default').addClass('scrolled-nav');
			player.api("pause");
		} else if (scrollTop < 100) {
			$('.navbar-default').removeClass('scrolled-nav');
			player.api("play");
		}
	});
});

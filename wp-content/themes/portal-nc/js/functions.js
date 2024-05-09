(function ($) {
	$.fn.hasScrollBar = function () {
		return this.get(0).scrollWidth > this.get(0).clientWidth;
	}
})(jQuery);


jQuery(function ($) {


	$(document).ready(function () {
		const muxPlayer = document.querySelector("mux-player");
		const currentVideoInfo = $("#current-video");

		muxPlayer.onplay = function () {
			console.log("The video has started to play");
		};

		muxPlayer.addEventListener("timeupdate", function (event) {
			// console.log('timeStamp:', event.timeStamp);
			// console.log('currentTime:', event.currentTime);
			// $("#current-video .progress-bar").animate({
			// 	width: 
			// });
		});




		var vid = $("mux-player"),
			check,
			reached25 = false,
			reached50 = false,
			reached75 = false;

		vid.bind("play", function (event) {
			var duration = vid.get(0).duration;

			check = setInterval(function () {
				var current = vid.get(0).currentTime,
					perc = (current / duration * 100).toFixed(2);


				if (Math.floor(perc) >= 25 && !reached25) {
					console.log("25% reached");
					reached25 = true;
				}
				console.log(perc);

				$("#current-video .progress-bar").animate({
					width: perc + "%"
				});

			}, 1000);
		});

		vid.bind("ended pause", function (event) {
			clearInterval(check);
		});






	});





	function showHideScroll() {
		if ($('.disciplinas-nav ul').hasScrollBar()) {
			$(".disciplinas-nav-scroll-handles-left").show();
			$(".disciplinas-nav-scroll-handles-right").show();
			$('.disciplinas-nav ul').addClass("px-4");

			$('.disciplinas-nav ul').animate({
				scrollLeft: $(".disciplinas-nav ul .nav-item .active").offset().left
			}, 200);
		} else {
			$(".disciplinas-nav-scroll-handles-left").hide();
			$(".disciplinas-nav-scroll-handles-right").hide();
			$('.disciplinas-nav ul').removeClass("px-4");
		}
	}
	showHideScroll();

	$(window).on('resize', function () {
		showHideScroll();
	});

	$(".disciplinas-nav-scroll-handles-right").click(function (event) {
		$('.disciplinas-nav ul').animate({ scrollLeft: '+=150px' }, 200);
	});
	$(".disciplinas-nav-scroll-handles-left").click(function (event) {
		$('.disciplinas-nav ul').animate({ scrollLeft: '-=150px' }, 200);
	});



}); // jQuery


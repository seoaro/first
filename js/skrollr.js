$(function() {
	var slide2top = $("#slide-2").offset().top;
	var slide3top = $("#slide-3").offset().top;
	var slide4top = $("#slide-4").offset().top;
	var slide5top = $("#slide-5").offset().top;

	$(window).scroll(function() {
		var scrollValue = $(this).scrollTop();
		$("#scrollValue").text(scrollValue);

		// Slide-1
		$("#slide-1 h1").css("opacity", 1 - scrollValue / 500 );
		$("#slide-1 .signin-buttons").css("opacity", 1 - scrollValue / 500 );
		$("#slide-1 .bcg").css("background-position-y", -scrollValue);
		$("#slide-1 .bcg").css("opacity", 1 - scrollValue / 100 );
		// Slide-2
		if (scrollValue > slide2top) {
			$("#slide-2 .bcg").css("background-position-y", -scrollValue);
			$("#slide-2 h1").css("opacity", 1 - scrollValue / 500 );
		}
		
		// Slide-3
		if (scrollValue > slide3top) {
			$("#slide-3 .bcg").css("background-position-x", -scrollValue / 10 );
			$("#slide-3 .bcg").css("opacity", 2 - scrollValue / 1000 );
			$("#slide-3 h1").css("opacity", 2 - scrollValue / 500 );
		}

		// Slide-4
		if (scrollValue > slide4top) {
			$("#slide-4 .bcg").css("opacity", 3 - scrollValue / 1000 );
			$("#slide-4 h1").css("opacity", 3 - scrollValue / 1000 );
		}

		// Slide-5
		if (scrollValue > slide5top) {
			$("#slide-5 .bcg").css("opacity", 4 - scrollValue / 1000 );
			$("#slide-5 h1").css("opacity", 4 - scrollValue / 1000 );
		}

		// logo
		if (scrollValue > 3600 && scrollValue < 4000) {
			$("#logo").css("top", (scrollValue - 3600) / 2 );
		}
		if (scrollValue > 3800) {
			var logoWidth = (scrollValue - 3600) / 1.6 + "px";
			$("#logo").css("width", logoWidth);
		}
		if (scrollValue < 3600) {
			var logoWidth = "40%";
			$("#logo").css("width", logoWidth);
			$("#logo").css("top", 0);
		}
		
	});
});
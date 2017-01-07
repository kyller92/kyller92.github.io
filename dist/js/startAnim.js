jQuery(document).ready(function () {
	var $=jQuery;

	$("#barremenu").css("display","none");
	$("#contenu").css("display","none");
	var $div = $("#mainContent"); //pour regler jump lors du slideDown
	var height = $div.height();
	$div.hide().css({height : 0});
	$("#footer").css("display","none");

	// $("#nav").css("opacity","0");
	// $("#mainContent").css("opacity","0");
	// $("#footer").css("opacity","0");

	$("#header").css("margin-top","30%");
	$("#header").css("display","none");
	$("html body").animate({backgroundColor: "#ce8c8c"}, 1000);
	$("#header").animate({opacity: "show"},"slow")
				.animate({marginTop: "18%"},2000)
				.animate({opacity: "hide"});

	$("#header").queue(function  () {
		$("#header").animate({opacity: "hide"});
		$("#barremenu").animate({opacity : "show"});
		$("#carousel-saveur").animate({opacity : "show"});
		$("#contenu").animate({opacity : "show"});
		$("#footer").animate({opacity : "show"});
		$("#footer2").animate({opacity : "show"});
		$(this).dequeue;
		//$("#mainContent").animate({opacity : "show"});
		//$("#mainContent").slideDown(1000);
		$div.show().animate({height : height},{duration : 1000});
		
		$(this).dequeue;
		$("#footer").animate({opacity : "show"});
		$(this).dequeue;
	})
});


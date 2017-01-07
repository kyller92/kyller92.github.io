jQuery(document).ready(function () {
	var $=jQuery;

	$("#barremenu").css("display","none");
	$("#contenu").css("display","none");
	var $div = $("#mainContent"); //pour regler jump lors du slideDown
	var height = $div.height();
	$div.hide().css({height : 0});
	
	$("#header").css("display","none");

	$("#header").queue(function  () {
		$("#barremenu").animate({opacity : "show"},"slow");
		$("#carousel-saveur").animate({opacity : "show"},"slow");
		$("#contenu").animate({opacity : "show"});
		
		$(this).dequeue;
		//$("#mainContent").animate({opacity : "show"});
		//$("#mainContent").slideDown(1000);
		$div.show().animate({height : height},{duration : 1000});
		
		$(this).dequeue;
		$("#footer").animate({opacity : "show"});
		$(this).dequeue;
	})
});


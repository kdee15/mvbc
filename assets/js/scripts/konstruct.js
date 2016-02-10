jQuery( document ).ready(function() {
	
	/* Random Image Generator START */
	var totalImages = 6;

	var RandomNum = Math.floor( Math.random() * totalImages);

	$(document).ready(function(){

		$('body').attr("style","background-image:url('../assets/images/background/bg-main"+RandomNum+".jpg')");
		$('.article').attr("style","background-image:url('../../../../../assets/images/background/bg-main"+RandomNum+".jpg')");

	});

	/* Random Image Generator END */
	
	
	//A.1.1 Show/Hide element
	
	$(".reveal").click(function(e) {
		var target = $(this).attr('href');
		if ($(target).css('display') === 'none') {
		  $(target).fadeIn(130);
		}
		else {
		  $(target).fadeOut(130);
		}
		e.preventDefault();
	  });
	
	//A.1.1 End
	
});
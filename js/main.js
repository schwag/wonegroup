$(document).ready(function () {
    $(".navbar-collapse").click(function(event) {
        // check if window is small enough so dropdown is created
    $(".navbar-collapse").removeClass("in").addClass("collapse");
    });
	
	$(".accordion-toggle").click(function() {

	($(".accordion-toggle").not($(this))).removeClass("acord-minus-me");
	$(this).toggleClass("acord-minus-me");

	});
	
});

// jQuery scroll to top function


$(document).ready(function() {
	
	//show and hide back to top button
	$(window).scroll(function() {
		if($(this).scrollTop() > 600) {
			$(".mc-go-to-top").fadeIn(300);
		}else{
			$(".mc-go-to-top").fadeOut(300);
		}
	});
	
	//Animate scroll top
	$(".mc-go-to-top").click(function(event) {
		event.preventDefault();
		
		$('html, body').animate({scrollTop: 0}, 600);
		
		});
	
});
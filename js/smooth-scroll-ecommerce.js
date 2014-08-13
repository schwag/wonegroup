/* =============================================================

    Smooth Scroll 2.3
    Animate scrolling to anchor links, by Chris Ferdinandi.
    http://gomakethings.com

    Free to use under the MIT License.
    http://gomakethings.com/mit/
    
 * ============================================================= */
$(document).ready(function () {
    $('a[href^="#ecommercehome"]').on('click', function (e) {
        e.preventDefault();

        var target = this.hash,
            $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top - 50 // - 200px (nav-height)
        }, 900, 'swing', function () {
            window.location.hash = '1' + target;
        });
    });
});

$(document).ready(function () {
    $('a[href^="#professionalservices"]').on('click', function (e) {
        e.preventDefault();

        var target = this.hash,
            $target = $(target);
			
			if ($(window).width() < 481) {
				
				$('html, body').stop().animate({
					'scrollTop': $target.offset().top - 103 // - 200px (nav-height)
				}, 900, 'swing', function () {
					window.location.hash = '1' + target;
				});
				
			}else if ($(window).width() <= 768) {
								
				$('html, body').stop().animate({
					'scrollTop': $target.offset().top - 56 // - 200px (nav-height)
				}, 900, 'swing', function () {
					window.location.hash = '1' + target;
				});
				
			}else{
				
				$('html, body').stop().animate({
					'scrollTop': $target.offset().top - 50 // - 200px (nav-height)
				}, 900, 'swing', function () {
					window.location.hash = '1' + target;
				});
				
			};
				
    });
});

$(document).ready(function () {
    $('a[href^="#aboutecommerce"]').on('click', function (e) {
        e.preventDefault();

        var target = this.hash,
            $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top - 50 // - 200px (nav-height)
        }, 900, 'swing', function () {
            window.location.hash = '1' + target;
        });
    });
});

$(document).ready(function () {
    $('a[href^="#features"]').on('click', function (e) {
        e.preventDefault();

        var target = this.hash,
            $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top - 50 // - 200px (nav-height)
        }, 900, 'swing', function () {
            window.location.hash = '1' + target;
        });
    });
});

$(document).ready(function () {
    $('a[href^="#faq"]').on('click', function (e) {
        e.preventDefault();

        var target = this.hash,
            $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top - 50 // - 200px (nav-height)
        }, 900, 'swing', function () {
            window.location.hash = '1' + target;
        });
    });
});

$(document).ready(function () {
    $('a[href^="#showcase"]').on('click', function (e) {
        e.preventDefault();

        var target = this.hash,
            $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top - 50 // - 200px (nav-height)
        }, 900, 'swing', function () {
            window.location.hash = '1' + target;
        });
    });
});

$(document).ready(function () {
    $('a[href^="#ecommercecontact"]').on('click', function (e) {
        e.preventDefault();

        var target = this.hash,
            $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top - 50 // - 200px (nav-height)
        }, 900, 'swing', function () {
            window.location.hash = '1' + target;
        });
    });
});


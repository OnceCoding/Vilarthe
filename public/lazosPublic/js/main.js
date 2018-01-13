(function($) {
    "use strict"; // Start of use strict

    /* Smooth scrolling using jQuery easing
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: (target.offset().top - 54)
                }, 1000, "easeInOutExpo");
                return false;
            }
        }
    });
*/
    // Closes responsive menu when a scroll trigger link is clicked
    $('.js-scroll-trigger').click(function() {
        $('.navbar-collapse').collapse('hide');
    });

    // Activate scrollspy to add active class to navbar items on scroll
    $('body').scrollspy({
        target: '#Main-nav',
        offset: 89
    });

    // Collapse Navbar
    var navbarCollapse = function() {
        if ($("#Main-nav").offset().top > 150) {
            $("#Main-nav").removeClass("navbar-dark");
            $("#Main-nav").addClass("navbar-light");
            $("#Main-nav").addClass("navbar-shrink");
        } else {
            if($( window ).width() > 892) {
                $("#Main-nav").removeClass("navbar-light");
                $("#Main-nav").addClass("navbar-dark");
            }else{
                $("#Main-nav").removeClass("navbar-dark");
                $("#Main-nav").addClass("navbar-light");
            }
            $("#Main-nav").removeClass("navbar-shrink");
        }
    };
    // Collapse now if page is not at top
    navbarCollapse();
    // Collapse the navbar when page is scrolled
    $(window).scroll(navbarCollapse);

    $('button').on('click', function(){
                 
        var lang = $(this).data('lang'); 
          
        $('html').prop('lang', lang);
          
      });
    


})(jQuery); // End of use strict

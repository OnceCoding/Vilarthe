$(function () {

    // Closes responsive menu when a scroll trigger link is clicked
    $('.js-scroll-trigger').click(function() {
        $('.navbar-collapse').collapse('hide');
    });


    $(".scroll").click(function(event){
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top - 80}, 1200);
    });


    var mainNav = $("#Main-nav");

    // Activate scrollspy to add active class to navbar items on scroll
    $('body').scrollspy({
        target: '#Main-nav',
        offset: 100
    });

    // Collapse Navbar
    var navbarCollapse = function() {

        if (mainNav.offset().top > 150) {
            mainNav.removeClass("navbar-dark");
            mainNav.addClass("navbar-light");
            $("#Main-nav").addClass("navbar-shrink");
        } else {
            if($( window ).width() > 892) {
                mainNav.removeClass("navbar-light");
                mainNav.addClass("navbar-dark");
            }else{
                mainNav.removeClass("navbar-dark");
                $("#Main-nav").addClass("navbar-light");
            }
            mainNav.removeClass("navbar-shrink");
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



});


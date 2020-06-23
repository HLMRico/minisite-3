// Sticky nav
$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    var logo = $('.navbar-brand img');
    var nav = $('nav');
    var link = $('.nav-link');

    if (scroll >= 200) {
        nav.addClass('sticky');
        link.addClass('primary');
        logo.attr('src', 'assets/img/logo.png');

    } else if (scroll <= 0) {
        nav.removeClass('sticky');
        link.removeClass('primary');
        logo.attr('src', 'assets/img/logo.png');
    }
});


$(document).ready(function() {
    // init parallax
    $('.parallax-window').parallax();
    
    // Make hamburger work
    $('.navbar-toggler').click(function() {
        $('.nav-toggle').toggleClass('menu-open');
    });

    // Slick slider
    $('.testimonials').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        fade: false
    });
});
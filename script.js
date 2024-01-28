$(document).ready(function(){
    $('.service-slider').slick({
        autoplay: true,  // Enable autoplay
        autoplaySpeed: 2000,  // Set autoplay speed in milliseconds
        infinite: true,
        slidesToShow: 1,
        adaptiveHeight: true
    });
});

// Readmore;;;;

$(document).ready(function(){
    $('#read-more').on('click', function(){
        $('.additional-content').slideDown();
        $(this).hide();
    });
});

// scrolling

$(document).ready(function(){
    AOS.init();
});


$(document).ready(function(){
    $('.menu-icon').click(function(){
        $('nav ul.nav-links').toggleClass('active');
        $('.menu-icon').toggleClass('fixed-menu-icon');
    });
});

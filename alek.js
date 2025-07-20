$(document).ready(function() {
    new WOW().init();
    $('.rotate').textrotator({
        animation: "fade",
        speed: 2000
    });
    $('#fullpage').fullpage({
        scrollBar: true,
        responsiveWidth: 900,
        responsiveHeight: 600,
        navigation: true,
        navigationPosition: 'right',
    });
});


$(window).scroll(function () {
    if ($(this).scrollTop() > 1) {
        $('header').addClass("sticky container");
    }
    else {
        $('header').removeClass("sticky container");
    }
});
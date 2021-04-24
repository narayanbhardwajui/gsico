//Scroll Function
$(window).scroll(function () {
    var scroll = $(window).scrollTop();

     //>=, not <=
    if (scroll > 300) {
        //clearHeader, not clearheader - caps H
        $(".header").addClass("header__fixed");
    }
    else {
        $(".header").removeClass("header__fixed");
    }
}); //missing );
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



 //Click event to scroll to top
 $('.page-scroll').click(function(){
    $('html, body').animate({scrollTop : 0},800);
    return false;
});
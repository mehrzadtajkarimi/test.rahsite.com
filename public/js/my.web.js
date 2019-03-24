$(window).scroll(function () {
    if ($(window).scrollTop() > 50) {
        $("#nav").css({backgroundColor: "#fff"});
        $("#nav a").css({color: "#999"});
    } else {
        $("#nav").css({backgroundColor: "transparent"});
        $("#nav a ").css({color: "#d8d8d8"});
    }
});
//////////////////////////////////////////////////////////////////////////////////////////
$("#header-index #nav #burger").click(function () {
    $(this).toggleClass("open");
    $('body').toggleClass("open-nav");
});
//////////////////////////////////////////////////////////////////////////////////////////
$(document).ready(function () {
    $(".movieh").hover3d({
        selector: ".movieh__card",
        perspective: 10000,
        sensitivity: 150
    });
});
//////////////////////////////////////////////////////////////////////////////////////////
var width = $(window).width() / 1.8;
$("#banner-big-bg .movieh .movieh__card").css({height: width});
$(window).resize(function () {
    var width = $(window).width() / 1.8;
    $("#banner-big-bg .movieh .movieh__card").css({height: width});
});
//////////////////////////////////////////////////////////////////////////////////////////
wow = new WOW(
    {
        boxClass: 'wow', // default
        animateClass: 'animated', // default
        offset: 100, // default
        mobile: false, // default
        live: true        // default
    }
)
wow.init();
//////////////////////////////////////////////////////////////////////////////////////////

$(document).ready(function () {
    var typed = new Typed("#typing-big-banner",{
        strings: [
            "طراحی وب سایت   مطابق با استاندارد های جهانی"
        ],
        typeSpeed: 60,
        startDelay: 4000,
        showCursor: false
    });



});




//////////////////////////////////////////////////////////////////////////////////////////
$("#top").click(function () {
    $("html,body").animate({scrollTop: 0}, 500);
});
$(window).scroll(function () {
    if ($(window).scrollTop() > 200) {
        $("#top").fadeIn(500);
    } else {
        $("#top").fadeOut(500);
    }
});
///////////////////////////////////////////////////////////////////////////
$("#nemonekar .Type-design").click(function () {
    $("#nemonekar .Type-design").find(".flip-box-front , .flip-box-back").removeClass("border border-secondary text-muted ");
    $("#Type-design-offer section").stop().fadeOut(0);

    var index = $(this).index();
    var section_selected = $("#Type-design-offer section").eq(index);

    var url = 'http://localhost/test.rahsite.com/index/tab';
    var data = {'number': index};

    $.post(url, data, function (msg) {
        section_selected.html(msg);
    });
    section_selected.fadeIn(500);
    $(this).find(".flip-box-front , .flip-box-back").addClass("border border-secondary text-muted ");
});
///////////////////////////////////////////////////////////////////////////
$("#articles #widget-categories ul li").click(function () {
    $("#text-categories .ajax-categories").stop().fadeOut(0);

    var index = $(this).index();
    var section_selected = $("#text-categories .ajax-categories").eq(index);

    var url = 'http://localhost/test.rahsite.com/categorizeArticles/tab_categorizeArticles';
    var data = {'number': index};

    $.post(url, data, function (msg) {
        section_selected.html(msg);
    });
    section_selected.fadeIn(500);
});
///////////////////////////////////////////////////////////////////////////

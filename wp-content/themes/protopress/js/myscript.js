/**
 * Created by Никита on 03.06.2016.
 */

/* раскрывающаяся лупа поиска */

function expand() {
    $(".search_form").toggleClass("close");
    $(".input").toggleClass("square");
    if ($('.search_form').hasClass('close')) {
        $('input').focus();
    } else {
        $('input').blur();
    }
}
$('button.search_form').on('click', expand);

/* конец раскрывающаяся лупа поиска */

/* смена фона при прокрутке на главной */

$(document).ready(function(){

    var bg_blue = $('.bg-blue');
    var bg_red = $('.bg-red');
    var bg_state = null;
    var scroll_orange = 0;
    var scroll_blue = 160;
    var scroll_red = 2000;

    var scroll_current = $(this).scrollTop();
    if (scroll_current > scroll_blue) {
        if (bg_state != 'red') {
            bg_state = 'red';
            bg_red.stop().animate({
                opacity: 1
            });
            bg_blue.stop().animate({
                opacity: 0
            });
        }
    } else if (scroll_current > scroll_orange) {
        if (bg_state != 'blue') {
            bg_state = 'blue';
            bg_blue.stop().animate({
                opacity: 1
            });
            bg_red.stop().animate({
                opacity: 0
            });
        }
    } 

    $(window).scroll(function() {
        var scroll_current = $(this).scrollTop();
        if (scroll_current < scroll_orange) {
            if (bg_state != 'orange') {
                bg_state = 'orange';
                bg_blue.stop().animate({
                    opacity: 0
                });
                bg_red.stop().animate({
                    opacity: 0
                });
            }
        } else if ((scroll_current > scroll_blue) && (scroll_current < scroll_red)) {
            if (bg_state != 'blue') {
                bg_state = 'blue';
                bg_blue.stop().animate({
                    opacity: 1
                });
                bg_red.stop().animate({
                    opacity: 0
                });
            }
        } else if (scroll_current > scroll_red) {
            if (bg_state != 'red') {
                bg_state = 'red';
                bg_red.stop().animate({
                    opacity: 1
                });
                bg_blue.stop().animate({
                    opacity: 0
                });
            }
        } else {
            bg_state = null;
            bg_blue.stop().animate({
                opacity: (scroll_current - (scroll_orange*2)) / ((scroll_blue - scroll_orange) / 2)
            });
        }
    });

});//jQuery

/* конец смена фона при прокрутке на главной */

/* всплывающие элементы на главной странице */


$(document).ready(function(){

    $("#ex1 .adnimated_post").css({visibility:"visible"});
    $("#ex1 .adnimated_post").addClass('animated fadeInLeft');

    $("#ex2 .adnimated_post").css({visibility:"visible"});
    $("#ex2 .adnimated_post").addClass('animated fadeInRight');

    var h = $(window).height();
    $(window).scroll(function(){
        if ( ($(this).scrollTop()+h) >= $("#ex3").offset().top) {
            $("#ex3").css({visibility:"visible"});
            $("#ex3").addClass('animated fadeInUp');
        }
        if ( ($(this).scrollTop()+h) >= $("#ex4").offset().top) {
            $("#ex4 .adnimated_post").css({visibility:"visible"});
            $("#ex4 .adnimated_post").eq(0).addClass('animated fadeInUp');
            $("#ex4 .adnimated_post").eq(1).addClass('animated fadeInUp');
        }
        if ( ($(this).scrollTop()+h) >= $("#ex5").offset().top) {
            $("#ex5 .adnimated_post").css({visibility:"visible"});
            $("#ex5 .adnimated_post").eq(0).addClass('animated fadeInLeft');
            $("#ex5 .adnimated_post").eq(1).addClass('animated fadeInRight');
        }
    });
    // var h = $(window).height();
    // $(window).scroll(function(){
    //     if ( ($(this).scrollTop()+h) >= $("#ex2").offset().top) {
    //         $("#ex2 .adnimated_post").css({visibility:"visible"});
    //         $("#ex2 .adnimated_post").eq(0).addClass('animated bounceInLeft');
    //         $("#ex2 .adnimated_post").eq(1).addClass('animated bounceInRight');
    //     }
    //     if ( ($(this).scrollTop()+h) >= $("#ex3").offset().top) {
    //         $("#ex3 .adnimated_post").css({visibility:"visible"});
    //         $("#ex3 .adnimated_post").eq(0).addClass('animated bounceInLeft');
    //         $("#ex3 .adnimated_post").eq(1).addClass('animated bounceInRight');
    //     }
    //     if ( ($(this).scrollTop()+h) >= $("#ex4").offset().top) {
    //         $("#ex4 .adnimated_post").css({visibility:"visible"});
    //         $("#ex4 .adnimated_post").addClass('animated zoomIn');
    //     }
    //
    //     if ( $(this).scrollTop() == 0 ) {
    //         $("#ex2 .adnimated_post, #ex3 .adnimated_post, #ex4 .adnimated_post").each(function(){
    //             if ( $(this).hasClass('last') ) {
    //                 $(this).removeClass().addClass('adnimated_post last');
    //             } else {
    //                 $(this).removeClass().addClass('adnimated_post');
    //             }
    //             $(this).css({visibility:"hidden"});
    //         });
    //     }
    // });
});


/* конец всплывающие элементы на главной странице */


/* видео на фон */
//jQuery is required to run this code
$( document ).ready(function() {

    scaleVideoContainer();

    initBannerVideoSize('.video-container .poster img');
    initBannerVideoSize('.video-container .filter');
    initBannerVideoSize('.video-container video');

    $(window).on('resize', function() {
        scaleVideoContainer();
        scaleBannerVideoSize('.video-container .poster img');
        scaleBannerVideoSize('.video-container .filter');
        scaleBannerVideoSize('.video-container video');
    });

});

function scaleVideoContainer() {

    var height = $(window).height() + 5;
    var unitHeight = parseInt(height) + 'px';
    $('.homepage-hero-module').css('height',unitHeight);

}

function initBannerVideoSize(element){

    $(element).each(function(){
        $(this).data('height', $(this).height());
        $(this).data('width', $(this).width());
    });

    scaleBannerVideoSize(element);

}

function scaleBannerVideoSize(element){

    var x = 1;

    if ($(window).width() / $(window).height() < 1.7) {
        x = $(window).height() - $(window).width(); //костыль, что бы убрать черную полосу
    }

    var windowWidth = $(window).width() + x,
        windowHeight = $(window).height() + 5,
        videoWidth,
        videoHeight;

    console.log(windowHeight);

    $(element).each(function(){
        var videoAspectRatio = $(this).data('height')/$(this).data('width');

        $(this).width(windowWidth);

        if(windowWidth < 1000){
            videoHeight = windowHeight;
            videoWidth = videoHeight / videoAspectRatio;
            $(this).css({'margin-top' : 0, 'margin-left' : -(videoWidth - $(window).width()) / 2 + 'px'});

            $(this).width(videoWidth).height(videoHeight);
        }

        $('.homepage-hero-module .video-container video').addClass('fadeIn animated');

    });
}

/* конец видео на фон */


/* правный скролинг до якоря НЕ РАБОТАЕТ НА СЛОВАРЕ

!function($){
    $(document).on('click', 'a[href^=#]', function () {
        $('html, body').animate({ scrollTop:  $('a[name="'+this.hash.slice(1)+'"]').offset().top }, 1000 );
        return false;
    });
}(jQuery);

/* конец правный скролинг до якоря */


/*
 We can use [body] or the element class/id that wraps the elements with tooltip/popover.
 Include the data-[] attribute in each element that needs it.
 */
$(document).ready(function () {
    //can also be wrapped with:
    //1. $(function () {...});
    //2. $(window).load(function () {...});
    //3. Or your own custom named function block.
    //It's better to wrap it.

    //Tooltip, activated by hover event
    $("body").tooltip({
        selector: "[data-toggle='tooltip']",
        container: "body"
    })
    //Popover, activated by clicking
        .popover({
            selector: "[data-toggle='popover']",
            container: "body",
            html: true
        });
    //They can be chained like the example above (when using the same selector).

});
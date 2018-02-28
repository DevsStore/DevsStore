$(document).ready(() => {
    var nav = $(".navbar");
    $(window).scroll(() => {
        var scroll = $(window).scrollTop();
        if (scroll >= 300) {
            nav.addClass("change-color-nav");
        } else {
            nav.removeClass("change-color-nav");
        }
    });
    var $btnTop = $(".btn-top");
    $(window).on("scroll", function() {
        if ($(window).scrollTop() >= 20) {
            $btnTop.fadeIn();
        } else {
            $btnTop.fadeOut();
        }
        $('.demo-card').each( function(i){
                    var bottom_of_object = $(this).position().top + $(this).outerHeight();
                    var bottom_of_window = $(window).scrollTop() + $(window).height();
                    if( bottom_of_window > bottom_of_object ){                
                        $(this).animate({'opacity':'1'},3000);
                    } 
                });
    });

    $btnTop.on("click", function() {
        $("html, body").animate({ scrollTop: 0 }, 300);
    });
    $('.flip-container').hover(function() {
        $(this).toggleClass('hover');
      })
});
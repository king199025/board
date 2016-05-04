$(document).ready(function() {
    /*owl-carousel*/
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
    $('.owl-carousel-1').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            autoplay: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
    });
    $('.owl-carousel-2').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            autoplay: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
    });
    $('.owl-carousel-3').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            autoplay: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 3
                }
            }
    });
   /*close owl-carousel*/
    /*-----функция появления стрелки вверх при прокрутке окна вниз-----*/
    $(window).scroll(function(){

        $(this).hide().removeAttr("href");
        if ($(window).scrollTop() >= "250") $(this).fadeIn("slow")/*показывать при прокрутке вниз показывать медленно #Go_Top*/
        var scrollDiv = $('#Go_Top');

        if ($(window).scrollTop() <= "250") $(scrollDiv).fadeOut("slow")/*при прокрутке ввверх медленно скрывать #Go_Top*/
        else $(scrollDiv).fadeIn("slow")
    });

    $('#Go_Top').click(function () {/*функция плавной прокрутки вверх при клике на стрелку "вверх"*/
        $("html, body").animate({scrollTop: 0}, "slow");
        return false;
    });
    /*----- close-----*/


});

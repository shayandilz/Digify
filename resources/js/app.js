require('./bootstrap');
// require('./gsap');
import 'swiper/css';
import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';
import $ from 'jquery';






document.addEventListener('DOMContentLoaded', function () {
    if (window.matchMedia('(max-width: 1200px)').matches)
    {

        $('.custom-dropdown').on('click', function(e)
        {
            let subMenu = $(this).children("ul");
            if(subMenu.is(':visible'))
            {
                subMenu.slideUp();
            } else {
                subMenu.slideDown();
            }

            return false;
        });
    }else{
        $("#navbarNav .custom-dropdown").hover(function() {
            var isHovered = $(this).is(":hover");
            if (isHovered) {
                $(this).children("ul").stop().slideDown(300);
            } else {
                $(this).children("ul").stop().slideUp(300);
            }
        });
    }

    //toggle header on time
    const toggleScrollClass = function () {
        if (window.scrollY > 24) {
            document.body.classList.add('scrolled');
        } else {
            document.body.classList.remove('scrolled');
        }
    }
    toggleScrollClass();

    //check scroll to take actions on it
    window.addEventListener('scroll', function () {
        toggleScrollClass();
    });

    const swiper = new Swiper('.swiper1', {
        // Optional parameters
        direction: 'vertical',
        loop: true,
        autoplay: {
            delay: 2000,
        },
        disableOnInteraction: false,
    });
    const swiper2 = new Swiper('.swiper2', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        spaceBetween: 35,
        slidesPerView: 3,
        centeredSlides: true,
        roundLengths: true,
        grabCursor: true,
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable:true,
        },
        disableOnInteraction: false,
        breakpoints: {
            360:{
                slidesPerView: 1,
            },
            1050:{
                slidesPerView: 3,
            }
        }
    });
})



$(document).ready(function (){
        var swiper = new Swiper(".mySwiper", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

        var swipervideo = new Swiper(".mySwipervideo", {
            speed: 400,
            spaceBetween: 0,
            slidesPerView: 1,
            breakpoints: {
                // when window width is <= 499px
                499: {
                    slidesPerView: 1,
                    spaceBetweenSlides: 5,
                    spaceBetween: 30,
                },
                // when window width is <= 999px
                768: {
                    slidesPerView: 1,
                    spaceBetweenSlides: 5,
                    spaceBetween: 30,
                },
                1024:{
                    slidesPerView: 1,
                    spaceBetweenSlides: 5
                }
            },
            pagination: {
                el: '.swiper-pagination',
                paginationClickable: true,
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

        var swipermain = new Swiper(".lpDuxSwiper",{ 
            slidesPerView: 'auto',
            loop: true,
            effect: 'fade',
            speed: 4000,
            slidesPerView: '1',
            autoplay: {
                enabled: true,
                delay: 1,
            },
        });

        var swiperutil = new Swiper('.swiper-util', {
            // Optional parameters
            direction: 'horizontal',
            // loop: true,
            speed: 400,
            

            breakpoints: {
                // when window width is <= 499px
                499: {
                    slidesPerView: 1,
                    spaceBetweenSlides: 5
                },
                // when window width is <= 999px
                768: {
                    slidesPerView: 2,
                    spaceBetweenSlides: 5
                },
                1024:{
                    slidesPerView: 3,
                    spaceBetweenSlides: 5
                }
            },
            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
                paginationClickable: true,
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });



        var $myGroup = $('#myGroup');
        $myGroup.on('show.bs.collapse','.collapse', function() {
            $myGroup.find('.collapse.in').collapse('hide');
        });



            let tramissaoDiv = $('#tramissaoDiv');
            let toggleProduct = [];
            toggleProduct = $('.product-option');
    
            $(toggleProduct).each(function () {
                $($(this).on('click', function(){
                console.log('clicou no', $(this) );
                    let showProd = $(this).data('target');
                    $('.product-description').removeClass("product-description__show");                
                    $(showProd).addClass("product-description__show");
                    // console.log('target', );
                    // let iframe = $(tramissaoDiv).find('.iframePlayer');
                    // $(iframe).attr('src', urlVevo);
                })
                
            );})

        AOS.init();


});

//tooltip
$(function () {
	$('[data-toggle="tooltip"]').tooltip()
})

//back to top
$(document).ready(function() {
	$('#subir').click(function(){
		$('html, body').animate({scrollTop:0}, 'slow');
		return false;
	});
});


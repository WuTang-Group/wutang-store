(function($) {
    "use strict";

    /*=====================
     01.  Blurring Home Slider js
     ==========================*/
    if($('body').find('.home-slider')) {
         $(window).scroll(function () {
            if($(this).scrollTop() >= 200) {
                var pixs = $(document).scrollTop();
                pixs = pixs / 100;
                $(".home-slider .home-slide,.home-slider .slider-contain,.home-slider ul.slick-dots").css({"-webkit-filter": "blur("+pixs+"px)","filter": "blur("+pixs+"px)" });
            }else { 
                $(".home-slider .home-slide,.home-slider .slider-contain,.home-slider ul.slick-dots").css({"-webkit-filter": "","filter": "" }); 
            }
        });
    }
    /*var element = $('.onscroll'),
        parent = $('.onscroll').parent().innerHeight(),
        originalY = element.offset().top;
    var topMargin = 10;
    element.css('position', 'relative');
    $(window).scroll(function () {
        var scrollTop = $(window).scrollTop();
        console.log(element.innerHeight()+element.position().top);
        console.log(parent);
         if ((element.innerHeight()+element.position().top) >= parent) {
         } else {
            
         }
         element.stop(false, false).animate({
                top: scrollTop < originalY ? 0 : scrollTop - originalY + topMargin
            }, 300);
    });*/

    /*=====================
     03.  Dropdown js
     ==========================*/
    $( document ).ready( function() {
        $('.dropdown').on('show.bs.dropdown', function() {
            $( this ).find( '.dropdown-menu' ).first().stop(true, true).slideDown(250);
        });
        $('.dropdown').on('hide.bs.dropdown', function(){
            $( this ).find( '.dropdown-menu' ).first().stop(true, true).slideUp(250);
        });
    });

    /*=====================
     04.  General js
     ==========================*/

    $(window).scroll(function(){
        var sticky = $('header.header'),
            scroll = $(window).scrollTop();
        if ($(window).width() > 575) {
            if (scroll >= 100) { 
                sticky.addClass('header-scrolled');
            } else { 
                sticky.removeClass('header-scrolled');
            }
        } else {
            sticky.removeClass('header-scrolled');
        }
    });
    
    $(document).ready(function() {
        $(document).on('click','a.anchor',function(e) {
            if(e.target.hash && $(e.target).attr('data-toggle') != 'tab') {
                setTimeout(function() {
                    $('html, body').scrollTop(0).show();
                    $('html, body').animate({
                        scrollTop: $(e.target.hash).offset().top - 80
                    }, 2000)
                }, 0);
                return false;
            }
        });
        if(window.location.hash != '') {
            setTimeout(function() {
                $('html, body').scrollTop(0).show();
                $('html, body').animate({
                    scrollTop: $(window.location.hash).offset().top - 80
                }, 2000)
            }, 0);
            return false;
        }
    });

    $(document).on('click','.footer-theme .sub-title',function() {
        if ($(window).width() < 768) {
            $(this).toggleClass('open');
        }
    });
    
    $(window).scroll(function () {
        if ($(this).scrollTop() >= 500) {
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }
    }); 
    $('#back-to-top').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });

    /*=====================
     05. Image to background js
     ==========================*/
    $(".bg-top").parent().addClass('b-top');
    $(".bg-bottom").parent().addClass('b-bottom');
    $(".bg-center").parent().addClass('b-center');
    $(".bg_size_content").parent().addClass('b_size_content');
    $(".bg-img").parent().addClass('bg-size');
    $(".bg-img.blur-up").parent().addClass('blur-up lazyload');

    jQuery('.bg-img').each(function() {

        var el = $(this),
            src = el.attr('src'),
            parent = el.parent();

        parent.css({
            'background-image': 'url(' + src + ')',
            'background-size': 'cover',
            'background-position': 'center',
            'display': 'block'
        });

        el.hide();
    });

    /*=====================
     06. Slider js
     ==========================*/

    $('.home-slider, .brand-slider, .general-slider, .product-idea-slider').on('init', function(e, slick) {
        var $firstAnimatingElements = $('div.home-slide:first-child,div.brand-slide:first-child,div.general-slide:first-child').find('[data-animation]');
        doAnimations($firstAnimatingElements);    
    });
    $('.home-slider, .brand-slider, .general-slider, .product-idea-slider').on('beforeChange', function(e, slick, currentSlide, nextSlide) {
        var $animatingElements = $('div.slick-slide[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
        doAnimations($animatingElements);    
    });
    $('.home-slider, .general-slider').slick({
        arrows: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 5000,
        fade: true,
        dots: true,
        customPaging: function(slick,index) {
            return '<a>' + (index + 1) + '</a>';
        }
    });
    $('.brand-slider').slick({
        arrows: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 5000,
        fade: true,
        dots: true,
        customPaging: function(slick,index) {
            return '<a>' + (index + 1) + '</a>';
        }
    });
    $('.product-idea-slider').slick({
        arrows: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 5000,
        fade: true,
        dots: true,
        asNavFor: '.product-idea-slider-nav',
        customPaging: function(slick,index) {
            return '<a>' + (index + 1) + '</a>';
        }
    });
    $('.product-idea-slider-nav').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        asNavFor: '.product-idea-slider',
        arrows: false,
        infinite: true,
        dots: false,
        focusOnSelect: true,
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 1,
            }
        }]
    });

    function doAnimations(elements) {
        var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        elements.each(function() {
            var $this = $(this);
            var $animationDelay = $this.data('delay');
            var $animationType = 'animated ' + $this.data('animation');
            $this.css({
                'animation-delay': $animationDelay,
                '-webkit-animation-delay': $animationDelay
            });
            $this.addClass($animationType).one(animationEndEvents, function() {
                $this.removeClass($animationType);
            });
        });
    }
    $('.slick-next').on("click", function(){
       $('.home-slider, .brand-slider, .general-slider, .product-slider, .product-routine-slider').slick("slickNext");
    });
    $('.slick-prev').on("click", function(){
       $('.home-slider, .brand-slider, .general-slider, .product-slider, .product-routine-slider').slick("slickPrev");
    });


    $('.product-slider').slick({
        arrows: false,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
            }
        },{
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
            }
        }]
    });

    $('.product-routine-slider').slick({
        arrows: false,
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        customPaging: function(slick,index) {
            return '<a>' + (index + 1) + '</a>';
        },
        responsive: [{
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
                dots: true,
            }
        },{
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
            }
        }]
    });

    $('.story-content-slick').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.story-nav'
    });
    $('.story-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        centerPadding: '0',
        asNavFor: '.story-content-slick',
        dots: false,
        centerMode: true,
        focusOnSelect: true,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }]
    });
    
    $(".story-content-slick, .story-nav").on('afterChange', function(e, slick, currentSlide){
        $('.story-index span').text(currentSlide+1);
    });

    /*=====================
     07. Product Quantity js
     ==========================*/
    $(document).on('click', '.plus-btn', function(e) {
        var $input = $(this).prev('input.qty');
        var val = parseInt($input.val());
        $input.val( val+1 ).change();
        return false;
    });
    $(document).on('click', '.minus-btn', function(e) {
        var $input = $(this).next('input.qty');
        var val = parseInt($input.val());
        if (val > 1) {
            $input.val( val-1 ).change();
        } 
        return false;
    });

    /*=====================
     08. Checkout js
     ==========================*/
    $(document).on('click', '.address-checkbox', function(){
        if($(this).val() == 'default') {
            $('.checkout #default-shipping').addClass('active');
            $('.checkout #new-shipping').removeClass('active');
            $('.checkout #new-shipping').find('input').prop('required',false);
        } else if($(this).val() == 'new') {
            $('.checkout #default-shipping').removeClass('active');
            $('.checkout #new-shipping').addClass('active');
            $('.checkout #new-shipping').find('input').prop('required',true);
        }
    });

    /*=====================
     09. Accordion js
     ==========================*/
    $(document).on('click', '.terms-and-conditions-wrapper .accordion h2.title, .privacy-policy-wrapper .accordion h2.title, .customer-care-wrapper .accordion h2.title, .general-accordion-wrapper .accordion h2.title', function(){
        var parent = $(this).next().attr('data-parent');
        if(parent) {
            $(this).parent().find('h2').addClass('collapsed');
            $(this).parent().find('h2').next().removeClass('show').addClass('collapsed');
        }
        $(this).toggleClass('collapsed');
        $(this).next().toggleClass('collapsed show');
    });

    $(document).on('click', '#the-house .general-accordion-wrapper .accordion h2.title', function(){
        var bg = $(this).next().attr('data-bg');
        $('#the-house #the-house-bg').css('background-image','url('+bg+')');
    });

    /*=====================
     10. Learn More js
     ==========================*/
    $(document).on('click', '.learn-more', function(e) {
        $(this).prev('.learn-more-content').css('height','auto');
        $(this).hide();
    });


    /*=====================
     11.  Form Validation js
     ==========================*/
    window.addEventListener('load', function() {
        var forms = document.getElementsByClassName('needs-validation');
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
    }, false);

})(jQuery);

/*=====================
 Menu js
 ==========================*/
function openNav(tab) {
    $('#mySidenav').addClass('open-side');
    $('#mySidenav #nav-'+tab+'-tab').tab('show');
    $('body').addClass('overflow-hidden');
}
function closeNav() {
    $('#mySidenav').removeClass('open-side');
    $('body').removeClass('overflow-hidden');
}

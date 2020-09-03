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
                $(".full-page-banner").css({"-webkit-filter": "blur("+pixs+"px)","filter": "blur("+pixs+"px)" });
            }else { 
                $(".full-page-banner").css({"-webkit-filter": "","filter": "" }); 
            }
        });
    }

    /*=====================
     03.  Dropdown js
     ==========================*/
    $( document ).ready( function() {
        $('.dropdown').on('show.bs.dropdown', function() {
            $( 'body' ).css('overflow', 'hidden');
            $( this ).find( '.dropdown-menu' ).first().stop(true, true).slideDown(250);
        });
        $('.dropdown').on('hide.bs.dropdown', function(){
            $( 'body' ).css('overflow', '');
            $( this ).find( '.dropdown-menu' ).first().stop(true, true).slideUp(250);
        });
    });

    /*=====================
     04.  General js
     ==========================*/

    $(window).scroll(function(){
        var sticky = $('header.header'),
            scroll = $(window).scrollTop();
        if (scroll >= 100) { 
            sticky.addClass('header-scrolled');
        } else { 
            sticky.removeClass('header-scrolled');
        }
    });
    
    $(document).ready(function() {
        $(document).on('click','a[href^="#"]',function(e) {
            var location = this.hash;
            if(location.length) {
                setTimeout(function() {
                    $('html, body').animate({
                        scrollTop: $(location).offset().top - 80
                    }, 1500, 'easeInOutExpo')
                }, 0);
            }
            return false;
        });
        if(window.location.hash != '') {
            setTimeout(function() {
                $('html, body').animate({
                    scrollTop: $(window.location.hash).offset().top - 80
                }, 1500, 'easeInOutExpo')
            }, 0);
            return false;
        }

        $('.popup-video').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,

            fixedContentPos: false
        });
        scroll_form();
        flip();
    });

    function flip() {
        $('.the-house-content-wrapper').hover(function(){
            if(!$(this).hasClass('flipped')) {
                $(this).closest('.the-house-flip-slider').find('.flipped').removeClass('flipped');
                $(this).addClass('flipped');
            }
        });
    }
    $(window).resize(function(){
        scroll_form();
        if ($(window).width() > 991) {
            flip();
        }
        if ($(window).width() < 992) {
            flip_slider();
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
        scroll_form();
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

    $(window).scroll(function() {
        if($(window).scrollTop() > 0) {
            var parallaxDistance = ($(window).scrollTop()/2), 
                parallaxCSS = "translate3d(0, "+ parallaxDistance +"px , 0)";
            $('.home-slide').css('transform', parallaxCSS);
        } else {
            $('.home-slide').css('transform', 'translate3d(0, 0, 0)');
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

    $('.other-category-slider').slick({
        slidesToShow: 3,
        arrows: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 5000,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ],
    });

    $('.the-house-slider').slick({
        slidesToShow: 3,
        arrows: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 5000,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ],
    });

    $('.the-house-slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.the-house-slider',
        arrows: false,
        dots: false,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            }
        ],
    });

    function flip_slider() {
        if(!$('.the-house-flip-slider').hasClass('slick-initialized')) {
            $('.the-house-flip-slider').slick({
                slidesToShow: 1,
                arrows: true,
                infinite: true,
                dots: true,
                autoplay: false,
                autoplaySpeed: 5000,
                responsive: [
                    {
                        breakpoint: 9999,
                        settings: "unslick"
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: true,
                            initialSlide: 1,
                        }
                    }
                ]
            });
            $('.the-house-flip-slider').on('afterChange', function(e, slick, currentSlide, nextSlide) {
                var index = parseInt(currentSlide);
                $('.the-house-flip-mobile').find('.flipped').removeClass('flipped');  
                $('.the-house-flip-mobile .col-4:nth-child('+(index+1)+')').addClass('flipped');
            });
        }
    }
    $(document).ready(function() {
        if ($(window).width() < 992) {
            flip_slider();
        }
    });

    function doAnimations(elements) {
        var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        elements.each(function() {
            animation($(this), animationEndEvents);
        });
    }

    function animation(element, events) {
        var $this = element;
        var $animationDelay = $this.data('delay');
        var $animationType = 'animated ' + $this.data('animation');
        $this.css({
            'animation-delay': $animationDelay,
            '-webkit-animation-delay': $animationDelay
        });
        $this.addClass($animationType).one(events, function() {
            $this.removeClass($animationType);
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
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
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
    if($('.story-nav .slick-slide').length <= 2){
        $('.story-nav').slick('slickSetOption', 'centerMode', false);
    }
    
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
        var shown = $(this).next().hasClass('show');
        if(parent && !shown) {
            $(this).parent().find('h2').addClass('collapsed');
        }
        $(this).toggleClass('collapsed');
        $(this).next().collapse('toggle')
    });

    $(document).on('click', '#the-house .general-accordion-wrapper .accordion h2.title', function(){
        var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        var thehousebg = $('#the-house #the-house-bg');
        var current = thehousebg.attr('data-bg');
        var next    = $(this).next().attr('data-bg');
        if(current != next) {
            thehousebg.attr('data-bg', next);
            thehousebg.css('background-image','url(' + next + ')');
            animation(thehousebg, animationEndEvents);
        }
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
                    pass = false;
                } else {
                    pass = true;
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);

    /*=====================
     12.  Locale Switcher js
     ==========================*/
    $(document).on('change', '.language-selector-wrapper select', function(e) {
        changeLocale(this.value);
    });


    /*=====================
     13. Scroll Elements js
     ==========================*/
    $(window).scroll(function () {
        var margin = null;
        if($('.scroll-element')[0]) {
            $(window).on("scroll", function () {
                var scrollHeight = $(document).height(),
                    scrollTop = $(window).scrollTop(),
                    offsetBottom = 110, // Offset depending on the height of the footer
                    offsetTop = 100, // Offset depending on the height of the header
                    positionTop = $(".scroll-element").offset().top,
                    affix;


                if (margin != null && (scrollTop + margin <= positionTop)) {
                    // The sidebar has reached the bottom and is still on the bottom
                    affix = false;
                } else if (positionTop + $(".scroll-element").height() >= scrollHeight - offsetBottom) {
                    // The sidebar has reached the bottom
                    affix = 'bottom';
                } else if (scrollTop <= offsetTop) {
                    // The sidebar has reached the top
                    affix = 'top';
                } else {
                    // The sidebar is midway
                    affix = false;
                }
                // If the sidebar hasnot changed his state, return;
                if ($(".scroll-element").hasClass('at' + (affix ? '-' + affix : ''))) return;

                if (affix == 'bottom') {
                    margin = positionTop - scrollTop;
                } else {
                    margin = null;
                }
                // If the related class is added to the div
                $(".scroll-element").removeClass('at at-top at-bottom').addClass('at' + (affix ? '-' + affix : ''))
            });
        }
    });

    /*=====================
     14. Single Product js
     ==========================*/
    //$(window).scroll(function () {
    function scroll_form() {
        if ($(window).width() > 991) {
            if($('#benefit')[0]) {
                var orig = $("#product-action").offset().top,
                    pos = $("#benefit").offset().top - 120;
                if ($(window).scrollTop() > pos) {
                    $(".single-product .product-right").removeClass('is_fixed');
                    $(".single-product .product-right").css({
                        position: 'absolute',
                        top: pos
                    });
                } else {
                    $(".single-product .product-right").addClass('is_fixed');
                    $(".single-product .product-right").css({
                        position: 'fixed',
                        top: orig,
                        zIndex: 1
                    });
                }
            }
        } else {
            $(".single-product .product-right").removeClass('is_fixed');
            $(".single-product .product-right").css({
                position: 'initial',
                top: ''
            });
        }
    }

    //Cart.initJQuery();
    $(document).on('click', '.btn-add-to-cart', function(e) {
        var id = $(this).data('id');
        $(this).prop('disabled',true).addClass('loading');
        if (!token) { //检查用户登录token > 位于文档axios.js
            $('#mySidenav').addClass('open-side');
            $('#mySidenav #nav-account-tab').tab('show');
            $('body').addClass('overflow-hidden');
        } else {
            var pid = [{ 'product_id' : id }];
            var formData = { 'product_list': pid };

            axios.post(BASE_URL+'api/shop_carts', formData)
                .then(function (response) {
                    if(response.data.code == 20001) {
                        refresh_cart();
                        toastr['success']( lang.item_added );
                    } else {
                        toastr['error'](response.data.msg);
                    }
                    console.log(response);
                })
                .catch(function (error) {
                    console.log(error);
                });
            $(this).prop('disabled',false).removeClass('loading');
        }
    });

    $(document).on('click', '.remove-item', function(e) {
        var id = $(this).data('id');
        if (!token) { //检查用户登录token > 位于文档axios.js
            $('#mySidenav').addClass('open-side');
            $('#mySidenav #nav-account-tab').tab('show');
            $('body').addClass('overflow-hidden');
        } else {
            axios.delete(BASE_URL+'api/shop_carts/'+id)
                .then(function (response) {
                    if(response.data.code == 20001) {
                        refresh_cart();
                        toastr['success']( lang.item_removed );
                    } else {
                        toastr['error'](response.data.msg);
                    }
                })
                .catch(function (error) {
                    console.log(error);
                });
        }
    });

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
function login() {
    $('form').unbind('submit').submit(function(event) {
        event.preventDefault();
        $this = $(this);
        if (!pass) { return false; } //Check form validity
        var formData = {
            'username' : $this.find('input[name=username]').val(),
            'password' : $this.find('input[name=password]').val(),
        };
        var url = $('#intended_url');
        
        axios.post(BASE_URL+'api/auth/login', formData)
            .then(function (response) {
                if(response.data.code == 20001) {
                    toastr['success']( lang.logged_in );
                    Cookies.set('token',response.data.data.access_token);
                    if(url[0]) {
                        window.location.href = url.val();
                    } else {
                        location.reload();
                    }
                } else {
                    toastr['error'](response.data.msg);
                }
            })
            .catch(function (error) {
                console.log(error);
            });
    });
}
function logout() {
    axios.delete(BASE_URL+'api/auth/logout')
        .then(function (response) {
            if(response.data.code == 20001) {
                toastr['success']( lang.logged_out );
                Cookies.remove('token');
                window.location.href = BASE_URL;
            } else {
                toastr['error'](response.data.msg);
            }
        })
        .catch(function (error) {
            console.log(error);
        });
}

function changeLocale(lang) {
    Cookies.set('locale',lang);
    location.reload();
}

function refresh_cart() {
    //var $request = $.get('http://localhost:8000/refresh_cart');//BASE_URL + 'refresh_cart');
    var $cart = $('#cart');
    var $minicart = $('#mcart');
    var $count = $('.mini-cart .count');

    $minicart.addClass('bg-loading'); // add loading class (optional)
    if($cart[0]) { $cart.addClass('bg-loading'); }// add loading class (optional)

    axios.get(BASE_URL+'refresh_cart')
        .then(function (response) {
            $minicart.html(response.data.minicart);
            $count.html(response.data.count);

            if($cart[0]) { 
                $cart.html(response.data.cart);
                $cart.removeClass('bg-loading'); 
            }
            $minicart.removeClass('bg-loading');
        })
        .catch(function (error) {
            console.log(error);
        });

}
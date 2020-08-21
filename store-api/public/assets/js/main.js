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
            //$(this).parent().find('div').removeClass('show').addClass('collapse');
            /*$(this).parent().find('h2').next().removeClass('show').addClass('collapsed');*/
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

    Cart.initJQuery();
    $(document).on('click', '.btn-add-to-cart', function(e) {
        var id = $(this).data('id');
        $(this).prop('disabled',true).addClass('loading');
        if (!token) { //检查用户登录token > 位于文档axios.js
            var item = { id: id }
            Cart.addItem(item);
            $(this).prop('disabled',false).removeClass('loading');
            refresh_cart();
            toastr['success']('商品已加入您的购物车。');
        } else {
            var formData = { 'product_id' : id };

            axios.post(BASE_URL+'api/shop_carts', formData)
                .then(function (response) {
                    if(response.data.code == 20001) {
                        refresh_cart();
                        toastr['success']('商品已加入您的购物车。');
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
            var item = { id: id }
            Cart.removeItem(item);
            refresh_cart();
            toastr['success']('商品已从您的购物车删除。');
        } else {
            axios.delete(BASE_URL+'api/shop_carts/'+id)
                .then(function (response) {
                    if(response.data.code == 20001) {
                        refresh_cart();
                        toastr['success']('商品已从您的购物车删除。');
                    } else {
                        toastr['error'](response.data.msg);
                    }
                    console.log(response);
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
                    toastr['success']('登录成功。');
                    Cookies.set('token',response.data.data.access_token);
                    if(url[0]) {
                        window.location.href = url.val();
                    } else {
                        location.reload();
                    }
                } else {
                    toastr['error'](response.data.msg);
                }
                console.log(response);
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
                toastr['success']('登出成功。');
                Cookies.remove('token');
                window.location.href = BASE_URL;
            } else {
                toastr['error'](response.data.msg);
            }
            console.log(response);
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
    var $minicart = $('#nav-mini-cart');
    var $count = $('.mini-cart .count');

    $minicart.addClass('loading'); // add loading class (optional)
    if($cart[0]) { $cart.addClass('loading'); }// add loading class (optional)

    axios.get(BASE_URL + 'refresh_cart')
        .then(function (response) {
            $minicart.html(response.data.minicart);
            $count.html(response.data.count);

            if($cart[0]) {
                $cart.html(response.data.cart);
                $cart.removeClass('loading');
            }
            $minicart.removeClass('loading');
            console.log(response);
        })
        .catch(function (error) {
            console.log(error);
        });

}

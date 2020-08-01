<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="assets/img/fav.png">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="image" content="">
    <meta itemprop="name" content="">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image:src" content="">

    <meta name="og:title" content="">
    <meta name="og:description" content="">
    <meta name="og:image" content="">
    <meta name="og:url" content="">
    <meta name="og:site_name" content="">
    <meta name="og:type" content="website">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/animate.css/animate.min.css') }}">
    @yield('header_vendor_style_css')

    <link rel="stylesheet" href="{{ URL::asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/responsive.css') }}">
    @yield('header_style_css')
</head>
<body class="{{ Request::is('/') ? 'home ' : null }}cn">
    <div id="app">
        @include('layouts.partials.header')
        <main class="main-content">
            @yield('content')
        </main>
        @include('layouts.partials.footer')
        <!-- Sidebar -->
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="sidebar-overlay" onclick="closeNav()"></a>
            <nav>
                <div class="sidebar-header d-flex justify-content-between">
                    <div class="nav nav-pills">
                        <a class="nav-item tx-dark-gray mr-4" id="nav-account-tab" data-toggle="tab" href="#nav-account" role="tab" aria-controls="nav-account" aria-selected="true">
                            <img src="{{ URL::asset('assets/images/icon/account.png') }}" class="img-fluid" alt="">
                        </a>
                        <a class="nav-item tx-dark-gray mini-cart position-relative" id="nav-mini-cart-tab" data-toggle="tab" href="#nav-mini-cart" role="tab" aria-controls="nav-mini-cart" aria-selected="true">
                            <img src="{{ URL::asset('assets/images/icon/shopping-bag.png') }}" class="img-fluid" alt="">
                            <span class="count">1</span>
                        </a>
                    </div>
                    <a href="javascript:void(0)" onclick="closeNav()">
                        <div class="sidebar-back text-right">
                            <img src="{{ URL::asset('assets/images/icon/close.png') }}" class="img-fluid" alt="">
                        </div>
                    </a>
                </div>
                <div class="sidebar-body d-flex flex-column justify-content-center align-items-center">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade" id="nav-account" role="tabpanel" aria-labelledby="nav-account-tab">
                            <form>
                                <div class="form-group">
                                    <label for="username" class="tx-dark-gray">用户名 *</label>
                                    <input type="text" class="form-control border-dark" placeholder="电子邮件 / 手机号" id="username">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="tx-dark-gray">密码 *</label>
                                    <input type="password" class="form-control border-dark" id="password">
                                </div>
                                <div class="form-group form-check d-flex justify-content-between">
                                    <input type="checkbox" class="form-check-input" id="remember-me">
                                    <label class="form-check-label" for="remember-me">记住我</label>
                                    <a href="forgot-password.php" class="tx-dark-gray">忘记密码</a>
                                </div>
                                <div class="d-flex align-items-center">
                                    <button type="submit" class="btn btn-solid">登陆</button>
                                    <label class="m-auto">或</label>
                                    <a href="register.php" class="btn btn-outline">注册</a>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="nav-mini-cart" role="tabpanel" aria-labelledby="nav-mini-cart-tab">
                            <div class="mini-cart">
                                <div class="cart-item">
                                    <div class="d-flex position-relative">
                                        <a href=""><img src="https://www.enkoproducts.com/wp-content/uploads/2018/11/v5-02.jpg" /></a>
                                        <a href="" class="remove-product tx-dark-gray">删除</a>
                                        <div class="product-description">
                                            <p class="tx-mont">SKIN CAVIAR LUXE CREAM SHEER</p>
                                            <p>鱼子精华琼贵轻盈乳霜</p>
                                            50 ml / 1.7 oz
                                            <div class="tx-uppercase mt-2 tx-dark-gray">数量: 1 <span>| 20 ml / 0.68 oz</span></div>
                                        </div>
                                    </div>
                                    <div class="product-price text-right align-self-end">¥ 4,150</div>
                                </div>
                                <div class="cart-item">
                                    <div class="d-flex position-relative">
                                        <a href=""><img src="https://www.enkoproducts.com/wp-content/uploads/2018/11/v5-02.jpg" /></a>
                                        <a href="" class="remove-product tx-dark-gray">删除</a>
                                        <div class="product-description">
                                            <p class="tx-mont">SKIN CAVIAR LUXE CREAM SHEER</p>
                                            <p>鱼子精华琼贵轻盈乳霜</p>
                                            50 ml / 1.7 oz
                                            <div class="tx-uppercase mt-2 tx-dark-gray">数量: 1 <span>| 20 ml / 0.68 oz</span></div>
                                        </div>
                                    </div>
                                    <div class="product-price text-right align-self-end">¥ 4,150</div>
                                </div>
                                <hr class="border-bottom">
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="cart.php" class="btn btn-solid d-block">前往购物车</a>
                                    <a href="checkout.php" class="btn btn-outline d-block">结账</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-5">
                        <img src="{{ URL::asset('assets/images/queen-logo-siderbar.png') }}" class="img-fluid logo" alt="">
                        <div class="contact">
                            <label class="d-block tx-dark-gray">+1 (378) 400-1234</label>
                            <label class="d-block"><a href="" class="tx-dark-gray">contact@queenspades.com</a></label>
                        </div>
                        <!-- <div class="d-flex justify-content-center">
                            <div class="mr-3">
                                <a href="#"><img src="{{ URL::asset('assets/images/icon/wechat-g.png') }}" alt=""></a>
                            </div>
                            <div>
                                <a href="#"><img src="{{ URL::asset('assets/images/icon/weibo-g.png') }}" alt=""></a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </nav>
        </div>
        <!-- Widgets -->
        <a id="back-to-top" href="#"><i class="fa fa-angle-up fa-2x" aria-hidden="true"></i></a>
    </div>
    @yield('before_footer_scripts')
    <script src="{{ URL::asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor/slick/slick.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor/1000hz-bootstrap-validator/validator.min.js') }}"></script>
    @yield('footer_vendor_scripts')

    <script src="{{ URL::asset('assets/js/main.js') }}"></script>
    @yield('footer_scripts')
</body>
</html>

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
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/toastr/toastr.min.css') }}">
    @yield('header_vendor_style_css')

    <link rel="stylesheet" href="{{ URL::asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/responsive.css') }}">
    @yield('header_style_css')
</head>
<body class="{{ Request::is('/') ? 'home ' : null }} {{ !empty($_COOKIE['locale']) && $_COOKIE['locale'] == 'en' ? 'en':'cn' }}">
    <div id="app">
        @include('layouts.partials.header', ['count' => $count])
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
                        @if (empty($_COOKIE['token']))
                        <a class="nav-item tx-dark-gray mr-4" id="nav-account-tab" data-toggle="tab" href="#nav-account" role="tab" aria-controls="nav-account" aria-selected="true">
                        @else
                        <a class="nav-item tx-dark-gray mr-4" href="/my-account">
                        @endif    
                            <img src="{{ URL::asset('assets/images/icon/account.png') }}" class="img-fluid" alt="">
                        </a>
                        <a class="nav-item tx-dark-gray mini-cart position-relative" id="nav-mini-cart-tab" data-toggle="tab" href="#nav-mini-cart" role="tab" aria-controls="nav-mini-cart" aria-selected="true">
                            <img src="{{ URL::asset('assets/images/icon/shopping-bag.png') }}" class="img-fluid" alt="">
                            <span class="count">
                                {{ $count?: 0 }}
                            </span>
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
                        @if (empty($_COOKIE['token']))
                        <div class="tab-pane fade" id="nav-account" role="tabpanel" aria-labelledby="nav-account-tab">
                            <form class="needs-validation" method="post" novalidate>
                                <div class="form-group">
                                    <label for="username" class="tx-dark-gray">@lang('general.username') *</label>
                                    <input type="text" name="username" class="form-control border-dark" id="username" required>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="tx-dark-gray">@lang('general.password') *</label>
                                    <input type="password" name="password" class="form-control border-dark" id="password" required>
                                </div>
                                <div class="form-group form-check d-flex justify-content-end">
                                    <a href="/forgot-password" class="tx-dark-gray">@lang('general.forgot-password')</a>
                                </div>
                                <div class="d-flex align-items-center">
                                    <button type="submit" onclick="login()" class="btn btn-solid">@lang('general.login')</button>
                                    <label class="m-auto">@lang('general.or')</label>
                                    <a href="/register" class="btn btn-outline">@lang('general.register')</a>
                                </div>
                            </form>
                        </div>
                        @endif
                        <div class="tab-pane fade" id="nav-mini-cart" role="tabpanel" aria-labelledby="nav-mini-cart-tab">
                            <div id="mcart" class="mini-cart">
                                @include('partials.mini-cart', ['cart_collection' => $cart_collection])
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
        @if(Session::get('intended_url'))
            <input id="intended_url" type="hidden" value="{{ Session::get('intended_url') }}" />
            @php Session::forget('intended_url') @endphp
        @endif
        <a id="back-to-top" href="#"><i class="fa fa-angle-up fa-2x" aria-hidden="true"></i></a>
    </div>
    @yield('before_footer_scripts')
    <script src="{{ URL::asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor/slick/slick.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor/1000hz-bootstrap-validator/validator.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!--<script src="{{ URL::asset('assets/vendor/axios/axios.min.js') }}"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
    <!--<script src="{{ URL::asset('assets/vendor/js-cookie/js.cookie.min.js') }}"></script>-->
    <script src="{{ URL::asset('assets/vendor/toastr/toastr.min.js') }}"></script>

    @yield('footer_vendor_scripts')
    @if(!empty($_COOKIE['locale']) && $_COOKIE['locale'] == 'en') 
    <script src="{{ URL::asset('assets/js/lang/en.js') }}"></script>
    @else
    <script src="{{ URL::asset('assets/js/lang/cn.js') }}"></script>
    @endif
    <script src="{{ URL::asset('assets/js/distpicker.js') }}"></script>
    <!--<script src="{{ URL::asset('assets/js/cart.js') }}"></script>-->
    <script src="{{ URL::asset('assets/js/main.js') }}"></script>
    <script src="{{ URL::asset('assets/js/axios.js') }}"></script>
    @yield('footer_scripts')
</body>
</html>

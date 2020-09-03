<header class="header">
	<div class="container">
        <div class="main-menu">
            <div class="menu-left">
                <div class="navbar dropdown has-megamenu">
                    <a href="javascript:void(0)" class="nav-link dropdown-toggle no-arrow" data-toggle="dropdown"></a>
                    <div class="dropdown-menu megamenu">
                        <div class="megamenu-content">
                            <div class="container">
                                <div class="row m-0 w-100">
                                    <div class="col-12 col-sm-6 col-lg-3">
                                        <div class="title">
                                            <h4>产品系列</h4>
                                        </div>
                                        <div class="content">
                                            <ul>
                                                <li><a href="http://120.79.173.163:9100/product-category">产品系列概述</a></li>
                                                <li><a href="http://120.79.173.163:9100/product-category/sed-ea">套装A</a></li>
                                                <li><a href="http://120.79.173.163:9100/product-category/sed-ea">套装B</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3">
                                        <div class="title">
                                            <h4>护肤</h4>
                                        </div>
                                        <div class="content">
                                            <ul>
                                                <li><a href="http://120.79.173.163:9100/product/numquam-vel">面膜及磨砂膏</a></li>
                                                <li><a href="http://120.79.173.163:9100/product/numquam-vel">特殊护理</a></li>
                                                <li><a href="http://120.79.173.163:9100/product/numquam-vel">紫外线防护</a></li>
                                                <li><a href="http://120.79.173.163:9100/product/numquam-vel">身体和手部护理</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3">
                                        <div class="title">
                                            <h4>@lang('general.services')</h4>
                                        </div>
                                        <div class="content">
                                            <ul>
                                                <li><a href="/e-boutique-services">@lang('general.e-boutique-services')</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3">
                                        <div class="title">
                                            <h4 class="tx-mont">@lang('general.the-house')</h4>
                                        </div>
                                        <div class="content">
                                            <ul>
                                                <li><a href="/the-house">概述</a></li>
                                                <li><a href="/product-idea">@lang('general.product-idea')</a></li>
                                                <li><a href="/the-brand">@lang('general.brand-introduction')</a></li>
                                                <li><a href="/the-house/category">@lang('general.blog-post')</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- <div class="col-12 offset-lg-9 col-lg-3">
                                        <form>
                                            <div class="input-group">
                                                <input type="text" class="form-control search-input" placeholder="@lang('general.search')" aria-label="@lang('general.search')" aria-describedby="basic-addon">
                                                <div class="input-group-append">
                                                    <button class="btn" type="submit"><img src="{{ URL::asset('assets/images/icon/search.png') }}" /></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div> -->
                                </div>
                                <div class="row m-0 w-100">
                                    <hr>
                                    <div class="col-12 col-sm-4">
                                        <a href="">
                                            <img src="{{ URL::asset('assets/images/menu-img.jpg') }}" class="img-fluid w-100" />
                                            <label class="d-block mt-2">探索</label>
                                        </a>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <a href="">
                                            <img src="{{ URL::asset('assets/images/menu-img.jpg') }}" class="img-fluid w-100" />
                                            <label class="d-block mt-2">悦享</label>
                                        </a>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <a href="">
                                            <img src="{{ URL::asset('assets/images/menu-img.jpg') }}" class="img-fluid w-100" />
                                            <label class="d-block mt-2">沉浸</label>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none d-sm-block">
                    <div class="navbar dropdown">
                        <a href="javascript:void(0)" class="nav-link dropdown-toggle no-arrow language-switcher" data-toggle="dropdown">
                            @if (!empty($_COOKIE['locale']) && $_COOKIE['locale'] == 'en') EN
                            @else CN
                            @endif
                        </a>
                       <div class="dropdown-menu show-div language">
                            <h6>@lang('general.language')</h6>
                            <ul>
                                <li><a href="javascript:void(0)" onclick="changeLocale('cn')">China - CN</a></li>
                                <li><a href="javascript:void(0)" onclick="changeLocale('en')">United States - EN</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="brand-logo">
                <a href="/"></a>
            </div>
            <div class="menu-right pull-right">
                <div class="icon-nav">
                    <ul>
                        <li class="onhover-div my-account">
                            @if (empty($_COOKIE['token']))
                                <a href="javascript:void(0)" onclick="openNav('account')"></a>
                            @else
                                <a href="/my-account"></a>
                            @endif
                        </li>
                        <li class="onhover-div mini-cart">
                            @if(Request::is('checkout'))
                            <a href="/cart">
                            @else
                            <a href="javascript:void(0)" onclick="openNav('mini-cart')">
                            @endif
                                <span class="count">
                                    {{ $count?: 0 }}
                                </span>
                            </a>
                        </li>
                        <li class="onhover-div my-wishlist">
                            <a href="/wishlist"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
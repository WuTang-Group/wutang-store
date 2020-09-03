@extends('layouts.app')

@section('content')
<section class="pt-0 height-100 position-relative">
    <div class="dark-layout">
        <div class="full-page-banner bg-size" style="background-image: url({{ URL::asset('assets/images/banner/banner-t.png') }})">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="banner-contain justify-content-between">
                            <div>
                                <h2 class="tx-mont" data-animation="fadeInLeft" data-delay="1s">SKIN CAVIAR <br>ESSENCE-IN-FOUNDATION</h2>
                                <h2 data-animation="fadeInRight" data-delay="1s">鱼子精华气垫粉底</h2>
                                <a href="single-product.php" class="btn btn-outline" data-animation="fadeInLeft" data-delay="1s">即刻选购</a>
                            </div>
                            <div class="d-none d-md-inline-block">
                                <a href="single-product.php"><img src="{{ URL::asset('assets/images/banner/banner-s.png') }}" data-animation="flipInX" data-delay="1s" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <a href="#new-arrival" class="scroll-down anchor">@lang('general.scroll-down')</a>
    </div>
</section>
<section id="new-arrival" class="dark-layout pc-card-wrapper abs">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="text-white title">@lang('general.new-arrival')</h2>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="inner">
                        <div class="bg-cover" style="background-image: url({{ URL::asset('assets/images/new-arrival.jpg') }})"></div>
                    </div>
                    <div class="card-body left dark-layout">
                        <h3 class="card-title tx-mont">
                            SKIN CAVIAR<br>
                            ESSENCE-IN-FOUNDATION
                        </h3>
                        <h3 class="card-title">鱼子精华气垫粉底</h3>
                        <a href="" class="btn btn-outline">@lang('general.shop-now')</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="inner">
                        <div class="bg-cover" style="background-image: url({{ URL::asset('assets/images/new-arrival.jpg') }})"></div>
                    </div>
                    <div class="card-body right dark-layout">
                        <h3 class="card-title tx-mont">
                            SKIN CAVIAR<br>
                            ESSENCE-IN-FOUNDATION
                        </h3>
                        <h3 class="card-title">鱼子精华气垫粉底</h3>
                        <a href="" class="btn btn-outline">@lang('general.shop-now')</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="the-house" class="dark-layout section-b-space">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="text-white title">@lang('general.the-house')</h2>
        </div>
        <div class="text-center">
            <ul class="the-house-slider-nav">
                <li data-slide="1" class="slick-to">传承</li>
                <li data-slide="2" class="slick-to">艺术</li>
                <li data-slide="3" class="slick-to">精彩内容</li>
            </ul>
        </div>
        <div class="the-house-slider">
            <div class="card">
                <a href="the-house/single">
                    <h3 class="title">传承</h3>
                    <div class="bg-cover" style="background-image: url({{ URL::asset('assets/images/the-house-slide.jpg') }})"></div>
                    <div class="card-body dark-layout">
                        <h3 class="card-title">聚焦睛采</h3>
                        <a href=""><u>阅读更多</u></a>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="the-house/single">
                    <h3 class="title">艺术</h3>
                    <div class="bg-cover" style="background-image: url({{ URL::asset('assets/images/the-house-slide.jpg') }})"></div>
                    <div class="card-body dark-layout">
                        <h3 class="card-title">聚焦睛采</h3>
                        <a href=""><u>阅读更多</u></a>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="the-house/single">
                    <h3 class="title">精彩内容</h3>
                    <div class="bg-cover" style="background-image: url({{ URL::asset('assets/images/the-house-slide.jpg') }})"></div>
                    <div class="card-body dark-layout">
                        <h3 class="card-title">聚焦睛采</h3>
                        <a href=""><u>阅读更多</u></a>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@include('partials.official-services')
@endsection
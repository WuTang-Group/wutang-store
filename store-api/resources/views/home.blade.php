@extends('layouts.app')

@section('content')
<section class="p-0 height-100 position-relative">
    <div class="home-slider darken-layout slider-pagination-right">
        <div class="home-slide">
            <img src="{{ URL::asset('assets/images/banner/banner-t.png') }}" alt="" class="bg-img">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="slider-contain justify-content-between">
                            <div>
                                <h2 class="tx-mont" data-animation="fadeInLeft" data-delay="1s">SKIN CAVIAR <br>ESSENCE-IN-FOUNDATION</h2>
                                <h2 data-animation="fadeInRight" data-delay="1s">鱼子精华气垫粉底</h2>
                                <a href="single-product.php" class="btn btn-outline" data-animation="fadeInLeft" data-delay="1s">即刻选购</a>
                            </div>
                            <div class="d-none d-md-inline-block">
                                <a href="single-product.php"><img src="{{ URL::asset('assets/images/banner/banner-s.png') }}" data-animation="fadeInRight" data-delay="1s" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="home-slide">
            <img src="{{ URL::asset('assets/images/banner/banner-t.png') }}" alt="" class="bg-img">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="slider-contain justify-content-between">
                            <div>
                                <h2 class="tx-mont" data-animation="fadeInLeft" data-delay="1s">SKIN CAVIAR <br>ESSENCE-IN-FOUNDATION</h2>
                                <h2 data-animation="fadeInRight" data-delay="1s">鱼子精华气垫粉底</h2>
                                <a href="single-product.php" class="btn btn-outline" data-animation="fadeInLeft" data-delay="1s">即刻选购</a>
                            </div>
                            <div class="d-none d-md-inline-block">
                                <a href="single-product.php"><img src="{{ URL::asset('assets/images/banner/banner-s.png') }}" data-animation="fadeInRight" data-delay="1s" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <a href="#products" class="slider-scroll-down anchor">往下滑</a>
    </div>
</section>
@include('partials.products')
<section id="the-house" class="dark-layout section-b-space">
    <div class="container">
        <div class="row justify-content-center align-items-stretch">
            <div id="the-house-bg" class="col-12 col-md-6 col-lg-5 col-xl-5 transition-effect">
                <img src="{{ URL::asset('assets/images/the-house-1.png') }}" class="bg-img" />
            </div>
            <div class="darken-layout col-12 col-md-6 col-lg-5 col-xl-5 p-5">
                <div class="mb-5">
                    <h2 class="text-white title tx-mont mb-4">THE HOUSE</h2>
                    <p>中候开常，景方上本经爱准觉交第，上看更称统论<br>
                    他一片有纸他妈很国给一文关统大大下脑政正：<br>
                    育走告会：向较定久子数过学心空子打朋处易多<br>
                    的办场的和都来……该为容问信：</p>
                </div>
                <div class="general-accordion-wrapper">
                    <div id="paccordion" class="accordion mb-0">
                        <h2 class="text-white title mb-0">产品理念</h2>
                        <div class="show pl-0 pr-0" data-bg="{{ URL::asset('assets/images/the-house-1.png') }}" data-parent="#paccordion">
                            <p></p>
                            <a href="/product-idea" class="btn btn-outline">更多</a>
                        </div>
                        <h2 class="text-white title collapsed mb-0">品牌介绍</h2>
                        <div class="collapsed pl-0 pr-0" data-bg="{{ URL::asset('assets/images/the-house.png') }}" data-parent="#paccordion">
                            <p></p>
                            <a href="/the-brand" class="btn btn-outline">更多</a>
                        </div>
                        <h2 class="text-white title collapsed mb-0">精彩内容</h2>
                        <div class="collapsed pl-0 pr-0" data-bg="{{ URL::asset('assets/images/pro3/p1.png') }}" data-parent="#paccordion">
                            <p></p>
                            <a href="/the-house" class="btn btn-outline">更多</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('partials.official-services')
@endsection
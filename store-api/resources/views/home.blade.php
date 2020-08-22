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
                                <a href="single-product.php"><img src="{{ URL::asset('assets/images/banner/banner-s.png') }}" data-animation="flipInX" data-delay="1s" /></a>
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
                                <a href="single-product.php"><img src="{{ URL::asset('assets/images/banner/banner-s.png') }}" data-animation="flipInX" data-delay="1s" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <a href="#products" class="slider-scroll-down anchor">@lang('general.scroll-down')</a>
    </div>
</section>
@include('partials.product-slider',['products' => $products->data->data])
<section id="the-house" class="dark-layout section-b-space">
    <div class="container">
        <div class="row justify-content-center align-items-stretch">
            <div id="the-house-bg" class="col-12 col-md-6 col-lg-5 col-xl-5" data-bg="{{ URL::asset('assets/images/the-house-1.png') }}" data-animation="fadeInLeft">
                <img src="{{ URL::asset('assets/images/the-house-1.png') }}" class="bg-img" />
            </div>
            <div class="darken-layout col-12 col-md-6 col-lg-5 col-xl-5 p-5">
                <div class="mb-5">
                    <h2 class="text-white title tx-mont mb-4">THE HOUSE</h2>
                    <p>源起奢华，焕颜新生<br>
                        珍罕成分升华，恒久如初的好奇心如何驱动护肤创新？</p>
                </div>
                <div class="general-accordion-wrapper">
                    <div id="paccordion" class="accordion mb-0">
                        <h2 class="text-white title mb-0">@lang('general.product-idea')</h2>
                        <div class="collapse show pl-0 pr-0" data-bg="{{ URL::asset('assets/images/the-house-1.png') }}" data-parent="#paccordion">
                            <div class="pl-0 pr-0">
                                <p>Queen Spades一场关于恒久之美的对话，揭秘古方宝石之美</p>
                                <a href="/product-idea" class="btn btn-outline">@lang('general.more')</a>
                            </div>
                        </div>
                        <h2 class="text-white title collapsed mb-0">@lang('general.brand-introduction')</h2>
                        <div class="collapse pl-0 pr-0" data-bg="{{ URL::asset('assets/images/the-house.png') }}" data-parent="#paccordion">
                            <div class="pl-0 pr-0">
                                <p>Queen Spades卓越匠心，臻于巅峰</p>
                                <a href="/the-brand" class="btn btn-outline">@lang('general.more')</a>
                            </div>
                        </div>
                        <h2 class="text-white title collapsed mb-0">@lang('general.blog-post')</h2>
                        <div class="collapse pl-0 pr-0" data-bg="{{ URL::asset('assets/images/pro3/p1.png') }}" data-parent="#paccordion">
                            <div class="pl-0 pr-0">
                                <p>沉浸于Queen Spades精髓，恒久无畏之美的象征</p>
                                <a href="/the-house" class="btn btn-outline">@lang('general.more')</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('partials.official-services')
@endsection
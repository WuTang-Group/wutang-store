@extends('layouts.app')

@section('content')
<div class="gray-layout e-boutique-services">
	<div id="services" class="section-t-space section-b-space position-relative" style="background: url({{ URL::asset('assets/images/e-service-bg.jpg') }}) no-repeat center center / cover;">
        <div class="services-title">
            <h1>@lang('general.official-services')</h1>
        </div>
        <div>
            <a href="#e-services" class="scroll-down anchor">@lang('general.scroll-down')</a>
        </div>
	</div>
	<div id="e-services" class="container pt-5 pb-5">
		<div class="row justify-content-center">
            <div class="col-6 col-sm-4 col-lg-2 services-block">
                <a href="#free-shipping" class="anchor">
                    <img src="{{ URL::asset('assets/images/icon/free-shipping.png') }}" alt="">
                    <h4>臻品免邮配送</h4>
                </a>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 services-block">
                <a href="#packaging" class="anchor">
                    <img src="{{ URL::asset('assets/images/icon/packaging.png') }}" alt="">
                    <h4>精致礼盒包装</h4>
                </a>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 services-block">
                <a href="#safe-payment" class="anchor">
                    <img src="{{ URL::asset('assets/images/icon/secure-payment.png') }}" alt="">
                    <h4>无忧安全支付</h4>
                </a>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 services-block">
                <a href="#my-account" class="anchor">
                    <img src="{{ URL::asset('assets/images/icon/my-account.png') }}" alt="">
                    <h4>个人账户</h4>
                </a>
            </div>
            <!-- <div class="col-6 col-sm-4 col-lg-2 services-block">
                <a href="#order-tracking" class="anchor">
                    <img src="{{ URL::asset('assets/images/icon/tracking-2.png') }}" alt="">
                    <h4>订单追踪</h4>
                </a>
            </div> -->
            <div class="col-6 col-sm-4 col-lg-2 services-block">
                <a href="#customer-service" class="anchor">
                    <img src="{{ URL::asset('assets/images/icon/customer-service.png') }}" alt="">
                    <h4>客户服务</h4>
                </a>
            </div>
		</div>
	</div>
    <div class="dark-layout">
        <div id="free-shipping" class="services-content">
            <div class="col-12 col-md-6 p-0 d-none d-md-inline-block bg-cover" style="background-image: url({{ URL::asset('assets/images/e-service.jpg') }});"></div>
            <div class="col-12 col-md-6 p-0 align-self-center">
                <img src="{{ URL::asset('assets/images/e-service.jpg') }}" class="img-fluid d-block d-md-none" />
                <div class="inner">
                    <span class="index tx-mont">01</span>
                    <h1>臻品免邮配送</h1>
                    <p>
                        尊享免邮配送（顺丰快递）<br>
                        全国免费配送（港、澳、台地区除外）
                    </p>
                    <a href="" class="btn btn-white">@lang('general.shop-now')</a>
                </div>
            </div>
        </div>
        <div id="packaging" class="services-content">
            <div class="col-12 col-md-6 p-0 align-self-center">
                <img src="{{ URL::asset('assets/images/e-service.jpg') }}" class="img-fluid d-block d-md-none" />
                <div class="inner">
                    <span class="index tx-mont">02</span>
                    <h1>精致礼盒包装</h1>
                    <p>
                        沉浸于瑞士献礼美学<br>
                        奢享精致礼盒包装
                    </p>
                    <a href="" class="btn btn-white">@lang('general.shop-now')</a>
                </div>
            </div>
            <div class="col-12 col-md-6 p-0 d-none d-md-inline-block bg-cover" style="background-image: url({{ URL::asset('assets/images/e-service.jpg') }})"></div>
        </div>
        <div id="safe-payment" class="services-content">
            <div class="col-12 col-md-6 p-0 d-none d-md-inline-block bg-cover" style="background-image: url({{ URL::asset('assets/images/e-service.jpg') }})"></div>
            <div class="col-12 col-md-6 p-0 align-self-center">
                <img src="{{ URL::asset('assets/images/e-service.jpg') }}" class="img-fluid d-block d-md-none" />
                <div class="inner">
                    <span class="index tx-mont">03</span>
                    <h1>无忧安全支付</h1>
                    <p>
                        请在本网站放心购买。<br>
                        所有交易均已加密并且保证支付安全。
                    </p>
                    <a href="" class="btn btn-white">@lang('general.shop-now')</a>
                </div>
            </div>
        </div>
        <div id="my-account" class="services-content">
            <div class="col-12 col-md-6 p-0 align-self-center">
                <img src="{{ URL::asset('assets/images/e-service.jpg') }}" class="img-fluid d-block d-md-none" />
                <div class="inner">
                    <span class="index tx-mont">04</span>
                    <h1>个人账户</h1>
                    <p>
                        加入Queen Spades，悦享奢华购物体验，<br>
                        品牌最新资讯和购物礼遇。通过注册您的个人账户<br>
                        并订阅品牌讯息，您可以查看您的个人账户，<br>
                        订单历史，发货等信息。
                    </p>
                    <a href="" class="btn btn-white">@lang('general.register')</a>
                </div>
            </div>
            <div class="col-12 col-md-6 p-0 d-none d-md-inline-block bg-cover" style="background-image: url({{ URL::asset('assets/images/e-service.jpg') }})"></div>
        </div>
        <!-- <div id="order-tracking" class="services-content">
            <div class="col-12 col-md-6 p-0 d-none d-md-inline-block bg-cover" style="background-image: url({{ URL::asset('assets/images/e-service.jpg') }})"></div>
            <div class="col-12 col-md-6 p-0 align-self-center">
                <img src="{{ URL::asset('assets/images/e-service.jpg') }}" class="img-fluid d-block d-md-none" />
                <div class="inner">
                    <span class="index tx-mont">05</span>
                    <h1>订单追踪</h1>
                    <p>
                        通过订单发货确认短信，发货确认邮件中的链接<br>
                        或直接在“配送和退货”页面中输入运单号，<br>
                        您可以随时关注您的订单的发货信息。
                    </p>
                    <a href="" class="btn btn-white">开始购物</a>
                </div>
            </div>
        </div> -->
        <div id="customer-service" class="services-content">
            <div class="col-12 col-md-6 p-0 d-none d-md-inline-block bg-cover" style="background-image: url({{ URL::asset('assets/images/e-service.jpg') }})"></div>
            <div class="col-12 col-md-6 p-0 align-self-center">
                <img src="{{ URL::asset('assets/images/e-service.jpg') }}" class="img-fluid d-block d-md-none" />
                <div class="inner">
                    <span class="index tx-mont">05</span>
                    <h1>客户服务</h1>
                    <p>
                        Queen Spades 官网客户服务可随时为您解答<br>
                        所有问题并提供帮助。访问“联系我们”<br>
                        页面，选择您喜欢的沟通渠道。
                    </p>
                    <a href="" class="btn btn-white">@lang('general.contact-us')</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
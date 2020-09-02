@extends('layouts.app')
@section('header_vendor_style_css')
  <link rel="stylesheet" href="{{ URL::asset('assets/vendor/jquery-accordion/jquery.accordion.css') }}">
@endsection
@section('content')
<div class="section-nav">
  <div class="container">
    <ul>
      <li><a href="#benefit" class="anchor">功效</a></li>
      <li><a href="#application" class="anchor">使用方法</a></li>
      <!-- <li><a href="#routine" class="anchor">护肤步骤</a></li> -->
      <li class="last"><a href="/product-category/{{ $response->data->product_category->slug }}">产品系列</a></li>
    </ul>
  </div>
</div>
<div class="dark-layout single-product">
  		<div id="product" class="section-t-space section-b-space" style="background: url({{ $response->data->main_image }}) no-repeat center center / cover;">
        <div class="d-block d-lg-none product-image">
          <img src="{{ $response->data->main_image_2 }}" class="img-fluid w-100" />
        </div>
        <div>
          <a href="#benefit" class="scroll-down anchor">@lang('general.scroll-down')</a>
        </div>
        <div class="container">
          <div class="col-12 col-lg-5 col-xl-4 offset-lg-7 offset-xl-8">
              <div class="product-right">
                  <h2 class="product-title tx-mont lh-12 mb-2 font-weight-normal">{{ $response->data->product_name_en }}</h2>
                  <h1 class="product-title">{{ $response->data->product_name }}</h1>
                  <h3 class="product-price">@php echo $response->data->sale_price ? '<del>¥ '.number_format($response->data->price).'</del> ¥ <span>'.number_format($response->data->sale_price).'</span>':'¥ <span>'.number_format($response->data->price).'<span>' @endphp</h3>
                  <div class="product-description">
                    @if (!empty($_COOKIE['locale']) && $_COOKIE['locale'] == 'en')
                      {{ $response->data->short_description_en }}
                    @else
                      {{ $response->data->short_description }}
                    @endif
                  </div>
                  <div class="product-form">
                      <!-- <form class="form-inline">
                          <div class="input-group product-quantity">
                              <button type="button" class="btn minus-btn" data-type="minus" data-field="">
                                  <img src="{{ URL::asset('assets/images/icon/minus-w.png') }}" />
                              </button>
                              <input type="number" name="quantity" class="form-control bg-trans border-0 qty" placeholder="0" value="1" onkeyup="this.value=this.value.replace(/[^\d]/,'')" min="1">
                              <button type="button" class="btn plus-btn" data-type="plus" data-field="">
                                  <img src="{{ URL::asset('assets/images/icon/plus-w.png') }}" />
                              </button>
                          </div>
                          <button type="button" data-id="{{ $response->data->id }}" class="btn btn-outline d-flex align-items-center btn-add-to-cart"><i class="icon mr-3"></i>添加入购物车</button>
                      </form> -->
                      <button type="button" data-id="{{ $response->data->id }}" class="btn btn-outline align-items-center btn-add-to-cart ico"><i class="icon mr-3"></i>添加入购物车</button>
                  </div>
                  <div class="product-wishlist">
                      <a href="#" class="align-items-center">
                          <img src="{{ URL::asset('assets/images/icon/wishlist-w.png') }}" />
                          <span class="text-white">加入愿望清单</span>
                      </a>
                  </div>
              </div>
          </div>
        </div>
  		</div>
      <div id="benefit" class="section-t-space section-b-space" style="background: url({{ $response->data->benefit_image }}) no-repeat center center / cover;">
        <div class="container">
          <div class="col-md-6 col-lg-5 col-xl-4 general-accordion-wrapper">
            <div class="accordion">
              <h2 class="text-white title mb-0">功效</h2>
              <div id="benefits" class="collapse show">
                <div>
                  @if (!empty($_COOKIE['locale']) && $_COOKIE['locale'] == 'en')
                   {{ $response->data->benefit_en }}
                  @else
                   {{ $response->data->benefit }}
                  @endif
                </div>
              </div>
              <h2 class="text-white title collapsed mb-0">产品细节</h2>
              <div id="description" class="collapse">
                <div>
                  @if (!empty($_COOKIE['locale']) && $_COOKIE['locale'] == 'en')
                    {{ $response->data->description_en }}
                  @else
                    {{ $response->data->description }}
                  @endif
                </div>
              </div>
              <!-- <h2 class="text-white title mb-0">线上服务</h2>
              <div id="services" class="collapse show">
                <div class="row">
                    <div class="col-6 col-sm-3 services-block">
                      <img src="{{ URL::asset('assets/images/icon/free-shipping.png') }}" alt="">
                      <h4>臻品免邮配送</h4>
                    </div>
                    <div class="col-6 col-sm-3 services-block">
                      <img src="{{ URL::asset('assets/images/icon/packaging.png') }}" alt="">
                      <h4>精致礼盒包装</h4>
                    </div>
                    <div class="col-6 col-sm-3 services-block">
                      <img src="{{ URL::asset('assets/images/icon/secure-payment.png') }}" alt="">
                      <h4>无忧安全支付</h4>
                    </div>
                    <div class="col-6 col-sm-3 services-block">
                      <img src="{{ URL::asset('assets/images/icon/customer-service.png') }}" alt="">
                      <h4>客户服务</h4>
                    </div>
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </div>
      <div id="application" class="position-relative">
        <div class="d-none d-md-block">
          <ul id="accordion">
            <li data-required="true" data-selected="true" data-title="@lang('general.usage')">
              <div class="bg-cover position-relative" style="background-image: url({{ URL::asset('assets/images/banner/sp-bg2.jpg') }})">
                <div class="container">
                  <div class="col-md-6 col-lg-5 col-xl-4">
                    <h2 class="text-white title mt-4 mb-4">@lang('general.usage')</h2>
                    @if (!empty($_COOKIE['locale']) && $_COOKIE['locale'] == 'en')
                      {{ $response->data->usage_en }}
                    @else 
                      {{ $response->data->usage }}
                    @endif
                  </div>
                </div>
                <div class="video-player">
                  <a class="popup-video" href="http://www.youtube.com/watch?v=0O2aH4XLbto"><img src="{{ URL::asset('assets/images/icon/video-play.jpg') }}" class="play" /></a>
                </div>
                <style>
                .video-player {
                  padding: 0 !important; }
                .video-player a {
                  position: absolute;
                  left: 50%;
                  top: 50%;
                  transform: translate(-50%, -50%); }
                .video-player .play {
                  max-width: 120px; }
                </style>
              </div>
            </li>
            <li data-required="true" data-title="@lang('general.technology')">
              <div class="bg-cover position-relative" style="background-image: url({{ URL::asset('assets/images/banner/sp-bg1.jpg') }})">
                <div class="container">
                  <div class="col-md-6 col-lg-5 col-xl-4">
                    <h2 class="text-white title mt-4 mb-4">@lang('general.technology')</h2>
                    @if (!empty($_COOKIE['locale']) && $_COOKIE['locale'] == 'en')
                      {{ $response->data->tech_description_en }}
                    @else 
                      {{ $response->data->tech_description }}
                    @endif
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="container section-t-space section-b-space general-accordion-wrapper d-md-none">
          <div class="accordion mt-3">
            <h2 class="text-white title mb-0">@lang('general.usage')</h2>
            <div class="collapse show">
              <div class="mb-3">
                @if (!empty($_COOKIE['locale']) && $_COOKIE['locale'] == 'en')
                  {{ $response->data->usage_en }}
                @else 
                  {{ $response->data->usage }}
                @endif
              </div>
              <div class="video-player position-relative">
                <img src="{{ URL::asset('assets/images/banner/sp-bg2.jpg') }}" class="img-fluid" />
                <a class="popup-video" href="http://www.youtube.com/watch?v=0O2aH4XLbto"><img src="{{ URL::asset('assets/images/icon/video-play.jpg') }}" class="play" /></a>
              </div>
            </div>
            <h2 class="text-white title mb-0">@lang('general.technology')</h2>
            <div class="collapse show">
              <div class="mb-3">
                @if (!empty($_COOKIE['locale']) && $_COOKIE['locale'] == 'en')
                  {{ $response->data->tech_description_en }}
                @else 
                  {{ $response->data->tech_description }}
                @endif
              </div>
              <img src="{{ URL::asset('assets/images/banner/sp-bg1.jpg') }}" class="img-fluid" />
            </div>
          </div>
        </div>
      </div>
      <!-- <div id="routine" class="position-relative section-t-space section-b-space">
        <div class="container">
          <div class="col-12 d-md-flex align-items-center justify-content-between">
            <h2 class="text-white title">护肤步骤</h2>
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item"><a href="#recommended" class="nav-link active" id="recommended-tab" data-toggle="tab" role="tab" aria-controls="recommended" aria-selected="true">Queen Spades推荐</a></li>
                <li class="nav-item"><a href="#matching" class="nav-link" id="matching-tab" data-toggle="tab" role="tab" aria-controls="matching" aria-selected="true">自选搭配</a></li>
            </ul>
          </div>
        </div>
        <div class="tab-content routine-content" id="nav-tabContent">
            <div class="tab-pane fade show active custom-slick " id="recommended" role="tabpanel" aria-labelledby="recommended-tab">
                <div class="container">
                  <div class="product-routine-slider mb-0">
                    <div class="product-box">
                      <h3 class="routine-title"><span>1</span>首先使用</h3>
                      <div class="img-wrapper">
                          <a href="#">
                            <img src="{{ URL::asset('assets/images/pro3/p1.png') }}" class="img-fluid" alt="">
                          </a>
                          <div class="cart-info cart-wrap">
                            <div class="cart-button">
                                <button class="btn btn-outline mb-2">添加入购物车</button> 
                                <a href="single-product.php" class="btn btn-outline">浏览</a> 
                              </div>
                          </div>
                      </div>
                      <div class="product-detail">
                          <div class="product-name">
                              <h3 class="tx-mont"><a href="single-product.php">WHITE CAVIAR ILLUMINATING PEARL INFUSION</a></h3>
                              <h3><a href="single-product.php">纯皙紧致珍珠囊精华液套装</a></h3>
                          </div>
                          <div class="product-category">
                              <a href="product-category.php">套装</a>
                          </div>
                          <div class="d-flex justify-content-between mt-3">
                            <h4>¥ 6,600</h4>
                            <a href="" class="add-to-wishlist"></a>
                          </div>
                      </div>
                    </div>
                    <div class="product-box">
                      <h3 class="routine-title"><span>2</span>接着使用</h3>
                      <div class="img-wrapper">
                          <a href="#">
                            <img src="{{ URL::asset('assets/images/pro3/p1.png') }}" class="img-fluid" alt="">
                          </a>
                          <div class="cart-info cart-wrap">
                            <div class="cart-button">
                                <button class="btn btn-outline mb-2">添加入购物车</button> 
                                <a href="single-product.php" class="btn btn-outline">浏览</a> 
                              </div>
                          </div>
                      </div>
                      <div class="product-detail">
                          <div class="product-name">
                              <h3 class="tx-mont"><a href="single-product.php">WHITE CAVIAR ILLUMINATING PEARL INFUSION</a></h3>
                              <h3><a href="single-product.php">纯皙紧致珍珠囊精华液套装</a></h3>
                          </div>
                          <div class="product-category">
                              <a href="product-category.php">套装</a>
                          </div>
                          <div class="d-flex justify-content-between mt-3">
                            <h4>¥ 6,600</h4>
                            <a href="" class="add-to-wishlist"></a>
                          </div>
                      </div>
                    </div>
                    <div class="product-box">
                      <h3 class="routine-title"><span>3</span>最后使用</h3>
                      <div class="img-wrapper">
                          <a href="#">
                            <img src="{{ URL::asset('assets/images/pro3/p1.png') }}" class="img-fluid" alt="">
                          </a>
                          <div class="cart-info cart-wrap">
                            <div class="cart-button">
                                <button class="btn btn-outline mb-2">添加入购物车</button> 
                                <a href="single-product.php" class="btn btn-outline">浏览</a> 
                              </div>
                          </div>
                      </div>
                      <div class="product-detail">
                          <div class="product-name">
                              <h3 class="tx-mont"><a href="single-product.php">WHITE CAVIAR ILLUMINATING PEARL INFUSION</a></h3>
                              <h3><a href="single-product.php">纯皙紧致珍珠囊精华液套装</a></h3>
                          </div>
                          <div class="product-category">
                              <a href="product-category.php">套装</a>
                          </div>
                          <div class="d-flex justify-content-between mt-3">
                            <h4>¥ 6,600</h4>
                            <a href="" class="add-to-wishlist"></a>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
                <button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">Previous</button>
                <button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button>
            </div>
            <div class="tab-pane fade" id="matching" role="tabpanel" aria-labelledby="matching-tab">matching tab</div>
        </div>
      </div> -->
	</div>
</div>
@include('partials.official-services')
@endsection
@section('footer_vendor_scripts')
  <script src="{{ URL::asset('assets/vendor/jquery-accordion/jquery.accordion.js') }}"></script>
  <script type="text/javascript">  
    $(document).ready(function() {
      $('#application #accordion').accordionjs();
    });
  </script>
@endsection
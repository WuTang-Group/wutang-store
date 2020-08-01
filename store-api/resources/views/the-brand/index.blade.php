@extends('layouts.app')

@section('content')
@include('partials.section-nav-1')
<div class="darken-layout brand">
  	<section class="p-0 height-100 position-relative">
      <div class="brand-slider darken-layout slider-pagination-right">
          <div class="brand-slide">
              <div class="container">
                  <div class="row">
                      <div class="col">
                          <div class="slider-contain">
                              <div>
                                <h1 data-animation="fadeInRight" data-delay="1s">品牌故事</h1>
                                <a href="the-brand/story"><img src="{{ URL::asset('assets/images/1.png') }}" data-animation="fadeInLeft" data-delay="1s" /></a>
                                <span class="index tx-mont" data-animation="fadeInRight" data-delay="1s">01</span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="brand-slide">
              <div class="container">
                  <div class="row">
                      <div class="col">
                          <div class="slider-contain">
                              <div>
                                <h1 data-animation="fadeInRight" data-delay="1s"><span class="tx-mont">Queen Spades</span>和你</h1>
                                <a href="the-brand/queen-spades-and-you"><img src="{{ URL::asset('assets/images/1.png') }}" data-animation="fadeInLeft" data-delay="1s" /></a>
                                <span class="index tx-mont" data-animation="fadeInRight" data-delay="1s">02</span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="brand-slide">
              <div class="container">
                  <div class="row">
                      <div class="col">
                          <div class="slider-contain">
                              <div>
                                <h1 data-animation="fadeInRight" data-delay="1s">美丽的皮肤从内部开始</h1>
                                <a href="the-brand/start-from-your-inner-skin"><img src="{{ URL::asset('assets/images/1.png') }}" data-animation="fadeInLeft" data-delay="1s" /></a>
                                <span class="index tx-mont" data-animation="fadeInRight" data-delay="1s">03</span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="container">
        <div class="brand-slider-action">
            <img src="{{ URL::asset('assets/images/queen-logo-footer.png') }}" />
            <a href="the-brand/story">品牌故事</a>
            <a href="the-brand/queen-spades-and-you"><span class="tx-mont">Queen Spades</span>和你</a>
            <a href="the-brand/start-from-your-inner-skin">美丽的皮肤从内部开始</a>
        </div>
      </div>
    </section>
</div>
@include('partials.official-services')
@endsection
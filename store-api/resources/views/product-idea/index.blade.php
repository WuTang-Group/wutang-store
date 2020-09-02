@extends('layouts.app')

@section('content')
@include('partials.section-nav-1')
<div class="black-layout product-idea">
    <section class="p-0 height-100 position-relative">
      <div class="product-idea-slider slider-pagination-left">
          <div class="product-idea-slide">
              <div class="container">
                  <div class="row">
                      <div class="col">
                          <div class="slider-contain custom">
                              <div>
                                <h2 class="mb-4" data-animation="fadeInLeft" data-delay="0.5s"><span class="tx-mont">LITHOTHERAPY</span> 技术</h2>
                                <p data-animation="fadeInLeft" data-delay="0.5s">在Queen Spades，我们在保养皮肤、<br>自我护理和全面美容方面有独特的方法。</p>
                                <a href="product-idea/lithotherapy-technology" class="btn btn-white" data-animation="fadeInLeft" data-delay="0.5s">更多</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="product-idea-slide">
              <div class="container">
                  <div class="row">
                      <div class="col">
                          <div class="slider-contain custom">
                              <div>
                                <h2 class="mb-4" data-animation="fadeInLeft" data-delay="0.5s"><span class="tx-mont">Queen Spades SKIN</span>和你</h2>
                                <p data-animation="fadeInLeft" data-delay="0.5s">简单优雅的护理下，有着奢华的滋养，<br>让您在舒适的环境中享受深层的放松。</p>
                                <a href="product-idea/queen-spades-and-you" class="btn btn-white" data-animation="fadeInLeft" data-delay="0.5s">更多</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="product-idea-slide">
              <div class="container">
                  <div class="row">
                      <div class="col">
                          <div class="slider-contain custom">
                              <div>
                                <h2 class="mb-4" data-animation="fadeInLeft" data-delay="0.5s">杰出的艺术</h2>
                                <p data-animation="fadeInLeft" data-delay="0.5s">从古至今，人们都对宝石、晶石等充满好奇和兴趣。<br>
                                在大自然万千年的孕育下，它们聚集了难以想象的力量。</p>
                                <a href="product-idea/arts" class="btn btn-white" data-animation="fadeInLeft" data-delay="0.5s">更多</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="container d-none d-md-inline-block">
        <div class="product-idea-slider-custom-nav">
          <div class="product-idea-slider-nav">
            <div><img src="{{ URL::asset('assets/images/lithotherapy.png') }}" data-slide="1" class="slick-to animated fadeInRight" /></div>
            <div><img src="{{ URL::asset('assets/images/queen-spades-skin.png') }}" data-slide="2" class="slick-to animated fadeInRight" /></div>
            <div><img src="{{ URL::asset('assets/images/creativity.png') }}" data-slide="3" class="slick-to animated fadeInRight" /></div>
          </div>
        </div>
      </div>
    </section>
</div>
@include('partials.official-services')
@endsection
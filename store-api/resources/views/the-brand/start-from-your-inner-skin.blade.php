@extends('layouts.app')

@section('content')
@include('partials.section-nav-1')
<div class="darken-layout brand">
  <img src="{{ URL::asset('assets/images/start-from-your-inner-skin-bg.png') }}" class="img-fluid" />
	<div class="section-t-space section-b-space position-relative">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h1 class="text-white title-lg mb-5">美丽的皮肤从内部开始</h1>
            <p>在Queen Spades，我们相信真正的美丽来自内在。<br>
            我们采用独特的美容和自我护理方法来治疗皮肤、思想、身体和精神。<br>
            </p>
            <p>Queen Spades的体验无与伦比，可以改变和培育您的整个生命。<br>
            我们优质的宝石原料注入了自然丰富且强大的元素，旨在：<br>
            </p>
            <ul class="ol-list-style pl-0 mb-5 d-inline-block text-left">
              <li>使您的皮肤变得更加柔软以及充满新的活力和年轻的光泽</li>
              <li>通过爱和积极的意愿来凝聚思想、身体和精神</li>
            </ul>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 d-inline-block d-md-none mb-4">
            <img src="{{ URL::asset('assets/images/1.png') }}" class="img-fluid" />
          </div>
          <div class="col-12 col-md-6 col-lg-5 align-self-end pt-4 mt-4 hr-line-top">
            <h2 class="text-white title-lg mb-5">宝石的力量</h2>
            <p>宝石自古以来就具有强大的治疗能力，能平衡特定的脉轮并<br>
            增强皮肤恢复的活力。</p>
            <p class="mb-0">从石器时代开始，男女就在皮肤上佩戴水晶首饰。<br>
            现在，得益于科学的发展，我们的商业机密 LITHOTHERAPY<br>
            技术可以在皮肤深处提供珍贵宝石和矿物质的微小颗粒，<br>
            以实现最大吸收，通过皮肤细胞的自然再生，达到健康的肌肤。</p>
          </div>
          <div class="col-12 col-md-6 col-lg-5 d-none d-md-inline-block">
            <img src="{{ URL::asset('assets/images/1.png') }}" class="img-fluid" />
          </div>
        </div>
        <div class="row section-t-space">
          <div class="col-12">
            <div class="chapter-pagination">
              <a href="queen-spades-and-you"><i class="fa fa-angle-left"></i></a>
              <label>其他章节</label>
              <a href="story"><i class="fa fa-angle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
	</div>
</div>
@include('partials.official-services')
@endsection
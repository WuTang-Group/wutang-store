@extends('layouts.app')

@section('content')
@include('partials.section-nav-1')
<div class="darken-layout the-house">
  <img src="assets/images/2.png" class="img-fluid" />
	<div class="section-t-space section-b-space position-relative">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h1 class="text-white title-lg mb-5">瑞士工艺的前世今生</h1>
            <p>在Queen Spades，我们相信真正的美丽来自内在。
            我们采用独特的美容和自我护理方法来治疗皮肤、思想、身体和精神。
            </p>
          </div>
        </div>
        <div class="row section-t-space">
          <div class="col-12">
            <div class="chapter-pagination">
              <a><i class="fa fa-angle-left"></i></a>
              <label>其他章节</label>
              <a><i class="fa fa-angle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
	</div>
</div>
@include('partials.official-services')
@endsection
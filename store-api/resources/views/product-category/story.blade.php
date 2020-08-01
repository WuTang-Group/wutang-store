@extends('layouts.app')

@section('content')
@include('product-category.partials.section.nav')
<div class="dark-layout product-category-story">
	<div class="section-t-space section-b-space position-relative">
      <div class="container">
        <div class="row">
          <div class="col-12 story-nav">
              <div>宝石疗法</div>
              <div>宝石如何活肤</div>
              <div>品牌对宝石及矿物的信任</div>
              <div>宝石疗法</div>
              <div>宝石如何活肤</div>
              <div>品牌对宝石及矿物的信任</div>
          </div>
        </div>
      </div>
      <div class="story-index">
        <span>1</span>
      </div>
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 story-content-slick">
              <div>1</div>
              <div>2</div>
              <div>3</div>
              <div>4</div>
              <div>5</div>
              <div>6</div>
          </div>
        </div>
      </div>
	</div>
</div>
@include('partials.official-services')
@endsection
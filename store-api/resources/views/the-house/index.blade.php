@extends('layouts.app')

@section('content')
<div class="dark-layout the-house bg-cover" style="background-image: url({{ URL::asset('assets/images/the-house-bg.png')}})">
	<div class="section-t-space section-b-space position-relative">
      <div class="container position-relative">
        <div class="row text-center">
          <div class="col-12 text-center mb-5">
            <h1 class="text-white title tx-mont">@lang('general.the-house')</h1>
          </div>
        </div>
        <div class="d-flex d-lg-none the-house-flip-mobile">
          <div class="col-4">
            <img src="{{ URL::asset('assets/images/the-house-1g.png')}}" class="img-fluid" />
          </div>
          <div class="col-4 flipped">
            <img src="{{ URL::asset('assets/images/the-house-2g.png')}}" class="img-fluid" />
          </div>
          <div class="col-4">
            <img src="{{ URL::asset('assets/images/the-house-3g.png')}}" class="img-fluid" />
          </div>
        </div>
        <div class="row the-house-flip-slider">
          <div class="col-12 col-lg-4 flip-container house-flip-main-container">
            <div class="the-house-content-wrapper rotate-left">
              <img src="{{ URL::asset('assets/images/the-house-1g.png')}}" class="img-fluid" />
              <div class="content">
                <h3>传承</h3>
                <p>沉浸于 La Prairie 精髓</p>
                <a href="the-house/category" class="btn btn-outline">探索</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 flip-container house-flip-main-container">
            <div class="the-house-content-wrapper rotate-left flipped">
              <img src="{{ URL::asset('assets/images/the-house-2g.png')}}" class="img-fluid" />
              <div class="content">
                <h3>艺术</h3>
                <p>探索 La Prairie 最新艺术合作项目</p>
                <a href="the-house/category" class="btn btn-outline">探索</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 flip-container house-flip-main-container">
            <div class="the-house-content-wrapper rotate-left">
              <img src="{{ URL::asset('assets/images/the-house-3g.png')}}" class="img-fluid" />
              <div class="content">
                <h3>精彩内容</h3>
                <p>浏览 La Prairie 近期精彩内容</p>
                <a href="the-house/category" class="btn btn-outline">探索</a>
              </div>
            </div>
          </div>
        </div>
      </div>
	</div>
</div>
@endsection
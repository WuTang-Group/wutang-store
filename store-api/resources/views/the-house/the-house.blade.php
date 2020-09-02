@extends('layouts.app')

@section('content')
@include('partials.section-nav-1')
<div class="dark-layout the-house list">
	<div class="section-t-space section-b-space position-relative">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-4 col-lg-3">
            <div class="card">
              <a href="/the-house/single">
                <img class="card-img-top" src="{{ URL::asset('assets/images/thumbnail.jpg') }}">
                <div class="card-body darken-layout">
                  <p class="card-category mb-2">艺术与建筑</p>
                  <h3 class="card-title">瑞士工艺的前世今生</h3>
                  <p class="card-text">贝耶勒基金会与文化遗产的保存</p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-12 col-md-4 col-lg-3">
            <div class="card">
              <a href="/the-house/single">
                <img class="card-img-top" src="{{ URL::asset('assets/images/thumbnail.jpg') }}">
                <div class="card-body darken-layout">
                  <p class="card-category mb-2">艺术与建筑</p>
                  <h3 class="card-title">瑞士工艺的前世今生</h3>
                  <p class="card-text">贝耶勒基金会与文化遗产的保存</p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-12 col-md-4 col-lg-3">
            <div class="card">
              <a href="/the-house/single">
                <img class="card-img-top" src="{{ URL::asset('assets/images/thumbnail.jpg') }}">
                <div class="card-body darken-layout">
                  <p class="card-category mb-2">艺术与建筑</p>
                  <h3 class="card-title">瑞士工艺的前世今生</h3>
                  <p class="card-text">贝耶勒基金会与文化遗产的保存</p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-12 col-md-4 col-lg-3">
            <div class="card">
              <a href="/the-house/single">
                <img class="card-img-top" src="{{ URL::asset('assets/images/thumbnail.jpg') }}">
                <div class="card-body darken-layout">
                  <p class="card-category mb-2">艺术与建筑</p>
                  <h3 class="card-title">瑞士工艺的前世今生</h3>
                  <p class="card-text">贝耶勒基金会与文化遗产的保存</p>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="text-center mt-5">
          <button class="btn btn-outline">上传更多报道</button>
        </div>
      </div>
	</div>
</div>
@include('partials.official-services')
@endsection
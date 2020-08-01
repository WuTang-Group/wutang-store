@extends('layouts.app')

@section('content')
@include('partials.section-nav-1')
<div class="darken-layout the-house">
	<div class="section-t-space section-b-space position-relative">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="container d-md-flex align-items-center">
              <span class="index d-none d-md-block tx-mont">01</span>
              <div class="thumbnail">
                <img src="assets/images/2.png" class="bg-img" />
              </div>
              <div>
                <h1 class="text-white title-lg mb-3">
                  <span class="index d-inline-block d-md-none tx-mont">01</span>
                  瑞士工艺的前世今生
                </h1>
                <p>瑞士工艺一直是糅合精致与创意、奢华与实用的杰出代表。
                虽然在瑞士鲜有同其制表业一样卓越的设计和工艺水平，但可以由此一窥全貌，
                反映出工艺背后的悠久历史和其人民应有的自豪感。</p>
                <a href="the-house-details.php" class="btn btn-white">更多</a>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="container d-md-flex align-items-center">
              <span class="index d-none d-md-block tx-mont">02</span>
              <div class="thumbnail">
                <img src="assets/images/thumbnail.png" class="bg-img" />
              </div>
              <div>
                <h1 class="text-white title-lg mb-3">
                  <span class="index d-inline-block d-md-none tx-mont">02</span>
                  瑞士工艺的前世今生
                </h1>
                <p>瑞士工艺一直是糅合精致与创意、奢华与实用的杰出代表。
                虽然在瑞士鲜有同其制表业一样卓越的设计和工艺水平，但可以由此一窥全貌，
                反映出工艺背后的悠久历史和其人民应有的自豪感。</p>
                <a href="the-house-details.php" class="btn btn-white">更多</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 section-t-space">
            <nav class="container">
                <ul class="pagination">
                  <li class="page-item disabled"><a class="" href="#">Previous</a></li>
                  <li class="page-item active"><a class="" href="#">1</a></li>
                  <li class="page-item"><a class="" href="#">2</a></li>
                  <li class="page-item"><a class="" href="#">3</a></li>
                  <li class="page-item"><a class="" href="#">Next</a></li>
                </ul>
            </nav>
          </div>
        </div>
      </div>
	</div>
</div>
@include('partials.official-services')
@endsection
@extends('layouts.app')

@section('content')
@include('partials.section-nav-1')
<div class="black-layout brand">
  <img src="{{ URL::asset('assets/images/queen-spades-and-you-bg.png') }}" class="img-fluid" />
	<div class="section-t-space section-b-space position-relative">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h1 class="text-white title-lg mb-5">Queen Spades和你</h1>
            <p>您对内部的感觉不仅反映了您对外部的看法，还反映了世界对您的反应。<br>
            我们独特的皮肤和自我护理方法强调有意识地利用时间，并能直观地感受真实的自我。<br>
            </p>
            <p class="mb-5">选择适合您护肤需求的 Queen Spades护肤系列，根据包装说明进行涂抹，<br>
            深呼吸，放松身心，沉浸在精神世界，同时焕发肌肤活力。</p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 col-md-6 col-lg-5">
            <img src="{{ URL::asset('assets/images/1.png') }}" class="img-fluid" />
          </div>
          <div class="col-12 col-md-6 col-lg-5 align-self-end pt-4 mt-4 hr-line-top">
            <p>我们所有的产品的配方都不含︰<br>
            羥基苯甲酸酯、鄰苯二甲酸酯、丙二醇、礦物油、<br>
            礦脂、石蠟、二乙醇胺、聚乙烯微粒、動物成分*。</p>
            <p class="mb-0">希望您的面部、眼部、嘴唇、颈部、胸腔和身体的任何地方，<br>
            都能体验到 LITHOTHERAPY 技术的独特之处。</p>
          </div>
        </div>
        <div class="row section-t-space">
          <div class="col-12">
            <div class="chapter-pagination">
              <a href="story"><i class="fa fa-angle-left"></i></a>
              <label>其他章节</label>
              <a href="start-from-your-inner-skin"><i class="fa fa-angle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
	</div>
</div>
@include('partials.official-services')
@endsection
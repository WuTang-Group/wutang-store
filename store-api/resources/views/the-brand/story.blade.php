@extends('layouts.app')

@section('content')
@include('partials.section-nav-1')
<div class="black-layout brand">
  <img src="{{ URL::asset('assets/images/brand-story-bg.png') }}" class="img-fluid" />
	<div class="section-t-space section-b-space position-relative">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h1 class="text-white title-lg mb-5">品牌故事</h1>
            <p >Queen Spades Skin通过革命性的Lithotherapy护肤技术<br>
            将科学与精神连结在一起。 该技术由一群全球顶级的医生共同研发，<br>
            使用珍贵的宝石和矿物质来激活脉轮并帮助您的皮肤恢复活力。<br>
            </p>
            <p>Queen Spades将最新的科学进展与强大而积极的灵气能量疗法<br>
            相结合，使整体皮肤护理提升到一个新的高度，这些宝石能量疗法<br>
            唤醒了人体的脉轮或能量中心。 我们开创性的商业秘密配方使用<br>
            顶级活性和纯净成分，有助于渗透和滋养您的皮肤，使您拥有深层的内在光泽。</p>
            <p class="mb-5">Queen Spades的创新豪华护肤产品系列，是古老和现代技术共同作用下的变革成果。</p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 col-md-6 col-lg-5">
            <img src="{{ URL::asset('assets/images/1.png') }}" class="img-fluid" />
          </div>
          <div class="col-12 col-md-6 col-lg-5 align-self-end pt-4 mt-4 hr-line-top">
            <p>Queen Spades是全天然的，并且：</p>
            <ul class="ol-list-style pl-0">
              <li>使用专有的 Lithotherapy 技术</li>
              <li>利用灵气的古老治疗能量</li>
              <li>包含脉轮平衡成分</li>
              <li>体现珍贵的宝石和矿物</li>
            </ul>
          </div>
        </div>
        <div class="row section-t-space justify-content-center">
          <div class="col-12 d-inline-block d-md-none mb-4">
            <img src="{{ URL::asset('assets/images/8.png') }}" class="img-fluid" />
          </div>
          <div class="col-12 col-md-6">
            <p>Lithotherapy技术将珍贵的矿物和宝石的特殊性能与<br>
            我们自己的专有护肤配方相结合，并富含活性和纯净成分。</p>
            <p>我们所有的产品都充满了爱心和治愈灵气的能量。</p>
            <p>灵气是流经所有生物的生命能量。<br>
            灵气的能量应该强大并且可以自由流动。<br>
            当能量受阻或虚弱时，可能会出现身体和情感上的失衡。</p>
            <p>脉轮代表人体中的能量中心，有助于调节器官功能、<br>
            免疫系统及情绪。 从脊柱的根部到头顶，<br>
            整个身体有7个脉轮。</p>
            <div class="learn-more-content">
              <p>这是Queen Spades的魔力！</p>
              <p>5,000年前，埃及人摄取黄金用于净化身体和精神。古人认为，只有刺激生命力才能使体内黄金起作用。</p>
              <p>哲学家普林尼（Pliny the Elder，公元23-79年）曾描述钻石是“能战胜一切有毒物质，使它们无能为力”，理由是钻石粉有治疗效果。</p>
              <p>这些信念一直延续至今，与您的珠宝盒一样，在美容产品中也会遇到贵金属和宝石。 Queen Spades的护肤专家结合了革命性的Lithotherapy 技术和转化疗法，很高兴为您提供融合了宝石和矿物质胶原蛋白的最新皮肤护理。</p>
            </p>
            </div>
            <button type="button" class="btn btn-white learn-more">更多</button>
          </div>
          <div class="col-12 col-md-6 d-none d-md-inline-block">
            <img src="{{ URL::asset('assets/images/8.png') }}" class="img-fluid" />
          </div>
        </div>
        <div class="row section-t-space">
          <div class="col-12">
            <div class="chapter-pagination">
              <a href="start-from-your-inner-skin"><i class="fa fa-angle-left"></i></a>
              <label>其他章节</label>
              <a href="queen-spades-and-you"><i class="fa fa-angle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
	</div>
</div>
@include('partials.official-services')
@endsection
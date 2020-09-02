@extends('layouts.app')

@section('content')
@include('partials.section-nav-1')
<div class="black-layout product-idea">
	<div class="section-t-space section-b-space position-relative">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-6">
            <h1 class="text-white title-lg mb-5"><span class="tx-mont">LITHOTHERAPY</span> 技术</h1>
            <p>在Queen Spades，我们在保养皮肤、<br>
            自我护理和全面美容方面有独特的方法。</p>
            <p>这就是为什么我们整个Queen Spades系列产品经过精心<br>
            设计和制作，可以治疗皮肤、身体、思想和精神。</p>
            <p>我们注入宝石的每一款产品均采用我们专有的<br>
              LITHOTHERAPY 技术制成，独特地融合了珍贵的矿物质以及<br>
              含有医生配制的全天然清洁护肤成分的宝石。 所有产品都倾注了<br>
              我们的爱心和恢复灵气的能量，使您进入完全放松、充满幸福的状态。</p>
            <div class="mt-5">
              <h2 class="text-white title mb-4"><span class="index">1</span> <span class="tx-mont">LITHOTHERAPY</span> 专利技术的秘密</h2>
              <div class="content">
                <p>在Queen spades，我们与全球顶尖的医生团队紧密合作，<br>
                利用这些令人难以置信的特性，创造出效果极佳的<br>
                顶级天然皮肤护理。我们突破性的 LITHOTHERAPY 技术<br>
                的核心是将宝石颗粒注入独有配制的面膜精华液中。<br>
                这样每次您使用Queen spades胶原蛋白面膜放松身心时，<br>
                会感受在真正的天然宝石中沐浴皮肤。</p>
                <p>我们的宝石都是精心选择的，例如金、钻石、玫瑰石英<br>
                和黑珍珠，它们都有令人惊奇的治疗功能。如注入钻石的面膜，<br>
                可以提亮您的皮肤，胶态金颗粒能加速血清吸收，促进<br>
                自我修复，实现出色的皮肤修复。再如玫瑰石英可以抗氧化<br>
                剂舒缓和镇静，珍珠粉中的天然钙和氨基酸则可以排毒。</p>
                <p>我们临床上先进的 LITHOTHERAPY 面膜是一种单向<br>
                传递系统，提供不含残酷的成分和宝石颗粒，以逆转过早<br>
                衰老的迹象并促进最深层皮肤的愈合。</p>
              </div>
            </div>
            <div class="mt-5">
              <h2 class="text-white title mb-4"><span class="index">2</span> 整体治疗</h2>
              <div class="content">
                <p>就像美不止于皮肤深层一样，我们的 LITHOTHERAPY<br>
                护肤系列，从黄金、钻石到黑珍珠和玫瑰石英，每一种<br>
                宝石都经过精心挑选，不仅可以物理治愈，也能刺激<br>
                人体能量中心和精神</p>
                <p>我们通过为每个面罩注入灵气能量来进一步提升<br>
                这种精神疗法。 灵气，一种遍及所有生物的生命能量，<br>
                与我们面罩中的宝石一起工作，可帮助您打开心灵，<br>
                享受内在的爱、纯洁和力量，并提升您的创造力和自信。</p>
              </div>
            </div>
          </div>
          <div class="vertical-line"></div>
          <div class="col-12 col-lg-6">
            <div class="scroll-element">
              <img src="{{ URL::asset('assets/images/lithotherapy.png') }}" class="img-fluid" />
              <div class="chapter-pagination">
                <a href="arts"><i class="fa fa-angle-left"></i></a>
                <label>其他章节</label>
                <a href="queen-spades-and-you"><i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
	</div>
</div>
@include('partials.official-services')
@endsection
@extends('layouts.app')

@section('content')
@include('partials.section-nav-1')
<div class="darken-layout product-idea">
	<div class="section-t-space section-b-space position-relative">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-6">
            <h1 class="text-white title-lg mb-5">杰出的艺术</h1>
            <p>从古至今，人们都对宝石、晶石等充满好奇和兴趣。在大自然万千年<br>
            的孕育下，它们聚集了难以想象的力量。近年来，更是为美容界带来<br>
            一股新浪潮。宝石除了靓丽的外表外，对我们的肌肤又能起到什么作用呢？</p>
            <p>其实宝石的作用可以追溯到远古时代，当时聪明的人类已懂得把珍贵<br>
            天然宝石的解毒功效运用于治疗过程中。经过数千年的衍化与发展，<br>
            【宝石疗法】的技术已经非常成熟了，近年来，深受大家的喜爱。</p>
            <p>科技的进步，研发了不同类型宝石的护肤功效，都得到了有效的科学验证。<br>
            目前，已经能透过纳米技术把有效成分分解成极微小的分子，<br>
            再带进皮肤底层，将效用最大化。</p>
            <div class="mt-5">
              <h2 class="text-white title mb-4"><span class="index">1</span> 宝石疗法</h2>
              <div class="content">
                <p>“【宝石疗法】也叫矿物治疗 (Lithotherapy)。<br>
                “宝石”总是给人一种高贵精美的印象，因此大家会认为<br>
                包含“宝石”成分的护肤品都是非常好的。</p>
                <p>因此很多商家也打着钻石、孔雀石、月亮石等噱头来推广<br>
                产品，却忽略了其真正义意。宝石虽然高贵，但其实是<br>
                矿石类的一种，也许大家会疑惑：“既然是矿石，<br>
                那和普通的石头有什么区别呢？”<br>
                它们有着本质的区别，每一种矿石都蕴含不同的<br>
                微量元素，发挥的功效不尽相同，而且必须经过专业<br>
                的提炼才可以把功效发挥最大化，这是宝石特有的优点。</p>
              </div>
            </div>
          </div>
          <div class="vertical-line"></div>
          <div class="col-12 col-lg-6">
            <img src="{{ URL::asset('assets/images/creativity.png') }}" class="img-fluid" />
            <div class="chapter-pagination">
              <a href="queen-spades-and-you"><i class="fa fa-angle-left"></i></a>
              <label>其他章节</label>
              <a href="lithotherapy-technology"><i class="fa fa-angle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
	</div>
</div>
@include('partials.official-services')
@endsection
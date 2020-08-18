@extends('layouts.app')

@section('content')
@include('partials.section-nav-1')
<div class="darken-layout product-idea">
	<div class="section-t-space section-b-space position-relative">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-6">
            <h1 class="text-white title-lg mb-5"><span class="tx-mont">Queen Spades SKIN</span>和你</h1>
            <p>请立即使用Queen Spades的护肤系列开始您的转型护肤之旅。<br>
            您不是孤单一人，很多网红明星都使用我们的产品作为<br>
            常规护肤程序的一部分。</p>
            <p>简单优雅的护理下，有着奢华的滋养，让您在舒适的环境中<br>
            享受深层的放松。做为您水疗护理的完美补充，每周使用一次<br>
            Queen Spades的面膜护理，可为解决显示衰老或疲劳迹象的皮肤问题。</p>
            <p>每周使用我们的面膜可持续为您的皮肤提供真正需要的护理，<br>
            达到自我修复。让您的肌肤达到：年轻、充满活力、发光的效果。</p>
            <div class="mt-5">
              <h2 class="text-white title mb-4"><span class="index">1</span> 哲学护肤</h2>
              <div class="content">
                <p>给自己一个面膜作为礼物，以帮助您重新平衡精神、<br>
                放松身心、恢复皮肤活力，或者用“三个R”哲学。</p>
                <ol class="ol-list-style">
                  <li><p>
                    Rebalance Your Spirit <br>
                    宝石和矿物质的治疗特性可重新平衡您的精神，<br>
                    有助于激活脉轮，促进精神和身体的平衡与统一。<br>
                    从打开产品包装的那一刻起，Lejla便以灵巧的能量亲切地<br>
                    对待每个面膜，以促进精神康复。
                  </p></li>
                  <li><p>
                    Relax Your Mind<br>
                    放松您的思想，通过让自己安静来释放压力和紧张感，<br>
                    每天花点时间做一个积极的计划。每个面膜都注入了<br>
                    玫瑰精油，以增加心灵趋向平静的效果
                  </p></li>
                  <li><p>
                    Rejuvenate Your Skin<br>
                    使用有效的天然成分（例如纳米金和钻石粉）使您的<br>
                    皮肤恢复活力。其他活性元素包括海洋胶原蛋白、透明质酸<br>
                    和烟酰胺（维生素B3），它们有助于刺激人体的自然<br>
                    再生过程，对抗衰老迹象，并给皮肤带来年轻的内在光泽。
                  </p></li>
                </ol>
              </div>
            </div>
            <div class="mt-5">
              <h2 class="text-white title mb-4"><span class="index">2</span> 每个人都是美丽的</h2>
              <div class="content">
                <p>人是有灵魂的，生命的每一秒都是息息相关的，我们呼吸着<br>
                生命的馈赠，我们在和谐的宇宙中漂浮着。如果不是如此，<br>
                我们就不复存在。我们是宇宙奥秘中的一份子。</p>
                <p>我们研究的主题是：“你可以变得更加漂亮。</p>
              </div>
            </div>
          </div>
          <div class="vertical-line"></div>
          <div class="col-12 col-lg-6">
            <div class="scroll-element">
              <img src="{{ URL::asset('assets/images/queen-spades-skin.png') }}" class="img-fluid" />
              <div class="chapter-pagination">
                <a href="lithotherapy-technology"><i class="fa fa-angle-left"></i></a>
                <label>其他章节</label>
                <a href="arts"><i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
	</div>
</div>
@include('partials.official-services')
@endsection
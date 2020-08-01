<div class="section-nav">
  	<div class="container">
    	<ul>
    		@if(!Request::is('product-idea','the-brand','the-house'))
	      		<li class="back">
	      		@if(Request::is('product-idea/*'))
	      			<a href="/product-idea">返回</a>
	      		@elseif(Request::is('the-brand/*'))
	      			<a href="/the-brand">返回</a>
	      		@elseif(Request::is('the-house/*'))
	      			<a href="/the-house">返回</a>
	      		@endif
      		@endif
      		</li>
      		<li class="{{ Request::is('product-idea','product-idea/*') ? 'active' : null }}"><a href="/product-idea">产品理念</a></li>
      		<li class="{{ Request::is('the-brand','the-brand/*') ? 'active' : null }}"><a href="/the-brand">品牌介绍</a></li>
      		<li class="{{ Request::is('the-house','the-house/*') ? 'active' : null }}"><a href="/the-house">精彩内容</a></li>
    	</ul>
  	</div>
</div>
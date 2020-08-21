<div class="section-nav">
  	<div class="container">
    	<ul>
    		@if(!Request::is('product-idea','the-brand','the-house'))
	      		<li class="back">
	      		@if(Request::is('product-idea/*'))
	      			<a href="/product-idea">@lang('general.back')</a>
	      		@elseif(Request::is('the-brand/*'))
	      			<a href="/the-brand">@lang('general.back')</a>
	      		@elseif(Request::is('the-house/*'))
	      			<a href="/the-house">@lang('general.back')</a>
	      		@endif
      		@endif
      		</li>
      		<li class="{{ Request::is('product-idea','product-idea/*') ? 'active' : null }}"><a href="/product-idea">@lang('general.product-idea')</a></li>
      		<li class="{{ Request::is('the-brand','the-brand/*') ? 'active' : null }}"><a href="/the-brand">@lang('general.brand-introduction')</a></li>
      		<li class="{{ Request::is('the-house','the-house/*') ? 'active' : null }}"><a href="/the-house">@lang('general.blog-post')</a></li>
    	</ul>
  	</div>
</div>
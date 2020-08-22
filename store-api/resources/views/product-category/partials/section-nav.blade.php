<div class="section-nav">
  	<div class="container">
    	<ul>
      		<li class="{{ (strpos(Route::currentRouteName(), 'category') === 0) ? 'active' : null }}"><a href="/product-category/{{ $slug }}">@lang('general.product')</a></li>
      		<li class="{{ (strpos(Route::currentRouteName(), 'category.story') === 0) ? 'active' : null }}"><a href="/product-category/{{ $slug }}/story">@lang('general.story')</a></li>
      		<li class="last"><a href="/product-category/{{ $parent }}">@lang('general.other')</a></li>
    	</ul>
  	</div>
</div>
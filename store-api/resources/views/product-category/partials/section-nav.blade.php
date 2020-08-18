<div class="section-nav">
  	<div class="container">
    	<ul>
      		<li class="{{ (strpos(Route::currentRouteName(), 'category') === 0) ? 'active' : null }}"><a href="/product-category/{{ $slug }}">产品</a></li>
      		<li class="{{ (strpos(Route::currentRouteName(), 'category.story') === 0) ? 'active' : null }}"><a href="/product-category/{{ $slug }}/story">故事</a></li>
      		<li class="last"><a href="/product-category/{{ $parent }}">其他套装</a></li>
    	</ul>
  	</div>
</div>
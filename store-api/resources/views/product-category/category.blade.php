@extends('layouts.app')

@section('content')
<div class="dark-layout">
	<div class="container section-t-space">
		<div class="row">
			<div class="col-12 text-center">
				<h2 class="text-white title">{{ $response->data[0]->title }}</h2>
			</div>
			<div class="col-12 col-md-12 section-t-space section-b-space">
				<div class="row product-category-wrapper">
					@foreach($response->data[0]->children as $category)
					<div class="col-12 col-md-6 product-category-col">
						<div class="img-wrapper transition-scale">
							<a href="/product-category/{{ $category->slug }}">
								<img src="{{ $category->banner }}" class="img-fluid" />
							</a>
						</div>
						<h2 class="tx-mont">{{ $category->title_en }}</h2>
						<h2>{{ $category->title }}</h2>
                    	<div class="mt-4"><a href="/product-category/{{ $category->slug }}" class="btn btn-white">探索</a></div>
					</div>
					@endforeach
				</div>
			</div>

          	<div class="col-12 mb-5">
            	<h2 class="text-white title">创新产品</h2>
          	</div>
            @include('partials.product',['products' => $products->data->data])
		</div>
	</div>
</div>
@include('partials.official-services')
@endsection
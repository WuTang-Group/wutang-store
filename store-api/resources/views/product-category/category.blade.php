@extends('layouts.app')

@section('content')
<div class="dark-layout">
	<div class="container section-t-space section-b-space">
		<div class="row">
			<div class="col-12 text-center">
				<h2 class="text-white title">{{ $response->data[0]->title }}</h2>
			</div>
			<div class="col-12 col-md-12 section-t-space section-b-space">
				<div class="row pc-card-wrapper">
					@foreach($response->data[0]->children as $category)
					<div class="col-12 col-md-6 mb-3">
		                <div class="card">
							<a href="/product-category/{{ $category->slug }}">
			                    <div class="inner">
			                        <div class="bg-cover" style="background-image: url({{ $category->banner }})"></div>
			                    </div>
		                    </a>
		                    <div class="card-body dark-layout">
		                        <h3 class="card-title tx-mont">
		                            {{ $category->title_en }}
		                        </h3>
		                        <h3 class="card-title">{{ $category->title }}</h3>
		                        <a href="/product-category/{{ $category->slug }}" class="btn btn-white">@lang('general.explore')</a>
		                    </div>
		                </div>
		            </div>
					@endforeach
				</div>
			</div>

          	<div class="col-12 mb-5">
            	<h2 class="text-white title">@lang('general.new-arrival-2')</h2>
          	</div>
            @include('partials.product',['products' => $products->data->data])
		</div>
	</div>
</div>
@include('partials.official-services')
@endsection
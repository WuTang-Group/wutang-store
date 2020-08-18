@extends('layouts.app')

@section('content')
@include('product-category.partials.section-nav', ['slug' => $response->data[0]->slug, 'parent' =>  $response->data[0]->parent->slug])
<div class="dark-layout product-category">
	<div id="category" class="section-t-space section-b-space position-relative" style="background: url({{ $response->data[0]->banner }}) no-repeat center center / cover;">
        <div class="d-block d-sm-none product-image">
          <img src="{{ $response->data[0]->banner }}" class="img-fluid" />
        </div>
        <div class="category-title">
            <h2 class="tx-mont">{{ $response->data[0]->title_en }}</h2>
            <h1>{{ $response->data[0]->title }}</h1>
            <p>
                @if (!empty($_COOKIE['locale']) && $_COOKIE['locale'] == 'en')
                    {{ $response->data[0]->describe_en }}
                @else
                    {{ $response->data[0]->describe }}
                @endif
            </p>
        </div>
        <div>
            <a href="#products" class="slider-scroll-down anchor">往下滑</a>
        </div>
	</div>
	<div class="container section-t-space">
		<div class="row" id="products">
            @foreach($response->data[0]->products as $product)
            <div class="product-box col-12 col-sm-6 col-lg-4">
                <div class="img-wrapper">
                    <a href="#">
                        <img src="{{ $product->thumbnail }}" class="img-fluid" alt="">
                    </a>
                    <div class="cart-info cart-wrap">
                        <div class="cart-button">
                            <button class="btn btn-outline mb-2">添加入购物车</button> 
                            <a href="/product/{{ $product->slug }}" class="btn btn-outline">浏览</a> 
                        </div>
                    </div>
                </div>
                <div class="product-detail">
                    <div class="product-name">
                        <h3 class="tx-mont"><a href="/product/{{ $product->slug }}">{{ $product->product_name_en }}</a></h3>
                        <h3><a href="/product/{{ $product->slug }}">{{ $product->product_name }}</a></h3>
                    </div>
                    <div class="product-category">
                        <a href="/product-category/{{ $response->data[0]->slug }}">{{ $response->data[0]->title }}</a>
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                        <h4>@php echo $product->sale_price ? '<del>¥ '.$product->price.'</del> ¥ '.$product->sale_price:'¥ '.$product->price @endphp</h4>
                        <a href="" class="add-to-wishlist"></a>
                    </div>
                </div>
            </div>
            @endforeach
		</div>
	</div>
    <div class="container section-t-space">
        <div class="row justify-content-center align-items-center category-description">
            <div class="col-12 col-md-6 col-lg-5">
                <h2 class="tx-mont">{{ $response->data[0]->title_en }}</h2>
                <h2>{{ $response->data[0]->title }}</h2>
                <div class="mt-5">
                    @if (!empty($_COOKIE['locale']) && $_COOKIE['locale'] == 'en')
                        {{ $response->data[0]->description_en }}
                    @else
                        {{ $response->data[0]->description }}
                    @endif
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-5">
                <img src="{{ $response->data[0]->img }}" class="img-fluid" />
            </div>
        </div>
    </div>
</div>
@include('partials.official-services')
@endsection
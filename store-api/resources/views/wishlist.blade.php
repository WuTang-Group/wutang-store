@extends('layouts.app')

@section('content')
<div class="dark-layout">
	<div class="container section-t-space">
		<div class="row justify-content-center">
			<div class="col-12 mb-4">
				<h1 class="text-white title">@lang('general.my-wishlist')</h1>
			</div>
			<div class="col-12">
				<div class="wishlist">
					<div class="wishlist-item d-md-flex align-items-center">
	                    <div class="product-image">
	                        <a href=""><img src="https://www.enkoproducts.com/wp-content/uploads/2018/11/v5-02.jpg" /></a>
	                    </div>
	                    <div class="product-description">
                            <p class="tx-mont">SKIN CAVIAR LUXE CREAM SHEER</p>
                            <p>鱼子精华琼贵轻盈乳霜</p>
                            50 ml / 1.7 oz
	                        <div class="tx-uppercase mt-2 tx-dark-gray">20 ml / 0.68 oz</div>
	                    </div>
	                    <div class="product-price unit-price text-center">¥ 4,150</div>
	                    <div class="product-form text-center">
	                    	<button class="btn btn-outline">@lang('general.add-to-cart')</button> 
	                    </div>
	                    <div class="remove-product text-center"><a href="" class="tx-dark-gray">@lang('general.remove')</a></div>
	                </div>
					<div class="wishlist-item d-md-flex align-items-center">
	                    <div class="product-image">
	                        <a href=""><img src="https://www.enkoproducts.com/wp-content/uploads/2018/11/v5-02.jpg" /></a>
	                    </div>
	                    <div class="product-description">
                            <p class="tx-mont">SKIN CAVIAR LUXE CREAM SHEER</p>
                            <p>鱼子精华琼贵轻盈乳霜</p>
                            50 ml / 1.7 oz
	                        <div class="tx-uppercase mt-2 tx-dark-gray">20 ml / 0.68 oz</div>
	                    </div>
	                    <div class="product-price unit-price text-center">¥ 4,150</div>
	                    <div class="product-form text-center">
	                    	<button class="btn btn-outline">@lang('general.add-to-cart')</button> 
	                    </div>
	                    <div class="remove-product text-center"><a href="" class="tx-dark-gray">@lang('general.remove')</a></div>
	                </div>
                </div>
			</div>
		</div>
	</div>
</div>
@endsection
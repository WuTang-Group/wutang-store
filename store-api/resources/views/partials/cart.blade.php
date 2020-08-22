@if($cart_collection && $cart_collection->data[0]->shop_cart_items != null)
<div class="col-lg-8">
	<div class="cart">
		@php $subtotal = 0 @endphp
		@foreach($cart_collection->data[0]->shop_cart_items as $item)
		<div class="cart-item d-md-flex align-items-center justify-content-between">
		    <div class="product-image">
		        <a href="/product/{{ isset($item->product->slug) ? $item->product->slug:$item->slug }}"><img src="{{ isset($item->product->thumbnail) ? $item->product->thumbnail:$item->thumbnail }}" /></a>
		    </div>
		    <div class="product-description">
		        <p class="tx-mont">{{ isset($item->product->product_name_en) ? $item->product->product_name_en:$item->product_name_en }}</p>
		        <p>{{ isset($item->product->product_name) ? $item->product->product_name:$item->product_name }}</p>
		        <!-- <div class="tx-uppercase mt-2 tx-dark-gray">20 ml / 0.68 oz</div> -->
		    </div>
		    <div class="product-price unit-price text-center">
		    	@if(isset($item->product))
		        	@php 
		        		if($item->product->sale_price) {
		        			$price = $item->product->sale_price;
		        			$price_html = '<del>¥ '.number_format($item->product->price).'</del> <span>¥ '.number_format($item->product->sale_price).'</span>';
		        		} else {
		        			$price = $item->product->price;
		        			$price_html = '<span>¥ '.number_format($item->product->price).'<span>';
		        		} 

		        		$subtotal+= $item->amount*$price;
		        	@endphp
		    	@else
		        	@php 
		        		if($item->sale_price) {
		        			$price = $item->sale_price;
		        			$price_html = '<del>¥ '.number_format($item->price).'</del> <span>¥ '.number_format($item->sale_price).'</span>';
		        		} else {
		        			$price = $item->price;
		        			$price_html = '<span>¥ '.number_format($item->price).'<span>';
		        		} 

		        		$subtotal+= $price;
		        	@endphp
		    	@endif
		    	@php echo $price_html @endphp
		    </div>
		  	<div class="product-quantity d-inline-block text-center">
		        <span class="tx-dark-gray">@lang('general.quantity')：</span>{{ isset($item->amount) ? $item->amount:1 }}
		  	</div>
		    <div class="product-price amount text-center">¥ {{ isset($item->amount) ? number_format($item->amount*$price):number_format($price) }}</div>
		    <div class="remove-product text-center"><a href="javascript:void(0)" data-id="{{ isset($item->product->id) ? $item->product->id:$item->id }}" class="tx-dark-gray remove-item">@lang('general.remove')</a></div>
		</div>
		@endforeach
        <!-- <div class="cart-item d-md-flex align-items-center">
            <div class="product-image">
                <a href=""><img src="https://www.enkoproducts.com/wp-content/uploads/2018/11/v5-02.jpg" /></a>
            </div>
            <div class="product-description">
                <p class="tx-mont">SKIN CAVIAR LUXE CREAM SHEER</p>
                <p>鱼子精华琼贵轻盈乳霜</p>
                50 ml / 1.7 oz
                <div class="tx-uppercase mt-2 tx-dark-gray">20 ml / 0.68 oz</div>
            </div>
            <div class="tx-dark-gray gift">礼品</div>
        </div> -->
    </div>
</div>
<div class="col-lg-4">
	<div class="cart-collaterals scroll-element">
		<!-- <div class="mb-5">
            <label>@lang('general.coupon-code')</label>
            <form action="" method="post" id="coupon-form">
            	<div class="input-group">
                    <input type="text" class="form-control form-control-sm" name="coupon" id="coupon">
		          	<span class="input-group-btn">
                		<button type="submit" class="btn btn-solid">@lang('general.next')</button>
		          	</span> 
		        </div>
                <div class="form-group mb-0 mr-sm-3">
                </div>
            </form>
        </div> -->
        <div class="cart-subtotal">
        	<label class="tx-dark-gray">@lang('general.subtotal')</label>
        	<p class="price">{{ number_format($subtotal) }}</p>
        </div>
        <div class="cart-total">
        	<label>@lang('general.total'):</label>
        	<p class="price">{{ number_format($subtotal) }}</p>
        </div>
        <div><a href="/checkout" class="btn btn-outline d-block mt-3">@lang('general.go-checkout')</a></div>
        <div class="information mt-5">
        	<label>贵宾服务</label>
        	<p>
        		如有疑问，请查看常见问题，<br>
				联系在线客服或者拨打服务热线：400-853-1616
			</p>
        	<label>免费退货</label>
        	<p>您可以在签收之日起的7天内申请无理由退货，并承担因此产生的运费。</p>
        	<label>安全支付</label>
        	<p>安全的支付方式</p>
        </div>
        <div><a href="/" class="btn btn-outline d-block mt-3 mb-5">@lang('general.continue-shopping')</a></div>
        <style>
        </style>
	</div>
</div>
@else
<div class="col-lg-12 text-white mt-5 text-center">
	@lang('general.no-item')
	<div class="mt-3">
		<a href="/" class="btn btn-white pl-5 pr-5">@lang('general.continue-shopping')</a>
	</div>
</div>
@endif
@extends('layouts.app')

@section('content')
<div class="dark-layout">
	<div class="container section-t-space">
		<form class="needs-validation" method="post" novalidate>
			<div class="row justify-content-center">
				<div class="col-12">
					<h1 class="text-white title">前往结账</h1>
				</div>
				<div class="col-lg-8">
					<div class="checkout">
						<div class="accordion">
			              	<h2 class="text-white title mb-0" data-toggle="collapse" data-target="#shipping" aria-expanded="true" aria-controls="collapseOne">寄送地址</h2>
			              	<div id="shipping" class="collapse show">
			              		<div class="form-check">
								  	<input class="form-check-input address-checkbox" name="shipping-address" type="radio" value="default" id="default" checked required>
								  	<label class="form-check-label" for="default">默认地址</label>
								</div>
			                    <div id="default-shipping" class="transition-dn active">
				                    <ul>
		                                <li>{{ $results['default_address']->data->address }}</li>
		                                <li>{{ $results['default_address']->data->city }}</li>
		                                <li>{{ $results['default_address']->data->province }}</li>
		                                <li>{{ $results['default_address']->data->district }}, {{ $results['default_address']->data->zip }}</li>
		                                <li>中国</li>
		                                <li class="mt-2">{{ $results['default_address']->data->real_name }}</li>
		                                <li>{{ $results['default_address']->data->phone }}</li>
		                            </ul>
			                    </div>
								<div class="form-check mt-2">
								  	<input class="form-check-input address-checkbox" name="shipping-address" type="radio" value="new" id="new" required>
								  	<label class="form-check-label" for="new">更换地址</label>
								</div>
			                    <div id="new-shipping" class="transition-dn">
				                    <div class="form-group">
				                        <label for="name" class="tx-dark-gray">姓名 *</label>
				                        <input type="text" class="form-control border-white bg-trans" id="name">
				                    </div>
				                    <div class="form-group">
				                        <label for="contact" class="tx-dark-gray">手机号 *</label>
				                        <input type="text" class="form-control border-white bg-trans" id="contact">
				                    </div>
									<div class="form-row">
					                    <div class="form-group col-md-8">
					                        <label for="address_line_1" class="tx-dark-gray">地址 *</label>
					                        <input type="text" class="form-control border-white bg-trans" id="address_line_1">
					                    </div>
					                    <div class="form-group col-md-4">
					                        <label for="address_line_2" class="tx-dark-gray">添加地址</label>
					                        <input type="text" class="form-control border-white bg-trans" id="address_line_2">
					                    </div>
				                    </div>
									<div class="form-row">
					                    <div class="form-group col-md-4">
					                        <label for="postcode" class="tx-dark-gray">邮政编码 *</label>
					                        <input type="text" class="form-control border-white bg-trans" id="postcode">
					                    </div>
					                    <div class="form-group col-md-4">
					                        <label for="city" class="tx-dark-gray">城市 *</label>
					                        <input type="text" class="form-control border-white bg-trans" id="city">
					                    </div>
					                    <div class="form-group col-md-4">
					                        <label for="state" class="tx-dark-gray">省 *</label>
					                        <input type="text" class="form-control border-white bg-trans" id="state">
					                    </div>
				                    </div>
				                    <div class="form-group">
				                        <label for="country" class="tx-dark-gray">国家/地区 *</label>
				                        <input type="text" class="form-control border-white bg-trans" id="country">
				                    </div>
			                    </div>
			              	</div>
			              	<h2 class="text-white title mb-0 collapsed" data-toggle="collapse" data-target="#payment-method" aria-expanded="true" aria-controls="payment-method">付款</h2>
			              	<div id="payment-method" class="collapse">
						    	<div class="form-group">
			                        <label for="method" class="d-block tx-dark-gray">付款方式 *</label>
			                        <div class="form-check form-check-inline">
				                        <input type="radio" name="method" value="alipay" class="form-check-input" id="alipay" checked required>
				                        <label class="form-check-label" for="alipay"><img src="assets/images/payment/alipay.png" /></label>
				                    </div>
				                    <div class="form-check form-check-inline">
				                        <input type="radio" name="method" value="union-pay" class="form-check-input" id="unionpay" required>
				                        <label class="form-check-label" for="unionpay"><img src="assets/images/payment/unionpay.png" /></label>
				                    </div>
				                    <div class="form-check form-check-inline">
				                        <input type="radio" name="method" value="wechat-pay" class="form-check-input" id="wechatpay" required>
				                        <label class="form-check-label" for="wechatpay"><img src="assets/images/payment/wechatpay.png" /></label>
			                        </div>
			                    </div>
			              	</div>
			            </div>
	                </div>
				</div>
				<div class="col-lg-4">
					<div class="order-review pt-5 scroll-element">
		                <div class="order-subtotal">
		                	<label class="tx-dark-gray">小计</label>
		                	<p class="price">{{ number_format($total) }}</p>
		                </div>
		                <div class="order-total mt-5">
		                	<label>总计:</label>
		                	<p class="price">{{ number_format($total) }}</p>
		                </div>
		                <div>
		                	<button type="submit" class="btn btn-outline w-100 mt-3">立即购买</button>
		                </div>
		                <div class="information mt-2">
		                	<p>请注意订单一经处理就不得更改或取消</p>
		                </div>
		                <div class="mt-5">
		                	<label>您的订单 ({{ $count }})</label>
							@foreach($results['cart_items']->data[0]->shop_cart_items as $item)
			                <div class="order-item">
	                            <div class="d-flex position-relative">
	                                <a href="/product/{{ $item->product->slug }}"><img src="{{ $item->product->thumbnail }}" /></a>
	                                <div class="product-description">
			                            <p class="tx-mont">{{ $item->product->product_name_en }}</p>
			                            <p>{{ $item->product->product_name }}</p>
	                                    <div class="tx-uppercase mt-2 tx-dark-gray">数量: {{ $item->amount }}</div>
	                            		<div class="product-price text-right align-self-end">
	                            			@php echo $item->product->sale_price ? '<del>¥ '.number_format($item->product->price).'</del> ¥ '.number_format($item->product->sale_price):'¥ '.number_format($item->product->price) @endphp
	                            		</div>
	                                </div>
	                            </div>
	                        </div>
	                        @endforeach
		                </div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection
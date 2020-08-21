@extends('layouts.app')

@section('content')
<div class="dark-layout">
	<div class="container section-t-space">
		<form class="needs-validation" method="post" novalidate>
			<div class="row justify-content-center">
				<div class="col-12">
					<h1 class="text-white title">@lang('general.checkout')</h1>
				</div>
				<div class="col-lg-8">
					<div class="checkout">
						<div class="accordion">
			              	<h2 class="text-white title mb-0" data-toggle="collapse" data-target="#shipping" aria-expanded="true" aria-controls="collapseOne">@lang('general.shipping-address')</h2>
			              	<div id="shipping" class="collapse show">
			              		<div id="addresses">
			              			@if($results['user_addresses']->data != null)
				              			@include('partials.shipping-addresses', ['address_collection' => $results['user_addresses']])
				              		@endif
								</div>
				              	<button type="button" class="btn btn-white mt-3" data-toggle="modal" data-target="#create-new-address">
								  	@lang('general.new-address')
								</button>
			              	</div>
			              	<h2 class="text-white title mb-0" data-toggle="collapse" data-target="#payment-method" aria-expanded="true" aria-controls="payment-method">@lang('general.payment')</h2>
			              	<div id="payment-method" class="collapse show">
						    	<div class="form-group">
			                        <label for="method" class="d-block tx-dark-gray">@lang('general.payment-method') *</label>
			                        <div class="form-check form-check-inline">
				                        <input type="radio" name="method" value="alipay" class="form-check-input" id="alipay" checked required>
				                        <label class="form-check-label" for="alipay"><img src="assets/images/payment/alipay.png" /></label>
				                    </div>
				                    <!-- <div class="form-check form-check-inline">
				                        <input type="radio" name="method" value="union-pay" class="form-check-input" id="unionpay">
				                        <label class="form-check-label" for="unionpay"><img src="assets/images/payment/unionpay.png" /></label>
				                    </div>
				                    <div class="form-check form-check-inline">
				                        <input type="radio" name="method" value="wechat-pay" class="form-check-input" id="wechatpay">
				                        <label class="form-check-label" for="wechatpay"><img src="assets/images/payment/wechatpay.png" /></label>
			                        </div> -->
			                    </div>
			              	</div>
			            </div>
	                </div>
				</div>
				<div class="col-lg-4">
					<div class="order-review pt-5 scroll-element">
		                <div class="order-subtotal">
		                	<label class="tx-dark-gray">@lang('general.subtotal')</label>
		                	<p class="price">{{ number_format($total) }}</p>
		                </div>
		                <div class="order-total mt-5">
		                	<label>@lang('general.total'):</label>
		                	<p class="price">{{ number_format($total) }}</p>
		                </div>
		                <div>
		                	<button type="submit" onclick="submitForm()" class="btn btn-outline w-100 mt-3">@lang('general.buy-now')</button>
		                </div>
		                <div class="information mt-2">
		                	<p>请注意订单一经处理就不得更改或取消</p>
		                </div>
		                <div class="mt-5">
		                	<label>@lang('general.your-order') ({{ $count }})</label>
							@foreach($results['cart_items']->data[0]->shop_cart_items as $item)
			                <div class="order-item">
	                            <div class="d-flex position-relative">
	                                <a href="/product/{{ $item->product->slug }}"><img src="{{ $item->product->thumbnail }}" /></a>
	                                <div class="product-description">
			                            <p class="tx-mont">{{ $item->product->product_name_en }}</p>
			                            <p>{{ $item->product->product_name }}</p>
	                                    <div class="tx-uppercase mt-2 tx-dark-gray">@lang('general.quantity'): {{ $item->amount }}</div>
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
		<div id="payment-result" class="d-none">
			<div class="row justify-content-center">
				<div class="col-12 col-md-9">
					<div class="small-section text-center">
				    	<div class="row">
				    		<div class="col-12 col-md-6">
				    			<h4 class="text-white">@lang('general.my-account.order')：<span id="order-number"></span></h4>
				    		</div>
				    		<div class="col-12 col-md-6">
				    			<h4 class="text-white">@lang('general.total-amount')：¥ <span id="total-amount"></span></h4>
				    		</div>
				    	</div>
	                    <div class="mt-4"><button type="button" class="btn btn-outline loading" disabled>@lang('general.waiting-for-payment')</button></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('before_footer_scripts')
<div class="modal fade" id="create-new-address" tabindex="-1" role="dialog" aria-hidden="true">
  	<div class="modal-dialog modal-dialog-centered" role="document">
    	<div class="modal-content white-layout">
     		<div class="modal-header">
        		<h5 class="modal-title" id="exampleModalLongTitle">@lang('general.new-address')</h5>
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        		</button>
      		</div>
      		<form class="needs-validation" method="post" novalidate>
	      		<div class="modal-body">
	                <div class="form-group">
	                    <label for="name" class="tx-dark-gray">@lang('general.name') *</label>
	                    <input type="text" name="contact_name" class="form-control border-dark" id="name" required>
	                </div>
	                <div class="form-group">
	                    <label for="contact" class="tx-dark-gray">@lang('general.my-account.contact-number') *</label>
	                    <input type="text" name="contact_phone" class="form-control border-dark" id="contact" required>
	                </div>
					<div class="form-row" data-toggle="distpicker">
	                    <div class="form-group col-md-4">
	                        <label for="province" class="tx-dark-gray">@lang('general.my-account.province') *</label>
	                        <select data-province="" name="province" class="form-control border-dark" id="province" required></select>
							<div class="invalid-feedback"></div>
	                    </div>
	                    <div class="form-group col-md-4">
	                        <label for="city" class="tx-dark-gray">@lang('general.my-account.city') *</label>
        					<select data-city="" name="city" class="form-control border-dark" id="city" required></select>
							<div class="invalid-feedback"></div>
	                    </div>
	                    <div class="form-group col-md-4">
	                        <label for="district" class="tx-dark-gray">@lang('general.my-account.district') *</label>
	                        <select data-district="" name="district" class="form-control border-dark" id="district" required></select>
							<div class="invalid-feedback"></div>
	                    </div>
	                </div>
					<div class="form-row">
	                    <div class="form-group col-md-8">
	                        <label for="address" class="tx-dark-gray">@lang('general.my-account.address') *</label>
	                        <input type="text" name="address" class="form-control border-dark" id="address" required>
							<div class="invalid-feedback"></div>
	                    </div>
	                    <div class="form-group col-md-4">
	                        <label for="zip" class="tx-dark-gray">@lang('general.my-account.zipcode') *</label>
	                        <input type="text" name="zip" class="form-control border-dark" id="zip" required>
							<div class="invalid-feedback"></div>
	                    </div>
	                </div>
	      		</div>
	      		<div class="modal-footer">
	        		<button type="button" class="btn btn-outline" data-dismiss="modal">@lang('general.cancel')</button>
	        		<button type="submit" onclick="createAddress()" class="btn btn-solid">@lang('general.save')</button>
	      		</div>
      		</form>
    	</div>
  	</div>
</div>
@endsection
@section('footer_scripts')
<script type="text/javascript">
	ws = new WebSocket("ws://120.79.173.163:10086");
	// 客户端与服务端建立连接时触发
	ws.onopen = function(e) {
	    console.log(e);
	};
	// 客户端接收服务端数据时触发
	ws.onmessage = function(e) {
	    //console.log(e);
	    const data = JSON.parse(e.data);
	    console.log(data);
	    window.location.href = BASE_URL + 'my-account/order/' + data.order.no;
	};
	// 通讯关闭时触发
	// ws.close = function() {
	//
	// }

</script>
<script type="text/javascript">
	function submitForm(){
		$('form').unbind('submit').submit(function(event) {
			event.preventDefault();
			$this = $(this);
			if (!pass) { return false; } //Check form validity
	        var formData = {
	            'address_id'  : $('input[name=address_id]:checked').val(),
	        };

			axios.post(BASE_URL+'api/orders', formData)
			  	.then(function (response) {
			    	if(response.data.code == 20001) {
			    		var order_no = response.data.data.no;
			    		var amount = response.data.data.total_amount;
			    		$this.addClass('d-none');
			    		$('#payment-result').removeClass('d-none');
			    		$('#order-number').text(order_no);
			    		$('#total-amount').text(amount);
			    		axios.get(BASE_URL+'api/aligateway/pay?no='+ order_no + '&total_amount=' + amount)
						  	.then(function (response) {
						    	if(response.data.code == 20001) {
	    							//ws.send('{"mode":"chats","order_id":'+ order_no +'}');
						    	} else {
			    					toastr['error'](response.data.msg);
						    	}
						    	console.log(response);
						  	})
						  	.catch(function (error) {
						    	console.log(error);
						  	});
			    	} else {
    					toastr['error'](response.data.msg);
			    	}
			    	console.log(response);
			  	})
			  	.catch(function (error) {
			    	console.log(error);
			  	});
		})
	}
	function createAddress(){
		$('form').unbind('submit').submit(function(event) {
			event.preventDefault();
			$this = $(this);
			if (!pass) { return false; } //Check form validity
	        var formData = {
	            'contact_name'  : $('input[name=contact_name]').val(),
	            'contact_phone' : $('input[name=contact_phone]').val(),
	            'address'   	: $('input[name=address]').val(),
	            'district'  	: $('input[name=district]').val(),
	            'zip'       	: $('input[name=zip]').val(),
	            'province'  	: $('input[name=province]').val(),
	            'city'      	: $('input[name=city]').val(),
	        };
			axios.post(BASE_URL+'api/user_addresses', formData)
			  	.then(function (response) {
			    	if(response.data.code == 20001) {
    					toastr['success']( @json(__('general.new-address-created')) );
    					$('#create-new-address').modal('toggle');
			    		$this.find('input').val('');
                		refresh_addresses();
			    	} else {
    					toastr['error'](response.data.msg);
			    	}
			    	console.log(response);
			  	})
			  	.catch(function (error) {
			    	console.log(error);
			  	});
		})
	}

	function refresh_addresses() {
	    var $addresses = $('#addresses');
	    $addresses.addClass('loading'); // add loading class (optional)

	    axios.get(BASE_URL+'refresh_addresses')
	        .then(function (response) {
	            $addresses.html(response.data.addresses);
	            $addresses.removeClass('loading');
	        })
	        .catch(function (error) {
	            console.log(error);
	        });
	}

</script>
@endsection
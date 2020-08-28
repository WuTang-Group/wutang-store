@extends('layouts.app')

@section('content')
<div class="dark-layout">
	<div class="container section-t-space">
		<form class="needs-validation" method="post" novalidate>
			<div class="row justify-content-center">
				<div class="col-12 mb-4">
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
		                	<button type="submit" onclick="submitForm()" class="btn btn-outline w-100 mt-3">@lang('general.proceed-to-payment')</button>
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
	function submitForm(){
		$('form').unbind('submit').submit(function(event) {
			event.preventDefault();
			$this = $(this);
			if (!pass) { return false; } //Check form validity
			var method = $('input[name=method]:checked').val();
	        var formData = {
	            'address_id'  : $('input[name=address_id]:checked').val(),
	        };
	        $this.find('input').prop('disabled', true);
			axios.post(BASE_URL+'api/orders', formData)
			  	.then(function (response) {
			    	if(response.data.code == 20001) {
      					$this.find('button').removeAttr("type").attr("type", "button").prop('disabled',true);
      					$this.find('button').removeAttr("onclick").focus().addClass('loading').text( @json(__('general.waiting-for-payment')) );

			    		var order_no = response.data.data.no;
			    		var amount = response.data.data.total_amount;

						processing(); //获取订单号后才打开监听功能

						/*if(method == 'alipay') { //检查用户选择的付款方式

						}*/
			    		axios.get(BASE_URL+'api/aligateway/pay?no='+ order_no + '&total_amount=' + amount)
						  	.then(function (response) {
						    	if(response.data.code == 20001) {
                                    window.open(response.data.data.pay_url);  // 跳转至新建标签页进行支付
						    	} else {
			    					toastr['error'](response.data.msg);
	    							//window.location.href = BASE_URL + 'my-account/order/' + order_no; //关闭此代码因为在监听功能已有页面转跳功能
						    	}
						  	})
						  	.catch(function (error) {
						    	console.log(error);
						  	});
			    	} else {
    					toastr['error'](response.data.msg);
			    	}
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
	            'district'  	: $('select[name=district]').val(),
	            'zip'       	: $('input[name=zip]').val(),
	            'province'  	: $('select[name=province]').val(),
	            'city'      	: $('select[name=city]').val(),
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

@extends('layouts.app')

@section('content')
<div class="dark-layout">
	<div class="container section-t-space">
		<div class="row justify-content-center">
			<div class="col-12">
				<h1 class="text-white title">购物车</h1>
			</div>
			<div class="col-lg-8">
				<div class="cart">
					<div class="cart-item d-md-flex align-items-center">
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
			                <form class="form-inline">
			                    <div class="input-group product-quantity">
			                        <button type="button" class="btn minus-btn btn-sm" data-type="minus" data-field="">
			                            <img src="{{ URL::asset('assets/images/icon/minus-w.png') }}" />
			                        </button>
			                        <input type="number" class="form-control form-control-sm bg-trans border-0 qty" placeholder="0" value="1" onkeyup="this.value=this.value.replace(/[^\d]/,'')" min="1">
			                        <button type="button" class="btn plus-btn btn-sm" data-type="plus" data-field="">
			                            <img src="{{ URL::asset('assets/images/icon/plus-w.png') }}" />
			                        </button>
			                    </div>
			                </form>
		              	</div>
	                    <div class="product-price amount text-center">¥ 4,150</div>
	                    <div class="remove-product text-center"><a href="" class="tx-dark-gray">删除</a></div>
	                </div>
					<div class="cart-item d-md-flex align-items-center">
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
			                <form class="form-inline">
			                    <div class="input-group product-quantity">
			                        <button type="button" class="btn minus-btn btn-sm" data-type="minus" data-field="">
			                            <img src="{{ URL::asset('assets/images/icon/minus-w.png') }}" />
			                        </button>
			                        <input type="number" class="form-control form-control-sm bg-trans border-0 qty" placeholder="0" value="1" onkeyup="this.value=this.value.replace(/[^\d]/,'')" min="1">
			                        <button type="button" class="btn plus-btn btn-sm" data-type="plus" data-field="">
			                            <img src="{{ URL::asset('assets/images/icon/plus-w.png') }}" />
			                        </button>
			                    </div>
			                </form>
		              	</div>
	                    <div class="product-price amount text-center">¥ 4,150</div>
	                    <div class="remove-product text-center"><a href="" class="tx-dark-gray">删除</a></div>
	                </div>
	                <div class="cart-item d-md-flex align-items-center">
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
	                </div>
                </div>
			</div>
			<div class="col-lg-4">
				<div class="cart-collaterals">
					<div class="mb-5">
	                    <label>促销代码</label>
                        <form action="" method="post" id="coupon-form">
                        	<div class="input-group">
                                <input type="text" class="form-control form-control-sm" name="coupon" id="coupon">
					          	<span class="input-group-btn">
                            		<button type="submit" class="btn btn-solid">下一步</button>
					          	</span> 
					        </div>
                            <div class="form-group mb-0 mr-sm-3">
                            </div>
                        </form>
	                </div>
	                <div class="cart-subtotal">
	                	<label class="tx-dark-gray">小计</label>
	                	<p class="price">2,800</p>
	                </div>
	                <div class="shipping">
	                	<label class="tx-dark-gray">运费</label>
	                	<p class="price">9,400</p>
	                </div>
	                <div class="fee">
	                	<label class="tx-dark-gray">其他</label>
	                	<p class="price">9,400</p>
	                </div>
	                <div class="cart-total">
	                	<label>总计:</label>
	                	<p class="price">9,400</p>
	                </div>
	                <div><a href="/checkout" class="btn btn-outline d-block mt-3">前往结账</a></div>
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
	                <div><a href="" class="btn btn-outline d-block mt-3 mb-5">继续购物</a></div>
	                <style>
	                </style>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="dark-layout">
	<div class="container section-t-space">
		<div class="row justify-content-center">
			<div class="col-12 d-md-flex align-items-center justify-content-between">
				<h1 class="text-white title">我的账户</h1>
				<div class="btn-group myacc-menu" role="group">
				  	<a href="/my-account" class="btn btn-outline btn-sm">所有订单</a>
				  	<a href="/my-account/tracking" class="btn btn-outline btn-sm active">跟踪订单</a>
				  	<a href="/my-account/profile" class="btn btn-outline btn-sm">我的个人资料</a>
				</div>
			</div>
			<div class="col-12 col-md-7 col-lg-6 col-xl-5 section-t-space">
				<div class="small-section tracking-order-wrapper">
					<h4 class="text-center text-white mb-3 lh-13">
                		要跟踪您的订单，请在下面的框中输入<br>
						您的订单ID，然后按“跟踪”按钮
					</h4>
					<form class="needs-validation" method="post" novalidate>
	                    <div class="form-group">
	                        <input type="text" class="form-control border-dark" placeholder="顺丰运单号 *" id="tracking" required>
							<div class="invalid-feedback">
						        You must agree before submitting.
						     </div>
	                    </div>
	                    <div class="text-center">
	                        <button type="submit" class="btn btn-white">跟踪</button>
	                    </div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="dark-layout">
	<div class="container section-t-space">
		<div class="row justify-content-center">
			<div class="col-12">
				<h1 class="text-white title">联系我们</h1>
			</div>
			<div class="col-12 col-md-7 col-lg-6 section-t-space">
				<div class="small-section contact-us-wrapper">
					<h4 class="text-center text-white mb-3 lh-13">
                		我们随时为您服务。请将您的疑问发送给我们，并提供尽可能多的详细信息。
					</h4>
					<form class="needs-validation" method="post" novalidate>
						<div class="form-row">
		                    <div class="form-group col-md-6">
		                        <label for="name" class="tx-dark-gray">名字 *</label>
		                        <input type="text" class="form-control border-white bg-trans" id="name" required>
		                    </div>
		                    <div class="form-group col-md-6">
		                        <label for="surname" class="tx-dark-gray">姓氏 *</label>
		                        <input type="text" class="form-control border-white bg-trans" id="surname" required>
		                    </div>
	                    </div>
	                    <div class="form-group">
	                        <label for="country" class="tx-dark-gray">国家 *</label>
	                        <select class="form-control border-white bg-trans" id="country" required>
								<option></option>
							</select>
	                    </div>
	                    <div class="form-group">
	                        <label for="country" class="tx-dark-gray">主题 *</label>
	                        <div class="form-check">
		                        <input type="radio" name="method" value="1" class="form-check-input" id="orders" checked required>
		                        <label class="form-check-label text-white" for="orders">订单与退货</label>
		                    </div>
		                    <div class="form-check">
		                        <input type="radio" name="method" value="2" class="form-check-input" id="enquiries" required>
		                        <label class="form-check-label text-white" for="enquiries">一般查询</label>
		                    </div>
		                    <div class="form-check">
		                        <input type="radio" name="method" value="3" class="form-check-input" id="data" required>
		                        <label class="form-check-label text-white" for="data">隐私权和数据</label>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label for="order_number" class="tx-dark-gray">订单编号（若相关）</label>
		                    <input type="text" class="form-control border-white bg-trans" id="order_number">
	                    </div>
	                    <div class="form-group">
	                        <label for="comment" class="tx-dark-gray">评论或问题 *</label>
		                    <textarea rows="10" class="form-control border-white bg-trans" id="comment"></textarea> 
	                    </div>
	                    <div class="form-group">
	                    	<label class="form-check-label d-block text-white">点击“提交”，即表示您同意我们的<a href="privacy-policy.php" target="_blank">隐私政策</a>。
							</label>
	                    </div>
	                    <div>
	                        <button type="submit" class="btn btn-white">提交</button>
	                    </div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
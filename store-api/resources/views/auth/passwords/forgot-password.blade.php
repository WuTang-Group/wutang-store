@extends('layouts.app')

@section('content')
<div class="white-layout">
	<div class="container section-t-space section-b-space">
		<div class="row justify-content-center">
			<div class="col-12">
				<h1 class="text-dark title">忘记密码</h1>
			</div>
			<div class="col-12 col-lg-5">
				<div class="small-section forgot-form-wrapper">
					<form class="needs-validation" method="post" novalidate>
	                    <div class="form-group">
	                        <label for="username" class="tx-dark-gray">用户名 *</label>
	                        <input type="text" class="form-control border-dark" placeholder="电子邮件 / 手机号" id="username" required>
							<div class="invalid-feedback"></div>
	                    </div>
	                    <div>
	                        <button type="submit" class="btn btn-solid">提交</button>
	                    </div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
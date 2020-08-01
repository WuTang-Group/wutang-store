@extends('layouts.app')

@section('content')
<div class="white-layout">
	<div class="container section-t-space section-b-space">
		<div class="row justify-content-center">
			<div class="col-12">
				<h1 class="text-dark title">注册</h1>
			</div>
			<div class="col-12 col-lg-9">
				<div class="small-section signup-form-wrapper">
					<form class="needs-validation" method="post" novalidate>
	                    <div class="form-group">
	                        <label for="name" class="tx-dark-gray">姓名 *</label>
	                        <input type="text" class="form-control border-dark" id="name" required>
							<div class="invalid-feedback"></div>
	                    </div>
	                    <div class="form-group">
	                        <label for="username" class="tx-dark-gray">用户名 *</label>
	                        <input type="text" class="form-control border-dark" placeholder="电子邮件 / 手机号" id="username" required>
							<div class="invalid-feedback"></div>
	                    </div>
	                    <div class="form-group">
	                        <label for="password" class="tx-dark-gray">密码 *</label>
	                        <input type="password" class="form-control border-dark" id="password" required>
							<div class="invalid-feedback"></div>
	                    </div>
	                    <div class="form-group">
	                        <label for="confirm_password" class="tx-dark-gray">确认密码 *</label>
	                        <input type="password" class="form-control border-dark" id="confirm_password" required>
							<div class="invalid-feedback"></div>
	                    </div>
	                    <div class="form-group form-check d-flex justify-content-between">
	                        <input type="checkbox" class="form-check-input" id="agreement" required>
	                        <label class="form-check-label" for="agreement">本人已经阅读、理解并同意我的个人信息按照<a href="" target="_blank">隐私政策</a>的规定被收集、使用和披露，包括海外传输，并且我同意我对本网站的使用将遵守<a href="" target="_blank">条款和条件</a>
							</label>
							<div class="invalid-feedback"></div>
	                    </div>
	                    <div>
	                        <button type="submit" class="btn btn-solid">创建账户</button>
	                    </div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
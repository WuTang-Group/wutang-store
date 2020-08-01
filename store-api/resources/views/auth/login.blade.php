@extends('layouts.app')

@section('content')
<div class="white-layout">
	<div class="container section-t-space section-b-space">
		<div class="row justify-content-center">
			<div class="col-12">
				<h1 class="text-dark title">登录</h1>
			</div>
			<div class="col-12 col-lg-5">
				<div class="small-section signin-form-wrapper">
					<form class="needs-validation" method="post" novalidate>
	                    <div class="form-group">
	                        <label for="username" class="tx-dark-gray">用户名 *</label>
	                        <input type="text" name="username" class="form-control border-dark" placeholder="电子邮件 / 手机号" id="username" pattern="/^(([0-9])|([a-z])|([a-z]+[0-9]+)|([0-9]+[a-z]+))[a-z0-9]*$/i" required>
							<div class="invalid-feedback"></div>
	                    </div>
	                    <div class="form-group">
	                        <label for="password" class="tx-dark-gray">密码 *</label>
	                        <input type="password" name="password" class="form-control border-dark" id="password" minlength="6" required>
							<div class="invalid-feedback"></div>
	                    </div>
                        <div class="form-group form-check d-flex justify-content-between">
                            <input type="checkbox" class="form-check-input" id="remember-me">
                            <label class="form-check-label" for="remember-me">记住我</label>
                            <a href="forgot-password.php" class="tx-dark-gray">忘记密码</a>
                        </div>
	                    <div>
	                        <button type="submit" class="btn btn-solid">登录</button>
	                    </div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
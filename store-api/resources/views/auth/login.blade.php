@extends('layouts.app')

@section('content')
<div class="white-layout">
	<div class="container section-t-space section-b-space">
		<div class="row justify-content-center">
			<div class="col-12">
				<h1 class="text-dark title">@lang('general.login')</h1>
			</div>
			<div class="col-12 col-lg-5">
				<div class="small-section signin-form-wrapper">
					<form class="needs-validation" method="post" novalidate>
	                    <div class="form-group">
	                        <label for="username" class="tx-dark-gray">@lang('general.username') *</label>
                            <input type="text" name="username" class="form-control border-dark" id="username" required>
							<div class="invalid-feedback"></div>
	                    </div>
	                    <div class="form-group">
	                        <label for="password" class="tx-dark-gray">@lang('general.password') *</label>
	                        <input type="password" name="password" class="form-control border-dark" id="password" minlength="6" required>
							<div class="invalid-feedback"></div>
	                    </div>
                        <div class="form-group form-check d-flex justify-content-end">
                            <!-- <input type="checkbox" class="form-check-input" id="remember-me">
                            <label class="form-check-label" for="remember-me">记住我</label> -->
                            <a href="forgot-password" class="tx-dark-gray">@lang('general.forgot-password')</a>
                        </div>
	                    <div class="d-flex justify-content-between">
	                        <button type="submit" onclick="login()" class="btn btn-solid">@lang('general.login')</button>
                            <label class="m-auto">@lang('general.or')</label>
                            <a href="/register" class="btn btn-outline">@lang('general.register')</a>
	                    </div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
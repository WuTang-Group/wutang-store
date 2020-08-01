@extends('layouts.app')

@section('content')
<div class="white-layout">
	<div class="container section-t-space section-b-space">
		<div class="row justify-content-center">
			<div class="col-12">
				<h1 class="text-dark title">重设密码</h1>
			</div>
			<div class="col-12 col-lg-5">
				<div class="small-section reset-form-wrapper">
					<form class="needs-validation" method="post" novalidate>
	                    <div class="form-group">
	                        <label for="password" class="tx-dark-gray">新密码 *</label>
	                        <input type="password" class="form-control border-dark" id="password" required>
							<div class="invalid-feedback"></div>
	                    </div>
	                    <div class="form-group">
	                        <label for="confirm_password" class="tx-dark-gray">确认密码 *</label>
	                        <input type="password" class="form-control border-dark" id="confirm_password" required>
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
@extends('layouts.app')

@section('content')
<div class="white-layout">
	<div class="container section-t-space section-b-space">
		<div class="row justify-content-center">
			<div class="col-12">
				<h1 class="text-dark title">注册 @lang('auth.failed')</h1>
			</div>
			<div class="col-12 col-lg-9">
				<div class="small-section signup-form-wrapper">
					<form class="needs-validation" method="post" novalidate>
	                    <div class="form-group">
	                        <label for="name" class="tx-dark-gray">姓名 *</label>
	                        <input type="text" name="name" class="form-control border-dark" id="name" required>
							<div class="invalid-feedback"></div>
	                    </div>
	                    <div class="form-group">
	                        <label for="username" class="tx-dark-gray">用户名 *</label>
	                        <input type="text" name="username" class="form-control border-dark" id="username" required>
							<div class="invalid-feedback"></div>
	                    </div>
	                    <div class="form-group">
	                        <label for="password" class="tx-dark-gray">密码 *</label>
	                        <input type="password" name="password" class="form-control border-dark" id="password" required>
							<div class="invalid-feedback"></div>
	                    </div>
	                    <div class="form-group">
	                        <label for="confirm_password" class="tx-dark-gray">确认密码 *</label>
	                        <input type="password" name="password_confirmation" class="form-control border-dark" id="confirm_password" required>
							<div class="invalid-feedback"></div>
	                    </div>
	                    <div class="form-group">
	                        <label for="password_question_id" class="tx-dark-gray">密保问题 *</label>
	                        <select name="password_question_id" class="form-control border-dark" id="password_question_id" required>
	                            <option value="">请选择</option>
	                            @foreach ($results['question_list']->data as $q) 
	                                <option value="{{ $q->id }}">{{ $q->question }}</option>
	                            @endforeach
	                        </select>
							<div class="invalid-feedback"></div>
	                    </div>
	                    <div class="form-group">
	                        <label for="password_answer" class="tx-dark-gray">密保问题答案 *</label>
	                        <input type="text" name="password_answer" class="form-control border-dark" id="password_answer" required>
							<div class="invalid-feedback"></div>
	                    </div>
	                    <div class="form-group">
	                        <label for="captcha_code" class="tx-dark-gray">验证码 *</label>
	                        <div class="input-group">
	                    		<input type="text" name="captcha_code" class="form-control border-dark" required>
							  	<div class="input-group-append border border-dark">
							    	<span><img src="{{ $results['captcha']->data->captcha_image_content }}" class="img-fluid img-captcha" onclick="refresh()" /></span>
							  	</div>
							</div>
						</div>
	                    <div class="form-group form-check">
	                        <input type="checkbox" class="form-check-input" id="agreement" required>
	                        <label class="form-check-label" for="agreement">本人已经阅读、理解并同意我的个人信息按照<a href="" target="_blank">隐私政策</a>的规定被收集、使用和披露，包括海外传输，并且我同意我对本网站的使用将遵守<a href="" target="_blank">条款和条件</a>
							</label>
							<div class="invalid-feedback"></div>
	                    </div>
	                    <div>
	                    	<input type="hidden" name="captcha_key" value="{{ $results['captcha']->data->captcha_key }}" class="captcha-key" required>
	                        <button type="submit" onclick="submitForm()" class="btn btn-solid">创建账户</button>
	                    </div>
					</form>
				</div>
			</div>
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
	        var formData = {
	            'name'              	: $('input[name=name]').val(),
	            'username'              : $this.find('input[name=username]').val(),
	            'password'              : $this.find('input[name=password]').val(),
	            'password_confirmation' : $('input[name=password_confirmation]').val(),
	            'password_question_id'  : $('select[name=password_question_id]').val(),
	            'password_answer'  		: $('input[name=password_answer]').val(),
	            'captcha_code'    		: $('input[name=captcha_code]').val(),
	            'captcha_key'    		: $('input[name=captcha_key]').val()
	        };
			axios.post(BASE_URL+'api/auth/register', formData)
			  	.then(function (response) {
			    	if(response.data.code == 20001) {
    					toastr['success'](response.data.msg);
                		window.location.href = BASE_URL + 'login';
			    	} else {
			    		refresh();
    					toastr['error'](response.data.msg);
			    	}
			    	console.log(response);
			  	})
			  	.catch(function (error) {
			    	console.log(error);
			  	});
		})
	}
	function refresh() {
		axios.post(BASE_URL+'api/captchas')
		  	.then(function (response) {
		    	if(response.data.code == 20001) {
		    		$('.img-captcha').attr('src',response.data.data.captcha_image_content);
		    		$('.captcha-key').val(response.data.data.captcha_key);
		    	} else {
					toastr['error'](response.data.msg);
		    	}
		    	console.log(response);
		  	})
		  	.catch(function (error) {
		    	console.log(error);
		  	});
	}
</script>
@endsection
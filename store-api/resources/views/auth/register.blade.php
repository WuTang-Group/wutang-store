@extends('layouts.app')

@section('content')
<div class="white-layout">
	<div class="container section-t-space section-b-space">
		<div class="row justify-content-center">
			<div class="col-12">
				<h1 class="text-dark title">@lang('general.register')</h1>
			</div>
			<div class="col-12 col-lg-9">
				<div class="small-section signup-form-wrapper">
					<form class="needs-validation" method="post" novalidate>
	                    <div class="form-group">
	                        <label for="name" class="tx-dark-gray">@lang('general.name') *</label>
	                        <input type="text" name="name" class="form-control border-dark" id="name" required>
							<div class="invalid-feedback"></div>
	                    </div>
	                    <div class="form-group">
	                        <label for="username" class="tx-dark-gray">@lang('general.username') *</label>
	                        <input type="text" name="username" class="form-control border-dark" id="username" required>
							<div class="invalid-feedback"></div>
	                    </div>
	                    <div class="form-group">
	                        <label for="password" class="tx-dark-gray">@lang('general.password') *</label>
	                        <input type="password" name="password" class="form-control border-dark" id="password" required>
							<div class="invalid-feedback"></div>
	                    </div>
	                    <div class="form-group">
	                        <label for="confirm_password" class="tx-dark-gray">@lang('general.confirm-password') *</label>
	                        <input type="password" name="password_confirmation" class="form-control border-dark" id="confirm_password" required>
							<div class="invalid-feedback"></div>
	                    </div>
	                    <div class="form-group">
	                        <label for="password_question_id" class="tx-dark-gray">@lang('general.security-question') *</label>
	                        <select name="password_question_id" class="form-control border-dark" id="password_question_id" required>
	                            <option value="">@lang('general.please-select')</option>
	                            @foreach ($results['question_list']->data as $q) 
	                                <option value="{{ $q->id }}">{{ $q->question }}</option>
	                            @endforeach
	                        </select>
							<div class="invalid-feedback"></div>
	                    </div>
	                    <div class="form-group">
	                        <label for="password_answer" class="tx-dark-gray">@lang('general.security-answer') *</label>
	                        <input type="text" name="password_answer" class="form-control border-dark" id="password_answer" required>
							<div class="invalid-feedback"></div>
	                    </div>
	                    <div class="form-group">
	                        <label for="captcha_code" class="tx-dark-gray">@lang('general.verification-code') *</label>
	                        <div class="input-group">
	                    		<input type="text" name="captcha_code" class="form-control border-dark" required>
							  	<div class="input-group-append border border-dark">
							    	<span><img src="{{ $results['captcha']->data->captcha_image_content }}" class="img-fluid img-captcha" onclick="refresh()" /></span>
							  	</div>
							</div>
						</div>
	                    <div class="form-group form-check">
	                        <input type="checkbox" class="form-check-input" id="agreement" required>
	                        <label class="form-check-label" for="agreement">@lang('general.agreement', ['privacy-link' => '/privacy-policy', 'terms-link' => '/terms-and-conditions'])</a>
							</label>
							<div class="invalid-feedback"></div>
	                    </div>
	                    <div>
	                    	<input type="hidden" name="captcha_key" value="{{ $results['captcha']->data->captcha_key }}" class="captcha-key" required>
	                        <button type="submit" onclick="submitForm()" class="btn btn-solid">@lang('general.create-account')</button>
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
		  	})
		  	.catch(function (error) {
		    	console.log(error);
		  	});
	}
</script>
@endsection
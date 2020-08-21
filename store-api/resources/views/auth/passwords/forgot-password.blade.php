@extends('layouts.app')

@section('content')
<div class="white-layout">
	<div class="container section-t-space section-b-space">
		<div class="row justify-content-center">
			<div class="col-12">
				<h1 class="text-dark title">@lang('general.forgot-password')</h1>
			</div>
			<div class="col-12 col-lg-5">
				<div class="small-section forgot-form-wrapper">
					<form class="needs-validation" method="post" novalidate>
	                    <div class="form-group">
	                        <label for="username" class="tx-dark-gray">@lang('general.username') *</label>
	                        <input type="text" name="username" class="form-control border-dark" id="username" required>
							<div class="invalid-feedback"></div>
	                    </div>
	                    <div id="rp-fields" class="d-none">
		                    <div class="form-group">
		                        <label for="password_question_id" class="tx-dark-gray">@lang('general.security-question') *</label>
		                        <select name="password_question_id" class="form-control border-dark" id="password_question_id" required>
		                            <option value="">@lang('general.please-select')</option>
		                            @foreach ($response->data as $q) 
		                                <option value="{{ $q->id }}">{{ $q->question }}</option>
		                            @endforeach
		                        </select>
								<div class="invalid-feedback"></div>
		                    </div>
		                    <div class="form-group">
		                        <label for="password_answer" class="tx-dark-gray">@lang('general.security-answer') *</label>
		                        <input type="text" name="password_answer" class="form-control border-dark" id="password_answer">
								<div class="invalid-feedback"></div>
		                    </div>
		                    <div class="form-group">
		                        <label for="password" class="tx-dark-gray">@lang('general.new-password') *</label>
		                        <input type="password" name="password" class="form-control border-dark" id="password">
								<div class="invalid-feedback"></div>
		                    </div>
		                    <div class="form-group">
		                        <label for="confirm_password" class="tx-dark-gray">@lang('general.confirm-password') *</label>
		                        <input type="password" name="password_confirmation" class="form-control border-dark" id="confirm_password">
								<div class="invalid-feedback"></div>
		                    </div>
	                    </div>
	                    <div>
	                        <button type="submit" onclick="check()" class="btn btn-solid">@lang('general.submit')</button>
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
	function check() {
		$('form').unbind('submit').submit(function(event) {
			event.preventDefault();
			$this = $(this);
			if (!pass) { return false; } //Check form validity
			var formData = {
	            'username' : $this.find('input[name=username]').val(),
	        };
			axios.get(BASE_URL+'api/questions', { params: formData })
			  	.then(function (response) {
			    	if(response.data.code == 20001) {
			    		$('h1.title').text( @json(__('general.reset-password')) );
			    		$this.find('input[name=username]').prop('readonly', true);
			    		$("#password_question_id").val(response.data.data[0].password_question_id);
			    		$('#rp-fields input, #rp-fields select').prop('required', true);
			    		$('#rp-fields').removeClass('d-none');
			    	} else {
						toastr['error'](response.data.msg);
			    	}
			  	})
			  	.catch(function (error) {
			    	console.log(error);
			  	});
		});
	}
	function submitForm(){
		$('form').unbind('submit').submit(function(event) {
			event.preventDefault();
			$this = $(this);
			if (!pass) { return false; } //Check form validity
	        var formData = {
	            'username'              : $this.find('input[name=username]').val(),
	            'password'              : $this.find('input[name=password]').val(),
	            'password_confirmation' : $('input[name=password_confirmation]').val(),
	            'password_question_id'  : $('select[name=password_question_id]').val(),
	            'password_answer'  		: $('input[name=password_answer]').val(),
	        };
			axios.put(BASE_URL+'api/password_reset', formData)
			  	.then(function (response) {
			    	if(response.data.code == 20001) {
			    		toastr['success'](response.data.msg);
        				location.href = '/login';
			    	} else {
    					toastr['error'](response.data.msg);
			    	}
			  	})
			  	.catch(function (error) {
			    	console.log(error);
			  	});
		})
	}
</script>
@endsection
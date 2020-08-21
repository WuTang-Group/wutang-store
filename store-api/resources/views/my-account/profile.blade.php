@extends('layouts.app')

@section('content')
<div class="dark-layout">
	<div class="container section-t-space">
		<div class="row justify-content-center">
			<div class="col-12 d-md-flex align-items-center justify-content-between">
				<h1 class="text-white title">@lang('general.my-account.dashboard')</h1>
                @include('my-account.partials.myacc-menu')
			</div>
			<div class="col-12 col-lg-9 section-t-space">
				<div class="small-section profile-wrapper">
					<h4 class="text-white mb-5">@lang('general.my-account.my-profile')</h4>
					<form class="needs-validation" method="post" novalidate>
						<div class="form-row">
		                    <div class="form-group col-md-6">
		                        <label for="real_name" class="tx-dark-gray">@lang('general.my-account.name')</label>
		                        <input type="text" name="real_name" class="form-control border-white bg-trans" id="real_name" value="{{ $response->data->real_name?:'' }}" required>
							<div class="invalid-feedback"></div>
		                    </div>
		                    <div class="form-group col-md-6">
		                        <label for="phone" class="tx-dark-gray">@lang('general.my-account.contact-number') *</label>
		                        <input type="text" name="phone" class="form-control border-white bg-trans" id="phone" value="{{ $response->data->phone?:'' }}" required>
							<div class="invalid-feedback"></div>
		                    </div>
	                    </div>
						<div class="form-row">
		                    <div class="col-md-12">
		                        <label class="tx-dark-gray">@lang('general.my-account.date-of-birth') *</label>
		                    </div>
		                    <div class="form-group col-md-4">
		                        <select name="year" class="form-control border-white bg-trans" id="year">
		                        	<option>@lang('general.my-account.year')</option>
		                        </select>
								<div class="invalid-feedback"></div>
		                    </div>
		                    <div class="form-group col-md-4">
		                        <select name="month" class="form-control border-white bg-trans" id="month">
		                        	<option>@lang('general.my-account.month')</option>
								    <option value="1">@lang('general.my-account.month-name.jan')</option>
								    <option value="2">@lang('general.my-account.month-name.feb')</option>
								    <option value="3">@lang('general.my-account.month-name.march')</option>
								    <option value="4">@lang('general.my-account.month-name.april')</option>
								    <option value="5">@lang('general.my-account.month-name.may')</option>
								    <option value="6">@lang('general.my-account.month-name.june')</option>
								    <option value="7">@lang('general.my-account.month-name.july')</option>
								    <option value="8">@lang('general.my-account.month-name.august')</option>
								    <option value="9">@lang('general.my-account.month-name.sept')</option>
								    <option value="10">@lang('general.my-account.month-name.oct')</option>
								    <option value="11">@lang('general.my-account.month-name.nov')</option>
								    <option value="12">@lang('general.my-account.month-name.dec')</option>
		                        </select>
								<div class="invalid-feedback"></div>
		                    </div>
		                    <div class="form-group col-md-4">
		                        <select name="day" class="form-control border-white bg-trans" id="day">
		                        	<option>@lang('general.my-account.day')</option>
		                        </select>
								<div class="invalid-feedback"></div>
		                    </div>
	                    </div>
						<div class="form-row" data-toggle="distpicker">
		                    <div class="form-group col-md-4">
		                        <label for="province" class="tx-dark-gray">@lang('general.my-account.province') *</label>
		                        <select data-province="" name="province" class="form-control border-dark" id="province" required></select>
								<div class="invalid-feedback"></div>
		                    </div>
		                    <div class="form-group col-md-4">
		                        <label for="city" class="tx-dark-gray">@lang('general.my-account.city') *</label>
	        					<select data-city="" name="city" class="form-control border-dark" id="city" required></select>
								<div class="invalid-feedback"></div>
		                    </div>
		                    <div class="form-group col-md-4">
		                        <label for="district" class="tx-dark-gray">@lang('general.my-account.district') *</label>
		                        <select data-district="" name="district" class="form-control border-dark" id="district" required></select>
								<div class="invalid-feedback"></div>
		                    </div>
		                </div>
						<div class="form-row">
		                    <div class="form-group col-md-8">
		                        <label for="address" class="tx-dark-gray">@lang('general.my-account.address') *</label>
		                        <input type="text" name="address" class="form-control border-white bg-trans" id="address" value="{{ $response->data->address?:'' }}" required>
								<div class="invalid-feedback"></div>
		                    </div>
		                    <div class="form-group col-md-4">
		                        <label for="zip" class="tx-dark-gray">@lang('general.my-account.zipcode') *</label>
		                        <input type="text" name="zip" class="form-control border-white bg-trans" id="zip" value="{{ $response->data->zip?:'' }}" required>
								<div class="invalid-feedback"></div>
		                    </div>
	                    </div>
	                    <!-- <div class="form-group">
	                        <label for="country" class="tx-dark-gray">国家/地区 *</label>
	                        <input type="text" class="form-control border-white bg-trans" id="country">
	                    </div> -->
	                    <div class="text-right">
	                        <button type="submit" onclick="updateProfile()" class="btn btn-white">@lang('general.save')</button>
	                    </div>
					</form>
					<div class="small-section">
					<hr class="border-white">
					</div>
					<h4 class="text-white mb-5">@lang('general.my-account.change-password')</h4>
					<form class="needs-validation" method="post" novalidate>
	                    <div class="form-group">
	                        <label for="old_password" class="tx-dark-gray">@lang('general.my-account.current-password') *</label>
	                        <input type="password" name="oldPassword" class="form-control border-white bg-trans" id="old_password" required>
							<div class="invalid-feedback"></div>
	                    </div>
	                    <div class="form-group">
	                        <label for="password" class="tx-dark-gray">@lang('general.new-password') *</label>
	                        <input type="password" name="newPassword" class="form-control border-white bg-trans" id="password" required>
							<div class="invalid-feedback"></div>
	                    </div>
	                    <div class="form-group">
	                        <label for="confirm_password" class="tx-dark-gray">@lang('general.confirm-password') *</label>
	                        <input type="password" name="newPassword_confirmation" class="form-control border-white bg-trans" id="confirm_password" required>
							<div class="invalid-feedback"></div>
	                    </div>
	                    <div class="text-right">
	                        <button type="submit" onclick="changePassword()" class="btn btn-white">@lang('general.save')</button>
	                    </div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@php 
	if($response->data->birthday) {
		$date = explode ('-', $response->data->birthday);
	}
@endphp
@endsection

@section('footer_scripts')
<script type="text/javascript">
	var ysel = $("#year")[0],
    	msel = $("#month")[0],
    	dsel = $("#day")[0];
   	ycurrent = new Date().getFullYear();
	for (var i = ycurrent; i >= 1910; i--) {
	    var opt = new Option();
	    opt.value = opt.text = i;
	    ysel.add(opt);
	}
	ysel.addEventListener("change", validate_date);
	msel.addEventListener("change", validate_date);

	function validate_date() {
	    var y = +ysel.value, m = msel.value, d = dsel.value;
	    if (m === "2")
	        var mlength = 28 + (!(y & 3) && ((y % 100) !== 0 || !(y & 15)));
	    else var mlength = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31][m - 1];
	    dsel.length = 0;
	    for (var i = 1; i <= mlength; i++) {
	        var opt = new Option();
	        opt.value = opt.text = i;
	        if (i == d) opt.selected = true;
	        dsel.add(opt);
	    }
	}
	validate_date();

	function selected_date() {
		$("#year").val({!! $date[0] !!});
		$("#month").val({!! $date[1] !!});
		validate_date();
		$("#day").val({!! $date[2] !!});
	}
	selected_date();

	function updateProfile(){
		$('form').unbind('submit').submit(function(event) {
			event.preventDefault();
			$this = $(this);
			if (!pass) { return false; } //Check form validity
	        var formData = {
	            'real_name' : $('input[name=real_name]').val(),
	            'phone'     : $('input[name=phone]').val(),
	            'birthday'  : $this.find('select[name=year]').val() + '-' + $this.find('select[name=month]').val() + '-' + $this.find('select[name=day]').val(),
	            'address'   : $('input[name=address]').val(),
	            'district'  : $('input[name=district]').val(),
	            'zip'       : $('input[name=zip]').val(),
	            'province'  : $('input[name=province]').val(),
	            'city'      : $('input[name=city]').val(),
	        };
	        
			axios.put(BASE_URL+'api/user_profiles', formData)
			  	.then(function (response) {
			    	if(response.data.code == 20001) {
    					toastr['success'](response.data.msg);
			    	} else {
    					toastr['error'](response.data.msg);
			    	}
			    	console.log(response);
			  	})
			  	.catch(function (error) {
			    	console.log(error);
			  	});
		})
	}
	function changePassword(){
		$('form').unbind('submit').submit(function(event) {
			event.preventDefault();
			$this = $(this);
			if (!pass) { return false; } //Check form validity
	        var formData = {
	            'oldPassword'              	: $('input[name=oldPassword]').val(),
	            'newPassword' 				: $('input[name=newPassword]').val(),
	            'newPassword_confirmation'  : $('input[name=newPassword_confirmation]').val()
	        };

			axios.post(BASE_URL+'api/auth/password_change', formData)
			  	.then(function (response) {
			    	if(response.data.code == 20001) {
			    		$this[0].reset();
			    		$this.removeClass('was-validated');
    					toastr['success'](response.data.msg);
			    	} else {
    					toastr['error'](response.data.msg);
			    	}
			    	console.log(response);
			  	})
			  	.catch(function (error) {
			    	console.log(error);
			  	});
		})
	}
</script>
@endsection
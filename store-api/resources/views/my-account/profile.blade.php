@extends('layouts.app')

@section('content')
<div class="dark-layout">
	<div class="container section-t-space">
		<div class="row justify-content-center">
			<div class="col-12 d-md-flex align-items-center justify-content-between">
				<h1 class="text-white title">我的账户</h1>
                @include('my-account.partials.myacc-menu')
			</div>
			<div class="col-12 col-lg-9 section-t-space">
				<div class="small-section profile-wrapper">
					<h4 class="text-white mb-5">我的信息</h4>
					<form class="needs-validation" method="post" novalidate>
						<div class="form-row">
		                    <div class="form-group col-md-6">
		                        <label for="real_name" class="tx-dark-gray">姓名</label>
		                        <input type="text" name="real_name" class="form-control border-white bg-trans" id="real_name" value="{{ $response->data->real_name?:'' }}" required>
							<div class="invalid-feedback"></div>
		                    </div>
		                    <div class="form-group col-md-6">
		                        <label for="phone" class="tx-dark-gray">手机号 *</label>
		                        <input type="text" name="phone" class="form-control border-white bg-trans" id="phone" value="{{ $response->data->phone?:'' }}" required>
							<div class="invalid-feedback"></div>
		                    </div>
	                    </div>
						<div class="form-row">
		                    <div class="col-md-12">
		                        <label class="tx-dark-gray">生日日期 *</label>
		                    </div>
		                    <div class="form-group col-md-4">
		                        <select name="year" class="form-control border-white bg-trans" id="year">
		                        	<option>年</option>
		                        </select>
								<div class="invalid-feedback"></div>
		                    </div>
		                    <div class="form-group col-md-4">
		                        <select name="month" class="form-control border-white bg-trans" id="month">
		                        	<option>月</option>
								    <option value="1">1月</option>
								    <option value="2">2月</option>
								    <option value="3">3月</option>
								    <option value="4">4月</option>
								    <option value="5">5月</option>
								    <option value="6">6月</option>
								    <option value="7">7月</option>
								    <option value="8">8月</option>
								    <option value="9">9月</option>
								    <option value="10">10月</option>
								    <option value="11">11月</option>
								    <option value="12">12月</option>
		                        </select>
								<div class="invalid-feedback"></div>
		                    </div>
		                    <div class="form-group col-md-4">
		                        <select name="day" class="form-control border-white bg-trans" id="day">
		                        	<option>日</option>
		                        </select>
								<div class="invalid-feedback"></div>
		                    </div>
	                    </div>
						<div class="form-row">
		                    <div class="form-group col-md-4">
		                        <label for="province" class="tx-dark-gray">省 *</label>
		                        <input type="text" name="province" class="form-control border-white bg-trans" id="province" value="{{ $response->data->province?:'' }}" required>
								<div class="invalid-feedback"></div>
		                    </div>
		                    <div class="form-group col-md-4">
		                        <label for="city" class="tx-dark-gray">城市 *</label>
		                        <input type="text" name="city" class="form-control border-white bg-trans" id="city" value="{{ $response->data->city?:'' }}" required>
								<div class="invalid-feedback"></div>
		                    </div>
		                    <div class="form-group col-md-4">
		                        <label for="district" class="tx-dark-gray">区 *</label>
		                        <input type="text" name="district" class="form-control border-white bg-trans" id="district" value="{{ $response->data->district?:'' }}" required>
								<div class="invalid-feedback"></div>
		                    </div>
		                </div>
						<div class="form-row">
		                    <div class="form-group col-md-8">
		                        <label for="address" class="tx-dark-gray">地址 *</label>
		                        <input type="text" name="address" class="form-control border-white bg-trans" id="address" value="{{ $response->data->address?:'' }}" required>
								<div class="invalid-feedback"></div>
		                    </div>
		                    <div class="form-group col-md-4">
		                        <label for="zip" class="tx-dark-gray">邮政编码 *</label>
		                        <input type="text" name="zip" class="form-control border-white bg-trans" id="zip" value="{{ $response->data->zip?:'' }}" required>
								<div class="invalid-feedback"></div>
		                    </div>
	                    </div>
	                    <!-- <div class="form-group">
	                        <label for="country" class="tx-dark-gray">国家/地区 *</label>
	                        <input type="text" class="form-control border-white bg-trans" id="country">
	                    </div> -->
	                    <div class="text-right">
	                        <button type="submit" onclick="updateProfile()" class="btn btn-white">保存</button>
	                    </div>
					</form>
					<div class="small-section">
					<hr class="border-white">
					</div>
					<h4 class="text-white mb-5">修改密码</h4>
					<form class="needs-validation" method="post" novalidate>
	                    <div class="form-group">
	                        <label for="old_password" class="tx-dark-gray">当前密码 *</label>
	                        <input type="password" name="oldPassword" class="form-control border-white bg-trans" id="old_password" required>
							<div class="invalid-feedback"></div>
	                    </div>
	                    <div class="form-group">
	                        <label for="password" class="tx-dark-gray">新的密码 *</label>
	                        <input type="password" name="newPassword" class="form-control border-white bg-trans" id="password" required>
							<div class="invalid-feedback"></div>
	                    </div>
	                    <div class="form-group">
	                        <label for="confirm_password" class="tx-dark-gray">确认密码 *</label>
	                        <input type="password" name="newPassword_confirmation" class="form-control border-white bg-trans" id="confirm_password" required>
							<div class="invalid-feedback"></div>
	                    </div>
	                    <div class="text-right">
	                        <button type="submit" onclick="changePassword()" class="btn btn-white">保存</button>
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
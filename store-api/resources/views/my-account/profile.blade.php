@extends('layouts.app')

@section('content')
<div class="dark-layout">
	<div class="container section-t-space">
		<div class="row justify-content-center">
			<div class="col-12 d-md-flex align-items-center justify-content-between">
				<h1 class="text-white title">我的账户</h1>
				<div class="btn-group myacc-menu" role="group">
                    <a href="/my-account" class="btn btn-outline btn-sm">所有订单</a>
                    <a href="/my-account/tracking" class="btn btn-outline btn-sm">跟踪订单</a>
                    <a href="/my-account/profile" class="btn btn-outline btn-sm active">我的个人资料</a>
				</div>
			</div>
			<div class="col-12 col-lg-9 section-t-space">
				<div class="small-section profile-wrapper">
					<h4 class="text-white mb-5">我的信息</h4>
					<form>
						<div class="form-row">
		                    <div class="form-group col-md-6">
		                        <label for="name" class="tx-dark-gray">姓名</label>
		                        <input type="text" class="form-control border-white bg-trans" id="name">
		                    </div>
		                    <div class="form-group col-md-6">
		                        <label for="contact_number" class="tx-dark-gray">手机号 *</label>
		                        <input type="text" class="form-control border-white bg-trans" id="contact_number">
		                    </div>
	                    </div>
						<div class="form-row">
		                    <div class="col-md-12">
		                        <label class="tx-dark-gray">生日日期 *</label>
		                    </div>
		                    <div class="form-group col-md-4">
		                        <select class="form-control border-white bg-trans">
		                        	<option>年</option>
		                        </select>
		                    </div>
		                    <div class="form-group col-md-4">
		                        <select class="form-control border-white bg-trans">
		                        	<option>月</option>
		                        </select>
		                    </div>
		                    <div class="form-group col-md-4">
		                        <select class="form-control border-white bg-trans">
		                        	<option>日</option>
		                        </select>
		                    </div>
	                    </div>
						<div class="form-row">
		                    <div class="form-group col-md-8">
		                        <label for="address_line_1" class="tx-dark-gray">地址 *</label>
		                        <input type="text" class="form-control border-white bg-trans" id="address_line_1">
		                    </div>
		                    <div class="form-group col-md-4">
		                        <label for="address_line_2" class="tx-dark-gray">添加地址 *</label>
		                        <input type="text" class="form-control border-white bg-trans" id="address_line_2">
		                    </div>
	                    </div>
						<div class="form-row">
		                    <div class="form-group col-md-4">
		                        <label for="postcode" class="tx-dark-gray">邮政编码 *</label>
		                        <input type="text" class="form-control border-white bg-trans" id="postcode">
		                    </div>
		                    <div class="form-group col-md-4">
		                        <label for="city" class="tx-dark-gray">城市 *</label>
		                        <input type="text" class="form-control border-white bg-trans" id="city">
		                    </div>
		                    <div class="form-group col-md-4">
		                        <label for="state" class="tx-dark-gray">省 *</label>
		                        <input type="text" class="form-control border-white bg-trans" id="state">
		                    </div>
	                    </div>
	                    <div class="form-group">
	                        <label for="country" class="tx-dark-gray">国家/地区 *</label>
	                        <input type="text" class="form-control border-white bg-trans" id="country">
	                    </div>
	                    <div class="text-right">
	                        <button type="submit" class="btn btn-white">保存</button>
	                    </div>
					</form>
					<div class="small-section">
					<hr class="border-white">
					</div>
					<h4 class="text-white mb-5">修改密码</h4>
					<form>
	                    <div class="form-group">
	                        <label for="old_password" class="tx-dark-gray">当前密码 *</label>
	                        <input type="password" class="form-control border-white bg-trans" id="old_password">
	                    </div>
	                    <div class="form-group">
	                        <label for="password" class="tx-dark-gray">新的密码 *</label>
	                        <input type="password" class="form-control border-white bg-trans" id="password">
	                    </div>
	                    <div class="form-group">
	                        <label for="confirm_password" class="tx-dark-gray">确认密码 *</label>
	                        <input type="password" class="form-control border-white bg-trans" id="confirm_password">
	                    </div>
	                    <div class="text-right">
	                        <button type="submit" class="btn btn-white">保存</button>
	                    </div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
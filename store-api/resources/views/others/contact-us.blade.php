@extends('layouts.app')

@section('content')
<div class="dark-layout">
	<div class="container section-t-space">
		<div class="row justify-content-center">
			<div class="col-12">
				<h1 class="text-white title">@lang('general.contact-us')</h1>
			</div>
			<div class="col-12 col-md-7 col-lg-6 section-t-space">
				<div class="small-section contact-us-wrapper">
					<h4 class="text-center text-white mb-5 lh-13">
                		我们随时为您服务。请将您的疑问发送给我们，并提供尽可能多的详细信息。
					</h4>
					<form class="needs-validation" method="post" novalidate>
	                    <div class="form-group">
	                        <label for="name" class="tx-dark-gray">@lang('general.name') *</label>
	                        <input type="text" name="name" class="form-control border-white bg-trans" id="name" required>
	                    </div>
	                    <div class="form-group">
	                        <label for="subject" class="tx-dark-gray">@lang('general.subject') *</label>
	                        <div class="form-check">
		                        <input type="radio" name="subject" value="1" class="form-check-input" id="orders" checked required>
		                        <label class="form-check-label text-white" for="orders">@lang('general.order-and-return')</label>
		                    </div>
		                    <div class="form-check">
		                        <input type="radio" name="subject" value="2" class="form-check-input" id="enquiries" required>
		                        <label class="form-check-label text-white" for="enquiries">@lang('general.general-enquiry')</label>
		                    </div>
		                    <div class="form-check">
		                        <input type="radio" name="subject" value="3" class="form-check-input" id="data" required>
		                        <label class="form-check-label text-white" for="data">@lang('general.data-privacy')</label>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label for="order_number" class="tx-dark-gray">@lang('general.order-detail')</label>
		                    <input type="text" name="order_number" class="form-control border-white bg-trans" id="order_number">
	                    </div>
	                    <div class="form-group">
	                        <label for="comment" class="tx-dark-gray">@lang('general.comment') *</label>
		                    <textarea rows="10" name="comment" class="form-control border-white bg-trans" id="comment"></textarea> 
	                    </div>
	                    <div class="form-group">
	                    	<label class="form-check-label d-block text-white">@lang('general.contact-us-agreement', ['privacy-link' => '/privacy-policy'])</a>。
							</label>
	                    </div>
	                    <div>
	                        <button type="submit" class="btn btn-white">@lang('general.submit')</button>
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
	            'subject' 				: $('input[name=subject]:checked').val(),
	            'order_number'  		: $('input[name=order_number]').val(),
	            'comment'    			: $('input[name=comment]').val()
	        };
			axios.post(BASE_URL+'api/contact', formData)
			  	.then(function (response) {
			    	if(response.data.code == 20001) {
    					toastr['success'](response.data.msg);
                		$this.find('input').val('');
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
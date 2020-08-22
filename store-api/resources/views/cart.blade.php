@extends('layouts.app')

@section('content')
<div class="dark-layout">
	<div class="container section-t-space">
		<div class="row justify-content-center">
			<div class="col-12 mb-4">
				<h1 class="text-white title">@lang('general.my-cart')</h1>
			</div>
		</div>
		<div id="cart" class="row justify-content-center">
			@include('partials.cart', ['cart_collection' => $response])
		</div>
	</div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="dark-layout">
	<div class="container section-t-space section-b-space">
		<div class="row justify-content-center">
			<div class="col-12 d-md-flex align-items-center justify-content-between">
				<h1 class="text-white title">@lang('general.my-account.dashboard')</h1>
                @include('my-account.partials.myacc-menu')
			</div>
			<div class="col-12 col-md-9 section-t-space">
				<div class="small-section all-orders-wrapper">
					<h4 class="text-white mb-5">@lang('general.my-account.my-orders')</h4>
                    <div class="orders">
                        <div class="row order border-bottom">
                            <div class="col-5 col-sm-2 order_title">
                                <h4 class="tx-uppercase">@lang('general.my-account.order')</h4>
                            </div>
                            <div class="d-none d-sm-block col-sm-3 order_title">
                                <h4 class="tx-uppercase">@lang('general.my-account.date')</h4>
                            </div>
                            <div class="d-none d-sm-block col-sm-2 text-center order_title">
                                <h4 class="tx-uppercase">@lang('general.my-account.status')</h4>
                            </div>
                            <div class="col-3 col-sm-3 order_title">
                                <h4 class="tx-uppercase">@lang('general.total')</h4>
                            </div>
                            <div class="col-4 col-sm-2 text-right">
                            	<h4 class="tx-uppercase">@lang('general.my-account.action')</h4>
                            </div>
                        </div>
                        @foreach($response->data as $order)
                        <div class="row order-item">
                            @php 
                                if($order->status == 1 && $order->ship_status == -1)
                                    $status = __('general.my-account.order-status.pending');
                                else if($order->status == 1 && $order->ship_status == 1)
                                    $status = __('general.my-account.order-status.shipped');
                                else if($order->status == 1 && $order->ship_status == 0)
                                    $status = __('general.my-account.order-status.delivered');
                                else if($order->status == 1)
                                    $status = __('general.my-account.order-status.paid');
                                else if($order->status == 0)
                                    $status = __('general.my-account.order-status.pending-payment');
                                else if($order->status == -1)
                                    $status = __('general.my-account.order-status.payment-failed');
                                else
                                    $status = '';
                            @endphp
                        	<div class="col-5 col-sm-2">
                        		{{ $order->no }}
                            	<div class="d-block d-sm-none">{{ \Carbon\Carbon::parse($order->paid_at)->format('Y-m-d') }}</div>
                            	<div class="d-block d-sm-none tx-uppercase">
                                    {{ $status }}
                                </div>
                        	</div>
                            <div class="d-none d-sm-block col-sm-3">{{ \Carbon\Carbon::parse($order->paid_at)->format('Y-m-d') }}</div>
                            <div class="d-none d-sm-block col-sm-2 text-center tx-uppercase">{{ $status }}</div>
                            <div class="col-3 col-sm-3 font-weight-bold">¥ {{ number_format($order->total_amount) }}</div>
                            <div class="col-4 col-sm-2 text-right">
                        		<a href="my-account/order/{{ $order->no }}" class="btn btn-white btn-xs">@lang('general.my-account.view')</a>
                        	</div>
                        </div>
                        @endforeach
                    </div>
				</div>
			</div>
			<!-- <div class="col-12 col-md-9 section-t-space">
				<nav>
				  	<ul class="pagination">
				    	<li class="page-item disabled"><a class="" href="#">Previous</a></li>
				    	<li class="page-item active"><a class="" href="#">1</a></li>
				    	<li class="page-item"><a class="" href="#">2</a></li>
				    	<li class="page-item"><a class="" href="#">3</a></li>
				    	<li class="page-item"><a class="" href="#">Next</a></li>
				  	</ul>
				</nav>
			</div> -->
		</div>
	</div>
</div>
@endsection
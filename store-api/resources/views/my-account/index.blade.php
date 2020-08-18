@extends('layouts.app')

@section('content')
<div class="dark-layout">
	<div class="container section-t-space section-b-space">
		<div class="row justify-content-center">
			<div class="col-12 d-md-flex align-items-center justify-content-between">
				<h1 class="text-white title">我的账户</h1>
                @include('my-account.partials.myacc-menu')
			</div>
			<div class="col-12 col-md-9 section-t-space">
				<div class="small-section all-orders-wrapper">
					<h4 class="text-white mb-5">我的订单</h4>
                    <div class="orders">
                        <div class="row order border-bottom">
                            <div class="col-5 col-sm-2 order_title">
                                <h4 class="tx-uppercase">订单</h4>
                            </div>
                            <div class="d-none d-sm-block col-sm-3 order_title">
                                <h4 class="tx-uppercase">日期</h4>
                            </div>
                            <div class="d-none d-sm-block col-sm-2 text-center order_title">
                                <h4 class="tx-uppercase">状态</h4>
                            </div>
                            <div class="col-3 col-sm-3 order_title">
                                <h4 class="tx-uppercase">总计</h4>
                            </div>
                            <div class="col-4 col-sm-2 text-right">
                            	<h4 class="tx-uppercase">操作</h4>
                            </div>
                        </div>
                        @foreach($response->data as $order)
                        <div class="row order-item">
                            @php 
                                if($order->status == 1 && $order->ship_status == -1)
                                    $status = '待发货';
                                else if($order->status == 1 && $order->ship_status == 1)
                                    $status = '已发货';
                                else if($order->status == 1 && $order->ship_status == 0)
                                    $status = '已签收';
                                else if($order->status == 1)
                                    $status = '已付款';
                                else if($order->status == 0)
                                    $status = '未付款';
                                else if($order->status == -1)
                                    $status = '付款失败';
                                else
                                    $status = '';
                            @endphp
                        	<div class="col-5 col-sm-2">
                        		{{ $order->no }}
                            	<div class="d-block d-sm-none">2020-07-12</div>
                            	<div class="d-block d-sm-none tx-uppercase">
                                    {{ $status }}
                                </div>
                        	</div>
                            <div class="d-none d-sm-block col-sm-3">{{ \Carbon\Carbon::parse($order->paid_at)->format('Y-m-d') }}</div>
                            <div class="d-none d-sm-block col-sm-2 text-center tx-uppercase">{{ $status }}</div>
                            <div class="col-3 col-sm-3 font-weight-bold">¥ {{ $order->total_amount }}</div>
                            <div class="col-4 col-sm-2 text-right">
                        		<a href="my-account/order/{{ $order->no }}" class="btn btn-white btn-xs">查询</a>
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
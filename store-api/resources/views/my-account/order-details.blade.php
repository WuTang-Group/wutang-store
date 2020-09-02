@extends('layouts.app')

@section('content')
<div class="dark-layout">
	<div class="container section-t-space">
		<div class="row justify-content-center">
			<div class="col-12 d-md-flex align-items-center justify-content-between">
				<h1 class="text-white title">@lang('general.my-account.order') #{{ $response->data->no }}</h1>
			</div>
			<div class="col-12 col-lg-9 section-t-space">
                <div class="small-section pb-0 order-status-wrapper text-center">
                    <div>
                        <span class="status {{ $response->data->status == 1 ? 'completed':null }}"></span>
                        <img src="{{ URL::asset('assets/images/icon/placed-order.png') }}" />
                        <label>@lang('general.my-account.order-status.paid')</label>
                    </div>
                    <div>
                        <span class="status {{ $response->data->status == 1 && ($response->data->ship_status == -1 || $response->data->ship_status == 1 || $response->data->ship_status == 0) ? 'completed':null }}"></span>
                        <img src="{{ URL::asset('assets/images/icon/pending.png') }}" />
                        <label>@lang('general.my-account.order-status.pending')</label>
                    </div>
                    <div>
                        <span class="status {{ $response->data->status == 1 && ($response->data->ship_status == 1 || $response->data->ship_status == 0) ? 'completed':null }}"></span>
                        <img src="{{ URL::asset('assets/images/icon/dispatch.png') }}" />
                        <label>@lang('general.my-account.order-status.shipped')</label>
                    </div>
                    <div>
                        <span class="status {{ $response->data->status == 1 && ($response->data->ship_status == 0) ? 'completed':null }}"></span>
                        <img src="{{ URL::asset('assets/images/icon/received.png') }}" />
                        <label>@lang('general.my-account.order-status.delivered')</label>
                    </div>
                </div>
				<div class="small-section order-detail-wrapper">
					<!-- <h4 class="p-3 mb-0 d-inline-block bg-white">订单号 #001</h4> -->
                    <div class="order-detail">
                        <div class="row order-item">
                            <div class="col-8 col-sm-7 order_title">
                                <h4 class="tx-uppercase">@lang('general.item')</h4>
                            </div>
                            <div class="d-none d-sm-block col-sm-2 order_title text-center">
                                <h4 class="tx-uppercase">@lang('general.quantity')</h4>
                            </div>
                            <div class="col-4 col-sm-3 order_title text-right">
                                <h4 class="tx-uppercase">@lang('general.line-total')</h4>
                            </div>
                        </div>
                        @foreach($response->data->items as $item)
                        <div class="row order-item">
                            <div class="col-8 col-sm-7 description">
                                <p class="tx-mont">{{ $item->product->product_name_en }}</p>
                                <p>{{ $item->product->product_name }}</p>
                                <div class="d-block d-sm-none"><span class="tx-uppercase d-inline-block mb-0">@lang('general.quantity')</span>: {{ $item->amount }}</div>
							</div>
                            <div class="d-none d-sm-block col-sm-2 quantity text-center">{{ $item->amount }}</div>
                            <div class="col-4 col-sm-3 amount text-right">¥ {{ number_format($item->amount*$item->price,2) }}</div>
                        </div>
                        @endforeach
                        <hr class="seperator border-top">
                        <div class="total-sec">
                            <ul>
                                <li>@lang('general.subtotal') <span><i>¥ {{ number_format($response->data->total_amount) }}</i></span></li>
                                <!-- <li>运输费用 <span class="tx-dark-gray">免费</span></li>
                                <li>会员折扣 <span class="tx-dark-gray">- ¥ 100</span></li> -->
                                <li>@lang('general.total') <span><i>¥ {{ number_format($response->data->total_amount) }}</i></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row order-address section-t-space">
                        <!-- <div class="col-sm-6 mb-5">
                            <h4 class="mb-3">帐单地址</h4>
                            <ul>
                                <li>北京市朝阳区针织路23号楼</li>
                                <li>中国人寿金融中心12层</li>
                                <li>北京, 100026</li>
                                <li>中国</li>
                                <li class="mt-4">012345746</li>
                            </ul>
                        </div> -->
                        <div class="col-sm-6">
                            <h4 class="mb-3">@lang('general.my-account.shipping-address')</h4>
                            <ul>
                                <li>{{ $response->data->address->address }}</li>
                                <li>{{ $response->data->address->city }}</li>
                                <li>{{ $response->data->address->province }}</li>
                                <li>{{ $response->data->address->district }}, {{ $response->data->address->zip }}</li>
                                <li>中国</li>
                                <li class="mt-4">{{ $response->data->address->contact_name }}</li>
                                <li>{{ $response->data->address->contact_phone }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="small-section text-right d-flex justify-content-end">
                        <a href="/my-account" class="btn btn-white">@lang('general.back')</a>
                        @if($response->data->status == 0 || $response->data->status == -1)
                        <div class="d-block ml-2">
                            <div class="input-group">
                                <select class="custom-select" name="method">
                                    <option>@lang('general.please-select')</option>
                                    <option value="alipay">Alipay</option>
                                    <!-- <option value="union-pay">UnionPay</option>
                                    <option value="wechat-pay">WechatPay</option> -->
                                </select>
                                <div class="input-group-append">
                                    <button type="button" onclick="payNow('{{ $response->data->no }}')" class="btn btn-white">@lang('general.pay')</button>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('footer_scripts')
<script type="text/javascript" src="{{ URL::asset('assets/js/payment.js') }}"></script>
@endsection
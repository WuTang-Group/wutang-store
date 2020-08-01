@extends('layouts.app')

@section('content')
<div class="dark-layout">
	<div class="container section-t-space section-b-space">
		<div class="row justify-content-center">
			<div class="col-12 d-md-flex align-items-center justify-content-between">
				<h1 class="text-white title">我的账户</h1>
				<div class="btn-group myacc-menu" role="group">
				  	<a href="/my-account" class="btn btn-outline btn-sm active">所有订单</a>
				  	<a href="/my-account/tracking" class="btn btn-outline btn-sm">跟踪订单</a>
				  	<a href="/my-account/profile" class="btn btn-outline btn-sm">我的个人资料</a>
				</div>
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
                        <div class="row order-item">
                        	<div class="col-5 col-sm-2">
                        		222
                            	<div class="d-block d-sm-none">2020-07-12</div>
                            	<div class="d-block d-sm-none tx-uppercase">取消</div>
                        	</div>
                            <div class="d-none d-sm-block col-sm-3">2020-07-12</div>
                            <div class="d-none d-sm-block col-sm-2 text-center tx-uppercase">取消</div>
                            <div class="col-3 col-sm-3 font-weight-bold">¥ 4,150</div>
                            <div class="col-4 col-sm-2 text-right">
                        		<a href="order-details.php" class="btn btn-white btn-xs">查询</a>
                        	</div>
                        </div>
                        <div class="row order-item">
                        	<div class="col-5 col-sm-2">
                        		222
                            	<div class="d-block d-sm-none">2020-07-12</div>
                            	<div class="d-block d-sm-none tx-uppercase">完成</div>
                        	</div>
                            <div class="d-none d-sm-block col-sm-3">2020-07-12</div>
                            <div class="d-none d-sm-block col-sm-2 text-center tx-uppercase">完成</div>
                            <div class="col-3 col-sm-3 font-weight-bold">¥ 6,450</div>
                            <div class="col-4 col-sm-2 text-right">
                        		<a href="order-details.php" class="btn btn-white btn-xs">查询</a>
                        	</div>
                        </div>
                    </div>
				</div>
			</div>
			<div class="col-12 col-md-9 section-t-space">
				<nav>
				  	<ul class="pagination">
				    	<li class="page-item disabled"><a class="" href="#">Previous</a></li>
				    	<li class="page-item active"><a class="" href="#">1</a></li>
				    	<li class="page-item"><a class="" href="#">2</a></li>
				    	<li class="page-item"><a class="" href="#">3</a></li>
				    	<li class="page-item"><a class="" href="#">Next</a></li>
				  	</ul>
				</nav>
			</div>
		</div>
	</div>
</div>
@endsection
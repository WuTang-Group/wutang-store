@extends('layouts.app')

@section('content')
<div class="dark-layout">
	<div class="container section-t-space">
		<div class="row">
			<div class="col-12 text-center">
				<h2 class="text-white title">珍奢护肤体验</h2>
			</div>
			<div class="col-12 col-md-12 section-t-space section-b-space">
				<div class="row product-category-wrapper">
					<div class="col-12 col-md-6 product-category-col">
						<div class="img-wrapper transition-scale">
							<a href="">
								<img src="assets/images/pro3/video_1.jpg" class="img-fluid" />
							</a>
						</div>
						<h2 class="tx-mont">QUEEN SPADES CLEANSER</h2>
						<h2>洗脸球</h2>
                    	<div class="mt-4"><a href="product-category-content.php" class="btn btn-white">探索</a></div>
					</div>
					<div class="col-12 col-md-6 product-category-col">
						<div class="img-wrapper transition-scale">
							<a href="">
								<img src="assets/images/pro3/video_1.jpg" class="img-fluid" />
							</a>
						</div>
						<h2 class="tx-mont">QUEEN SPADES CLEANSER</h2>
						<h2>洗脸球</h2>
                    	<div class="mt-4"><a href="product-category-content.php" class="btn btn-white">探索</a></div>
					</div>
				</div>
			</div>

          	<div class="col-12">
            	<h2 class="text-white title">创新产品</h2>
          	</div>
			<div class="product-box col-12 col-sm-6 col-lg-4">
                <div class="img-wrapper">
                    <a href="#">
                    	<img src="assets/images/pro3/p1.png" class="img-fluid" alt="">
                    </a>
                    <div class="cart-info cart-wrap">
                    	<div class="cart-button">
                        	<button class="btn btn-outline mb-2">添加入购物车</button> 
                       		<a href="single-product.php" class="btn btn-outline">浏览</a> 
                        </div>
                    </div>
                </div>
                <div class="product-detail">
                    <div class="product-name">
                        <h3 class="tx-mont"><a href="single-product.php">WHITE CAVIAR ILLUMINATING PEARL INFUSION</a></h3>
                        <h3><a href="single-product.php">纯皙紧致珍珠囊精华液套装</a></h3>
                    </div>
                    <div class="product-category">
                        <a href="product-category.php">套装</a>
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                    	<h4>¥ 6,600</h4>
                    	<a href="" class="add-to-wishlist"></a>
                    </div>
                </div>
            </div>
    		<div class="product-box col-12 col-sm-6 col-lg-4">
                <div class="img-wrapper">
                    <a href="#">
                    	<img src="assets/images/pro3/p1.png" class="img-fluid" alt="">
                    </a>
                    <div class="cart-info cart-wrap">
                    	<div class="cart-button">
                        	<button class="btn btn-outline mb-2">添加入购物车</button> 
                       		<a href="single-product.php" class="btn btn-outline">浏览</a> 
                        </div>
                    </div>
                </div>
                <div class="product-detail">
                    <div class="product-name">
                        <h3 class="tx-mont"><a href="single-product.php">CAVIAR ILLUMINATING MOISTURIZING CREAM</a></h3>
                        <h3><a href="single-product.php">纯皙紧致奢润面霜套装</a></h3>
                    </div>
                    <div class="product-category">
                        <a href="product-category.php">套装</a>
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                    	<h4>¥ 2,600</h4>
                    	<a href="" class="add-to-wishlist"></a>
                    </div>
                </div>
            </div>
    		<div class="product-box col-12 col-sm-6 col-lg-4">
                <div class="img-wrapper">
                    <a href="#">
                    	<img src="assets/images/pro3/p1.png" class="img-fluid" alt="">
                    </a>
                    <div class="cart-info cart-wrap">
                    	<div class="cart-button">
                        	<button class="btn btn-outline mb-2">添加入购物车</button> 
                       		<a href="single-product.php" class="btn btn-outline">浏览</a> 
                        </div>
                    </div>
                </div>
                <div class="product-detail">
                    <div class="product-name">
                        <h3 class="tx-mont"><a href="single-product.php">RADIANCE CELLULAR CREAM</a></h3>
                        <h3><a href="single-product.php">晶莹亮采修护乳霜修复系列</a></h3>
                    </div>
                    <div class="product-category">
                        <a href="product-category.php">修复系列</a>
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                    	<h4>¥ 2,800</h4>
                    	<a href="" class="add-to-wishlist"></a>
                    </div>
                </div>
            </div>
    		<div class="product-box col-12 col-sm-6 col-lg-4">
                <div class="img-wrapper">
                    <a href="#">
                    	<img src="assets/images/pro3/p1.png" class="img-fluid" alt="">
                    </a>
                    <div class="cart-info cart-wrap">
                    	<div class="cart-button">
                        	<button class="btn btn-outline mb-2">添加入购物车</button> 
                       		<a href="single-product.php" class="btn btn-outline">浏览</a> 
                        </div>
                    </div>
                </div>
                <div class="product-detail">
                    <div class="product-name">
                        <h3 class="tx-mont"><a href="single-product.php">WHITE CAVIAR ILLUMINATING PEARL INFUSION</a></h3>
                        <h3><a href="single-product.php">纯皙紧致珍珠囊精华液套装</a></h3>
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                    	<h4>¥ 6,600</h4>
                    	<a href="" class="add-to-wishlist"></a>
                    </div>
                </div>
            </div>
		</div>
	</div>
</div>
@include('partials.official-services')
@endsection
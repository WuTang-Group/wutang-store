<section id="products" class="dark-layout position-relative section-t-space section-b-space custom-slick">
    <div class="container">
        <div class="mb-5">
        	<h2 class="text-white title">新品</h2>
        </div>
        <div class="product-slider">
            @foreach($products as $product)
    		<div class="product-box">
                <div class="img-wrapper">
                    <a href="#">
                    	<img src="{{ $product->thumbnail }}" class="img-fluid" alt="">
                    </a>
                    <div class="cart-info cart-wrap">
                    	<div class="cart-button">
                        	<button type="button" data-id="{{ $product->id }}" class="btn btn-outline btn-add-to-cart mb-2">添加入购物车</button> 
                       		<a href="/product/{{ $product->slug }}" class="btn btn-outline">浏览</a> 
                        </div>
                    </div>
                </div>
                <div class="product-detail">
                    <div class="product-name">
                        <h3 class="tx-mont"><a href="/product/{{ $product->slug }}">{{ $product->product_name_en }}</a></h3>
                        <h3><a href="/product/{{ $product->slug }}">{{ $product->product_name }}</a></h3>
                    </div>
                    <div class="product-category">
                        <a href="/product-category/{{ $product->product_category->slug }}">{{ $product->product_category->title }}</a>
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                    	<h4>@php echo $product->sale_price ? '<del>¥ '.number_format($product->price).'</del> ¥ '.number_format($product->sale_price):'¥ '.number_format($product->price) @endphp</h4>
                    	<a href="" class="add-to-wishlist"></a>
                    </div>
                </div>
            </div>
            @endforeach
	    </div>
    </div>
    <button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">Previous</button>
    <button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button>
</section>
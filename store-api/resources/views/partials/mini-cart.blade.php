<div class="mini-cart">
    @if($minicart_collection && $minicart_collection->data[0]->shop_cart_items != null)
        @foreach($minicart_collection->data[0]->shop_cart_items as $item)
        <div class="cart-item">
            <div class="d-flex position-relative">
                <a href=""><img src="{{ isset($item->product->thumbnail) ? $item->product->thumbnail:$item->thumbnail }}" /></a>
                <a href="javascript:void(0)" onclick="removeItem({{ isset($item->product->id) ? $item->product->id:$item->id }})" class="remove-product tx-dark-gray">删除</a>
                <div class="product-description">
                    <p class="tx-mont">{{ isset($item->product->product_name_en) ? $item->product->product_name_en:$item->product_name_en }}</p>
                    <p>{{ isset($item->product->product_name) ? $item->product->product_name:$item->product_name }}</p>
                    <div class="tx-uppercase mt-2 tx-dark-gray">数量: {{ isset($item->amount) ? $item->amount:1 }}</div>
                </div>
            </div>
            <div class="product-price text-right align-self-end">
            @if(isset($item->product))
                @php echo $item->product->sale_price ? '<del>¥ '.$item->product->price.'</del> ¥ '.$item->product->sale_price:'¥ '.$item->product->price @endphp
            @else
                @php echo $item->sale_price ? '<del>¥ '.$item->price.'</del> ¥ '.$item->sale_price:'¥ '.$item->price @endphp
            @endif
            </div>
        </div>
        @endforeach
        <hr class="border-bottom">
        <div class="d-flex justify-content-between align-items-center">
            <a href="/cart" class="btn btn-solid d-block">前往购物车</a>
            <a href="/checkout" class="btn btn-outline d-block">结账</a>
        </div>
    @endif
</div>
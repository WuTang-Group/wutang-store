<div class="mini-cart">
    @if($cart_collection && $cart_collection->data[0]->shop_cart_items != null)
        @foreach($cart_collection->data[0]->shop_cart_items as $item)
        <div class="cart-item">
            <div class="d-flex position-relative">
                <a href=""><img src="{{ isset($item->product->thumbnail) ? $item->product->thumbnail:$item->thumbnail }}" /></a>
                <a href="javascript:void(0)" data-id="{{ isset($item->product->id) ? $item->product->id:$item->id }}" class="remove-product tx-dark-gray remove-item">@lang('general.remove')</a>
                <div class="product-description">
                    <p class="tx-mont">{{ isset($item->product->product_name_en) ? $item->product->product_name_en:$item->product_name_en }}</p>
                    <p>{{ isset($item->product->product_name) ? $item->product->product_name:$item->product_name }}</p>
                    <div class="tx-uppercase mt-2 tx-dark-gray">@lang('general.quantity'): {{ isset($item->amount) ? $item->amount:1 }}</div>
                </div>
            </div>
            <div class="product-price text-right align-self-end">
            @if(isset($item->product))
                @php echo $item->product->sale_price ? '<del>¥ '.number_format($item->product->price).'</del> ¥ '.number_format($item->product->sale_price):'¥ '.number_format($item->product->price) @endphp
            @else
                @php echo $item->sale_price ? '<del>¥ '.number_format($item->price).'</del> ¥ '.number_format($item->sale_price):'¥ '.number_format($item->price) @endphp
            @endif
            </div>
        </div>
        @endforeach
        <hr class="border-bottom">
        <div class="d-flex justify-content-between align-items-center">
            <a href="/cart" class="btn btn-solid d-block">@lang('general.go-cart')</a>
            <a href="/checkout" class="btn btn-outline d-block">@lang('general.checkout')</a>
        </div>
    @endif
</div>
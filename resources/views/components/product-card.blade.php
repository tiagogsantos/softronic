<div class="box-product {{$clazz ?? ''}}">
    <div class="box-img-product" data-url="{{ route('product', ['slug' => $product->slug]) }}">
        @if ($product->images()->first())
            <img src="{{ $product->images()->first()->link }}" alt="{{ $product->name }}">
        @endif
    </div>
    <div class="box-title-product">
        <h2>{{ $product->name }}</h2>
        <div class="box-qtd-product">
            <input type="text" name="qtd" value="{{$product->cart_qtd}}" class="qtd-{{ $product->id }}">
            <button type="button" class="btn-more-qtd" data-id="{{ $product->id }}">+</button>
            <button type="button" class="btn-less-qtd" data-id="{{ $product->id }}">-</button>
        </div>
    </div>
</div>
<div class="row">
    <?php
        $numOfCols = 3;
        $rowCount = 0;
        $bootstrapColWidth = 12 / $numOfCols;
    ?>
    @foreach($products as $product)
    <div class="col-sm-{{$bootstrapColWidth}}">
        <div class="box-product mb-4" data-url="{{route('product', ['product' => $product->slug])}}">
            <div class="box-img-product">
                @if($product->images()->first())
                <img src="{{$product->images()->first()->link}}" alt="{{$product->name}}">
                @endif
            </div>
            <div class="box-title-product">
                <h2>{{$product->name}}</h2>
            </div>
        </div>
    </div>
    @php($rowCount++)
    @if($rowCount % $numOfCols == 0)</div>
<div class="row">@endif
    @endforeach
</div>
</div>
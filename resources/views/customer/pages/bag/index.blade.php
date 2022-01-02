@extends('customer.templates.default')

@section('title', 'Sacola de Orçamentos')
@section('description', 'Sacola de Orçamentos')
@section('content')
    <section class="container p-section">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sacola de Orçamentos</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="title-section">
                    <h3>SACOLA DE ORÇAMENTOS</h3>
                </div>
            </div>
        </div>
        @foreach ($cart as $item)
            <div class="box-product-bag">
                <div class="box-img-product-bag">
                    <img src="{{ $item->options['main_image']}}" alt="Produto">
                    <div>
                        <p>{{ $item->name }}</p>
                        <span>{{$item->options['product_reference']}}</span>
                    </div>
                </div>
                <div class="box-qtd-product">
                    <input type="text" name="qtd" value="{{ $item->qty }}" class="qtd-{{ $item->rowId }}">
                    <button type="button" class="btn-more-qtd-update" data-id="{{ $item->rowId }}">+</button>
                    <button type="button" class="btn-less-qtd-update" data-id="{{ $item->rowId }}">-</button>
                </div>
                <div class="box-delete-product">
                    <button data-row_id="{{ $item->rowId }}">X</button>
                </div>
            </div>
        @endforeach

        <div class="row-finish-cart">
            <a href="{{route('search')}}">Escolher mais produtos</a>
            <form method="post" action="{{route('bag.finish')}}">
                {{csrf_field()}}
                <button class="btn-black" >Finalizar orçamento</button>
            </form>
        </div>
    </section>

@endsection
@section('scripts')
    <script type="text/javascript">
        $('.box-delete-product button').on('click', function() {
            let rowId = $(this).data('row_id');
            axios.post(`{{ route('api.cart.delete') }}`, {
                    rowId,
                    _method: 'delete'
                })
                .then(res => document.location.reload(true))
                .catch(error => console.log(error));

        });
        $(".btn-more-qtd-update").on('click', function(e) {
        e.preventDefault();
        let id = $(this).data('id');
        let inputQtd = $(`.qtd-${id}`);
        let actualQtd = parseInt(inputQtd.val());
        let newQtd = (actualQtd + 1) <= 0 ? 1 : (actualQtd + 1);
        inputQtd.val(newQtd);
        updateItemCart(id, newQtd);
    });
    $('.btn-less-qtd-update').on('click', function(e) {
        e.preventDefault();
        let id = $(this).data('id');
        let inputQtd = $(`.qtd-${id}`);
        let actualQtd = parseInt(inputQtd.val());
        let newQtd = (actualQtd - 1) <= 0 ? 1 : (actualQtd - 1);
        inputQtd.val(newQtd);
        updateItemCart(id, newQtd);
    });
    const updateItemCart = async (rowId, qtd) => {
        const response = await axios.post(`{{ route('api.cart.update') }}`, {
            rowId,
            qtd
        });
        if (response.status === 200) {
            $('.qtd-bag').text(response.data.total_items);
        }
    }
    </script>
@endsection

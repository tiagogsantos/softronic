@extends('customer.templates.default')
@section('title', $product->meta_title)
@section('description', $product->meta_description)
@section('content')
<section id="box-title">
    <div class="container">
        <div class="row ">
            <div class="col d-flex justify-content-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item">
                            <a href="{{route('company', ['company'=> $product->company->slug])}}">{{$product->company->name}}</a>
                        </li>

                        @if($product->categories->first())
                        @if($product->categories->first()->category_id == null)
                        <li class="breadcrumb-item active" aria-current="page">{{$product->categories->first()->name}}</li>
                        @else
                        <li class="breadcrumb-item active">
                            <a
                                href="{{route('company',['category'=> $product->categories->first()->category->slug,'company' => $product->company->slug])}}">
                                {{$product->categories->first()->category->name}}
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{$product->categories->first()->name}}</li>
                        @endif
                        @endif
                    </ol>
                </nav>
            </div>
        </div>

    </div>
</section>

<section class="container p-section">
    <div class="row">
        <div class="col">
            <h3 class="block-title text-center">{{$product->name}}</h3>
            <p class="text-center">Fone de ouvido para jogos com alto-falantes de 50 mm e som suround 7.1</p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="owl-carousel" id="img-carousel">
                @forelse($product->images as $image)
                <div class="box-product">
                    <div class="box-img-product">
                        <img src="{{$image->link}}" alt="{{$product->name}}">
                    </div>
                </div>
                @empty
                @include('customer.block.default-image')
                @endforelse
            </div>
        </div>
    </div>
</section>

<section class="container p-section">
    <div class="row">
        <div class="col">
            <h3 class="block-title">Especifica????es t??cnicas</h3>
            {!!$product->description!!}
        </div>
    </div>
    <!-- <div id="specification">
            <div class="row">
                <div class="col">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th colspan="2">Dimens??es</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Altura</td>
                                <td>230 mm</td>
                            </tr>
                            <tr>
                                <td>Largura</td>
                                <td>105 mm</td>
                            </tr>
                            <tr>
                                <td>Profundidade</td>
                                <td>210 mm</td>
                            </tr>
                            <tr>
                                <td>Peso Total</td>
                                <td>409 g</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th colspan="2">Conectividade</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tipo de conex??o</td>
                                <td>Com fio</td>
                            </tr>
                            <tr>
                                <td>Estilo do cabo</td>
                                <td>Normal</td>
                            </tr>
                            <tr>
                                <td>Bluetooth</td>
                                <td>N??o</td>
                            </tr>
                            <tr>
                                <td>Vers??o do USB</td>
                                <td>2.0</td>
                            </tr>
                            <tr>
                                <td>Tipo de Conector</td>
                                <td>USB-A</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th colspan="2">??udio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Reprodu????o de som </td>
                                <td>Ao redor</td>
                            </tr>
                            <tr>
                                <td>Canais de ??udio </td>
                                <td>7.1</td>
                            </tr>
                            <tr>
                                <td>Tamanho do driver </td>
                                <td>50 mm</td>
                            </tr>
                            <tr>
                                <td>Imped??ncia </td>
                                <td>32 Ohm</td>
                            </tr>
                            <tr>
                                <td>Unidades de acionamento </td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>Sensibilidade </td>
                                <td>105 dB</td>
                            </tr>
                            <tr>
                                <td>Microfone </td>
                                <td>Sim</td>
                            </tr>
                            <tr>
                                <td>Microfone destac??vel </td>
                                <td>N??o</td>
                            </tr>
                            <tr>
                                <td>Est??reo sem fio verdadeiro (TWS) </td>
                                <td>N??o</td>
                            </tr>
                            <tr>
                                <td>Resposta de freq????ncia </td>
                                <td>20 Hz - 20000 Hz</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th colspan="2">Recursos</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> Redu????o de ru??do de fundo </td>
                                <td>N??o</td>
                            </tr>
                            <tr>
                                <td> Dobr??vel </td>
                                <td>N??o</td>
                            </tr>
                            <tr>
                                <td> Programas </td>
                                <td>Sim</td>
                            </tr>
                            <tr>
                                <td> Acess??rios </td>
                                <td>Microfone</td>
                            </tr>
                            <tr>
                                <td> Redu????o de ru??do </td>
                                <td>N??o</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="col">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th colspan="2">Headphone</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Al??a ajust??vel</td>
                                <td> Sim</td>
                            </tr>
                            <tr>
                                <td>Cancelamento ativo de ru??do</td>
                                <td> N??o</td>
                            </tr>
                            <tr>
                                <td>Tipo de fone de ouvido</td>
                                <td> Sobre a orelha</td>
                            </tr>
                            <tr>
                                <td>Material para orelha</td>
                                <td> Couro sint??tico</td>
                            </tr>
                            <tr>
                                <td>Constru????o da tampa auricular</td>
                                <td> Fechadas</td>
                            </tr>
                            <tr>
                                <td>Auriculares girat??rios</td>
                                <td> N??o</td>
                            </tr>
                            <tr>
                                <td>Auriculares rotativos</td>
                                <td> N??o</td>
                            </tr>
                            <tr>
                                <td>Canais de sa??da</td>
                                <td> Virtual 7.1</td>
                            </tr>
                            <tr>
                                <td>Tipo de ??m??</td>
                                <td> Neod??mio</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th colspan="2">Microfone</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Microfone do tipo sensor</td>
                                <td>Condensador</td>
                            </tr>
                            <tr>
                                <td>Padr??o de capta????o</td>
                                <td>Omnidirecional</td>
                            </tr>
                            <tr>
                                <td>Cancelamento de eco</td>
                                <td>N??o</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div> -->
</section>



<section class="container p-section">
    <div class="row">
        <div class="col">
            <h3 class="block-title">Produtos Relacionados</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="relatedproducts-carousel owl-carousel">
                @foreach($relatedProducts as $relatedProduct)
                <div class="box-product relatedProducts" data-url="{{route('product', ['product' => $product->slug])}}">
                    <div class="box-img-product">
                        @if($relatedProduct->images()->first())
                        <img src="{{$relatedProduct->images()->first()->link}}" alt="{{$relatedProduct->name}}">
                        @endif
                    </div>
                    <div class="box-title-product">
                        <h2>{{$relatedProduct->name}}</h2>
                        <div class="box-qtd-product">
                            <form method="POST">
                                {{csrf_field()}}
                                <input type="text" name="qtd" value="0">
                                <button id="btn-more-qtd">+</button>
                                <button id="btn-less-qtd">-</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="bag-footer">
    <div class="container">
        <div class="box-bag">
            <p>Adicione este item ?? sacola<br><b>para realizar seu or??amento</b></p>
            <div class="box-qtd-product">
                <form method="POST">
                    {{csrf_field()}}
                    <input type="text" name="qtd" value="0">
                    <button id="btn-more-qtd">+</button>
                    <button id="btn-less-qtd">-</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
@section('scripts')
<script type="text/javascript">
$(document).ready(function() {
    $("#img-carousel").on('changed.owl.carousel initialized.owl.carousel', function(event) {
        $(event.target)
            .find('.owl-item').removeClass('last')
            .eq(event.item.index + event.page.size - 1).addClass('last');
    }).owlCarousel({
        loop: true,
        margin: 12,
        nav: true,
        dots: false,
        smartSpeed: 800,
        navText: ["<img src='{{asset('img/nav-left.png')}}'>",
            "<img src='{{asset('img/nav-right.png')}}'>"
        ],
        responsive: {
            992: {
                items: 3
            },
            480: {
                items: 1
            },
            0: {
                items: 1
            }
        }
    });
    $(".relatedproducts-carousel").owlCarousel({
        loop: true,
        margin: 12,
        nav: true,
        dots: false,
        navText: ["<img src='{{asset('img/nav-left.png')}}'>",
            "<img src='{{asset('img/nav-right.png')}}'>"
        ],
        responsive: {
            992: {
                items: 3
            },
            480: {
                items: 1
            },
            0: {
                items: 1
            }
        }
    });
});

$('.relatedProducts').on('click', function() {
    const url = $(this).data('url');
    window.location.href = url;
});
</script>
@endsection
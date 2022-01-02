@extends('customer.templates.default')
@section('title', 'Home')
@section('description', 'Softronic')
@section('content')
    <div id="slider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php for ($i=0; $i < 3; $i++) { ?>
            <li data-target="#slider" data-slide-to="<?php echo $i; ?>" <?php echo $i == 0 ? ' class="active"' : ''; ?>></li>
            <?php } ?>
        </ol>
        <div class="carousel-inner">
            <?php for ($i=0; $i < 3; $i++) { ?>
            <div class="carousel-item<?php echo $i == 0 ? ' active' : ''; ?>">
                <div class="banner-one">
                    <div class="container">
                        <div class="text-content">
                            <span>CONHEÇA TODA A LINA DE</span>
                            <strong>COMBOS<br>DA LOGITECH</strong>
                            <a href="#">Conhecer</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>



    <section class="container p-section">
        <div class="row">
            <div class="col">
                <ul class="showcase-titles">
                    <li class="options active" data-box="new"><a href="#">Novidades</a></li>
                    <li class="options " data-box="featured"><a href="#">Destaques</a></li>
                </ul>
            </div>
        </div>
        <div class="row" id="new">
            <div class="col">
                <div class="products-carousel owl-carousel">
                    @foreach ($newProducts as $product)

                       @component('components.product-card', ['product' => $product])
                           
                       @endcomponent
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row" id="featured" style="display:none">
            <div class="col">
                <div class="products-carousel owl-carousel">
                    @foreach ($featuredProducts as $product)
                    @component('components.product-card', ['product' => $product])
                    @endcomponent
                        {{-- <div class="box-product" data-url="{{ route('product', ['slug' => $product->slug]) }}">
                            <div class="box-img-product">
                                @if ($product->images()->first())
                                    <img src="{{ $product->images()->first()->link }}" alt="{{ $product->name }}">
                                @endif
                            </div>
                            <div class="box-title-product">
                                <h2>{{ $product->name }}</h2>
                            </div>
                        </div> --}}

                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <section class="container p-section">
        <div class="row">
            <div class="col">
                <h3 class="block-title">Categorias em destaque</h3>
            </div>
        </div>
        <?php for ($i=0; $i < 2; $i++) { ?>
        <div class="row row-categories">
            <?php for ($j=0; $j < 3; $j++) { ?>
            <div class="col-md-4 col-categories">
                <div class="box-category">
                    <div class="box-img-category">
                        <img src="{{ asset('img/products/phone.png') }}" alt="Logitech Pebble M350">
                    </div>
                    <div class="box-title-category">
                        <h2>Headphones</h2>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <?php } ?>
    </section>

    @if ($banners->count() > 0)
        <section class="container p-section">
            <div class="row">
                <div class="col">
                    <h3 class="block-title">Últimas novidades</h3>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="posts-carousel owl-carousel">
                        @foreach ($banners as $banner)
                            <div>
                                <img src="{{ asset('uploads/banner/original/') . '/' . $banner->image }}"
                                    alt="{{ $banner->name }}">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif
    <section id="customers">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="block-title">Nossos clientes</h3>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="customers-carousel owl-carousel">
                        <div class="box-customer">
                            <img src="{{ asset('img/customer.png') }}" alt="Post">
                        </div>
                        <?php for ($j=2; $j < 19; $j++) { ?>
                        <div class="box-customer">
                            <img src="{{ asset('img/customer') }}{{ $j }}.png" alt="Post">
                        </div>

                        <?php } ?>
                        <div class="box-customer">
                            <img src="{{ asset('img/customer1.jpg') }}" alt="Post">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script type="text/javascript">
        // $('.box-product').on('click', function() {
        //     const url = $(this).data('url');
        //     window.location.href = url;
        // });
    </script>
@endsection

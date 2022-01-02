@extends('customer.templates.default')
@section('content')
@section('title', 'Seja um revendedor')
@section('description', 'Seja um revendedor autorizado Softronic, preencha os dados abaixo e em breve um Gerente de Contas entrará em contato.')

<section class="container p-section">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Seja um revendedor</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="title-section">
                <h2>SEJA UM</h2>
                <h1>REVENDEDOR</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <p class="adding">Seja um revendedor autorizado Softronic, preencha os dados abaixo e em breve um
                Gerente de Contas entrará em contato:</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <form class="form-contact" method="post">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" name="company" placeholder="EMPRESA" required>
                        <input type="text" class="input-cnpj" name="cnpj" placeholder="CNPJ" required>
                        <input type="text" name="contact" placeholder="CONTATO" required>
                        <input type="text" name="street" placeholder="RUA" required>
                        <input type="text" name="number" placeholder="NUMERO" class="input-left" required>
                        <input type="text" name="complement" placeholder="COMPLEMENTO" class="input-right">
                        <input type="text" name="neighborhood" placeholder="BAIRRO" class="input-left" required>
                        <input type="text" name="zip_code" placeholder="CEP" class="input-right input-cep" required>
                        <input type="text" name="city" placeholder="CIDADE" class="input-left" required>
                        <input type="text" name="uf" placeholder="UF" class="input-right" maxlength="2" required>
                        <input type="text" name="phone" placeholder="TELEFONE" id="telefone" class="input-left"
                            required>
                        <input type="text" name="ramal" placeholder="RAMAL" class="input-right" required>
                        <input type="email" name="email" placeholder="E-MAIL" required>
                        <button id="clear">LIMPAR</button>
                        <button id="submit">ENVIAR</button>
                    </div>
                        <!-- <textarea name="message" placeholder="MENSAGEM" required></textarea> -->
                        
                </div>
            </form>
        </div>
    </div>
</section>
@stop

@section('scripts')

<script type="text/javascript">

$(document).ready(function() {
    $(".occupation-carousel").owlCarousel({
        loop: true,
        margin: 12,
        nav: true,
        dots: false,
        navText: ["<img src='{{asset('img/nav-left.png')}}'>",
            "<img src='{{asset('img/nav-right.png')}}'>"
        ],
        responsive: {
            992: {
                items: 5
            },
            480: {
                items: 3
            },
            0: {
                items: 2
            }
        }
    });
});
</script>
@endsection
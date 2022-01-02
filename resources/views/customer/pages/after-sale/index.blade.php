@extends('customer.templates.default')
@section('title', 'SAC')
@section('description','Bem vindo a página do SAC Softronic')

@section('content')

<section class="container p-section" id="sac">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pós Venda</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="title-section">
                <h2>SAC</h2>
                <h1>SOFTRONIC</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <p class="adding">Bem vindo a página do SAC Softronic</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <p>
                Cada fabricante têm seu prazo de garantia, que pode ser diferente conforme o produto. Além disso, cada
                fabricante usa um processo diferente para assistência técnica de seu produto: através da Softronic ou
                direto com o mesmo.
            </p>
            <p>
                Favor ler as políticas de assistência técnica abaixo e, caso o/s produto/s se adequem a estas condições
                preencher o formulário disponível para download e enviar em anexo para: <a
                    href="mailto:suporte@softronic.com.br"
                    style="color: #898c8e;font-weight: bold;">suporte@softronic.com.br</a>
            </p>
            <p class="adding">Política e Formulário para Revendas</p>
            <div class="box-download">
                <a href="{{asset('arquivos/procedimentos-para-atendimento-em-garantia-aos-revendedores.pdf')}}" target="_blank"><img
                        src="{{asset('img/download.png')}}" alt="Icon">Política</a>
            </div>
            <div class="box-download">
                <a href="{{asset('arquivos/formulario-para-solicitacao-de-atendimento-de-em-garantia-exclusivo-a-revendedores.xlsx')}}"
                    download><img src="{{asset('img/download.png')}}" alt="Icon">Formulário</a>
            </div><br>
            <p class="adding adding-margin">Política e Formulário para Consumidor final</p>
            <div class="box-download">
                <a href="{{asset('arquivos/procedimentos-para-atendimento-em-garantia-aos-consumidores-finais.pdf')}}"
                    target="_blank"><img src="{{asset('img/download.png')}}" alt="Icon">Política</a>
            </div>
            <div class="box-download">
                <a href="{{asset('arquivos/formulario-para-solicitacao-de-atendimento-em-garantia-a-consumidor-final.xlsx')}}"
                    download><img src="{{asset('img/download.png')}}" alt="Icon">Formulário</a>
            </div><br>
            <p class="adding-margin">Para suporte técnico de produtos <b>Logitech, Logitech G, Astro, Ultimate Ears e
                    Jaybird</b> favor ligar para: 0800 761 8787</p>
        </div>
    </div>
</section>
@endsection
@section('scripts')
<script type="text/javascript">
$(document).ready(function() {
    $(".occupation-carousel").owlCarousel({
        loop: true,
        margin: 12,
        nav: true,
        dots: false,
        navText: ["<img src='{{asset('img/nav-left.png')}}'>", "<img src='{{asset('img/nav-right.png')}}'>"],
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
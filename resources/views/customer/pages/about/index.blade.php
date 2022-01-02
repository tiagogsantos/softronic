@extends('customer.templates.default')

@section('title', 'Sobre a Softronic')
@section('description', 'Nosso desafio é agregar valor aos negócios de nossos clientes, fornecendo produtos
diferenciados de alta, qualidade, rentabilidade e giro.')
@section('content')
<section class="container p-section">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Empresa</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="title-section">
                <h2>SOBRE</h2>
                <h1>A SOFTRONIC</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <p class="adding">Agregando valor à distribuição de Tecnologia</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <p>
                A Softronic é uma empresa importante no mercado de distribuição de tecnologia,
                fundada em setembro de 2006, tem foco na introdução de novas marcas internacionais no mercado
                brasileiro.
                Possui logística de ponta, grande capacidade de importação e forte situação financeira.
            </p>
            <p>
                Temos instalações próprias, nosso centro de distribuição em Serra/ES com 50 mil m2 de área construída e
                escritório comercial em São Paulo capital.
            </p>
            <p>
                A Empresa atua com total comprometimento das que comercializa, foca no sell out de seus clientes.
            </p>
            <p>
                Todos os nossos parceiros internacionais são representativos no mercado e nossas parcerias
                internacionais com essas marcas são todas histórias de sucesso.
            </p>
        </div>
        <div class="col-sm-6">
            <p>
                Nossos clientes têm total confiança na Softronic e vivemos com esse padrão tendo em mente a
                lucratividade de nossos clientes e fornecedores
            </p>
            <p>
                Buscamos apenas produtos com valor agregado ao mercado.
            </p>
            <p>
                Entre nossos clientes estão as principais redes de varejo e o canal de revendas especializadas de todo o
                Brasil. Nosso desafio é agregar valor aos negócios de nossos clientes, fornecendo produtos diferenciados
                de alta, qualidade, rentabilidade e giro.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="box-image"
                style="background: url('{{asset('/img/galeria/empresa1.jpg')}}')center center; background-size: cover;">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="box-image"
                style="background: url('{{asset('/img/galeria/empresa2.jpg')}}')center center; background-size: cover;">
            </div>
        </div>
    </div>
</section>

<section id="occupation-area">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="title-section">
                    <h2>NOSSAS</h2>
                    <h1>ÁREAS DE ATUAÇÃO</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="occupation-carousel owl-carousel">
                    <?php for ($j = 0; $j < 14; $j++) {?>
                    <div class="box-occupation">
                        <div class="box-occupation-img">
                            <img id="importacao" src="{{asset('img/atuacao/importacao.png')}}" alt="Importação">
                        </div>
                        <p>Importação</p>
                    </div>
                    <div class="box-occupation">
                        <div class="box-occupation-img">
                            <img id="logistica" src="{{asset('img/atuacao/logistica.png')}}" alt="Logística">
                        </div>
                        <p>Logística</p>
                    </div>
                    <div class="box-occupation">
                        <div class="box-occupation-img">
                            <img id="marketing" src="{{asset('img/atuacao/marketing.png')}}" alt="Marketing">
                        </div>
                        <p>Marketing</p>
                    </div>
                    <div class="box-occupation">
                        <div class="box-occupation-img">
                            <img id="treinamentos" src="{{asset('img/atuacao/treinamento.png')}}" alt="Treinamentos">
                        </div>
                        <p>Treinamentos</p>
                    </div>
                    <div class="box-occupation">
                        <div class="box-occupation-img">
                            <img id="pos-venda" src="{{asset('img/atuacao/pos-venda')}}.png" alt="PósVenda">
                        </div>
                        <p>Pós Venda</p>
                    </div>
                    <div class="box-occupation">
                        <div class="box-occupation-img">
                            <img id="financeiro" src="{{asset('img/atuacao/financeiro.png')}}" alt="Financeiro">
                        </div>
                        <p>Financeiro</p>
                    </div>
                    <div class="box-occupation">
                        <div class="box-occupation-img">
                            <img id="vendas" src="{{asset('img/atuacao/vendas.png')}}" alt="Vendas">
                        </div>
                        <p>Vendas</p>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container p-section" id="partners">
    <div class="row">
        <div class="col">
            <div class="title-section">
                <h2>PARCERIAS</h2>
                <h1>DE NEGÓCIOS</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-9">
            <p>
                Trabalhamos para oferecer aos nossos clientes produtos diferenciados, exclusivos, de alta margem e valor
                agregado. Nosso desafio é buscar oportunidades para viabilizar e colaborar com o seu crescimento.
            </p>
            <p>
                Temos o compromisso formal de garantir um mark-up mínimo saudável para nossos canais, em todas as linhas
                que comercializamos. Nossa política de pagamento possibilita o financiamento do capital de giro e a
                venda parcelada para seus consumidores. Cadastre como nossa revenda que um gerente de contas entrará em
                contato para atende-lo.
            </p>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-sm-12">
            <div class="box-partners">
                <div class="box-partner-right">
                    <img src="{{asset('img/partners/partner1.png')}}" alt="Parceiro">
                </div>
                <div class="box-partner-right">
                    <img src="{{asset('img/partners/partner2.png')}}" alt="Parceiro">
                </div>
                <div class="box-partner-right">
                    <img src="{{asset('img/partners/partner3.png')}}" alt="Parceiro">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="box-partners">
                <div class="box-partner-right border-bottom-desktop border-mobile">
                    <img src="{{asset('img/partners/partner4.png')}}" alt="Parceiro">
                </div>
                <div class="box-partner-right border-bottom-desktop border-mobile">
                    <img src="{{asset('img/partners/partner5.png')}}" alt="Parceiro">
                </div>
                <div class="box-partner-right border-bottom-desktop border-mobile">
                    <img src="{{asset('img/partners/partner7.png')}}" alt="Parceiro">
                </div>
            </div>
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
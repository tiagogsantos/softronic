@extends('customer.templates.default')

@section('title', 'Entre em contato')
@section('description', 'Entre em contato agora mesmo')
@section('content')
<section class="container p-section">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contato</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="title-section">
                <h2>ENTRE</h2>
                <h1>EM CONTATO</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <p class="adding">Para entrar em contato com a <b>Softronic</b> ou receber, nossos informativos, preencha os
                campos abaixo.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <form class="form-contact" method="post">
                {{csrf_field()}}
                <input type="text" name="name" value="{{old('name')}}" placeholder="NOME" required>
                <input type="email" name="email" value="{{old('email')}}" placeholder="E-MAIL" required>
                <input type="text" name="contact" value="{{old('contact')}}" placeholder="CONTATO" required>
                <input type="text" name="phone" value="{{old('phone')}}" placeholder="TELEFONE" required>
                <select name="subject">
                    <option selected disabled>ASSUNTO</option>
                    <option value="Comercial">Comercial</option>
                    <option value="Administrativo">Administrativo</option>
                    <option value="Financeiro">Financeiro</option>
                    <option value="Jurídico">Jurídico</option>
                    <option value="Pós Venda - RMA">Pós Venda - RMA</option>
                    <option value="Transporte">Transporte</option>
                </select>
                <textarea name="message" placeholder="MENSAGEM"></textarea>
                <label class="status">Autorizo receber os informativos da Softronic
                    <input type="checkbox" name="status" checked value="1">
                    <span class="checkmark"></span>
                </label>
                <button id="clear" type="button">LIMPAR</button>
                <button id="submit" type="submit">ENVIAR</button>
            </form>
        </div>
        <div class="col-sm-6">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3658.2539313974557!2d-46.6758987!3d-23.5233676!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef8009c5e2d6f%3A0x30547bbc2e76dc98!2sRua%20Achilles%20Orlando%20Curtolo%2C%20584%20-%20Parque%20Industrial%20Tomas%20Edson%2C%20S%C3%A3o%20Paulo%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1585769700683!5m2!1spt-BR!2sbr"
                width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
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
        navText: ["<img src='images/nav-left.png'>", "<img src='images/nav-right.png'>"],
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
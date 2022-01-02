@extends('customer.templates.default')

@section('title', 'Cadastre-se')
@section('description', 'Cadastre-se agora mesmo')
@section('content')
<section class="container p-section">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cadastre-se</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="title-section">
                <h1>CADASTRE-SE</h1>
            </div>
        </div>
    </div>
    <form method="POST" class="form-register" action="{{route('register')}}">
        {{csrf_field()}}
        <div class="row">
            <div class="col-sm-6">
                <div class="box-form">
                    <h4>Seus dados</h4>
                    <p>Dados pessoais</p>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="nameRegister"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        </div>
                        <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Nome completo" aria-label="Nome completo" aria-describedby="nameRegister">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="phoneRegister"><i class="fa fa-phone" aria-hidden="true"></i></span>
                        </div>
                        <input type="text" name="phone" value="{{old('phone')}}" class="form-control" placeholder="Telefone" aria-label="Telefone" aria-describedby="phoneRegister">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="cpfRegister"><i class="fa fa-list-alt" aria-hidden="true"></i></span>
                        </div>
                        <input type="text" name="cpf" value="{{old('cpf')}}" class="form-control input-cpf" placeholder="CPF" aria-label="CPF" aria-describedby="cpfRegister">
                    </div>
                    <p>Dados de acesso</p>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="emailLogin"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        </div>
                        <input type="email" name="email" value="{{old('email', request('email'))}}" class="form-control" placeholder="E-mal" aria-label="E-mal" aria-describedby="emailLogin">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="passLogin"><i class="fa fa-lock" aria-hidden="true"></i></span>
                        </div>
                        <input type="password" name="password" class="form-control" placeholder="Senha" aria-label="Senha" aria-describedby="passLogin">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="pass2Login"><i class="fa fa-lock" aria-hidden="true"></i></span>
                        </div>
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Senha novamente" aria-label="Senha novamente" aria-describedby="pass2Login">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="box-form">
                    <h4>Dados da empresa</h4>
                    <p>Dados cadastrais</p>
                    <div class="input-group mb-3 border-l">
                        <input type="text" name="company_name" value="{{old('company_name')}}" class="form-control" placeholder="Razão social" aria-label="Razão social">
                    </div>
                    <div class="input-group mb-3 border-l">
                        <input type="text" name="cnpj" value="{{old('cnpj')}}" class="form-control input-cnpj" placeholder="CNPJ" aria-label="CNPJ">
                    </div>
                    <div class="input-group mb-3 border-l">
                        <input type="text" name="inscricao_estadual" value="{{old('inscricao_estadual')}}" class="form-control" placeholder="Inscrição estadual" aria-label="Inscrição estadual">
                    </div>
                    <p>Endereço</p>
                    <div class="input-group mb-3 border-l">
                        <input type="text" name="zip_code" value="{{old('zip_code')}}" class="form-control input-cep" placeholder="CEP" aria-label="CEP">
                    </div>
                    <div class="input-group mb-3 border-l">
                        <input type="text" name="street" value="{{old('street')}}" class="form-control" placeholder="Logradouro" aria-label="Logradouro">
                    </div>
                    <div class="input-group mb-3 border-l">
                        <input type="text" name="city" value="{{old('city')}}" class="form-control" placeholder="Cidade" aria-label="Cidade">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Concordo com a <a href="#">Política de privacidade</a></label>
        </div>
        <button>Cadastrar <img src="{{ asset('img/icons/arrow-right.png')}}" alt="Icon"></button>
    </form>
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
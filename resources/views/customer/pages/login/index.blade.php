@extends('customer.templates.default')

@section('title', 'Login')
@section('description', 'Faça login agora mesmo')
@section('content')
<section class="container p-section">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Login</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="title-section">
                <h1>LOGIN</h1>
            </div>
        </div>
    </div>    
    <div class="row">
        <div class="col-sm-6">
            <div class="box-form form-login">
                <h4>Já tem cadastro?</h4>
                <p>Entre com seu e-mail e senha</p>
                <form method="POST" class="form-register" action="{{route('login')}}">
                    {{csrf_field()}}
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="loginEmail"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        </div>
                        <input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Seu e-mail" aria-label="Seu e-mail" aria-describedby="loginEmail">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"  id="loginPass"><i class="fa fa-lock" aria-hidden="true"></i></span>
                        </div>
                        <input type="password" name="password" class="form-control" placeholder="Sua senha" aria-label="Sua senha" aria-describedby="loginPass">
                    </div>
                    <div class="box-forgot">
                        <a href="#">Esqueceu a senha?</a>
                        <button>Entrar <img src="{{ asset('img/icons/arrow-right.png')}}" alt="Icon"></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="box-form form-login">
                <h4>Ainda não é cadastrado?</h4>
                <p>Faça seu cadastro</p>
                <form method="get" class="form-register" action="{{route('register.show')}}">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="registerEmail"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        </div>
                        <input type="email" name="email" class="form-control" placeholder="Seu e-mail" aria-label="Seu e-mail" aria-describedby="registerEmail" required>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Concordo com a <a href="#">Política de privacidade</a></label>
                    </div>
                    <div class="box-forgot box-forgot-right">
                        <button>Cadastrar <img src="{{ asset('img/icons/arrow-right.png')}}" alt="Icon"></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection

@extends('customer.templates.default')

@section('title', 'Orçamento solicitado')
@section('description', 'Orçamento solicitado')
@section('content')
<section class="container p-section">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-center">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Orçamento solicitado</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="title-section text-center">
                <h3>ORÇAMENTO SOLICITADO</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <p class="adding text-center">Em breve retornaremos com maiores informações</p>
            <button class="btn-black" onclick="window.location.href='{{url('/')}}';">Voltar para o site</button>
        </div>
    </div>
</section>

@endsection
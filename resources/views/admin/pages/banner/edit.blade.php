@extends('admin.templates.default')
@section('title', 'Editar Banner')

@section('content')
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Editar Banner</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- ./row -->

        <div class="row">
            <div class="col-md-6">

                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">Dados</h3>
                    </div>
                    <form action="{{route('admin.banner.update', ['tag' => $banner])}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="card-body pad">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">Nome</label>
                                        <input type="text"
                                            class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" id="name"
                                            name="name" value="{{$banner->name}}" required>
                                        @if ($errors->has('name'))
                                        <span class="help-block">
                                            <small>
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </small>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">Imagem</label>
                                        <p>
                                            <small>Somente selecione a imagem, se deseja trocá-la.</small>
                                        </p>
                                        <div class="custom-file">
                                            <input type="file"
                                                class="custom-file-input {{$errors->has('name') ? 'is-invalid' : ''}}"
                                                name="image" id="image">
                                            <label class="custom-file-label" for="image">Escolha uma imagem</label>
                                        </div>
                                        @if ($errors->has('image'))
                                        <span class="help-block">
                                            <small>
                                                <strong>{{ $errors->first('image') }}</strong>
                                            </small>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Atualizar</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <div class="card-title">Imagem</div>
                    </div>
                    <div class="card-body pad">
                        <div class="row">
                            <div class="col-sm-12">
                                <figure>
                                    <img src="{{asset('uploads/banner/thumbnail/').'/'.$banner->image}}"
                                        alt="{{$banner->name}}" class="img-thumbnail">
                                </figure>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>

        <!-- ./row -->
    </section>
    <!-- /.content -->
</div>
@stop
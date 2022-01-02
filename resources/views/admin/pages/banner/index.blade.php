@extends('admin.templates.default')

@section('title', 'Lista de Banners')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Banners</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Lista de Banners</h3>
                            <div class="card-tools" class="" id="addBanner">
                                <button type="button" onclick="window.location.href='{{route('admin.banner.create')}}'"
                                    class="btn btn-block btn-success">
                                    <i class="fas fa-plus"></i></button>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 300px;">
                            <table class="table table-head-fixed">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nome</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($banners as $banner)
                                    <tr>
                                        <td>{{$banner->id}}</td>
                                        <td>{{$banner->name}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button title="Editar" class="btn btn-outline-primary"
                                                    onclick="window.location.href='{{route('admin.banner.edit', ['banner' => $banner])}}'">
                                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                                </button>
                                                <button title="Deletar" class="btn btn-outline-primary act-delete"
                                                    href="{{route('admin.banner.delete', ['banner' => $banner])}}">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4">Nenhum banner cadastrado</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
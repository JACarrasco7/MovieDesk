@extends('Admin.layout')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Editar Actor</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin-index') }}">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin-actors') }}">Actores</a></li>
                        <li class="breadcrumb-item active">Editar</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content d-flex align-items-center">
        <!-- Default box -->
        <div class="card w-75 m-auto">
            <div class="card-body">
                <form action="{{ url('/admin/actors/'.$actor->id.'/edit') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <div class="row mt-5">
                            <div class="col-2"></div>
                            <div class="col-8">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Titulo -->
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group mb-2 mr-sm-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-tags"></i></div>
                                                    </div>
                                                    <input type="text" class="form-control" id="nombre_actor"
                                                        name="name" placeholder="Introduce el nombre del actor"
                                                        value="{{ $actor->name }}">
                                                </div>
                                                {!! $errors->first('name', '<b>:message</b>') !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2"></div>
                            </div>

                        </div>
                        <div class="row mt-5 mb-5">
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary">Editar</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
        <!-- /.card-body -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@stop
@extends('Admin.layout')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Insertar Administrador</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin-index') }}">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin-administrators') }}">Administradores</a>
                        </li>
                        <li class="breadcrumb-item active">Insertar</li>
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
                <form action="{{ route('insert-administrator') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <div class="row mt-5">
                            <div class="col-2"></div>
                            <div class="col-8">
                                <div class="row">
                                    <div class="col-6">
                                        <!-- Nombre -->
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group mb-2 mr-sm-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-tags"></i></div>
                                                    </div>
                                                    <input type="text" class="form-control" name="name"
                                                        placeholder="Introduce el nombre del administrador"
                                                        value="{{ old('name') }}">
                                                </div>
                                                {!! $errors->first('name', '<b>:message</b>') !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <!-- Password -->
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group mb-2 mr-sm-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-lock"></i></div>
                                                    </div>
                                                    <input type="password" class="form-control" name="password"
                                                        placeholder="Introduce la contraseña del administrador"
                                                        value="{{ old('password') }}">
                                                </div>
                                                {!! $errors->first('password', '<b>:message</b>') !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <!-- correo -->
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group mb-2 mr-sm-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-at"></i></div>
                                                    </div>
                                                    <input type="email" class="form-control" name="email"
                                                        placeholder="Introduce el correo del administrador"
                                                        value="{{ old('email') }}">
                                                </div>
                                                {!! $errors->first('email', '<b>:message</b>') !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <!-- telefono -->
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group mb-2 mr-sm-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-phone"></i></div>
                                                    </div>
                                                    <input type="text" class="form-control" name="phone"
                                                        placeholder="Introduce el telefono del administrador"
                                                        value="{{ old('phone') }}">
                                                </div>
                                                {!! $errors->first('phone', '<b>:message</b>') !!}
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
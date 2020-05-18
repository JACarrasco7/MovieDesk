@extends('Admin.layout')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Inicio</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">


        <div class="row">
            <div class="col-5">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Ultimas conexiones</h3>
                    </div>
                    <div class="card-body">


                        <table class="table table-sm table-hover">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                    <th>Ultima conexion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($admins as $clave => $admin)
                                <tr>
                                    <td class="align-middle text-left">{{ $admin->name }}</td>
                                    <td class="align-middle text-left">{{ $admin->email }}</td>
                                    <td class="align-middle text-left">{{ $admin->last_connection }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="8">No se han encontrado Admins</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <div class="col-7">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Suscripciones mensuales</h3>
                    </div>
                    <div class="card-body">

                        <div id="grafica"></div>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@stop


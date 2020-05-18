@extends('Admin.layout')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Administradores &nbsp; <a href="{{ route('form-insert-administrator') }}"
                            class="btn btn-success"><i class="far fa-plus" aria-hidden="true"></i></a>
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin-index') }}">Inicio</a></li>
                        <li class="breadcrumb-item active">Administradores</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-body">

                <table class="table table-hover table-bordered tablas nowrap text-center" style="width: 100%">
                    <thead>
                        <tr>
                            <th>Acciones</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Teléfono</th>
                            <th>Ultima conexion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($admins as $clave => $admin)
                        <tr>
                            <td>
                                <button class="btn btn-danger EliminarAdministrators"
                                    IdAdministrators="{{ $admin->id }}"><i class="fa fa-trash"
                                        aria-hidden="true"></i></button>

                                <a href="{{ url('admin/administrators/'.$admin->id.'/edit') }}" class="btn btn-warning">
                                    <i class="fas fa-edit" style="color: white"></i>
                                </a>
                            </td>
                            <td class="align-middle text-left">{{ $admin->name }}</td>
                            <td class="align-middle text-left">{{ $admin->email }}</td>
                            <td class="align-middle">{{ $admin->phone }}</td>
                            <td class="align-middle">{{ ($admin->last_connection)? $admin->last_connection : 'Nunca' }}
                            </td>
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
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@stop
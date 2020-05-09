@extends('Admin.layout')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Actores &nbsp; <a href="" class="btn btn-success"><i class="far fa-plus"
                                aria-hidden="true"></i></a>
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin-index') }}">Inicio</a></li>
                        <li class="breadcrumb-item active">Actores</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


    {{-- {{ dd($clients) }} --}}



    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-body">

                <table class="table table-hover table-bordered tablas nowrap text-center" style="width: 100%">
                    <thead>
                        <tr>
                            <th>Acciones</th>
                            <th>Nº</th>
                            <th>id</th>
                            <th class="text-left">Nombre cliente</th>
                            <th class="text-left">Correo</th>
                            <th>Pago automático</th>
                            <th>Teléfono</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $clave => $user)
                        <tr>
                            <td class="align-middle">
                                <button class="btn btn-danger EliminarActor" idActor="{{ $user->id }}"><i
                                        class="fa fa-trash" aria-hidden="true"></i></button>

                                <a href="{{ url('admin/client/'.$user->id.'/edit') }}" class="btn btn-warning">
                                    <i class="fas fa-edit" style="color: white"></i>
                                </a>
                            </td>
                            <td class="align-middle">{{ $clave + 1 }}</td>
                            <td class="align-middle">{{ $user->id }}</td>
                            <td class="align-middle text-left">{{ $user->client->name }}</td>
                            <td class="align-middle text-left">{{ $user->email }}</td>
                            <td class="align-middle text-left">{{ ($user->auto_payment)? 'SI' : 'NO' }}</td>
                            <td class="align-middle text-left">{{ $user->client->phone }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8">No se han encontrado actores</td>
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
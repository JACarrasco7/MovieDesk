@extends('Admin.layout')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Géneros &nbsp; <a href="" class="btn btn-success"><i class="far fa-plus"
                                aria-hidden="true"></i></a>
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin-index') }}">Inicio</a></li>
                        <li class="breadcrumb-item active">Géneros</li>
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
                            <th>Nº</th>
                            <th>id</th>
                            <th class="text-left">Géneros</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($genders as $clave => $gender)
                        <tr>
                            <td class="align-middle">
                                <button class="btn btn-danger EliminarActor" idActor="{{ $gender->id }}"><i
                                        class="fa fa-trash" aria-hidden="true"></i></button>

                                <a href="{{ url('admin/actors/'.$gender->id.'/edit') }}" class="btn btn-warning">
                                    <i class="fas fa-edit" style="color: white"></i>
                                </a>
                            </td>
                            <td class="align-middle">{{ $clave + 1 }}</td>
                            <td class="align-middle">{{ $gender->id }}</td>
                            <td class="align-middle text-left">{{ $gender->name }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8">No se han encontrado géneros</td>
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
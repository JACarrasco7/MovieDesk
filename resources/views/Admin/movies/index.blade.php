@extends('Admin.layout')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Peliculas &nbsp; <a href="{{ route('form-insert-movie') }}" class="btn btn-success"><i
                                class="far fa-plus" aria-hidden="true"></i></a>
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin-index') }}">Inicio</a></li>
                        <li class="breadcrumb-item active">Peliculas</li>
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
                            <th>+ info</th>
                            <th>Acciones</th>
                            <th>Estado</th>
                            <th>Nº</th>
                            <th>id</th>
                            <th>Portada</th>
                            <th class="text-left">Titulo</th>
                            <th>Año estreno</th>
                            <th>Duracion</th>
                            <th class="text-left">Link Trailer</th>
                            <th class="text-left">Link Pelicula</th>
                            <th class="text-left">Sinopsis</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($movies as $clave => $movie)
                        <tr>
                            <td></td>
                            <td class="align-middle">
                                <button class="btn btn-danger EliminarPelicula" idPelicula="{{ $movie->id }}"><i
                                        class="fa fa-trash" aria-hidden="true"></i></button>

                                <a href="{{ url('admin/movies/'.$movie->id.'/edit') }}" class="btn btn-warning">
                                    <i class="fas fa-edit" style="color: white"></i>
                                </a>
                            </td>
                            <td class="align-middle">

                                @if ($movie->deleted_at)
                                <button class="btn btn-danger activarPelicula" idPelicula="{{ $movie->id }}"><i
                                        class="fa fa-window-close" aria-hidden="true"></i></button>
                                @else
                                <button class="btn btn-success DesactivarPelicula" idPelicula="{{ $movie->id }}"><i
                                        class="fa fa-check" aria-hidden="true"></i></button>
                                @endif


                            </td>
                            <td class="align-middle">{{ $clave + 1 }}</td>
                            <td class="align-middle">{{ $movie->id }}</td>
                            <td class="align-middle"><img src="{{ $movie->URLCover }}" width="75px"></td>
                            <td class="align-middle text-left">{{ $movie->title }}</td>
                            <td class="align-middle"> {{ $movie->premiere_year }}</td>
                            <td class="align-middle">{{ $movie->duration }}</td>
                            <td class="align-middle text-left">{{ $movie->trailer_link }}</td>
                            <td class="align-middle text-left">{{ $movie->movie_link }}</td>
                            <td class="align-middle text-left">{{ $movie->synopsis }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8">No se han encontrado películas</td>
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
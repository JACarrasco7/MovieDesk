@extends('Admin.layout')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Insertar Pelicula</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin-index') }}">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin-movies') }}">Peliculas</a></li>
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
                <form action="{{ url('/admin/movies') }}" method="post" enctype="multipart/form-data">
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
                                                    <input type="text" class="form-control" id="title" name="title"
                                                        placeholder="Titulo" value="{{ old('title') }}">
                                                    {!! $errors->first('title', '<b>:message</b>') !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-6">
                                        <!-- Año estreno -->
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group mb-2 mr-sm-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i
                                                                class="fas fa-calendar-check"></i>
                                                        </div>
                                                    </div>
                                                    <input type="number" min="1900" max="{{ date("Y") }}"
                                                        class="form-control" id="premiere_year" name="premiere_year"
                                                        placeholder="Año de la pelicula"
                                                        value="{{ old('premiere_year') }}">
                                                    {!! $errors->first('premiere_year', '<b>:message</b>') !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <!-- Duracion -->
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group mb-2 mr-sm-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-clock"></i></div>
                                                    </div>
                                                    <input type="number" min="60" max="300" class="form-control"
                                                        id="duration" name="duration" placeholder="Duracion (minutos)"
                                                        value="{{ old('duration') }}">
                                                    {!! $errors->first('duration', '<b>:message</b>') !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-6">
                                        <!-- Enlace trailer -->
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group mb-2 mr-sm-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-film"></i></div>
                                                    </div>
                                                    <input type="url" class="form-control" id="trailer"
                                                        name="trailer_link" placeholder="Url trailer de la pelicula"
                                                        value="{{ old('trailer_link') }}">
                                                </div>
                                                {!! $errors->first('trailer_link', '<b>:message</b>') !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <!-- Enlace pelicula -->
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group mb-2 mr-sm-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-video"></i></div>
                                                    </div>
                                                    <input type="url" class="form-control" id="movie" name="movie_link"
                                                        placeholder="Url de la pelicula"
                                                        value="{{ old('movie_link') }}">
                                                </div>
                                                {!! $errors->first('movie_link', '<b>:message</b>') !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-6">
                                        <!-- Generos -->
                                        <div class="form-group">
                                            <select class="select2bs4 bg-dark" multiple="multiple"
                                                data-placeholder="Selecciona genero/s" name="gender[]"
                                                style="width: 100%;" required>
                                                @foreach ($genders as $gender)
                                                <option value="{{ $gender->id }}" @if (old("gender")){{ (in_array($gender->id, old("gender")) ? "selected":"") }}@endif>
                                                    {{ $gender->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <!-- Actores -->
                                        <div class="form-group">
                                            <select class="select2bs4 bg-dark" multiple="multiple"
                                                data-placeholder="Selecciona actor/es" name="actor[]"
                                                style="width: 100%;" required>
                                                @foreach ($actors as $actor)
                                                <option value="{{ $actor->id }}" @if (old("actor")){{ (in_array($actor->id, old("actor")) ? "selected":"") }}@endif>
                                                    {{ $actor->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="synopsis" rows="3"
                                                placeholder="Introduce sinopsis de la pelicula">{{ old('synopsis') }}</textarea>
                                            {!! $errors->first('synopsis', '<b>:message</b>') !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-6 align-self-center text-center">
                                        <!-- Portada -->
                                        <div class="form-group">
                                            <input type="file" class="cover" name="cover" required>
                                            <p><b>Peso maximo de la foto: 5Mb</b></p>
                                        </div>
                                    </div>
                                    <div class="col-6 text-center">
                                        <img src="{{ asset('adminLTE/img/movie-poster.jpg') }}"
                                            class="img-thumbnail previsualizar" width="20%">
                                    </div>
                                </div>
                            </div>
                            <div class="col-2"></div>
                        </div>

                    </div>
                    <div class="row mt-5 mb-5">
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary">Insertar</button>
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
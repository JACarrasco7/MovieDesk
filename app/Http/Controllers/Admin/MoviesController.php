<?php

namespace App\Http\Controllers\Admin;

use App\Actor;
use App\Gender;
use App\Http\Controllers\Controller;
use App\Movie;
use File;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Request;

class MoviesController extends Controller
{

    public function create()
    {

        $genders = Gender::all();
        $actors = Actor::all();

        return view('Admin\movies\insert')->with(compact('genders', 'actors'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|unique:movies',
            'premiere_year' => 'required|integer|gte:1900|lte:' . date("Y"),
            'premiere_year' => 'required|integer',
            'duration' => 'required|gte:60|lte:300',
            'trailer_link' => 'required|url',
            'movie_link' => 'required|url',
            'gender' => 'required',
            'synopsis' => 'required|min:5',
        ], [
            'premiere_year.gte' => 'El año no puede ser menor que 1900',
            'premiere_year.lte' => 'El año no puede ser mayor que ' . date("Y"),
            'duration.gte' => 'La duracion no puede ser menor que 60 min',
            'duration.gte' => 'La duracion no puede ser mayor que 300 min',
        ]);

        //COVER
        $fichero = $request->file('cover');
        $ruta = public_path() . '/images/movies/';
        $nombre_cover = uniqid() . $fichero->getClientOriginalName();
        $subido = $fichero->move($ruta, $nombre_cover);

        $movie = new Movie();
        $movie->title = $request->input('title');
        $movie->premiere_year = $request->input('premiere_year');
        $movie->duration = $request->input('duration');
        $movie->cover = $nombre_cover;
        $movie->trailer_link = $request->input('trailer_link');
        $movie->movie_link = $request->input('movie_link');
        $movie->synopsis = $request->input('synopsis');
        $movie->save();

        $id_movie = Movie::latest('id')->first();


        for ($i = 0; $i < count($request->gender); $i++) {
            $id_movie->genders()->attach($request->gender[$i]);
        }

        for ($x = 0; $x < count($request->actor); $x++) {
            $id_movie->actors()->attach($request->actor[$x]);
        }

        $movies = Movie::withTrashed()->get();
        $pelicula_insertada = true;
        return view('Admin\movies\index')->with(compact('pelicula_insertada', 'movies'));
    }

    public function edit($id)
    {
        $movie = movie::find($id);
        $genders = Gender::all();
        $actors = Actor::all();

        return view('admin\movies\edit')->with(compact('movie', 'genders', 'actors'));
    }

    public function update(Request $request, $id)
    {

        DB::table('actor_movie')->where('movie_id', $id)->delete();
        DB::table('gender_movie')->where('movie_id', $id)->delete();

        $request->validate([
            'title' => 'required|unique:movies,id,' . $id,
            'premiere_year' => 'required|integer|gte:1900|lte:' . date("Y"),
            'premiere_year' => 'required|integer',
            'duration' => 'required|gte:60|lte:300',
            'trailer_link' => 'required|url',
            'movie_link' => 'required|url',
            'synopsis' => 'required|min:5',
        ], [
            'premiere_year.gte' => 'El año no puede ser menor que 1900',
            'premiere_year.lte' => 'El año no puede ser mayor que ' . date("Y"),
            'duration.gte' => 'La duracion no puede ser menor que 60 min',
            'duration.gte' => 'La duracion no puede ser mayor que 300 min',
        ]);

        $movie = Movie::find($id);

        if ($request->file('cover') != "") {

            if (substr($movie->cover, 0, 4) == "http") {
                $borrada = true;
            } else {
                $ruta = public_path() . '/images/movies/' . $movie->cover;
                $borrada = File::delete($ruta);
            }
            if ($borrada) {
                $fichero = $request->file('cover');
                $ruta = public_path() . '/images/movies/';
                $nombre_cover = uniqid() . $fichero->getClientOriginalName();
                $subido = $fichero->move($ruta, $nombre_cover);
                $movie->cover = $nombre_cover;
            }

        }
        $movie->title = $request->input('title');
        $movie->premiere_year = $request->input('premiere_year');
        $movie->duration = $request->input('duration');
        $movie->trailer_link = $request->input('trailer_link');
        $movie->movie_link = $request->input('movie_link');
        $movie->synopsis = $request->input('synopsis');
        $movie->save();

        for ($i = 0; $i < count($request->gender); $i++) {
            $movie->genders()->attach($request->gender[$i]);
        }

        for ($x = 0; $x < count($request->actor); $x++) {
            $movie->actors()->attach($request->actor[$x]);
        }

        $movies = Movie::withTrashed()->get();
        $pelicula_editada = true;
        return view('Admin\movies\index')->with(compact('pelicula_editada', 'movies'));
    }

    public function activate(Request $request, $id)
    {

        if ($request->ajax()) {
            Movie::onlyTrashed()->find($id)->restore();            
        }

        return back();

    }

    public function desactivate($id)
    {
        Movie::find($id)->delete();

        return back();

    }

    public function destroy($id)
    {

        DB::table('movies')->where('id', $id)->delete();
        DB::table('actor_movie')->where('movie_id', $id)->delete();
        DB::table('gender_movie')->where('movie_id', $id)->delete();
        $movies = Movie::withTrashed()->get();
        $pelicula_eliminada = true;

        return view('Admin\movies\index')->with(compact('pelicula_eliminada', 'movies'));

    }
}

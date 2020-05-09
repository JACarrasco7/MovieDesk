<?php

namespace App\Http\Controllers\Admin;

use App\Actor;
use App\Gender;
use App\Http\Controllers\Controller;
use App\Movie;
use App\User;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{

    public function index()
    {
        $grafica = DB::select('SELECT COUNT(*) AS clientes_mes from users GROUP BY MONTH(created_at)');

        return view('Admin\index')->with(compact('grafica'));
    }

    public function clients()
    {

        $users = User::all();

        return view('Admin\clients\index')->with(compact('users'));

    }

    public function movies()
    {
        $movies = Movie::withTrashed()->get();

        return view('Admin\movies\index')->with(compact('movies'));
    }

    public function genders()
    {
        $genders = Gender::all();

        return view('Admin\genders\index')->with(compact('genders'));
    }

    public function actors()
    {
        $actors = Actor::all();

        return view('Admin\actors\index')->with(compact('actors'));
    }

}

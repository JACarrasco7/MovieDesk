<?php

namespace App\Http\Controllers\Admin;

use App\Actor;
use App\Administrator;
use App\Gender;
use App\Http\Controllers\Controller;
use App\Movie;
use App\User;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{

    public function index()
    {
        $datos = DB::select('SELECT MONTH(created_at) AS num_mes,COUNT(*) AS clientes_mes from users WHERE  year(NOW()) = YEAR(created_at)  GROUP BY MONTH(created_at)');

        $admins = DB::select('select * from administrators where last_connection is not null Order By last_connection DESC');

        return view('Admin\index')->with(compact('admins','datos'));
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

    public function clients()
    {

        $users = User::all();

        return view('Admin\clients\index')->with(compact('users'));

    }

    public function administrators()
    {

        $admins = Administrator::all();

        return view('Admin\Administrators\index')->with(compact('admins'));

    }

}

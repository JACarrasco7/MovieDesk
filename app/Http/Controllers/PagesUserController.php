<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesUserController extends Controller
{
    public function index()
    {
        return view('index');
    }
}

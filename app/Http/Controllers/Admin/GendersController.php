<?php

namespace App\Http\Controllers\Admin;

use App\Gender;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GendersController extends Controller
{
    public function create()
    {
        return view('Admin\genders\insert');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|unique:genders',
        ]);

        $gender = new Gender();
        $gender->name = $request->input('name');
        $gender->save();

        $genders = Gender::all();
        $genero_insertado = true;
        return view('Admin\genders\index')->with(compact('genders', 'genero_insertado'));

    }

    public function edit($id)
    {

        $gender = Gender::find($id);

        return view('Admin\genders\edit')->with(compact('gender'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required|unique:genders,id,' . $id,
        ]);

        $gender = Gender::find($id);
        $gender->name = $request->input('name');
        $gender->save();

        $genders = Gender::all();
        $genero_editado = true;

        return view('Admin\genders\index')->with(compact('genders', 'genero_editado'));

    }

    public function destroy($id)
    {

        DB::table('genders')->where('id', $id)->delete();
        $genders = Gender::all();
        $genero_eliminado = true;

        return view('Admin\genders\index')->with(compact('genders', 'genero_eliminado'));

    }
}

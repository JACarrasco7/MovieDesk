<?php

namespace App\Http\Controllers\Admin;

use App\Actor;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Request;

class ActorsController extends Controller
{
    public function create()
    {
        return view('Admin\actors\insert');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|unique:actors',
        ]);

        $actor = new Actor();
        $actor->name = $request->input('name');
        $actor->save();

        $actors = Actor::all();
        $actor_insertado = true;
        return view('Admin\actors\index')->with(compact('actors', 'actor_insertado'));

    }

    public function edit($id)
    {

        $actor = Actor::find($id);

        return view('Admin\actors\edit')->with(compact('actor'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required|unique:actors,id,' . $id,
        ]);

        $actor = Actor::find($id);
        $actor->name = $request->input('name');
        $actor->save();

        $actors = Actor::all();
        $actor_editado = true;

        return view('Admin\actors\index')->with(compact('actors', 'actor_editado'));

    }

    public function destroy($id)
    {

        DB::table('actors')->where('id', $id)->delete();
        $actors = Actor::all();
        $actor_eliminado = true;

        return view('Admin\actors\index')->with(compact('actors', 'actor_eliminado'));

    }

}

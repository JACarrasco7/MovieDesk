<?php

namespace App\Http\Controllers\Admin;

use App\Client;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Request;

class ClientsController extends Controller
{

    public function edit($id)
    {

        $user = User::find($id);

        return view('Admin\clients\edit')->with(compact('user'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,id,' . $id,
            'phone' => 'required|numeric|digits:9',
        ]);

        $user = User::find($id);
        $user->email = $request->input('email');
        $user->save();

        $client = Client::find($request->input('id_cliente'));
        $client->name = $request->input('name');
        $client->phone = $request->input('phone');
        $client->save();

        $users = User::all();
        $cliente_editado = true;

        return view('Admin\clients\index')->with(compact('users', 'cliente_editado'));

    }

    public function activate($id)
    {

        $user = User::find($id);
        $user->auto_payment = true;
        $user->save();

        $users = User::all();
        return view('Admin\clients\index')->with(compact('users'));

    }

    public function desactivate($id)
    {

        $user = User::find($id);
        $user->auto_payment = false;
        $user->save();

        $users = User::all();
        return view('Admin\clients\index')->with(compact('users'));

    }

    public function destroy($id)
    {

        DB::table('users')->where('id', $id)->delete();
        $users = User::all();
        $cliente_eliminado = true;

        return view('Admin\clients\index')->with(compact('cliente_eliminado', 'users'));

    }
}

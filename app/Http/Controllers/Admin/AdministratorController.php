<?php

namespace App\Http\Controllers\Admin;

use App\Administrator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdministratorController extends Controller
{

    public function create()
    {
        return view('Admin\administrators\insert');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'password' => 'required|min:6',
            'email' => 'required|unique:administrators',
            'phone' => 'required|numeric|digits:9',
        ]);

        $admin = new Administrator();
        $admin->name = $request->input('name');
        $admin->email = $request->input('email');
        $admin->password = $request->input('password');
        $admin->phone = $request->input('phone');
        $admin->save();

        $admins = Administrator::all();
        $administrador_insertado = true;
        return view('Admin\administrators\index')->with(compact('admins', 'administrador_insertado'));

    }

    public function edit($id)
    {

        $admin = Administrator::find($id);

        return view('Admin\administrators\edit')->with(compact('admin'));
    }

    public function update(Request $request, $id)
    {

        if ($request->input('password') == "" or $request->input('password') == $request->input('password_actual')) {
            $request->validate([
                'name' => 'required',
                'email' => 'required|unique:administrators,id,' . $id,
                'phone' => 'required|numeric|digits:9',
            ]);

            $password = $request->input('password_actual');

        } else {
            $request->validate([
                'name' => 'required',
                'password' => 'required|min:6',
                'email' => 'required|unique:administrators,id,' . $id,
                'phone' => 'required|numeric|digits:9',
            ]);

            $password = $request->input('password');

        }

        $admin = Administrator::find($id);
        $admin->name = $request->input('name');
        $admin->email = $request->input('email');
        $admin->password = $password;
        $admin->phone = $request->input('phone');
        $admin->save();

        $admins = Administrator::all();
        $administrador_editado = true;
        return view('Admin\administrators\index')->with(compact('admins', 'administrador_editado'));

    }

    public function destroy($id)
    {

        DB::table('administrators')->where('id', $id)->delete();
        $admins = Administrator::all();
        $administrador_eliminado = true;

        return view('Admin\administrators\index')->with(compact('admins', 'administrador_eliminado'));

    }
}

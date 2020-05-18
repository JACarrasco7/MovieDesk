<?php

namespace App\Http\Controllers\Auth;

use App\Administrator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request;

class AdminLoginController extends Controller
{
    /**
     * Show the application’s login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('Admin\login');
    }
    protected function guard()
    {
        return Auth::guard('admin');
    }

    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => ['adminLogout']]);
    }

    public function login(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to log the user in
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // if successful, then redirect to their intended location

            $id_user = auth()->guard('admin')->user()->id;

            $user = Administrator::find($id_user);
            $user->last_connection = date("Y-m-d H:i:s");
            $user->save();

            return redirect()->route('admin-index');

        }
    }

    protected function authenticated(Request $request, $user)
    {

      

        // return date("Y-m-d H:i:s");

        // $user->last_connection = date("Y-m-d H:i:s");
        // $user->save();
        
        // return redirect($this->redirectTo);
    }

    public function adminLogout()
    {

        $this->guard('admin')->logout();
        return redirect()->route('admin-login');

    }
}

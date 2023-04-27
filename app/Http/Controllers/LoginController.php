<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
            $request->session()->regenerate();
            return redirect()->intended('/login');
        }

        return redirect()->back()->with(['error'=>'Username atau password salah']);
    }

    public function authenticated(Request $request, $user)
        {
            if ($user->hasRole('admin')) {
                return redirect()->route('admin');
            }

            return redirect()->route('user.page');
        }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}

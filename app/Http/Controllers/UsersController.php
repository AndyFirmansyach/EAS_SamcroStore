<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function regist()
    {
        return view('admin.regist');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postLogin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/menu');
        } else {
            return redirect()->back();
        };
    }

    public function postRegist(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4|confirmed'
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->level = 'admin';
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        $user->save();

        // auth()->user()->level == "admin";

        return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}

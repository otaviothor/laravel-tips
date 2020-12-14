<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function dashboard()
    {
        if (Auth::check() === true) {
            return view('admin.dashboard');
        }

        return redirect()->route('admin.login');
    }

    public function showLoginForm()
    {
        return view('admin.formLogin');
    }

    public function login(Request $request)
    {

        if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
//            return redirect()->back()->withInput()->withErrors(['O e-mail informado não é válido!']);
            $login['success'] = false;
            $login['message'] = 'O e-mail informado não é válido!';
            echo json_encode($login);
            return;
        }

        $credentials = [
            "email" => $request->email,
            "password" => $request->password
        ];

        if (Auth::attempt($credentials)) {
//            return redirect()->route('admin');
            $login['success'] = true;
            echo json_encode($login);
            return;
        }

//        return redirect()->back()->withInput()->withErrors(['Os dados informados não conferem!']);
        $login['success'] = false;
        $login['message'] = 'Os dados informados não conferem!';
        echo json_encode($login);
        return;
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin');
    }
}

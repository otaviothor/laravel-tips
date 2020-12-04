<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function listUser()
    {
//        $user = new User();
//        $user->name = "Otávio Silva";
//        $user->email = "otavio@gmail.com";
//        $user->password = Hash::make("123");
//        $user->save();
//        echo "<h1>Listagem de usuário</h1>";

        $user = User::where('id', 1)->first();
        return view("listUser", [
            "user" => $user
        ]);
    }
}

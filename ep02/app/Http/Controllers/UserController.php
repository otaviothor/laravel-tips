<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function listUser()
    {
        $user = User::where('id', 1)->first();
        return view("listUser", [
            "user" => $user
        ]);
    }
    public function createUser()
    {
       $user = new User();
       $user->name = "Otávio";
       $user->email = "otavio9@gmail.com";
       $user->password = Hash::make("12345");
       $user->save();

    }
}

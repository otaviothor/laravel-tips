<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function session()
    {
        echo 'tudo ok <br><br>';

        session(['name' => 'Otávio']);
        echo session('name') . '<br>';

        session()->put('lastname', 'Silva');
        echo session()->get('lastname') . '<br>';

        Session::put('username', 'null');
        echo Session::get('username') . '<br>';

        Session::put([
            'cart_product' => '1',
            'cart_quantity' => '2',
            'price' => 199
        ]);

        Session::forget([
            'cart_quantity',
            'price'
        ]);

        if (Session::has('username')) {
            echo "<p>o username informado é válido!<p>";
        } else {
            echo "<p>o username informado é inválido!<p>";
        }

        if (Session::exists('username')) {
            echo "<p>o username existe!<p>";
        } else {
            echo "<p>o username não existe!<p>";
        }

        // Session::flash('message', 'algo foi criado com sucesso');
        echo Session::get('message') . '<br>';

        dump(Session::all(), session()->all());
    }
}

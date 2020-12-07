<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use function Sodium\add;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where('id', $id)->first();

        if ($user) {
            echo "
                <h1>Dados do usuário</h1>
                <p>Nome: {$user->name}</p>
                <p>E-mail: {$user->email}</p>
            ";
        }

        $address = $user->address()->first();

        if ($address) {
            echo "
                <h1>Endereço</h1>
                <p>{$address->street}, {$address->number}, {$address->city}/{$address->state}</p>
            ";
        }

        $posts = $user->posts()->get();

        if ($posts) {
            echo "
                <h1>Artigos</h1>
            ";

            foreach ($posts as $post) {
                echo "
                    <h3>{$post->title}</h3>
                    <strong>{$post->subtitle}</strong>
                    <p>{$post->content}</p>
                ";
            }

        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

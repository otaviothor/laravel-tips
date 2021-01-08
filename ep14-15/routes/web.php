<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Jobs\newLaravelTips as JobsNewLaravelTips;
use App\Mail\newLaravelTips;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/envio-email', function () {

    $user = new \stdClass();
    $user->name = "Otávio Barreto";
    $user->email = "otaviosilva2632@gmail.com";
    return new newLaravelTips($user);

    /**
     * this code send email directly
     */
    // Mail::send(new newLaravelTips($user));

    /**
     * this code send email with help of queues
     */
    // Mail::queue(new newLaravelTips($user));
    JobsNewLaravelTips::dispatch($user)->delay(now()->addSeconds('15'));
});

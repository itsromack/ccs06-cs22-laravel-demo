<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetingController;
use App\Http\Controllers\ArithmeticController;
use App\Http\Controllers\Users\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/greet/{name?}', function($name = 'Angeles') {
//     return 'Welcome ' . $name . '!';
// });

// Route::get('/sample-form', function() {
//     return view('sample-form');
// });

// Route::get('/add/{a}/{b}', function($a, $b) {
//     return 'Sum is ' . ($a + $b);
// });

Route::get('/greet/{name?}', [GreetingController::class, 'greet']);
Route::get('/add/{a}/{b}', [ArithmeticController::class, 'add']);
Route::get('/whoami', [UserController::class, 'whoami']);

Route::get('/whoareyou', [UserController::class, 'whoareyou']);
Route::post('/whoami', [UserController::class, 'handleWhoami']);

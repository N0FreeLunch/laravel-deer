<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Models\Greeting;

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

Route::get('/static_call', function () {
    return 'static_call';
});

$router->get('/none_static_call', function () {
    return 'none_static_call';
});


Route::get("/welcome", [WelcomeController::class, 'index']);

Route::get("create-greeting", function () {
  $greeting = new Greeting();
  $greeting->body = "Hello, world";
  $greeting->save();
});

Route::get('about', function () {
  return view('about');
});

Route::get('about', function () {
  return view('products');
});

Route::get('services', function () {
    return view('services');
});

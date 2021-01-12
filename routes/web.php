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

Route::get('/', function () {
    return "Hello, World";
});


Route::get("/welcome", [WelcomeController::class, 'index']);

Route::get("create-greeting", function () {
  $greeting = new Greeting();
  $greeting->body = "Hello, world";
  $greeting->save();
});

<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'App\Http\Controllers\EmpleadoControlller@index')
    ->name('empleados.index');

Route::get('/{empelado}', 'App\Http\Controllers\EmpleadoControlller@show')
    ->where('user', '[0-9]+')
    ->name('empleados.show');


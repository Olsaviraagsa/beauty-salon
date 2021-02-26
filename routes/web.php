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

Route::get('/', 'UserControllers@index');
Route::get('/about', 'UserControllers@about');
Route::get('/login', 'UserControllers@login');
Route::get('/register', 'UserControllers@register');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController;

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

Route::get('/',[PageController :: class,'index'])
    -> name('index');

Route::get('/show/{id}',[PageController:: class, 'show'])
    -> name('show');

Route :: get('/create', [PageController :: class, 'create'])
    -> name('create');

Route :: post('/store', [PageController :: class, 'store'])
    -> name('store');

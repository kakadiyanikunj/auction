<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auction;

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


Route::get('/index', [auction::class, 'index']);
Route::get('/bid/{id}', [auction::class, 'bid']);
Route::get('/bidview/{id}', [auction::class, 'bidview']);
Route::get('/home', [auction::class, 'home']);
Route::get('/profile/{id}', [auction::class, 'profile']);
Route::get('/editprofile/{id}', [auction::class, 'editprofile']);
Route::get('/task/{id}', [auction::class, 'task']);
Route::get('/taskdetails/{id}', [auction::class, 'taskdetails']);
Route::get('/details/{id}', [auction::class, 'view']);
Route::get('/login/{id}', [auction::class, 'login']);
Route::post('/loginuser', [auction::class, 'storelogin']);
Route::post('/datasubmit',[auction::class,'store']);
Route::get('/companyregister/{id}', [auction::class, 'companyregister']);

<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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
    $titleLogin = DB::table('mt_system')->select('SYSTEM_VALUE')->where('SYSTEM_CD','=','TITLE_LoginForm')->first();
    $titlePage = DB::table('mt_system')->select('SYSTEM_VALUE')->where('SYSTEM_CD','=','TITLE_LoginPage')->first();
    // DD($titleLogin->first());
    return view('login',['titleLogin'=>$titleLogin->SYSTEM_VALUE,'titlePage'=>$titlePage->SYSTEM_VALUE]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

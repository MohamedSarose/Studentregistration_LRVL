<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StuRegController;

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
Route::get('/login',[StuRegController::class,'login']);
Route::get('/registration',[StuRegController::class,'registration']);
Route::get('/stu_registration',[StuRegController::class,'stu_registration'])->name('stu_registration');
Route::get('/stu_login',[StuRegController::class,'stu_login'])->name('stu_login');


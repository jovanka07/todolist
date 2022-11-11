<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CardsController;
use App\Http\Controllers\BoardListController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MemberController;

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
    return view('auth/login');
});
//Auth Login dan register
Route::get('auth', [AuthController::class ,'index']);
Route::post('auth/postlogin', [AuthController::class ,'postlogin']);
Route::get('auth/logout', [AuthController::class ,'logout']);
Route::get('auth/register', [AuthController::class ,'register']);
Route::post('auth/postRegister', [AuthController::class ,'postRegister']);

//Controler Home
Route::resource('home' , HomeController::class);
// Route::get('home/{id}' , [HomeController::class, 'index'])->name('cards.index');

//CARDS
Route::resource('cards' , CardsController::class);
Route::get('cards/show/{id}', [CardsController::class, 'show']);

//BoardList
Route::resource('boardList' , BoardListController::class);
Route::post('boardList/store' , [BoardListController::class, 'store']);
//Member
Route::post('boardMember/store/{id}', [MemberController::class, 'store'])->name('boardMember.store');
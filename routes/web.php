<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CurrencyController;
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

// Login
Route::post('login', [AuthController::class, 'login']);
Route::view('/login', [AuthController::class, 'dashboard.login']);
//Register
Route::post('register', [AuthController::class, 'register']);
Route::view('/register', [AuthController::class, 'dashboard.register']);
//Profile Edit
Route::post('/profile',  [ProfileController::class,'Profile']);
Route::get('/profile', [ProfileController::class, 'getProfileUpdate'])->middleware('auth');
//Password Update
Route::post('/security',  [ProfileController::class,'updatePassword']);
//Logout
Route::post('logout', [AuthController::class, 'logout']);
//Dashboard View
Route::get('/dashboard',function(){return view('dashboard.dashboard',['result' => true]);})->middleware('auth');
//Currencies View
Route::get('/currencies',function(){return view('dashboard.currencies',['result' => true]);} )->middleware('auth');
//Rates View
Route::view('/rates', 'dashboard.rates')->middleware('auth');
//Api save key
Route::view('/settings', 'dashboard.settings')->middleware('auth');

Route::post('/currency', [CurrencyController::class, 'currency']);
Route::get('/currencies', [CurrencyController::class, 'index']);

Route::get('/rate', [CurrencyController::class, 'rates']);








//Route::view('/security', 'dashboard.security')->middleware('auth');
//Route::view('/profile_edit', 'dashboard.profile_edit')->middleware('auth');
//Route::view('/profile_edit', 'dashboard.profile_edit')->middleware('auth');
//Route::get('/profile', [ProfileController::class, 'getPassword'])->middleware('auth');



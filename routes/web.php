<?php

use Illuminate\Support\Facades\Route;
//import atau include controller Web
use App\Http\Controllers\Web;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeController;

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
    // echo "Selamat datang di web saya";
});

// Route::get('/profil', function() {
//     echo "<h1>Nama Saya Rudy dari Kediri</h1>";
// });

Route::get('/profil/{nama}', [Web::class, 'profil']);

//route untuk ke controller web di function home
Route::get('/web', [Web::class, 'home']);

Route::get('/biodata', [Web::class, 'biodata']);

Route::get('/biodataku',[Dashboard::class, 'home']);

//menampilkan view
Route::get('/kalkulator',[KalkulatorController::class, 'home']);
//proses hitung
Route::post('/kalkulator/proses',[KalkulatorController::class, 'proses']);

// template
Route::get('/dashboard',[DashboardController::class, 'home']);
Route::get('/gallery',[DashboardController::class, 'gallery']);
Route::get('/about',[DashboardController::class, 'about']);

Route::get('/crud',[EmployeController::class, 'index']);


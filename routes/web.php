<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/coba',function(){
    return view('contact');
    
    
    // $ip_address = gethostbyname("stiki.ac.id");
    
    // return $ip_address;
});

Route::get('/about/{nomer?}',function($nomer = 'tulisan'){ 
    return view('about',['nama' => 'STIKI']);
});

// Route::prefix('admin')->get('/buku/{nomer?}', function($nomer = null){
//     return 'STIKI Perpus' . $nomer;
// });

// Route::prefix('admin')->group(function(){
    // });
    
Route::resource('buku',BukuController::class)->middleware('auth');
Route::resource('category',CategoryController::class)->middleware('auth');
Route::get('/login',[LoginController::class,'login'])
    ->name('login')
    ->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate'])->name('login');
Route::post('/logout',[LoginController::class,'logout'])
    ->name('logout')
    ->middleware('auth');

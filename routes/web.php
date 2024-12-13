<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PageController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){return view('index');})->name('index');
Route::get('/q1_products', function(){
    $cat = DB::table('categories')->select('*')->get();
    return view('q1_products', ['categories' => $cat]);})->name('q1_products');
Route::get('/q1_couriers', function(){return view('q1_couriers');})->name('q1_couriers');
Route::get('/q1_categories', function(){return view('q1_categories');})->name('q1_categories');
Route::get('/q1_users', function(){return view('q1_users');})->name('q1_users');

Route::post('/create_category', [PageController::class, 'create_category'])->name('create_category');
Route::post('/create_row', [PageController::class, 'create_row'])->name('create_row');
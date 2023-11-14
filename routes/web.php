<?php

// use App\Http\Controllers\FrontendController;
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
Route::get('/', [App\Http\Controllers\FrontendController::class, 'index']);

Route::get('/about', [App\Http\Controllers\FrontendController::class, 'about']);

Route::get('/services', [App\Http\Controllers\FrontendController::class, 'services']);

Route::get('/contact', [App\Http\Controllers\FrontendController::class, 'contact']);

Route::get('/land', [App\Http\Controllers\FrontendController::class, 'land']);

Route::get('/warehouse', [App\Http\Controllers\FrontendController::class, 'warehouse']);

Route::get('/air', [App\Http\Controllers\FrontendController::class, 'air']);

Route::get('/sea', [App\Http\Controllers\FrontendController::class, 'sea']);

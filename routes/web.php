<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChecklistsController;

use App\Http\Controllers\PagesController;

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

Route::get('/', [PagesController::class,'index']);
Route::get('/profile', [PagesController::class,'profile']);
Route::get('/login', [PagesController::class,'login']);
Route::get('/signup', [PagesController::class,'signup']);
Route::get('/adclass', [PagesController::class,'adclass']);
Route::get('/newadclass', [PagesController::class,'newadclass']);


Route::resource('checklists', ChecklistsController::class);
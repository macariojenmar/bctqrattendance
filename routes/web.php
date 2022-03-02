<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ChecklistsController;

use App\Http\Controllers\PagesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdvisoryClassController;

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
Route::get('/about', [PagesController::class,'about']);

Route::get('/login', [PagesController::class,'login']);
Route::get('/signup', [PagesController::class,'signup']);



Route::post('/auth/check', [AuthController::class,'check'])->name('auth.check');
Route::get('/login', [AuthController::class,'login']);
Route::get('/signup', [AuthController::class,'signup']);

Route::post('/auth/saveteacher', [AuthController::class,'saveteacher'])->name('auth.saveteacher');




Route::group(['middleware'=>['AuthCheck']], function(){
    
    Route::get('/adclass', [AdvisoryClassController::class,'adclass']);
    Route::get('/newadclass', [AdvisoryClassController::class,'newadclass']);
    Route::get('/showadclass', [AdvisoryClassController::class,'showadclass']);
    Route::get('/addstudent', [AdvisoryClassController::class,'addstudent']);

    Route::get('/user', [ChecklistsController::class,'user']);
    Route::get('/checklist/newchecklist', [ChecklistsController::class,'newchecklist'])->name('checklist.newchecklist');
   
    Route::get('/showchecklist/{id}', [ChecklistsController::class,'showchecklist']);
    Route::post('/checklist/savechecklist', [ChecklistsController::class,'savechecklist'])->name('checklist.savechecklist');
    
    Route::get('/checklist/deletechecklist/{id}', [ChecklistsController::class,'deletechecklist'])->name('checklist.deletechecklist');

    Route::get('/profile', [PagesController::class,'profile']);
    Route::get('/signupcode', [PagesController::class,'signupcode']);

    Route::get('/auth/signout', [AuthController::class,'signout'])->name('auth.signout');
   

});
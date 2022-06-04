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


Route::get('/learnmore', [PagesController::class,'learnmore']);

Route::get('/contactUs', [PagesController::class,'contactUs']);

Route::post('/auth/check', [AuthController::class,'check'])->name('auth.check');
Route::get('/login', [AuthController::class,'login']);
Route::get('/signup', [AuthController::class,'signup']);


Route::get('/forgot', [AuthController::class,'forgot']);

Route::get('/changepassword', [AuthController::class,'changepassword']);

Route::get('/code', [AuthController::class,'code'])->name('auth.code');

Route::post('/checkCode', [AuthController::class,'checkCode'])->name('auth.checkCode');

Route::post('/savePassword', [AuthController::class,'savePassword'])->name('auth.savePassword');

Route::get('/scanner', [PagesController::class,'scanner']);

Route::post('/', [AuthController::class,'checkForgot'])->name('auth.checkForgot');

Route::post('/saveAttendanceScanner', [PagesController::class,'saveAttendanceScanner'])->name('checklist.saveAttendanceScanner');

Route::post('/auth/saveteacher', [AuthController::class,'saveteacher'])->name('auth.saveteacher');

Route::post('/importStudent', [AdvisoryClassController::class,'importStudent'])->name('advisoryclass.importStudent');

Route::group(['middleware'=>['AuthCheck']], function(){
    
    Route::get('/adclass', [AdvisoryClassController::class,'adclass']);

    Route::post('/advisoryclass/saveAdClass', [AdvisoryClassController::class,'saveAdClass'])->name('advisoryclass.saveAdClass');

    Route::get('/newadclass', [AdvisoryClassController::class,'newadclass']);
    
    Route::get('/showadclass/{id}', [AdvisoryClassController::class,'showadclass'])->name('advisoryclass.showadclass');

    Route::post('/deleteStudentAd/{id}', [AdvisoryClassController::class,'deleteStudentAd'])->name('advisoryclass.deleteStudentAd');

    Route::put('/updateClassAd/{id}', [AdvisoryClassController::class,'updateClassAd'])->name('advisoryclass.updateClassAd');

    Route::put('/updateChecklist/{id}', [ChecklistsController::class,'updateChecklist'])->name('checklist.updateChecklist');

    Route::get('/editreport/{id}', [ChecklistsController::class,'editreport'])->name('checklist.editreport');

    Route::get('/deleteClass/{id}', [AdvisoryClassController::class,'deleteClass'])->name('advisoryclass.deleteClass');

    Route::post('/advisoryclass/savestudent/{id}', [AdvisoryClassController::class,'savestudent'])->name('advisoryclass.savestudent');

    Route::post('/clearList/{id}', [AdvisoryClassController::class,'clearList'])->name('advisoryclass.clearList');

    Route::get('/user', [ChecklistsController::class,'user'])->name('checklist.user');

    Route::get('/checklist/newchecklist', [ChecklistsController::class,'newchecklist'])->name('checklist.newchecklist');


    Route::post('/deleteStudentChk/{id}', [ChecklistsController::class,'deleteStudentChk'])->name('checklist.deleteStudentChk');


    Route::get('/absences', [ChecklistsController::class,'absences']);

    Route::get('/addstudent', [ChecklistsController::class,'addstudent'])->name('checklist.addstudent');
    Route::get('/showstudentlist/{id}', [ChecklistsController::class,'showstudentlist'])->name('checklist.showstudentlist');
    Route::post('/checklist/copyStudent', [ChecklistsController::class,'copyStudent'])->name('checklist.copyStudent');

    Route::get('/report/{id}', [ChecklistsController::class,'report'])->name('checklist.report');


    Route::get('/subjectqr/{id}', [ChecklistsController::class,'subjectqr'])->name('checklist.subjectqr');
    Route::put('/startCheckQR/{id}', [ChecklistsController::class,'startCheckQR'])->name('checklist.startCheckQR');
    Route::put('/endCheckQR/{id}', [ChecklistsController::class,'endCheckQR'])->name('checklist.endCheckQR');

    Route::get('/subjectqr/{id}', [ChecklistsController::class,'subjectqr'])->name('checklist.subjectqr');
    Route::get('/scanqr/{id}', [ChecklistsController::class,'scanqr'])->name('checklist.scanqr');
    Route::post('/saveAttendance', [ChecklistsController::class,'saveAttendance'])->name('checklist.saveAttendance');
    Route::get('/summary/{id}', [ChecklistsController::class,'summary'])->name('checklist.summary');

    Route::post('/saveUpdateAttendance/{id}', [ChecklistsController::class,'saveUpdateAttendance'])->name('checklist.saveUpdateAttendance');

    Route::get('/showchecklist/{id}', [ChecklistsController::class,'showchecklist'])->name('checklist.showchecklist');
    Route::post('/checklist/savechecklist', [ChecklistsController::class,'savechecklist'])->name('checklist.savechecklist');
    Route::get('/student/{id2}/{id}', [ChecklistsController::class,'student'])->name('checklist.student');

    Route::get('/sendEmail/{id}', [ChecklistsController::class,'sendEmail'])->name('checklist.sendEmail');

    Route::post('/reset/{id}', [ChecklistsController::class,'reset'])->name('checklist.reset');
    
    Route::get('/checklist/deletechecklist/{id}', [ChecklistsController::class,'deletechecklist'])->name('checklist.deletechecklist');

    Route::get('/signupcode', [AuthController::class,'signupcode']);
    Route::put('/generateSignupCode', [AuthController::class,'generateSignupCode'])->name('auth.generateSignupCode');

    Route::get('/auth/signout', [AuthController::class,'signout'])->name('auth.signout');

    Route::put('/saveProfile/{id}', [AuthController::class,'saveProfile'])->name('auth.saveProfile');
  

});
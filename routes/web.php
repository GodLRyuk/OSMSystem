<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserAuthentication;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AccountControler;
use App\Http\Controllers\ProgrameControler;
use App\Http\Controllers\ViewControler;


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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function () {
    return view('dashboard');
});
Route::get('registration', [AuthController::class, 'registr'])->name('registration');
Route::post('registration', [AuthController::class, 'Saveregister'])->name('saveregistration');
Route::get('login', [AuthController::class, 'Userloginpath'])->name('login');
//Route::post('image_upload', [AuthController::class, 'ImageUpload'])->name('image_upload');

Route::get('logout', [UserAuthentication::class, 'destroy'])->name('logout');
Route::match(array('GET', 'POST'),'logincontrol', [UserAuthentication::class, 'UserAuthenticate']);
Route::get('/AdminPanel/teacher_dashboard', [TeacherController::class, 'viewdashboard'])->name('teacher_dashboard');
Route::get('/AdminPanel/student_dashboard', [StudentController::class, 'viewdashboard'])->name('student_dashboard');
Route::get('/AdminPanel/settings_account', [AccountControler::class, 'control_account'])->name('settings_account');
Route::post('/AdminPanel/settings_account_edit/{id}', [AccountControler::class, 'account_edit']);
Route::post('/AdminPanel/settings_profile_edit/{id}', [AccountControler::class, 'profile_pic_edit']);
Route::match(array('GET', 'POST'),'/AdminPanel/getprograme', [ViewControler::class, 'getprograme']);



Route::get('/AdminPanel/programe_masters', [ProgrameControler::class, 'programepath'])->name('programepagepath');
Route::post('/AdminPanel/saverprograme', [ProgrameControler::class, 'Saveprograme'])->name('saverprograme');
Route::post('/AdminPanel/editprograme', [ProgrameControler::class, 'editprograme'])->name('editprograme');

Route::match(array('GET', 'POST'),'/AdminPanel/getuser', [ViewControler::class, 'getuser']);

//Route::get('/AdminPanel/getuser', [ViewControler::class, 'getuser'])->name('getuser');

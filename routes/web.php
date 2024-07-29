<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\studentController;
use App\Http\Controllers\admin\Studentattendence;
use App\Http\Controllers\admin\certificateController;
use App\Http\Controllers\admin\ebookController;
use App\Http\Controllers\attendence\attendenceController;
use App\Http\Controllers\student\studentPanelController;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\frontend\gallery;
use App\Http\Controllers\frontend\eventController;
use App\Http\Controllers\frontend\joinNowController;
use App\Http\Controllers\frontend\aboutController;
use App\Http\Controllers\frontend\coursesController;

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

Route::get('/admin', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/',[frontendController::class,'index']);

Route::get('/contact',[frontendController::class,'contact']);
Route::post('/frontend/contactSave',[frontendController::class,'contactSave']);
Route::post('/frontend/join',[joinNowController::class,'store']);
Route::get('/photos',[gallery::class,'index']);
Route::get('/videos',[gallery::class,'videoIndex']);
Route::get('/joinNow',[joinNowController::class,'index']);
Route::get('/about',[aboutController::class,'index']);
// Route::get('/admin',[adminController::class,'index']);
Route::get('/diploma',[coursesController::class,'diploma']);
Route::get('/bachelor',[coursesController::class,'bachelor']);
Route::get('/webDevelopment',[coursesController::class,'webDevelopment']);
Route::get('/Basic Course',[coursesController::class,'basic']);
Route::get('/nielit',[coursesController::class,'nielit']);
Route::get('/informal images',[gallery::class,'informalimages']);
Route::get('/formal images',[gallery::class,'formalimages']);
Route::get('/workshop images',[gallery::class,'workshopimages']);
Route::get('/infrastructure images',[gallery::class,'infraimages']);
Route::get('/Events',[eventController::class,'formal']);

// //////////// Admin Urls/////////////////////////////////////////

Route::get('/admin/index',[adminController::class,'index']);
Route::get('/admin/student',[studentController::class,'index']);
Route::get('/admin/studentform',[studentController::class,'form']);
Route::post('/admin/studentsave',[studentController::class,'save']);
Route::get('/student/edit/{id}',[studentController::class,'edit_stu']);
Route::post('/student/update/{id}',[studentController::class,'update_stu']);
Route::get('/student/delete/{id}',[studentController::class,'delete_stu']);
Route::post('/admin/student',[studentController::class,'search']);
Route::get('/admin/Contact Us',[adminController::class,'contactUs']);
Route::get('/admin/Join Us',[adminController::class,'joinUs']);
Route::get('/admin/fees',[adminController::class,'fees']);

//////////////////////// admin/certificate///////////////////////////
Route::get('/admin/certificate',[certificateController::class,'index']);
Route::get('/admin/uploadcertificate',[certificateController::class,'form']);
Route::get('/admin/ebook',[ebookController::class,'index']);
Route::get('/admin/ebookform',[ebookController::class,'form']);
Route::post('/admin/uploadebook',[ebookController::class,'upload']);
Route::post('/admin/upload',[certificateController::class,'upload']);
Route::get('/certificate/edit/{id}',[certificateController::class,'edit_certificate']);
Route::post('/certificate/update/{id}',[certificateController::class,'update_certificate']);
Route::get('/certificate/delete/{id}',[certificateController::class,'delete_certificate']);
Route::get('/ebook/edit/{id}',[ebookController::class,'edit_ebook']);
Route::post('/ebook/update/{id}',[ebookController::class,'update_ebook']);
Route::get('/ebook/delete/{id}',[ebookController::class,'delete_ebook']);

////////////////// Student Urls ////////////////////////////////////

Route::get('/student/loginform',[studentPanelController::class,'index']);
Route::post('/student/login',[studentPanelController::class,'login']);
Route::get('/student/profile',[studentPanelController::class,'profile'])->name('profile.show')->middleware('checkSession');
Route::post('/student/logout',[studentPanelController::class,'logout']);
Route::get('/student/attendance',[studentPanelController::class,'attendance']);
Route::get('/student/fees',[studentPanelController::class,'fees']);
Route::get('/student/certificate',[studentPanelController::class,'certificate']);
Route::get('/student/ebook/{id}',[studentPanelController::class,'ebook']);
Route::get('/view-pdf', [studentPanelController::class, 'viewPDF'])->name('view.pdf');


////////////////////////Attendence Urls//////////////////////////////
Route::get('/attendence',[attendenceController::class,'index']);
Route::post('/attendence/signin',[attendenceController::class,'signin']);
Route::get('/admin/attendence/',[Studentattendence::class,'index']);
Route::get('/admin/generate/attendence/',[Studentattendence::class,'generate']);
Route::post('/admin/attendence/',[Studentattendence::class,'search']);

require __DIR__.'/auth.php';

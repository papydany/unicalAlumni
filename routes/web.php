<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\NewsLetterController;
use App\Http\Controllers\DonationSetUpController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\FlutterwaveController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Artisan;
//E6BA3488F2296559039;
//#C81631
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
Route::get('/clear', function() {
   
    $exitCode = Artisan::call('optimize:clear');
   $exitCode = Artisan::call('clear-compiled');
    return '<h1>Cache facade value cleared</h1>';
});
Route::get('/', function () {
    return view('welcome');
});
require __DIR__.'/auth.php';
Route::get('giving',[FrontendController::class,'giving'])->name('giving');
Route::get('contact',[FrontendController::class,'contact'])->name('contact');
Route::get('programme',[FrontendController::class,'programme'])->name('programme');
Route::get('trustfund',[FrontendController::class,'trustfund'])->name('trustfund');
Route::get('endowmentfund',[FrontendController::class,'endowmentfund'])->name('endowmentfund');
Route::get('investment',[FrontendController::class,'investment'])->name('investment');
Route::get('board',[FrontendController::class,'board'])->name('board');
Route::get('management',[FrontendController::class,'management'])->name('management');
Route::get('community',[FrontendController::class,'community'])->name('community');
Route::get('partner',[FrontendController::class,'partner'])->name('partner');
Route::get('event',[FrontendController::class,'event'])->name('event');
Route::get('eventDetail/{id}',[FrontendController::class,'eventDetail'])->name('eventDetail');
Route::get('youth',[FrontendController::class,'youth'])->name('youth');
Route::get('volunteer',[FrontendController::class,'volunteer'])->name('volunteer');
Route::get('alumni',[FrontendController::class,'alumni'])->name('alumni');
Route::get('data_protection_policy',[FrontendController::class,'data_protection_policy'])->name('data_protection_policy');
Route::get('privacy_policy',[FrontendController::class,'privacy_policy'])->name('privacy_policy');
Route::get('/dashboard',[DashboardController::class,'index'])->middleware(['auth'])->name('dashboard');

Route::get('verify/{token}',[GeneralController::class,'verify']);
Route::get('getLGA/{id}',[GeneralController::class,'getLGA']);
Route::get('getDonationSetup/{id}',[GeneralController::class,'getDonationSetup']);
Route::get('createAlumni',[GeneralController::class,'createAlumni'])->name('createAlumni');
Route::post('storeAlumni',[GeneralController::class,'storeAlumni'])->name('storeAlumni');
Route::get('success',[GeneralController::class,'success']);
Route::get('/updateProfile/{token}',[GeneralController::class,'updateProfile']);
Route::post('/updateProfile/{id}',[GeneralController::class,'updatePostProfile']);
//----------------------------alumni route--------------------//
Route::get('allAlumni',[AlumniController::class,'index'])->middleware(['auth'])->name('allAlumni');
Route::get('detailAlumni/{id}',[AlumniController::class,'detail'])->middleware(['auth'])->name('detailAlumni');
Route::get('editAlumni/{id}',[AlumniController::class,'edit'])->middleware(['auth'])->name('editAlumni');
Route::get('deleteAlumni',[AlumniController::class,'delete'])->middleware(['auth'])->name('deleteAlumni');
Route::post('updateAlumni/{id}',[AlumniController::class,'update'])->middleware(['auth'])->name('updateAlumni');
Route::get('addAlumni',[AlumniController::class,'add'])->middleware(['auth'])->name('addAlumni');
//Route::post('storeAlumni1',[AlumniController::class,'store'])->middleware(['auth'])->name('storeAlumni1');

//----------------------------newsLetter route--------------------//
Route::get('newsLetter',[NewsLetterController::class,'index'])->middleware(['auth'])->name('newsLetter');
Route::get('detailNewsLetter/{id}',[NewsLetterController::class,'detail'])->middleware(['auth'])->name('detailNewsLetter');
Route::get('editNewsLetter/{id}',[NewsLetterController::class,'edit'])->middleware(['auth'])->name('editNewsLetter');
Route::get('deleteNewsLetter',[NewsLetterController::class,'delete'])->middleware(['auth'])->name('deleteNewsLetter');
Route::post('updateNewsLetter/{id}',[NewsLetterController::class,'update'])->middleware(['auth'])->name('updateNewsLetter');
Route::get('addNewsLetter',[NewsLetterController::class,'add'])->middleware(['auth'])->name('addNewsLetter');
Route::post('addNewsLetter',[NewsLetterController::class,'store'])->middleware(['auth'])->name('storeNewsLetter');
Route::get('sendNewsLetter/{id}',[NewsLetterController::class,'send'])->middleware(['auth'])->name('sendNewsLetter');
Route::post('sendPostNewsLetter',[NewsLetterController::class,'sendPost'])->middleware(['auth'])->name('sendPostNewsLetter');

//----------------------------alumni route--------------------//
Route::get('allAlumni',[AlumniController::class,'index'])->middleware(['auth'])->name('allAlumni');
Route::get('detailAlumni/{id}',[AlumniController::class,'detail'])->middleware(['auth'])->name('detailAlumni');
Route::get('editAlumni/{id}',[AlumniController::class,'edit'])->middleware(['auth'])->name('editAlumni');
Route::get('deleteAlumni',[AlumniController::class,'delete'])->middleware(['auth'])->name('deleteAlumni');
Route::post('updateAlumni/{id}',[AlumniController::class,'update'])->middleware(['auth'])->name('updateAlumni');
Route::get('addAlumni',[AlumniController::class,'add'])->middleware(['auth'])->name('addAlumni');
//Route::post('storeAlumni',[AlumniController::class,'store'])->middleware(['auth'])->name('storeAlumni');
Route::get('donationAlumni',[AlumniController::class,'donation'])->name('donationAlumni');
Route::post('donationPostAlumni',[AlumniController::class,'postDonation'])->name('donationPostAlumni');
Route::post('getAlumniInfo',[AlumniController::class,'getAlumniInfo'])->name('getAlumniInfo');
//----------------------------donation setup route--------------------//
Route::get('donationSetUp',[DonationSetUpController::class,'index'])->middleware(['auth'])->name('donationSetUp');
Route::get('editDonationSetUp/{id}',[DonationSetUpController::class,'edit'])->middleware(['auth'])->name('editDonationSetUp');
Route::get('deleteDonationSetUp/{id}',[DonationSetUpController::class,'delete'])->middleware(['auth'])->name('deleteDonationSetUp');
Route::post('updateDonationSetUp/{id}',[DonationSetUpController::class,'update'])->middleware(['auth'])->name('updateDonationSetUp');
Route::get('addDonationSetUp',[DonationSetUpController::class,'add'])->middleware(['auth'])->name('addDonationSetUp');
Route::post('addDonationSetUp',[DonationSetUpController::class,'store'])->middleware(['auth'])->name('storeDonationSetUp');
//Route::get('sendNewsLetter/{id}',[NewsLetterController::class,'send'])->middleware(['auth'])->name('sendNewsLetter');
//Route::post('sendNewsLetter',[NewsLetterController::class,'sendPost'])->middleware(['auth'])->name('sendNewsLetter');
Route::post('/upload', [NewsLetterController::class,'upload']);
//----------------------------Event route--------------------//
Route::get('allEvent',[EventController::class,'index'])->middleware(['auth'])->name('allEvent');
Route::get('detailEvent/{id}',[EventController::class,'detail'])->middleware(['auth'])->name('detailEvent');
Route::get('editEvent/{id}',[EventController::class,'edit'])->middleware(['auth'])->name('editEvent');
Route::get('deleteEvent/{id}',[EventController::class,'delete'])->middleware(['auth'])->name('deleteEvent');
Route::post('updateEvent/{id}',[EventController::class,'update'])->middleware(['auth'])->name('updateEvent');
Route::get('addEvent',[EventController::class,'add'])->middleware(['auth'])->name('addEvent');
Route::post('addEvent',[EventController::class,'store'])->middleware(['auth'])->name('storeEvent');

//----------------------------report route--------------------//
Route::get('allReport',[ReportController::class,'index'])->middleware(['auth'])->name('allReport');
Route::get('detailReport/{id}',[ReportController::class,'detail'])->middleware(['auth'])->name('detailReport');
Route::get('editReport/{id}',[ReportController::class,'edit'])->middleware(['auth'])->name('editReport');
Route::get('deleteReport',[ReportController::class,'delete'])->middleware(['auth'])->name('deleteReport');
Route::post('updateReport/{id}',[ReportController::class,'update'])->middleware(['auth'])->name('updateReport');
Route::get('addReport',[ReportController::class,'add'])->middleware(['auth'])->name('addReport');
Route::post('addReport',[ReportController::class,'store'])->middleware(['auth'])->name('storeReport');

//------------------------------bulk import-----------------------------//
Route::get('bulkImport',[ImportController::class,'index'])->middleware(['auth'])->name('bulkImport');
Route::post('bulkImport',[ImportController::class,'importAlumni'])->middleware(['auth'])->name('bulkPostImport');
//----------------------------------payment --------------------------------------
// The route that the button calls to initialize payment
Route::post('/pay', [FlutterwaveController::class, 'initialize'])->name('pay');
// The callback url after a payment
Route::get('/rave/callback', [FlutterwaveController::class, 'callback'])->name('callback');
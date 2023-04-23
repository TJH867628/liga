<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterAdminController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\ConferencesController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\PublicationController;

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
Route::get('/',[MainPageController::class,'index']);
Route::post('/',[MainPageController::class,'button']);
Route::get('/registration',[RegistrationController::class,'index']);
Route::post('/registration',[RegistrationController::class,'store']);
Route::get('/login',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'check']);
Route::get('/homePage',[HomePageController::class,'index']);
Route::post('/homePage',[HomePageController::class,'logout']);
Route::get('/mainPage',[MainPageController::class,'index']);
Route::get('/index',[Controller::class,'index']);
Route::get('/registerAdmin',[RegisterAdminController::class,'index']);
Route::post('/registerAdmin',[RegisterAdminController::class,'store']);
Route::get('/adminHomePage',[AdminController::class,'index']);
Route::get('/superAdminHomePage',[SuperAdminController::class,'index']);
Route::get('/adminList',[SuperAdminController::class,'adminList'])->name('adminList');
Route::get('/logout',[LogoutController::class,'logout']);
Route::get('/conferencesInfo',[ConferencesController::class,'conferencesInfo']);
Route::get('/conferencesDownload',[ConferencesController::class,'conferencesDownload']);
Route::get('/faq',[FaqController::class,'index']);
Route::get('/publicationInfo',[PublicationController::class,'index']);
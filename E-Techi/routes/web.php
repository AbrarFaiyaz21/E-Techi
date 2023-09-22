<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userRegistrationController;
use App\Http\Controllers\userLoginController;
use App\Http\Controllers\adminLoginController;
use App\Http\Controllers\userDataController;
use App\Http\Controllers\adminDataController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registration',[userRegistrationController::class, 'userRegView']);
// Route::post('/registration',[userRegistrationController::class, 'addUser']);

Route::get('/login',[userLoginController::class, 'userLoginView']);

Route::get('/admin',[adminLoginController::class, 'adminLoginView']);

Route::get('/adminData',[adminDataController::class, 'adminDataView']);
Route::get('/admin/delete/{Id}',[adminDataController::class, 'delete']);

Route::get('/userData',[userDataController::class, 'userDataView']);
Route::get('/delete/{Id}',[userDataController::class, 'delete']);
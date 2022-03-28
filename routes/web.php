<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::redirect('/','login');

route::get('/home',[AdminController::class,'index']);

route::get('redirect',[HomeController::class,'redirect']);

route::get('/home',[HomeController::class,'index']);

route::get('upload',[HomeController::class,'upload']);

// Route for Excell Import
route::get('import-users',[HomeController::class,'importUsers'])->name('import');
route::post('/upload-users',[HomeController::class,'uploadUser'])->name('upload');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\test;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SHGCategoryController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/',[Controller::class,'index']);
// Route::get('/test',[test::class,'index']);
// Route::get('/shg',[SHGController::class,'index']);
// Route::get('/shg_application_bills',[SHG_application_bills_Controller::class,'index']);
// Route::get('/shg_application',[SHG_application_Controller::class,'index']);

Route::get('/shg-category', [SHGCategoryController::class, 'index'])->name('shg-category.index');
Route::get('/shg-category/create', [SHGCategoryController::class, 'create'])->name('shg-category.create');
Route::post('/shg-category', [SHGCategoryController::class, 'store'])->name('shg-category.store');

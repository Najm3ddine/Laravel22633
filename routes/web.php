<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResumeController;


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

Route::get('/page-home', [ResumeController::class, 'index']);
Route::get('/page-resume', [ResumeController::class, 'resume']);
Route::get('/page-projects', [ResumeController::class, 'projects']);
Route::get('/page-contact', [ResumeController::class, 'contact']);
Route::post('/page-contact', [ResumeController::class, 'contactForm']);

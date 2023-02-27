<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\feedbackController;
use App\Models\feedbackModel;
use GuzzleHttp\Psr7\Request;

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

Route::get('/',[HomeController::class ,'index'])->name('home.index');
Route::get('/sendFeedback',[HomeController::class ,'sendFeedback'])->name('home.sendFeedback');
Route::get('/feedback',[feedbackController::class ,'feedback'])->name('home.feedback');
Route::post('/sendFeedback',[feedbackController::class,'store']);
// Route::delete('/feedback/{feedback}',[feedbackController::class, 'destroy']);
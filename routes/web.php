<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Quizz;

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

Route::controller(Quizz::class)->group(function(){
    Route::get("/", "index");
});
Route::get('/scores',function(){
     return view('quizz.scores');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\GameCode;
use App\Livewire\Welcome;
use App\Livewire\AdminDashboard;
use App\Livewire\CreateQuiz;
use App\Livewire\AddCategory;

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

Route::get('/', GameCode::class);
Route::get('/welcome', Welcome::class);
Route::get('/admin', AdminDashboard::class);
Route::get('/admin/create-quiz', CreateQuiz::class);
Route::get('/admin/create-quiz/add-category', AddCategory::class);    

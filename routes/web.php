<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

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

Route::get('/', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('/download-cv', [PortfolioController::class, 'downloadCV'])->name('portfolio.download-cv');
Route::post('/contact', [PortfolioController::class, 'contact'])->name('portfolio.contact');

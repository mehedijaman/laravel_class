<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\IncomeCategoryController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\ExpenseCategoryController;
use App\Http\Controllers\ReportController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function(){
    Route::get('income',[IncomeController::class,'index']);
    Route::post('income/store',[IncomeController::class,'store']);
    Route::get('income/category',[IncomeCategoryController::class,'index']);
    Route::post('income/category/store',[IncomeCategoryController::class,'store']);
    Route::get('expense',[ExpenseController::class,'index']);
    Route::get('expense/category',[ExpenseCategoryController::class,'index']);

    Route::get('report',[ReportController::class,'index']);
});




require __DIR__.'/auth.php';

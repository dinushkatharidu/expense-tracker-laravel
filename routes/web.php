<?php

use App\Http\Controllers\ExpenseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/expenses' , [ExpenseController::class, 'index']);

Route::get('/expenses/create', [ExpenseController::class, 'create']);

Route::post('/expenses', [ExpenseController::class, 'store']);

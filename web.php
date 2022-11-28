<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExpenseController;


use Illuminate\Support\Facades\Route;



// Route::get('/', [HomeController::class, 'welcome'])->name('welcome')->middleware('auth');

Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/signup', [HomeController::class, 'signup'])->name('signup');
Route::post('/signup', [UserController::class, 'signupUser'])->name('signupUser');
Route::post('/login', [UserController::class, 'loginUser'])->name('loginUser');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');


Route::get('/', [ExpenseController::class, 'index'])->name('welcome')->middleware('auth');

Route::post('/save-expense', [ExpenseController::class, 'saveExpense'])-> name('saveExpense');
Route::post('/update-expense', [ExpenseController::class, 'updateExpense'])-> name('updateExpense');

Route::get('/edit/{id}', [ExpenseController::class, 'edit']);
Route::get('/delete/{id}', [ExpenseController::class, 'delete']);







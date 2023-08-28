<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::match(['get', 'post'], 'login', [EmployeeController::class, 'loginProcess'])->name('login.process');
Route::get( 'dashboard-page', [EmployeeController::class, 'dashboardPage'])->name('dashboard.home');

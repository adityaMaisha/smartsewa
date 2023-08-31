<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RolesPrivilegesController;

Route::match(['get', 'post'], 'login', [EmployeeController::class, 'loginProcess'])->name('login.process');

Route::middleware(['loginAuth'])->group(function () {

    /* =====[ Dashboard ]===== */
    Route::get('dashboard-page', [EmployeeController::class, 'dashboardPage'])->name('dashboard.home');

    /* =====[ Department and Privileges ]===== */
    Route::get('department-list', [RolesPrivilegesController::class, 'rolesList'])->name('list.roles');
    Route::match(['get', 'post'], 'department-new', [RolesPrivilegesController::class, 'rolesNew'])->name('new.roles');
    Route::match(['get', 'post'], 'department-edit/{id}', [RolesPrivilegesController::class, 'rolesEdit'])->name('edit.roles');
    Route::match(['get', 'post'], 'department-remove/{id}', [RolesPrivilegesController::class, 'rolesRemove'])->name('remove.roles');
    Route::match(['get', 'post'], 'privileges/{id}', [RolesPrivilegesController::class, 'privilegesList'])->name('privileges');

});


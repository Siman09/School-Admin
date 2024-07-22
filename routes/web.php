<?php

use App\Http\Controllers\AcademicYearController;
use App\Http\Controllers\AdminController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => 'admin.guest'], function () {
        Route::get('login', [AdminController::class, 'index'])->name('admin.login');
        Route::get('register', [AdminController::class, 'register'])->name('admin.register');
        Route::Post('authenticate', [AdminController::class, 'authenticate'])->name('admin.authenticate');
    });
    Route::group(['middleware' => 'admin.auth'], function () {
        Route::get('dashbord', [AdminController::class, 'dashbord'])->name('admin.dashbord');
        Route::get('form', [AdminController::class, 'form'])->name('admin.form');
        Route::get('table', [AdminController::class, 'table'])->name('admin.table');
        Route::get('logout', [AdminController::class, 'logout'])->name('admin.logout');
        Route::get('AcademicYear', [AcademicYearController::class, 'index'])->name('admin.academicyear');
        Route::post('AcademicYear', [AcademicYearController::class, 'store'])->name('admin.academicyear.store');
        Route::get('AcademicYearread', [AcademicYearController::class, 'read'])->name('admin.academicyear.read');
        Route::get('AcademicYeardelete/{id}', [AcademicYearController::class, 'delete'])->name('admin.academicyear.delete');
        Route::get('AcademicYearedit/{id}', [AcademicYearController::class, 'edit'])->name('admin.academicyear.edit');
        Route::get('AcademicYearupdate', [AcademicYearController::class, 'update'])->name('admin.academicyear.update');
    });
});

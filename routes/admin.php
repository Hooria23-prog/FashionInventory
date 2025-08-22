<?php

namespace  App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;





// Protect Products & Brands routes:
Route::middleware(['auth'])->group(function () {
    Route::resource('products', ProductController::class);
    Route::resource('brands', BrandController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('colours', ColourController::class);
    Route::resource('sizes', SizeController::class);
    Route::resource('roles', RoleController::class)->names('admin.roles');
    Route::resource('users', UserController::class)->names('admin.users');
});

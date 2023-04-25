<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Member\MemberController;
use Illuminate\Support\Facades\Route;

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

Route::get('/admin', function () {
    return view('admin.index');
})->middleware(['auth', 'role:admin'])->name('admin.index');

// Route::get('/list-of-user', function () {
//     return view('admin.user');
// })->middleware(['auth', 'role:admin'])->name('admin.user');

Route::middleware(['auth'])->name('member.')->group(function(){
    Route::get('/meal-planning', [MemberController::class, 'mealPlanning'])->name('meal');
    Route::get('/profile', [MemberController::class, 'profile'])->name('profile');
});

Route::middleware(['auth', 'role:admin'])->name('admin.')->prefix('admin')->group(function(){

    Route::get('/list-of-user', [AdminController::class, 'user'])->name('user');
    Route::get('/user/{userID}', [AdminController::class, 'show'])->name('show');
    Route::post('/register-user', [AdminController::class, 'store'])->name('store');

    // meal planning
    Route::post('/meal-planning', [AdminController::class, 'storeMeal'])->name('storeMeal');
});

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\UserController;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::get('contacts', function () {
    return view('default');
});
Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');
Route::get('users', [UserController::class, 'index'])->name('users.index');
Route::get('user-type/{type}', [UserController::class, 'specificUserType'])->name('users.type');

Route::get('get-products/{category}', [\App\Http\Controllers\ProductController::class, 'getProductsAccordingCategory'])->name('getProductsAccordingCategory');
Route::get('get-stock-details-accordingly', [\App\Http\Controllers\StockController::class, 'getDetailAccordingly'])->name('getDetailAccordingly');
Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard'); 
Route::get('task-activity-edit/{id}', [App\Http\Controllers\TaskController::class, 'edit'])->name('task-activity-edit');
Route::post('task-activity-update/{id}', [App\Http\Controllers\TaskController::class, 'update'])->name('task-activity-update');

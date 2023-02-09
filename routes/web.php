<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
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


Route::get('/dashboard', [BackendController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

//::::::::::::::::::::::::::::::::::::Category part start ::::::::::::::::::::::::::::::::::::::::
Route::get('category', [CategoryController::class, 'index']);
Route::get('category/create', [CategoryController::class, 'create']);
Route::post('category/insert', [CategoryController::class, 'insert']);
Route::get('category/edit/{category_id}', [CategoryController::class, 'edit']);
Route::post('category/update/{category_id}', [CategoryController::class, 'update']);
Route::get('category/delete/{category_id}', [CategoryController::class, 'delete']);
Route::get('category/restore/{category_id}', [CategoryController::class, 'restore']);
Route::get('category/permanent/delete/{category_id}', [CategoryController::class, 'permanent_delete']);
//:::::::::::::::::::::::::::::::::::Category part end :::::::::::::::::::::::::::::::::::::::::::::::::::::::



//::::::::::::::::::::::::::::::::::::::::::::::::::::::Product part start :::::::::::::::::::::::::::::::::::::::::::::
Route::get('product/list', [ProductController::class, 'index'])->name('product.index');
Route::get('product', [ProductController::class, 'create'])->name('product.create');
Route::post('product/store', [ProductController::class, 'store'])->name('product.store');

//::::::::::::::::::::::::::::::::::::::::::::::::::::::Product part end

//:::::::::::::User Start ::::::::::::::
Route::get('user/form', [UserController::class, "create"])->name('user.create');
Route::post('user', [UserController::class,"store"])->name('user.store');
Route::get('user', [UserController::class, 'index'])->name('user.index');
//:::::::::::::User End ::::::::::::::




//::::::::::::UserProfileController :::::::::::::::
Route::get('myProfile', [UserProfileController::class, 'index'])->name('myProfile.index');
Route::post('myProfile', [UserProfileController::class, 'store'])->name('myProfile.store');





/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); */

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

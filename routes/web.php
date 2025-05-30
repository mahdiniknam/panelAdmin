<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('panel', function () {
//     return view('panel');
// });
Route::middleware(['auth:web'])->group(function () {
    Route::get('/home', function () {
        return view('master');
    });
Route::get('/', [Controller::class, 'index'])->name('index');
Route::get('/users', [Controller::class, 'index'])->name('users');
Route::get('/create', [Controller::class, 'create'])->name('create');
Route::post('create', [Controller::class, 'store'])->name('store');
Route::delete('/users/{user}', [Controller::class, 'destroy'])->name('destroy');
Route::put('/users/{user}', [Controller::class, 'update'])->name('update');
//Route::get('/users/{user}/edit', [Controller::class, 'edit'])->name('edit');
});

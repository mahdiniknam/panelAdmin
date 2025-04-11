<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get('/', function () {
    return view('master');
});
// Route::get('panel', function () {
//     return view('panel');
// });
Route::get('/', [Controller::class, 'index'])->name('index');
Route::get('/users', [Controller::class, 'index'])->name('users');
Route::get('/create', [Controller::class, 'create'])->name('create');
Route::post('create', [Controller::class, 'store'])->name('store');

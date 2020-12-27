<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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

Route::resource('posts', PostController::class);
Route::post('/dashboard', [UserController::class, 'avatar']);

Route::get('/dashboard', function () {
    $user = auth()->user()->name;
    return view('dashboard', compact('user'));
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

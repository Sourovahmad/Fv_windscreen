<?php

use App\Http\Controllers\OrderController;
use Illuminate\Routing\RouteGroup;
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
    return view('index');
})->name('home');


Route::post('order-save', [OrderController::class, 'orderStore'])->name('order-save');

Route::middleware(['auth:sanctum'])->group( function () {

        Route::resource('orders', OrderController::class);
        Route::get('download_image/{id}', [OrderController::class, 'download'])->name('download_image');

        Route::get('/admin', function () {
            return view('admin.index');
        })->name('dashboard');




});

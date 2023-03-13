<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front;

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

Route::get('/', [Front\HomeController::class, 'index']);

Route::prefix('shop')->group(function (){

    Route::get('/product/{id}', [Front\Shopcontroller::class, 'show']);
    Route::post('/product/{id}', [Front\Shopcontroller::class, 'postComment']);

    Route::get('/', [Front\Shopcontroller::class, 'index']);

});

<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'welcome']
);



Route::get('/contact',  [\App\Http\Controllers\ContactController::class, 'contact']
);

Route::post('/contact',  [\App\Http\Controllers\ContactController::class, 'verify'])
->name('verify');



Route::get('/welcomenl', [\App\Http\Controllers\HomenlController::class, 'welcomenl']
);

Route::get('/contactnl',  [\App\Http\Controllers\ContactnlController::class, 'contact']
);

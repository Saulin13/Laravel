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

use App\Http\controllers\EventController;
use App\Http\controllers\ContactController;
use App\Http\controllers\ProductsControler;


Route::get('/', [EventController::class, 'index']);

Route::get('/eventos/criar', [EventController::class, 'criar']);

Route::post('/event', [EventController::class, 'store']);

Route::get('/contatos', [ContactController::class, 'contato']);

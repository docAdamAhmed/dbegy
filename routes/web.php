<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
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
    return view('home');
});


Route::get('/projects', function () {
    return view('projects');
});


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});



Route::get('/projects/projector', [ProjectController::class, 'projector_index']);

Route::get('/projects/led', [ProjectController::class, 'led_index']);

Route::get('/projects/gallery', [ProjectController::class, 'gallery_index']);

Route::get('/projects/products', [ProjectController::class, 'getProducts']);

Route::get('/projector-details/{Projector}', [ProjectController::class, 'show_projector']);

Route::get('/led-details/{Led}', [ProjectController::class, 'show_led']);

Route::get('/gallery-details/{Gallery}', [ProjectController::class, 'show_gallery']);
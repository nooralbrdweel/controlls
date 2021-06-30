<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get('index', function () {
    $contacts = Contact::all();
    return view('contact-list' , compact(contacts));
});

Route::get('/',  [ContactController::class , 'index'] );
Route::get('/contact',  [ContactController::class , 'contact'] );
Route::post('store',  [ContactController::class , 'store'] );


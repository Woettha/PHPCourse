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
/* Lange manier -- Meerdere opties
Route::get('/', function () {
    return view('welcome');
});
*/
Route::prefix('admin')->group(function () {
    Route::redirect('/', 'records');
    Route::get('records', 'Admin\RecordController@index'); // Looks in this file for the Arrays
});

// Route::prefix('admin')

// Korte manier
Route::view('/', 'home');
Route::view('contact-us', 'contact');
Route::view("home", "home");

// Demo - Staat niet in de cursus (laat de users zien
// Route::prefix('api', group -> function () {
//    Route::get( 'users', function (){
//        return User::get;
//    });
//});


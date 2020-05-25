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

Route::get('/', function () {

   $title = 'HOME PAGE';

    return view('welcome', compact('title'));
});


Route::get('/about', function () {

   $title = "ABOUT PAGE";
   $user = "BRYE";

   return view('about',compact('title','user'));
});

Route::get('/contact', function () {

   $names = ['brye','zoidon','andrew'];

   return view('contact',compact('names'));
});



Route::get('/services', function () {
   return view('service');
});
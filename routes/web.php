<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\peopleController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/page', function () {
//     return view('page');
// });

Route::controller(peopleController::class)->group(function(){

Route::get('/','show')->name('home');
Route::get('/user/{id}','singleUser')->name('view.user');
Route::get('/delete/{id}','singleDelete')->name('view.delete');
Route::post('/add','addUser')->name('addUser');
Route::put('/update/{id}','updateUser')->name('update.user');
Route::get('/updatepage/{id}','updatePage')->name('view.update');
Route::get('/delete','deleteUser');
Route::view('newuser', '/add');
});
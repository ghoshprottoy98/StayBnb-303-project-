<?php


use App\Http\Controllers\UserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});



Route::get('/host',[PostController:: class,'viewPage']);
Route::post('/',[PostController:: class,'store']);

Route::get('/signup',[UserController:: class,'create']);
Route::post('/signup',[UserController:: class,'store']);



Route::get('/search',[SearchController:: class,'viewPage']);





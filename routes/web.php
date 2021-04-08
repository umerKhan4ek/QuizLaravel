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


route::get('/',[App\Http\Controllers\Formcontroller::class,'showdata']);

route::get('/solve',[App\Http\Controllers\Formcontroller::class,'getall']);

route::get('/nextquestion',[App\Http\Controllers\Formcontroller::class,'nextquestion'])->name('nextquestion');
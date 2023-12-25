<?php

use Illuminate\Support\Facades\Route;

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

// localhost:8000以下のURLが何であってもapp.blade.phpを返すようする
Route::get('/{any?}', fn () => view('app'))->where('any', '.+');
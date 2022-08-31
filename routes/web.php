<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Models\Category;
use GuzzleHttp\Psr7\Request;
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
    return view('index');
});

Route::resource('/items', ItemController::class);
Route::resource('/categories', CategoryController::class);

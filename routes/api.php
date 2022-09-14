<?php

use App\Http\Controllers\ItemController;
use App\Http\Resources\ItemCollection;
use App\Http\Resources\ItemResource;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/items/search/{query}', [ItemController::class, 'search']);
Route::get('/items', function (Request $request) {
    $items = Item::latest();
    if (!is_null($request->query('k'))) {
        $items->search($request->query('k'));
    }
    return ItemResource::collection($items->paginate(10)->withQueryString());
});

<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//Route::get('/productos', [App\Http\Controllers\ProductsController::class, 'index']);
Route::resource('productos',App\Http\Controllers\ProductoController::class);
Route::resource('pedido',App\Http\Controllers\PedidoController::class);
Route::resource('detallepedido',App\Http\Controllers\DetallePedidoController::class);
Route::resource('categorias',App\Http\Controllers\CategoriaController::class);

/*Route::group(['prefix'=>'api', 'as' => "api."],function(){

    
});*/

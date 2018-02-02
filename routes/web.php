<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create.blade.php something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware'=> 'auth'], function (){
    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('/product', 'ProductController');
    Route::resource('/insumo', 'InsumoController');
    Route::resource('/vendas', 'VendaController');

    Route::get('/teste', function (){
        $produto = \App\Product::find(1);
    });

    Route::get('/selecao-item/{vendaId}', 'VendaController@selecaoItem')->name('selecao-item');

    Route::post('/itens', 'VendaController@selecaoItem')->name('item.post');

    Route::get('/selecionar/{itemId}/{vendaId}', 'VendaController@selecionarItem')->name('selecionar-item');
    Route::post('/gravar-item', 'VendaController@gravarItem')->name('gravar-item');
    Route::get('/remover-item/{itemId}/{vendaId}', 'VendaController@destruirItem')->name('destruir-item');
    Route::get('/remover-item/{vendaId}', 'VendaController@finalizar')->name('finalizar-venda');
});


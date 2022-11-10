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

Route::get('/', 'App\Http\Controllers\ApartamentoController@index');
Route::get('/apartamento', 'App\Http\Controllers\ApartamentoController@createApartamento');
Route::post('/apartamento', 'App\Http\Controllers\ApartamentoController@storeApartamento')->name('salvar_apartamento');
Route::get('/apartamento/mostrar', 'App\Http\Controllers\ApartamentoController@showApartamento')->name('mostar_apartamanto');
Route::get('/apartamento/edit', 'App\Http\Controllers\ApartamentoController@editApartamento')->name('editar_apartamento');
Route::get('/apartamento/del/{id}', 'App\Http\Controllers\ApartamentoController@destroyApartamento')->name('excluir_apartamento');


Route::get('/morador/mostrar', 'App\Http\Controllers\MoradorController@showMorador')->name('mostar_morador');




Route::get('/morador', 'App\Http\Controllers\MoradorController@createMorador');
Route::post('/morador', 'App\Http\Controllers\MoradorController@storeMorador')->name('salvar_morador');

Route::delete('/morador/del/{morador_id}', 'App\Http\Controllers\MoradorController@destroyMorador')->name('excluir_morador');

Route::get('/morador/{morador_id}/edit', 'App\Http\Controllers\MoradorController@editMorador')->name('editar_morador');

Route::post('/morador/update/{morador_id}', 'App\Http\Controllers\MoradorController@updateMorador')->name('update_morador');
Route::get('/apartamento/{apartamento_id}/edit', 'App\Http\Controllers\ApartamentoController@editApartamento')->name('editar_apartamento');
Route::post('/apartamento/update/{apartamento_id}', 'App\Http\Controllers\ApartamentoController@updateApartamento')->name('update_apartamento');
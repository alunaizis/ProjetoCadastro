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

Route::get ('/', 'App\Http\Controllers\CadastroController@welcome')->name('welcome');

Route::get ('/cadastro', 'App\Http\Controllers\CadastroController@cadastro')->name('carregarCadastro');
Route::post ('/resultadoCadastro', 'App\Http\Controllers\CadastroController@resultadoCadastro')->name('resultadoCadastro');
Route::get ('/carregarlista', 'App\Http\Controllers\CadastroController@carregarlista')->name('listaCadastro');  
Route::post ('/resultadoEdicao', 'App\Http\Controllers\CadastroController@salvarEdicao')->name('resultadoEdicao');
Route::get ('usuario/editar/{id}', 'App\Http\Controllers\CadastroController@editarUsuario')->name('editarUsuario');
Route::get ('usuario/excluirUsuario/{id}', 'App\Http\Controllers\CadastroController@excluirUsuario')->name('excluirUsuario');  

// rotas endereço
Route::get ('/novo_endereco', 'App\Http\Controllers\EnderecoController@novoEndereco')->name('novoEndereco');
Route::post ('/resultado_endereco', 'App\Http\Controllers\EnderecoController@resultadoEndereco')->name('resultadoEndereco');
Route::get ('/lista_endereco', 'App\Http\Controllers\EnderecoController@listaEndereco')->name('listaEndereco'); 
Route::post ('/edicao_endereco', 'App\Http\Controllers\EnderecoController@edicaoEndereco')->name('edicaoEndereco');
Route::get ('endereco/editarEndereco/{id}', 'App\Http\Controllers\EnderecoController@editarEndereco')->name('editarEndereco');
Route::get ('endereco/excluirEndereco/{id}', 'App\Http\Controllers\EnderecoController@excluirEndereco')->name('excluirEndereco');


Route::prefix('usuario')->group(function (){ 
    Route::get('create', 'App\Http\Controllers\NovoController@create')->name('createUsuario');
    Route::post('save', 'App\Http\Controllers\NovoController@save')->name('saveUsuario');

});


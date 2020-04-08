<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuario/cadastro', 'ClienteController@telaCadastro')
	->name('usuario_cadastro');

Route::get('/usuario/alterar/{id}', 'ClienteController@telaAlteracao')
	->name('usuario_update');
	
Route::post('/usuario/adicionar', 'ClienteController@adicionar')
	->name('usuario_add');

Route::post('/usuario/alterar/{id}', 'ClienteController@alterar')
	->name('usuario_alterar');

Route::get('/usuario/excluir/{id}', 'ClienteController@excluir')
	->name('usuario_delete');

Route::get('/usuario/listar', 'ClienteController@listar')
	->name('listar');

Route::get('/tela_login', 'AppController@tela_login')
	->name('tela_login');

Route::post('/login', 'AppController@login')
	->name('logar');

Route::get('/venda/cadastrar', 'VendaController@telaVendas')
	->name('venda_cadastro');

Route::get('/venda/listar', 'VendaController@listar')
	->name('venda_lista');

Route::post('/venda/adicionar', 'VendaController@adicionar')
	->name('venda_add');


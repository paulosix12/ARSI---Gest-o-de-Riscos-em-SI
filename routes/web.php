<?php

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
/*
|--------------------------------------------------------------------------
| Rotas Prefixadas para o home 
|--------------------------------------------------------------------------
*/
Route::prefix('Ativos')->group(function () {
    Route::post('Adicionar/Novo', 'AtivosController@Novo');
    Route::get('Adicionar',  'AtivosController@Adicionar');
    Route::get('Visualizar', 'AtivosController@Visualizar');
    Route::get('Deletar/{id}', 'AtivosController@Deletar');
    Route::get('Atualizar/{id}', 'AtivosController@Atualizar');
    Route::post('Atualizar/{id}', 'AtivosController@salvaAtualizar');
});
    

/*
|--------------------------------------------------------------------------
| Rotas Prefixadas Com Clientes
|--------------------------------------------------------------------------
*/

Route::prefix('Clientes')->group(function () {
    Route::post('Adicionar/Novo', 'ClientesController@Novo');
    Route::get('Adicionar', 'ClientesController@Adicionar');
    Route::get('Visualizar', 'ClientesController@Visualizar');
    Route::get('Deletar/{id}', 'ClientesController@Deletar');
    Route::get('Atualizar/{id}', 'ClientesController@Atualizar');
    Route::post('Atualizar/{id}', 'ClientesController@salvaAtualizar');
});

/*
|--------------------------------------------------------------------------
| Rotas Vulnerabilidades
|--------------------------------------------------------------------------
*/

Route::get('/Vulnerabilidades', 'VulnerabilidadesController@Visualizar');
Route::post('/Vulnerabilidades', 'VulnerabilidadesController@Novo');
Route::get('/Vulnerabilidades/{id}', 'VulnerabilidadesController@Deletar');

/*
|--------------------------------------------------------------------------
| Rotas Impacto
|--------------------------------------------------------------------------
*/


Route::get('/Impacto', 'ImpactoController@Visualizar');
Route::post('/Impacto', 'ImpactoController@Novo');
Route::get('/Impacto/{id}', 'ImpactoController@Deletar');

/*
|--------------------------------------------------------------------------
| Rotas Controles
|--------------------------------------------------------------------------
*/

Route::get('/Controles', 'ControlesController@Visualizar');
Route::post('/Controles', 'ControlesController@Novo');
Route::get('/Controles/{id}', 'ControlesController@Deletar');

/*
|--------------------------------------------------------------------------
| Rotas Ameaças
|--------------------------------------------------------------------------
*/

Route::get('/Ameacas', 'AmeacasController@Visualizar');
Route::post('/Ameacas', 'AmeacasController@Novo');
Route::get('/Ameacas/{id}', 'AmeacasController@Deletar');

Route::get('/Relatorios', 'RelatoriosController@Visualizar');
Route::get('/Relatorios/pdf', 'PdfController@generate_pdf');

Route::get('/', function(){
    return view ("home");
});
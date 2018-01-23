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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/teste/{nome}/{id?}', function ($nome,$id=null) { // o ponto de interrogação é a opcao de deixar o id vazio
//    
//    return "teste de URL ".$id." - ".$nome;
//})->where(['nome'=>'[A-Za-z]+','id'=>'[0-9]+']);
//
////grupos
//Route::group(['prefix'=>'painel'],function(){ // ´podera ser usado no teste
//    Route::get('/descricao',function(){
//        return 'Descricao do curso';
//    });
//    Route::get('/',function(){
//        return 'Dashboard';
//    });
//    
//});


Route::get('/','CursosController@index');
Route::get('/descricao/{id}','CursosController@descricao');
Route::get('pesquisa','CursosController@pesquisa');
Route::post('pesquisa','CursosController@pesquisa');
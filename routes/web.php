<?php

Route::get('/', function () {
   echo "<a href='" . route('empresas.index') . "'>Ir a empresas</a>";
})->name('home');

//RUTAS REST

Route::get('/empresas', 'EmpresasControllerApi@index')->name('empresas.index'); // solo para Listar

Route::get('/empresas/create', 'EmpresasController@create')->name('empresas.create');

Route::get('/empresas/{empresas}/edit', 'EmpresasController@edit')->name('empresas.edit');

Route::patch('/empresas/{empresas}', 'EmpresasControllerApi@update')->name('empresas.update');

Route::post('/empresas', 'EmpresasControllerApi@store')->name('empresas.store'); // metodo para enviar formulario crear
Route::get('/empresas/{id}', 'EmpresasControllerApi@show')->name('empresas.show'); // para mostar el detalle de la empresa
Route::delete('/empresas/{empresas}', 'EmpresasControllerApi@destroy')->name('empresas.destroy');






	


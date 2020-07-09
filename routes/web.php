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
Route::group(['middleware' => 'auth'], function() {
    Route::get('/', 'PertanyaanController@index');
    Route::get('pertanyaan', 'PertanyaanController@index');
    Route::get('pertanyaan/create', 'PertanyaanController@create');
    Route::post('pertanyaan', 'PertanyaanController@insert');
    Route::get('/pertanyaan/{id}/edit', 'PertanyaanController@edit'); // menampilkan form untuk edit item
    Route::put('/pertanyaan/{id}', 'PertanyaanController@update'); // menyimpan perubahan dari form edit
    Route::delete('/pertanyaan/{id}', 'PertanyaanController@destroy'); // menghapus data dengan id
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

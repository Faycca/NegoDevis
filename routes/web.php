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

Route::view('/', 'simulateur');
Route::view('rules', 'rules');
Route::view('negociation', 'negociation');
Route::view('vue', 'vue');
Route::view('home', 'home');
route::view('formulaire', 'formulaires/formulaire');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

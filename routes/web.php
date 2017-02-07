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

Route::get('/',  [
    'as'=>'accueil',
    'uses'=>'UserController@index'

]);

Route::get('editer/{id}', [
    'as' => 'editer',
    'uses' => 'UserController@edit'
]);

Route::post('/save/{id}', [
    'as' => 'modifier',
    'uses' => 'UserController@save'
]);

Route::get('/dashboard', [
    'as' => 'dashboard',
    'uses' => 'DashbordController@index'
]);

Route::get('/dashboard/users', [
    'as' => 'dashboard',
    'uses' => 'DashbordController@users'
]);

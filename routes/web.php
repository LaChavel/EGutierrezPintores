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

Route::get('/', 'EstructurasDeControl@welcome');


Route::post('/Pintores-Inicio','EstructurasDeControl@validar');

Route::get('/Login','EstructurasDeControl@login');

Route::get('/Diego-Velazquez',[
     'uses' => 'EstructurasDeControl@pintor1',
     'as'=> 'pintor1'
    ]);

Route::get('/Miguel-Angel',[
    'uses' => 'EstructurasDeControl@pintor2',
    'as'=> 'pintor2'
]);

Route::get('/Pablo-Picasso',[
    'uses' => 'EstructurasDeControl@pintor3',
    'as'=> 'pintor3'
]);

Route::get('/Claude-Monet',[
    'uses' => 'EstructurasDeControl@pintor4',
    'as'=> 'pintor4'
]);

<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@home')->name('home');

Route::get('/footer', function (){ return view('footer');});//deletar posteriormente

Route::redirect('linkedin', 'https://br.linkedin.com/company/agencia4wm')->name('linkedin');
Route::redirect('facebook', 'https://www.facebook.com/4wmOficial/?locale=pt_BR')->name('facebook');
Route::redirect('instagram', 'https://www.instagram.com/agencia4wm/')->name('instagram');


    
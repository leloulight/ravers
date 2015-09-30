<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@home']);

Route::get('donate',['as' => 'donate', 'uses' => 'HomeController@donate']);

Route::get('why-water',['as' => 'water', 'uses' => 'HomeController@whywater']);

Route::get('programs',['as' => 'programs', 'uses' => 'HomeController@programs']);

Route::get('dj-birthdays',['as' => 'dj', 'uses' => 'HomeController@djbirthdays']);

Route::get('about-us',['as' => 'about', 'uses' => 'HomeController@aboutus']);

Route::get('blog',['as' => 'blog', 'uses' => 'HomeController@blog']);

Route::get('posts','PostsController@index');
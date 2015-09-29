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

Route::get('/', 'HomeController@home');

Route::get('/donate','HomeController@donate');

Route::get('/why-water','HomeController@whywater');

Route::get('/why-ravers','HomeController@whyravers');

Route::get('/programs','HomeController@programs');

Route::get('/dj-birthdays','HomeController@djbirthdays');

Route::get('/about-us','HomeController@aboutus');

Route::get('/blog','HomeController@blog');

Route::get('/posts','PostsController@index');
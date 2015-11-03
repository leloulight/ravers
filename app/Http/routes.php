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
use Ravers\User;

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@home']);

Route::get('donate',['as' => 'donate', 'uses' => 'HomeController@donate']);

Route::get('prueba',['as' => 'prueba', 'uses' => 'HomeController@prueba']);

Route::post('donate',array('before' => 'csrf', function()
{

//    print_r( Input::all());
//    echo '<hr/>';

    //Stripe::setStripeKey(Config::get('services.stripe.secret'));

    $token = Input::get('stripeToken');
    $amount = Input::get('amount');
    $user = new User();
    

    try {

        $user->charge($amount,['source' => $token,]);
    } catch(Stripe_CardError $e){
        dd($e);
    }

//    dd($user);

//    Auth::user()->subscription('monthly')->create($token);

//    return 'Done';
    $title = 'Donate';
    $message = 'Transaccion Realizada';

    return View::make('donate',['title' => $title,'message' => $message]);
}));


Route::get('why-water',['as' => 'water', 'uses' => 'HomeController@whywater']);

Route::get('why-ravers',['as' => 'ravers', 'uses' => 'HomeController@whyravers']);

Route::get('programs',['as' => 'programs', 'uses' => 'HomeController@programs']);

Route::get('dj-birthdays',['as' => 'dj', 'uses' => 'HomeController@djbirthdays']);

Route::get('about-us',['as' => 'about', 'uses' => 'HomeController@aboutus']);

Route::get('blog',['as' => 'blog', 'uses' => 'HomeController@blog']);

Route::get('contact-us',['as' => 'contact', 'uses' => 'HomeController@contact']);

Route::get('volunteers',['as' => 'volunteers', 'uses' => 'HomeController@volunteers']);

Route::get('privacy-policy',['as' => 'policy', 'uses' => 'HomeController@policy']);

Route::get('terms-of-use',['as' => 'terms', 'uses' => 'HomeController@terms']);

Route::get('auth', ['as' => 'auth', 'uses' => 'HomeController@auth']});

Route::get('volunteers/login', 'HomeController@register');


Route::get('posts','PostsController@index');
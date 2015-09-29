<?php


namespace Ravers\Http\Controllers;

use Illuminate\Support\Facades\View;

class HomeController extends Controller
{

    public function home()
    {
        $title = "Home";
        return View::make('home',['title' => $title]);
    }

    public function whywater()
    {
        return 'why water';
        //return View::make('home');
    }

    public function whyravers()
    {
        return 'why ravers';
        //return View::make('home');
    }

    public function programs()
    {
        return 'programs';
        //return View::make('home');
    }

    public function djbirthdays()
    {
        return 'dj birthday';
        //return View::make('home');
    }

    public function aboutus()
    {
        return 'about us';
        //return View::make('home');
    }

    public function blog()
    {
        return 'blog';
        //return View::make('home');
    }
}
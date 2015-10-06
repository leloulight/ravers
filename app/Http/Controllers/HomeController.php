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
        $title = "Why Water";
        return View::make('water',['title' => $title]);
    }

    public function whyravers()
    {
        $title = "Why Ravers";
        return View::make('ravers',['title' => $title]);
    }

    public function programs()
    {
        $title = "Programs";
        return View::make('programs',['title' => $title]);
    }

    public function djbirthdays()
    {
        $title = "DJs Birthdays";
        return View::make('dj',['title' => $title]);
    }

    public function aboutus()
    {
        $title = "About Us";
        return View::make('about',['title' => $title]);
    }

    public function blog()
    {
        $title = "Blog";
        return View::make('blog',['title' => $title]);
    }

    public function contact()
    {
        $title = "Contact Us";
        return View::make('contact',['title' => $title]);
    }

    public function donate()
    {
        $title = "Donate";
        return View::make('donate',['title' => $title]);
    }
}
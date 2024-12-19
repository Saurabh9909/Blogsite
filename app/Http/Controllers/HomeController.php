<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('content.homePage');
    }
    public function aboutUsPage()
    {
        return view('content.aboutUs');
    }
    public function servicesPage()
    {
        return view('content.services');
    }
    public function blogPage()
    {
        return view('content.blog');
    } 
}

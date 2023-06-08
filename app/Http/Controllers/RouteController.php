<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function home()
    {
        return view('wix.home');
    }

    public function about()
    {
        return view('wix.about');
    }
    public function login()
    {
        return view('wix.login');
    }

    public function register()
    {
        return view('wix.register');
    }

    public function today()
    {
        return view('wix.today');
    }
}



<?php

namespace App\Http\Controllers;

class WebController extends Controller
{
    public function welcome()
    {
        return view('web.welcome'); // Points to web/welcome.blade.php
    }

    public function about()
    {
        return view('web.about'); // Points to web/welcome.blade.php
    }

    public function booking()
    {
        return view('web.booking'); // Points to web/welcome.blade.php
    }

    public function contact()
    {
        return view('web.contact'); // Points to web/welcome.blade.php
    }

    public function confirmation()
    {
        return view('web.confirmation'); // Points to web/welcome.blade.php
    }

    public function seats()
    {
        return view('web.seats'); // Points to web/welcome.blade.php
    }

    public function login()
    {
        return view('web.login'); // Points to web/welcome.blade.php
    }

    public function register()
    {
        return view('web.register'); // Points to web/welcome.blade.php
    }
}

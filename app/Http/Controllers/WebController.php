<?php

namespace App\Http\Controllers;
use App\Models\Movie;

use Illuminate\Http\Request;
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
        $movies = Movie::all(); // Fetch all movies from the database
        return view('web.booking', compact('movies')); // Pass movies to the view
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
 
    public function search(Request $request)
{
    $query = $request->input('query');
    $movies = Movie::where('title', 'LIKE', "%{$query}%")->get();
    return view('movies.search_results', compact('movies'));
}
    
}


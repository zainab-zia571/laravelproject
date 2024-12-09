<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Ticket;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function welcome()
    {
        return view('web.welcome'); // Points to web/welcome.blade.php
    }

    public function about()
    {
        return view('web.about'); // Points to web/about.blade.php
    }

    public function booking()
    {
        $movies = Movie::all(); // Fetch all movies from the database
        return view('web.booking', compact('movies')); // Pass movies to the view
    }

    public function contact()
    {
        return view('web.contact'); // Points to web/contact.blade.php
    }

    public function confirmation()
    {
        return view('web.confirmation'); // Points to web/confirmation.blade.php
    }

    public function seats(Request $request)
    {
        $movie = Movie::findOrFail($request->movie_id);

        // Ensure enough tickets are available
        if ($movie->tickets < $request->tickets) {
            return redirect()->back()->with('error', 'Not enough tickets available!');
        }

        // Store booking information
        Ticket::create([
            'movie_id' => $request->movie_id,
            'booking_date' => $request->booking_date,
            'showtime' => $request->showtime,
            'num_tickets' => $request->tickets,
        ]);

        // Deduct tickets from available count
        $movie->decrement('tickets', $request->tickets);

        return redirect()->route('confirmation')->with('success', 'Booking successful!');
    }

    public function login()
    {
        return view('web.login'); // Points to web/login.blade.php
    }

    public function register()
    {
        return view('web.register'); // Points to web/register.blade.php
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $movies = Movie::where('title', 'LIKE', "%{$query}%")
                       ->orWhereHas('category', function ($q) use ($query) {
                           $q->where('name', 'LIKE', "%{$query}%");
                       })
                       ->get();
        return view('web.search_results', compact('movies', 'query'));
    }
    
}

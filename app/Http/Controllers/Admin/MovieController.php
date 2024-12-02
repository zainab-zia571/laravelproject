<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Movie; // Import the Movie model
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::all(); // Fetch all movies
        return view('admin.movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.movies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'poster' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'showtime' => 'required',
            'screening_until' => 'required|date',
        ]);

        // Save uploaded poster
        $posterPath = $request->file('poster')->store('images', 'public');

        Movie::create([
            'title' => $request->title,
            'poster' => $posterPath,
            'showtime' => $request->showtime,
            'screening_until' => $request->screening_until,
        ]);

       
        return redirect()->route('admin.movies.index')->with('success', 'Movie added successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $movie = Movie::findOrFail($id); // Fetch the movie to edit
        return view('admin.movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $movie = Movie::findOrFail($id); // Fetch the movie to update

        $request->validate([
            'title' => 'required',
            'showtime' => 'required',
            'screening_until' => 'required|date',
        ]);

        // Update poster if a new file is uploaded
        if ($request->hasFile('poster')) {
            $posterPath = $request->file('poster')->store('images', 'public');
            $movie->poster = $posterPath;
        }

        // Update other fields
        $movie->update($request->only('title', 'showtime', 'screening_until'));

        return redirect()->route('admin.movies.index')->with('success', 'Movie updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $movie = Movie::findOrFail($id); // Fetch the movie to delete
        $movie->delete();
        return redirect()->route('admin.movies.index')->with('success', 'Movie deleted successfully!');
    }


   

}


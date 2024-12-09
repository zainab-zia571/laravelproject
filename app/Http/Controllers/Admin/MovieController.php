<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Category; // Import the Category model
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::with('category')->get(); // Eager load the related category
        return view('admin.movies.index', compact('movies'));
    }

    public function create()
    {
        $categories = Category::all(); // Fetch all categories for the dropdown
        return view('admin.movies.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'poster' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'showtimes' => 'required|string',
            'tickets' => 'required|integer|min:0',
            'screening_until' => 'required|date',
            'category_name' => 'nullable|string|max:255', // New category name (optional)
            'category_id' => 'nullable|exists:categories,id', // Existing category ID (optional)
        ]);
    
        // Check if a new category was provided and create it
        $category = null;
        if ($request->category_name) {
            $category = Category::firstOrCreate(
                ['name' => $request->category_name] // Create a new category if it doesn't exist
            );
        } elseif ($request->category_id) {
            $category = Category::find($request->category_id); // Use the selected category
        }
    
        if (!$category) {
            return redirect()->route('admin.movies.create')->with('error', 'Category is required.');
        }
    
        // Save the movie
        $posterPath = $request->file('poster')->store('images', 'public');
    
        Movie::create([
            'title' => $request->title,
            'poster' => $posterPath,
            'showtimes' => json_encode(explode(',', $request->showtimes)),
            'tickets' => $request->tickets,
            'screening_until' => $request->screening_until,
            'category_id' => $category->id, // Associate the movie with the selected or new category
        ]);
    
        return redirect()->route('admin.movies.index')->with('success', 'Movie added successfully!');
    }
    
    public function edit(string $id)
    {
        $movie = Movie::findOrFail($id);
        $categories = Category::all(); // Fetch all categories
        return view('admin.movies.edit', compact('movie', 'categories'));
    }

    public function update(Request $request, string $id)
{
    $movie = Movie::findOrFail($id);

    $request->validate([
        'title' => 'required',
        'showtimes' => 'required|string',
        'tickets' => 'required|integer|min:0',
        'screening_until' => 'required|date',
        'category_name' => 'nullable|string|max:255', // Optional new category name
        'category_id' => 'nullable|exists:categories,id', // Existing category ID
    ]);

    // Check if a new category was provided and create it
    $category = null;
    if ($request->category_name) {
        $category = Category::firstOrCreate(
            ['name' => $request->category_name] // Create a new category if it doesn't exist
        );
    } elseif ($request->category_id) {
        $category = Category::find($request->category_id); // Use the selected category
    }

    if (!$category) {
        return redirect()->route('admin.movies.edit', $movie->id)->with('error', 'Category is required.');
    }

    // Handle the movie poster update
    if ($request->hasFile('poster')) {
        $posterPath = $request->file('poster')->store('images', 'public');
        $movie->poster = $posterPath;
    }

    // Update the movie
    $movie->update([
        'title' => $request->title,
        'poster' => $posterPath ?? $movie->poster,
        'showtimes' => json_encode(explode(',', $request->showtimes)),
        'tickets' => $request->tickets,
        'screening_until' => $request->screening_until,
        'category_id' => $category->id, // Update the category
    ]);

    return redirect()->route('admin.movies.index')->with('success', 'Movie updated successfully!');
}
public function destroy(string $id)
    {
        $movie = Movie::findOrFail($id); // Find the movie by ID

        // Check if the movie has an associated poster and delete it from storage
        if ($movie->poster) {
            Storage::disk('public')->delete($movie->poster);
        }

        // Delete the movie from the database
        $movie->delete();

        return redirect()->route('admin.movies.index')->with('success', 'Movie deleted successfully!');
    }
}

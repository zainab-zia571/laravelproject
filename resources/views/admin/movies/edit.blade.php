@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="{{ asset('CSS/adminedit.css') }}">
<div class="container">
    <h2 class="my-4">Edit Movie</h2>

    <!-- Movie Edit Form -->
    <form action="{{ route('admin.movies.update', $movie->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Movie Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $movie->title }}" required>
        </div>

        <div class="mb-3">
            <label for="poster" class="form-label">Movie Poster</label>
            <input type="file" class="form-control" id="poster" name="poster">
            <img src="{{ asset('storage/images/' . $movie->poster) }}" width="100" class="mt-2">
        </div>

        <div class="mb-3">
            <label for="showtimes" class="form-label">Showtimes (comma-separated, e.g., 10:00 AM, 1:00 PM)</label>
            <input type="text" class="form-control" id="showtimes" name="showtimes" value="{{ implode(', ', json_decode($movie->showtimes, true)) }}" required>
        </div>

        <div class="mb-3">
            <label for="tickets" class="form-label">Available Tickets</label>
            <input type="number" class="form-control" id="tickets" name="tickets" min="0" value="{{ $movie->tickets }}" required>
        </div>

        <div class="mb-3">
            <label for="screening_until" class="form-label">Screening Until</label>
            <input type="date" class="form-control" id="screening_until" name="screening_until" value="{{ $movie->screening_until }}" required>
        </div>

        <div class="mb-3">
            <label for="category_id" class="form-label">Select Category</label>
            <select class="form-control" id="category_id" name="category_id">
                <option value="" disabled>Select a category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $movie->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="category_name" class="form-label">Or Add New Category</label>
            <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Enter a new category name">
        </div>

        <button type="submit" class="btn btn-primary">Update Movie</button>
    </form>

</div>
@endsection

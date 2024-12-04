@extends('layouts.admin')

@section('content')
<div class="container">
<link rel="stylesheet" href="{{ asset('CSS/admin.css') }}">

    <h2 class="my-4">Movies List</h2>

    <!-- Add New Movie Button -->
    <a href="{{ route('admin.movies.create') }}" class="btn btn-primary mb-3">Add New Movie</a>

    <!-- Movies Table -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Poster</th>
                <th>Tickets available</th>
                <th>Showtime</th>
                <th>Screening Until</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
            <tr>
                <td>{{ $movie->id }}</td>
                <td>{{ $movie->title }}</td>
                <td><img src="{{ asset('storage/' . $movie->poster) }}" width="100" height="150"></td>
                <td>{{ $movie->tickets }}</td>
                <td>{{ implode(', ', json_decode($movie->showtimes, true)) }}</td>
                <td>{{ $movie->screening_until }}</td>
                <td>{{ $movie->category ? $movie->category->name : 'No Category' }}</td>
                <td>
                    <!-- Edit Button -->
                    <a href="{{ route('admin.movies.edit', $movie->id) }}" class="btn btn-warning btn-sm">Edit</a>

                    <!-- Delete Button -->
                    <form action="{{ route('admin.movies.destroy', $movie->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection

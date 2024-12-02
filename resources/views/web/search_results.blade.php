@extends('layouts.web')

@section('content')
    <h2>Search Results</h2>
    @if($movies->isEmpty())
        <p>No movies found for your search query.</p>
    @else
        <ul>
            @foreach($movies as $movie)
                <li>{{ $movie->title }}</li>
            @endforeach
        </ul>
    @endif
@endsection

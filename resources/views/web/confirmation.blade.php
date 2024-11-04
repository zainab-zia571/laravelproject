@extends('layouts.web') 
@section('content')

<link rel="stylesheet" href="{{url('CSS/confirmation.css')}}">
<body class="text-center">

    <div class="container mt-5 info">
        <h2>Booking Confirmed!</h2>
        <p>Thank you for your booking!</p>
        <p>Your tickets have been successfully booked.</p>
        <a href="{{ route('welcome') }}" class="btn btn-primary mt-3 return">Return to Home</a>
    </div>
</div>

@endsection

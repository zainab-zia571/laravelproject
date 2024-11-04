@extends('layouts.web') 

@section('content')
<link rel="stylesheet" href="{{url('CSS/about.css')}}">

<div class="about-page">

        <h1>About Us</h1>
        <p >Welcome to FlickFix, your one-stop destination for booking movie tickets online!</p>

    <div class="about-content">
        <h2>Our Mission</h2>
        <p>
            At FlickFix, we strive to provide movie lovers with a seamless ticket booking experience. Our mission is to make moviegoing more accessible and enjoyable for everyone.
        </p>
        <h2>Who We Are</h2>
        <p>
            We are a team of passionate movie enthusiasts dedicated to helping you find the best films and book your tickets effortlessly. Whether you're looking for the latest blockbuster or an indie gem, FlickFix has you covered!
        </p>
        <h2>Contact Us</h2>
        <p>
            Have questions? Reach out to us at <a href="mailto:support@flickfix.com">support@flickfix.com</a> or follow us on our social media channels.
        </p>
    </div>
</div>
@endsection

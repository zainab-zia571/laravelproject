@extends('layouts.web') 
@section('content')

<link rel="stylesheet" href="{{url('CSS/welcome.css')}}">

<div class="full_page">

    <div class="carousel" >
        <div class="slides">
          <div class="slide">
            <img src="{{ asset('images/poster1.jpeg') }}"alt="Slide 1">
            <div class="text-overlay">
              <h1>BOOK YOUR TICKETS NOW</h1>
              <p>"Bringing the Big Screen Closer to You!"</p>
            </div>
          </div>
          <div class="slide">
            <img src="{{ asset('images/poster2.jpeg') }}" alt="Slide 2">
            <div class="text-overlay">
              <h1>BOOK YOUR TICKETS NOW</h1>
              <p>"Catch the Latest Blockbusters, One Click Away!"</p>
            </div>
          </div>
          <div class="slide">
            <img src="{{ asset('images/poster3.jpeg') }}"alt="Slide 3">
            <div class="text-overlay">
              <h1>BOOK YOUR TICKETS NOW</h1>
              <p>"From the Screen to Your Seat—Book Today!"</p>
            </div>
          </div>
        </div>
      </div>

      <div>
            <div class="video-buttons">
                <a href="{{route('booking')}}" class="btn">Now Showing</a>
                <a href="#coming_soon" class="btn">Coming Soon</a>
            </div>
      </div>

      <hr>

    <main>
        <div class="video-poster" id="coming_soon">
            <video width="100%" autoplay controls muted loop>
                <source src="{{ asset('images/video.mp4') }}" type="video/mp4">
             
            </video>
        </div>

        <hr>

       
    </main>


   
</div>
@endsection
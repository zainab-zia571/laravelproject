@extends('layouts.web') 
@section('content')

<link rel="stylesheet" href="{{url('CSS/booking.css')}}">
    <div class="full_page">


<div class="container text-center mt-5 ticket">
    <h2>Book Your Movie Tickets</h2>
    <hr>
    <div class="row">
        <!-- Movie 1 -->
        <div class="col-md-6 col-12 mb-4">
            <div class="card movie-card">
                <img src="{{ asset('images/poster1.jpeg') }}" class="card-img-top" alt="Movie 1">
                <div class="card-body">
                    <h5 class="card-title">The Dark Knight</h5>
                    <p>Showtime: 3:00 PM</p>
                    <p>Screening until: 2024-11-10</p>
                    <form action="{{route('seats')}}" method="get" class="mt-3">
                        <input type="hidden" name="movie" value="Movie 1">
                        <div class="mb-3">
                            <label for="date1" class="form-label">Select Date</label>
                            <input type="date" class="form-control" id="date1" name="date" required>
                        </div>
                        <div class="mb-3">
                            <label for="ticketCount1" class="form-label">Number of Tickets</label>
                            <select class="form-select" id="ticketCount1" name="ticketCount" required>
                                <option value="">Select Tickets</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Book Now</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Movie 2 -->
        <div class="col-md-6 col-12 mb-4">
            <div class="card movie-card">
                <img src="{{ asset('images/poster2.jpeg') }}" class="card-img-top" alt="Movie 2">
                <div class="card-body">
                    <h5 class="card-title">Pirates Of the Caribean</h5>
                    <p>Showtime: 5:00 PM</p>
                    <p>Screening until: 2024-11-15</p>
                    <form action="{{route('seats')}}" method="get" class="mt-3">
                        <input type="hidden" name="movie" value="Movie 2">
                        <div class="mb-3">
                            <label for="date2" class="form-label">Select Date</label>
                            <input type="date" class="form-control" id="date2" name="date" required>
                        </div>
                        <div class="mb-3">
                            <label for="ticketCount2" class="form-label">Number of Tickets</label>
                            <select class="form-select" id="ticketCount2" name="ticketCount" required>
                                <option value="">Select Tickets</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Book Now</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Movie 3 -->
        <div class="col-md-6 col-12 mb-4">
            <div class="card movie-card">
                <img src="{{ asset('images/poster3.jpeg') }}" class="card-img-top" alt="Movie 3">
                <div class="card-body">
                    <h5 class="card-title">Interstellar</h5>
                    <p>Showtime: 7:00 PM</p>
                    <p>Screening until: 2024-11-20</p>
                    <form action="{{route('seats')}}" method="get" class="mt-3">
                        <input type="hidden" name="movie" value="Movie 3">
                        <div class="mb-3">
                            <label for="date3" class="form-label">Select Date</label>
                            <input type="date" class="form-control" id="date3" name="date" required>
                        </div>
                        <div class="mb-3">
                            <label for="ticketCount3" class="form-label">Number of Tickets</label>
                            <select class="form-select" id="ticketCount3" name="ticketCount" required>
                                <option value="">Select Tickets</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Book Now</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Movie 4 -->
        <div class="col-md-6 col-12 mb-4">
            <div class="card movie-card">
                <img src="{{ asset('images/poster4.jpeg') }}" class="card-img-top" alt="Movie 4">
                <div class="card-body">
                    <h5 class="card-title">Harry Potter</h5>
                    <p>Showtime: 5:00 PM</p>
                    <p>Screening until: 2024-11-15</p>
                    <form action="{{route('seats')}}" method="get" class="mt-3">
                        <input type="hidden" name="movie" value="Movie 4">
                        <div class="mb-3">
                            <label for="date2" class="form-label">Select Date</label>
                            <input type="date" class="form-control" id="date2" name="date" required>
                        </div>
                        <div class="mb-3">
                            <label for="ticketCount2" class="form-label">Number of Tickets</label>
                            <select class="form-select" id="ticketCount2" name="ticketCount" required>
                                <option value="">Select Tickets</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Book Now</button>
                    </form>
                </div>
            </div>
        </div>


        
        <!-- Movie 5 -->
        <div class="col-md-6 col-12 mb-4">
            <div class="card movie-card">
                <img src="{{ asset('images/poster5.jpeg') }}" class="card-img-top" alt="Movie 4">
                <div class="card-body">
                    <h5 class="card-title">It Ends With Us</h5>
                    <p>Showtime: 5:00 PM</p>
                    <p>Screening until: 2024-11-15</p>
                    <form action="{{route('seats')}}" method="get" class="mt-3">
                        <input type="hidden" name="movie" value="Movie 4">
                        <div class="mb-3">
                            <label for="date2" class="form-label">Select Date</label>
                            <input type="date" class="form-control" id="date2" name="date" required>
                        </div>
                        <div class="mb-3">
                            <label for="ticketCount2" class="form-label">Number of Tickets</label>
                            <select class="form-select" id="ticketCount2" name="ticketCount" required>
                                <option value="">Select Tickets</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Book Now</button>
                    </form>
                </div>
            </div>
        </div>

        
        <!-- Movie 6 -->
        <div class="col-md-6 col-12 mb-4">
            <div class="card movie-card">
                <img src="{{ asset('images/poster6.jpeg') }}" class="card-img-top" alt="Movie 4">
                <div class="card-body">
                    <h5 class="card-title">Insidious</h5>
                    <p>Showtime: 5:00 PM</p>
                    <p>Screening until: 2024-11-15</p>
                    <form action="{{route('seats')}}" method="get" class="mt-3">
                        <input type="hidden" name="movie" value="Movie 4">
                        <div class="mb-3">
                            <label for="date2" class="form-label">Select Date</label>
                            <input type="date" class="form-control" id="date2" name="date" required>
                        </div>
                        <div class="mb-3">
                            <label for="ticketCount2" class="form-label">Number of Tickets</label>
                            <select class="form-select" id="ticketCount2" name="ticketCount" required>
                                <option value="">Select Tickets</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary" >Book Now</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Add more movie cards as needed -->
         
    </div>
</div>

</div>

@endsection


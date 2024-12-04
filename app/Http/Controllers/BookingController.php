<?php
namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function storeBooking(Request $request)
    {
        // Retrieve session data
        $movie_id = session('movie_id');
        $booking_date = session('booking_date');
        $showtime = session('showtime');
        $tickets = session('tickets');
        $seats = $request->seats;  // Seats from the request
        $name = $request->name;
        $phone = $request->phone;
        $address = $request->address;
        $payment = $request->payment;

        // Store the booking details in the database
        Booking::create([
            'movie_id' => $movie_id,  // Store the selected movie ID from the session
            'booking_date' => $booking_date,  // Store the selected booking date from the session
            'showtime' => $showtime,  // Store the selected showtime from the session
            'tickets' => $tickets,  // Store the number of tickets from the session
            'seats' => json_encode($seats),  // Convert seats array to a JSON string and store it
            'name' => $name,  // Store the user's name from the form
            'phone' => $phone,  // Store the user's phone number from the form
            'address' => $address,  // Store the user's address from the form
            'payment_method' => $payment,  // Store the selected payment method from the form
        ]);

        // Optionally, redirect the user to a success page or show a confirmation message
        return redirect()->route('confirmation');
    }
}


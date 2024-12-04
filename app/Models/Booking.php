<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'movie_id',
        'booking_date',
        'showtime',
        'tickets',
        'seats',
        'name',
        'phone',
        'address',
        'payment_method',
    ];
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('movie_id')->constrained();  // Foreign key for the movie
            $table->date('booking_date');
            $table->string('showtime');
            $table->integer('tickets');
            $table->json('seats');  // Store selected seats as JSON
            $table->string('name');
            $table->string('phone');
            $table->string('address');
            $table->string('payment_method');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};

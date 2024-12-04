<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\Admin\MovieController;
use App\Illuminate\Http\Request;
use App\Http\Controllers\BookingController;

Route::get('/welcome', [WebController::class, 'welcome'])->name('welcome');
Route::get('/about', [WebController::class, 'about'])->name('about');
Route::get('/booking', [WebController::class, 'booking'])->name('booking');
Route::get('/seats', [WebController::class, 'seats'])->name('seats');
Route::get('/confrimation', [WebController::class, 'confirmation'])->name('confirmation');
Route::get('/login', [WebController::class, 'login'])->name('login');
Route::get('/register', [WebController::class, 'register'])->name('register');
Route::get('/booking', [App\Http\Controllers\WebController::class, 'booking'])->name('booking');



Route::prefix('admin')->name('admin.')->group(function() {
    Route::resource('movies', MovieController::class);
});

Route::post('/store-booking', [BookingController::class, 'storeBooking'])->name('booking.store');
Route::get('/confirmation', function () {
    return view('web.confirmation');
})->name('confirmation');


Route::get('/search', [WebController::class, 'search'])->name('search');
Route::get('/', function () {
    return view('web.welcome');
});

Route::get('/seats', [WebController::class, 'showSeats'])->name('seats');

Route::get('/confirmation', function () {
    return view('confirmation');
})->name('confirmation');
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/welcome', function () {
    return view('web.welcome');
})->name('welcome');


Route::get('/about', function () {
    return view('web.about');
})->name('about');





Route::get('/contact', function () {
    return view('web.contact');
})->name('contact');


Route::get('/seats', function () {
    return view('web.seats');
})->name('seats');


Route::get('/confirmation', function () {
    return view('web.confirmation');
})->name('confirmation');

require __DIR__.'/auth.php';


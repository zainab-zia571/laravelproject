<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

Route::get('/', [WebController::class, 'welcome'])->name('welcome');
Route::get('/', [WebController::class, 'about'])->name('about');
Route::get('/', [WebController::class, 'booking'])->name('booking');
Route::get('/', [WebController::class, 'seats'])->name('seats');
Route::get('/', [WebController::class, 'confirmation'])->name('confirmation');
Route::get('/', [WebController::class, 'login'])->name('login');
Route::get('/', [WebController::class, 'register'])->name('register');
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



Route::get('/booking', function () {
    return view('web.booking');
})->name('booking');


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

// Route::get('/welcome', function () {
//     return view('welcome');
// })->name('welcome');

// Route::get('/booking', function () {
//     return view('booking');
// })->name('booking');

// Route::get('/seats', function () {
//     return view('seats');
// })->name('seats');

// Route::get('/confirmation', function () {
//     return view('confirmation');
// })->name('confirmation');


// Route::get('/about', function () {
//     return view('about');
// })->name('about');

// Route::get('/contact', function () {
//     return view('contact');
// })->name('contact');

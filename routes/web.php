<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


//payment
Route::post('/payment', function (Request $request) {

    session([
        'booking' => [
            'lapangan' => $request->lapangan,
            'tanggal'  => $request->tanggal,
            'jam'      => $request->jam,
            'harga'    => $request->harga,
        ]
    ]);

    Route::get('/payment', function () {
    return view('payment.payment');
});
    return redirect('/payment');
});

Route::get('/payment-success', function () {

    // kalau session kosong, lempar balik
    if (!session()->has('booking')) {
        return redirect('/dashboard');
    }

    return view('payment.success');
});



Route::get('/register', [RegisterController::class, 'show']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    if (Auth::check()) {
        return redirect('/dashboard');
    }
    return redirect('/login');
});
Route::get('/login', fn () => view('auth.login'));
Route::get('/register', fn () => view('auth.register'));

/*
|--------------------------------------------------------------------------
| USER
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', fn () => view('dashboard.dashboard'));
Route::get('/lapangan', fn () => view('lapangan.lapangan'));
Route::get('/booking', fn () => view('booking.booking'));
Route::get('/payment', fn () => view('payment.payment'));
Route::get('/payment-success', fn () => view('payment.success'));
Route::get('/profile', fn () => view('profile.profile'));


// ADMIN
Route::middleware('auth')->group(function () {

        Route::get('/admin/users', function () {
        if (Auth::user()->email !== 'admin@gmail.com') {
            abort(403);
        }

        return view('admin.users');
    });

    Route::get('/dashboard', function () {
        return view('dashboard.dashboard');
    });

});



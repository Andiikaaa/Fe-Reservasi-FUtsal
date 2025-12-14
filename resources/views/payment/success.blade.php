@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-[70vh]">
    <div class="bg-white p-10 rounded-3xl shadow-xl text-center max-w-md animate-fade-in">

        <!-- ICON -->
        <div class="mx-auto mb-6 w-20 h-20 flex items-center justify-center rounded-full bg-green-100 text-green-600 text-4xl">
            ✔
        </div>

        <!-- TITLE -->
        <h1 class="text-3xl font-bold text-green-600 mb-2">
            Pembayaran Berhasil
        </h1>

        <p class="text-slate-500 mb-6">
            Terima kasih, pembayaran Anda telah berhasil diproses
        </p>

        <!-- DETAIL -->
        @php
    $booking = session('booking');
@endphp

<div class="bg-slate-50 rounded-xl p-5 text-left mb-6">
    <div class="flex justify-between text-slate-600 mb-2">
        <span>Lapangan</span>
        <span class="font-medium">
            Lapangan {{ $booking['lapangan'] ?? '-' }}
        </span>
    </div>

    <div class="flex justify-between text-slate-600 mb-2">
        <span>Tanggal</span>
        <span class="font-medium">
            {{ $booking['tanggal'] ?? '-' }}
        </span>
    </div>

    <div class="flex justify-between text-slate-600 mb-2">
        <span>Durasi</span>
        <span class="font-medium">1 Jam</span>
    </div>

    <hr class="my-3">

    <div class="flex justify-between text-lg font-semibold">
        <span>Total</span>
        <span class="text-green-600">
            Rp{{ number_format($booking['harga'] ?? 0, 0, ',', '.') }}
        </span>
    </div>
</div>


        <!-- ACTION -->
        <a href="/dashboard"
           class="inline-block w-full bg-green-500 hover:bg-green-600 text-white py-3 rounded-xl font-semibold transition">
            Kembali ke Dashboard
        </a>

    </div>
</div>
@endsection

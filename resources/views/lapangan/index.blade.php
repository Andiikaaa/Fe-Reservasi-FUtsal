@extends('layouts.app')

@section('content')
<!-- HEADER -->
<div class="flex justify-between items-center mb-8">
    <div>
        <h2 class="text-3xl font-bold text-slate-800">Daftar Lapangan</h2>
        <p class="text-slate-500">Pilih lapangan terbaik untuk pertandingan Anda</p>
    </div>
    <span class="px-4 py-2 bg-green-100 text-green-700 rounded-full text-sm">
        3 Lapangan Tersedia
    </span>
</div>

<!-- LIST LAPANGAN -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">

@foreach([
    ['kode'=>'A','harga'=>150000,'tipe'=>'Vinyl','status'=>'Tersedia'],
    ['kode'=>'B','harga'=>120000,'tipe'=>'Rumput Sintetis','status'=>'Tersedia'],
    ['kode'=>'C','harga'=>180000,'tipe'=>'Premium','status'=>'Full AC'],
] as $l)

<div class="bg-white rounded-2xl shadow-lg hover:-translate-y-2 hover:shadow-xl transition duration-300">

    <!-- IMAGE -->
    <div class="relative">
        <img src="https://picsum.photos/400/220?random={{ $l['kode'] }}" class="rounded-t-2xl w-full">
        <span class="absolute top-3 right-3 px-3 py-1 bg-green-500 text-white text-xs rounded-full">
            {{ $l['status'] }}
        </span>
    </div>

    <!-- CONTENT -->
    <div class="p-6">
        <h4 class="text-xl font-semibold mb-1">Lapangan {{ $l['kode'] }}</h4>
        <p class="text-sm text-gray-500 mb-3">{{ $l['tipe'] }}</p>

        <div class="flex justify-between items-center mb-4">
            <span class="text-lg font-bold text-green-600">
                Rp{{ number_format($l['harga']) }}
            </span>
            <span class="text-sm text-gray-400">/ jam</span>
        </div>

        <!-- FEATURES -->
        <ul class="text-sm text-gray-600 space-y-1 mb-5">
            <li>✔ Lampu Standar Nasional</li>
            <li>✔ Ruang Ganti</li>
            <li>✔ Area Parkir</li>
        </ul>

        <!-- BUTTON -->
        <a href="/booking"
           class="block text-center bg-primary text-white py-3 rounded-xl font-semibold hover:bg-green-600 transition">
            Pesan Sekarang
        </a>
    </div>

</div>
@endforeach

</div>
@endsection

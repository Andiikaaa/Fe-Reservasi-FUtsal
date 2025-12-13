@extends('layouts.app')

@section('content')
<!-- TITLE -->
<div class="mb-8">
    <h1 class="text-3xl font-bold text-slate-800">Pembayaran</h1>
    <p class="text-slate-500">Pilih metode pembayaran dan selesaikan transaksi</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-8">

    <!-- METODE PEMBAYARAN -->
    <div class="bg-white p-8 rounded-2xl shadow-lg animate-fade-in">
        <h3 class="text-lg font-semibold mb-6">Metode Pembayaran</h3>

        <div class="space-y-4">

            <!-- QRIS -->
            <label class="flex items-center gap-4 p-4 border rounded-xl cursor-pointer hover:border-green-500 transition">
                <input type="radio" name="payment" checked class="accent-green-500">
                <div>
                    <p class="font-semibold">QRIS</p>
                    <p class="text-sm text-gray-500">Bayar menggunakan QRIS (OVO, GoPay, Dana)</p>
                </div>
            </label>

            <!-- TRANSFER -->
            <label class="flex items-center gap-4 p-4 border rounded-xl cursor-pointer hover:border-green-500 transition">
                <input type="radio" name="payment" class="accent-green-500">
                <div>
                    <p class="font-semibold">Transfer Bank</p>
                    <p class="text-sm text-gray-500">BCA, BRI, Mandiri</p>
                </div>
            </label>

        </div>

        <a href="/payment-success"
           class="block w-full mt-6 bg-green-500 hover:bg-green-600 text-white py-3 rounded-xl font-semibold text-center transition">
            Bayar Sekarang
        </a>
    </div>

    <!-- RINGKASAN -->
    <div class="bg-white p-8 rounded-2xl shadow-lg">
        <h3 class="text-lg font-semibold mb-6">Ringkasan Pembayaran</h3>

        <div class="space-y-4 text-slate-600">
            <div class="flex justify-between">
                <span>Lapangan</span>
                <span class="font-medium">Lapangan A</span>
            </div>
            <div class="flex justify-between">
                <span>Tanggal</span>
                <span class="font-medium">15 Mei 2024</span>
            </div>
            <div class="flex justify-between">
                <span>Durasi</span>
                <span class="font-medium">1 Jam</span>
            </div>
            <hr>
            <div class="flex justify-between text-lg">
                <span class="font-semibold">Total</span>
                <span class="font-bold text-green-600">Rp150.000</span>
            </div>
        </div>

        <div class="mt-6 p-4 bg-yellow-50 border border-yellow-200 rounded-lg text-sm text-yellow-700">
            Pastikan detail booking sudah benar sebelum melakukan pembayaran.
        </div>
    </div>

</div>
@endsection

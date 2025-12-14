@extends('layouts.app')

@section('content')
<!-- TITLE -->
<div class="mb-8">
    <h1 class="text-3xl font-bold text-slate-800">Profil Saya</h1>
    <p class="text-slate-500">Informasi akun dan riwayat booking</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-8">

    <!-- PROFILE CARD -->
    <div class="bg-white p-8 rounded-2xl shadow-lg text-center animate-fade-in">
        <div class="w-24 h-24 mx-auto rounded-full bg-primary text-white flex items-center justify-center text-3xl font-bold mb-4">
            C
        </div>

        <h3 class="text-xl font-semibold text-slate-800">Clara Anderson</h3>
        <p class="text-slate-500 text-sm mb-6">Member</p>

        <div class="text-left space-y-3 text-slate-600">
            <p><span class="font-medium">Email:</span> clara.anderson@gmail.com</p>
            <p><span class="font-medium">No HP:</span> 081234567890</p>
        </div>

        <a href="#"
           class="mt-6 block bg-green-500 hover:bg-green-600 text-white py-2 rounded-xl font-semibold transition">
            Edit Profil
        </a>
    </div>

    <!-- RIWAYAT BOOKING -->
    <div class="md:col-span-2 bg-white p-8 rounded-2xl shadow-lg">
        <h3 class="text-xl font-semibold mb-6">Riwayat Booking</h3>

        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead>
                    <tr class="text-slate-500 text-sm border-b">
                        <th class="pb-3">Tanggal</th>
                        <th class="pb-3">Waktu</th>
                        <th class="pb-3">Lapangan</th>
                        <th class="pb-3">Status</th>
                    </tr>
                </thead>
                <tbody class="text-slate-700">

                    <tr class="border-b hover:bg-slate-50 transition">
                        <td class="py-3">15 Mei 2024</td>
                        <td class="py-3">18:00 - 19:00</td>
                        <td class="py-3">Lapangan A</td>
                        <td class="py-3">
                            <span class="px-3 py-1 bg-green-100 text-green-700 text-sm rounded-full">
                                Selesai
                            </span>
                        </td>
                    </tr>

                    <tr class="border-b hover:bg-slate-50 transition">
                        <td class="py-3">10 Mei 2024</td>
                        <td class="py-3">20:00 - 21:00</td>
                        <td class="py-3">Lapangan B</td>
                        <td class="py-3">
                            <span class="px-3 py-1 bg-blue-100 text-blue-700 text-sm rounded-full">
                                Terjadwal
                            </span>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection

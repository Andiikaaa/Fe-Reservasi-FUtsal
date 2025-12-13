@extends('layouts.app')

@section('content')
<!-- TITLE -->
<div class="mb-8">
    <h1 class="text-3xl font-bold text-slate-800">Admin – Data User</h1>
    <p class="text-slate-500">Manajemen data pengguna sistem</p>
</div>

<!-- STAT CARD -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
    <div class="bg-white p-6 rounded-2xl shadow">
        <p class="text-slate-500 text-sm">Total User</p>
        <h2 class="text-3xl font-bold text-green-500">120</h2>
    </div>
    <div class="bg-white p-6 rounded-2xl shadow">
        <p class="text-slate-500 text-sm">User Aktif</p>
        <h2 class="text-3xl font-bold text-blue-500">95</h2>
    </div>
    <div class="bg-white p-6 rounded-2xl shadow">
        <p class="text-slate-500 text-sm">User Baru (Bulan Ini)</p>
        <h2 class="text-3xl font-bold text-purple-500">25</h2>
    </div>
</div>

<!-- TABLE -->
<div class="bg-white rounded-2xl shadow-lg p-6 overflow-x-auto animate-fade-in">
    <table class="w-full text-left">
        <thead>
            <tr class="text-slate-500 text-sm border-b">
                <th class="pb-3">Nama</th>
                <th class="pb-3">Email</th>
                <th class="pb-3">Role</th>
                <th class="pb-3">Status</th>
                <th class="pb-3 text-center">Aksi</th>
            </tr>
        </thead>
        <tbody class="text-slate-700">

            <tr class="border-b hover:bg-slate-50 transition">
                <td class="py-3">Rizky Pratama</td>
                <td class="py-3">rizky@email.com</td>
                <td class="py-3">
                    <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm">
                        User
                    </span>
                </td>
                <td class="py-3">
                    <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-sm">
                        Aktif
                    </span>
                </td>
                <td class="py-3 text-center space-x-2">
                    <button class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded-lg text-sm hover:bg-yellow-200">
                        Edit
                    </button>
                    <button class="px-3 py-1 bg-red-100 text-red-700 rounded-lg text-sm hover:bg-red-200">
                        Hapus
                    </button>
                </td>
            </tr>

            <tr class="border-b hover:bg-slate-50 transition">
                <td class="py-3">Clara Anderson</td>
                <td class="py-3">clara@email.com</td>
                <td class="py-3">
                    <span class="px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-sm">
                        Admin
                    </span>
                </td>
                <td class="py-3">
                    <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-sm">
                        Aktif
                    </span>
                </td>
                <td class="py-3 text-center space-x-2">
                    <button class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded-lg text-sm hover:bg-yellow-200">
                        Edit
                    </button>
                    <button class="px-3 py-1 bg-red-100 text-red-700 rounded-lg text-sm hover:bg-red-200">
                        Hapus
                    </button>
                </td>
            </tr>

        </tbody>
    </table>
</div>
@endsection

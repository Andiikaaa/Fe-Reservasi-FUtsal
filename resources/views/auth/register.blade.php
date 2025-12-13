@extends('layouts.app')

@section('content')
<div class="min-h-[80vh] flex items-center justify-center">
    <div class="w-full max-w-md bg-white p-8 rounded-2xl shadow-lg animate-fade-in">

        <!-- TITLE -->
        <div class="text-center mb-6">
            <h2 class="text-2xl font-bold text-slate-800">Buat Akun Baru</h2>
            <p class="text-slate-500 text-sm">Daftar untuk mulai reservasi lapangan futsal</p>
        </div>

        <!-- FORM -->
        <div class="space-y-4">
            <input type="text" placeholder="Nama Lengkap"
                class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:outline-none focus:ring-2 focus:ring-green-500">

            <input type="email" placeholder="Email"
                class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:outline-none focus:ring-2 focus:ring-green-500">

            <input type="password" placeholder="Kata Sandi"
                class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:outline-none focus:ring-2 focus:ring-green-500">

            <input type="password" placeholder="Konfirmasi Kata Sandi"
                class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:outline-none focus:ring-2 focus:ring-green-500">

            <input type="text" placeholder="Nomor Telepon"
                class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:outline-none focus:ring-2 focus:ring-green-500">
        </div>

        <!-- CHECKBOX -->
        <div class="flex items-center mt-4 text-sm text-slate-600">
            <input type="checkbox" class="mr-2 rounded">
            <span>Saya setuju dengan <a href="#" class="text-green-600 hover:underline">syarat dan ketentuan</a></span>
        </div>

        <!-- BUTTON -->
        <a href="/login"
           class="block w-full mt-6 bg-green-500 hover:bg-green-600 text-white text-center py-3 rounded-lg font-semibold transition">
            Daftar Sekarang
        </a>

        <!-- FOOTER -->
        <p class="text-center text-sm text-slate-500 mt-4">
            Sudah punya akun?
            <a href="/login" class="text-green-600 hover:underline">Login</a>
        </p>

    </div>
</div>
@endsection

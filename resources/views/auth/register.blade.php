@extends('layouts.app')

@section('content')
<div class="min-h-[80vh] flex items-center justify-center">
    <div class="w-full max-w-md bg-white p-8 rounded-2xl shadow-lg animate-fade-in">

        <div class="text-center mb-6">
            <h2 class="text-2xl font-bold text-slate-800">Buat Akun Baru</h2>
            <p class="text-slate-500 text-sm">Daftar untuk mulai reservasi lapangan futsal</p>
        </div>

        <form action="/register" method="POST" class="space-y-4">
            @csrf

            <input type="text" name="name" placeholder="Nama Lengkap"
                class="w-full px-4 py-3 rounded-lg border border-slate-300">

            <input type="email" name="email" placeholder="Email"
                class="w-full px-4 py-3 rounded-lg border border-slate-300">

            <input type="password" name="password" placeholder="Kata Sandi"
                class="w-full px-4 py-3 rounded-lg border border-slate-300">

            <input type="password" name="password_confirmation" placeholder="Konfirmasi Kata Sandi"
                class="w-full px-4 py-3 rounded-lg border border-slate-300">

            <input type="text" placeholder="Nomor Telepon"
                class="w-full px-4 py-3 rounded-lg border border-slate-300">
            {{-- tidak disimpan ke DB --}}
            
            <div class="flex items-center text-sm text-slate-600">
                <input type="checkbox" required class="mr-2 rounded">
                <span>Saya setuju dengan syarat dan ketentuan</span>
            </div>

            <button type="submit"
                class="w-full bg-green-500 hover:bg-green-600 text-white py-3 rounded-lg font-semibold">
                Daftar Sekarang
            </button>
        </form>

        <p class="text-center text-sm text-slate-500 mt-4">
            Sudah punya akun?
            <a href="/login" class="text-green-600 hover:underline">Login</a>
        </p>

    </div>
</div>
@endsection

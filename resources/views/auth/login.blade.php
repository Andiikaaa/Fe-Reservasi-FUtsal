@php
    $disableSidebar = true;
@endphp
@extends('layouts.app')

@section('content')
<div class="min-h-[80vh] flex items-center justify-center">
    <div class="w-full max-w-md bg-white p-8 rounded-2xl shadow-lg animate-fade-in">

        <div class="text-center mb-6">
            <h2 class="text-2xl font-bold text-slate-800">Masuk Akun</h2>
            <p class="text-slate-500 text-sm">Masuk untuk mulai reservasi lapangan futsal</p>
        </div>

        @if ($errors->any())
            <div class="mb-4 text-red-600 text-sm">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="/login" method="POST" class="space-y-4">
            @csrf

            <input type="email" name="email" placeholder="Email"
                class="w-full px-4 py-3 rounded-lg border border-slate-300">

            <input type="password" name="password" placeholder="Kata Sandi"
                class="w-full px-4 py-3 rounded-lg border border-slate-300">


            <button type="submit"
                class="w-full bg-green-500 hover:bg-green-600 text-white py-3 rounded-lg font-semibold">
                Login
            </button>
        </form>

        <p class="text-center text-sm text-slate-500 mt-4">
            Belum punya akun?
            <a href="/register" class="text-green-600 hover:underline">Register</a>
        </p>

    </div>
</div>
@endsection

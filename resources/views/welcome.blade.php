@extends('layouts.app')

@section('content')
<!-- TITLE -->
<div class="mb-8">
    <h1 class="text-3xl font-bold text-slate-800">Profil Saya</h1>
    <p class="text-slate-500">Informasi akun pengguna</p>
</div>

<!-- PROFILE CARD -->
<div class="max-w-lg bg-white p-8 rounded-2xl shadow-lg animate-fade-in">

    <!-- AVATAR -->
    <div class="flex items-center gap-4 mb-6">
        <div class="w-16 h-16 rounded-full bg-primary text-white flex items-center justify-center text-2xl font-bold">
            C
        </div>
        <div>
            <h3 class="text-xl font-semibold text-slate-800">Clara</h3>
            <p class="text-sm text-slate-500">Member</p>
        </div>
    </div>

    <!-- INFO -->
    <div class="space-y-3 text-slate-600">
        <div class="flex justify-between">
            <span class="font-medium">Nama</span>
            <span>Clara</span>
        </div>
        <div class="flex justify-between">
            <span class="font-medium">Email</span>
            <span>clara@email.com</span>
        </div>
    </div>

    <!-- ACTION -->
    <a href="#"
       class="mt-6 inline-block bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded-xl font-semibold transition">
        Edit Profil
    </a>

</div>
@endsection

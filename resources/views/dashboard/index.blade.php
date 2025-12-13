@extends('layouts.app')

@section('content')
<h2 class="text-2xl font-bold mb-6">Dashboard</h2>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
    <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
        <p class="text-gray-500">Total Lapangan</p>
        <h1 class="text-4xl font-bold text-primary">5</h1>
    </div>
    <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
        <p class="text-gray-500">Booking Bulan Ini</p>
        <h1 class="text-4xl font-bold text-blue-500">35</h1>
    </div>
    <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
        <p class="text-gray-500">Pendapatan</p>
        <h1 class="text-4xl font-bold text-yellow-500">41 JT</h1>
    </div>
</div>

<div class="bg-white p-6 rounded-2xl shadow">
    <h3 class="font-semibold mb-4">Grafik Booking Bulanan</h3>
    <canvas id="bookingChart"></canvas>
</div>

<script>
new Chart(document.getElementById('bookingChart'), {
    type: 'line',
    data: {
        labels: ['Jan','Feb','Mar','Apr','Mei','Jun'],
        datasets: [{
            label: 'Booking',
            data: [10,18,25,30,35,40],
            borderColor: '#22c55e',
            backgroundColor: 'rgba(34,197,94,0.15)',
            fill: true,
            tension: 0.4
        }]
    }
});
</script>
@endsection

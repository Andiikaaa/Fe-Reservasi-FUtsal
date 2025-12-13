@extends('layouts.app')

@section('content')
<!-- TITLE -->
<div class="mb-8">
    <h1 class="text-3xl font-bold text-slate-800">Dashboard</h1>
    <p class="text-slate-500">Ringkasan aktivitas sistem reservasi futsal</p>
</div>

<!-- STAT CARDS -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">

    <!-- LAPANGAN -->
    <div class="bg-white p-6 rounded-2xl shadow hover:shadow-xl transition hover:-translate-y-1">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-slate-500">Lapangan Tersedia</p>
                <h2 class="text-4xl font-bold text-green-500 mt-1">5</h2>
            </div>
            <div class="bg-green-100 text-green-600 p-4 rounded-full text-2xl">
                ⚽
            </div>
        </div>
    </div>

    <!-- BOOKING -->
    <div class="bg-white p-6 rounded-2xl shadow hover:shadow-xl transition hover:-translate-y-1">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-slate-500">Booking Aktif</p>
                <h2 class="text-4xl font-bold text-blue-500 mt-1">2</h2>
            </div>
            <div class="bg-blue-100 text-blue-600 p-4 rounded-full text-2xl">
                📅
            </div>
        </div>
    </div>

    <!-- STATUS -->
    <div class="bg-white p-6 rounded-2xl shadow hover:shadow-xl transition hover:-translate-y-1">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-slate-500">Status Pembayaran</p>
                <h2 class="text-3xl font-bold text-green-600 mt-2">Lunas</h2>
            </div>
            <div class="bg-green-100 text-green-600 p-4 rounded-full text-2xl">
                ✔
            </div>
        </div>
    </div>

</div>

<!-- CHART -->
<div class="bg-white p-6 rounded-2xl shadow">
    <h3 class="text-lg font-semibold mb-4">Grafik Booking Bulanan</h3>
    <canvas id="bookingChart"></canvas>
</div>

<script>
new Chart(document.getElementById('bookingChart'), {
    type: 'line',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'],
        datasets: [{
            label: 'Jumlah Booking',
            data: [5, 10, 18, 25, 30, 35],
            borderColor: '#22c55e',
            backgroundColor: 'rgba(34,197,94,0.15)',
            fill: true,
            tension: 0.4
        }]
    },
    options: {
        plugins: {
            legend: { display: false }
        }
    }
});
</script>
@endsection

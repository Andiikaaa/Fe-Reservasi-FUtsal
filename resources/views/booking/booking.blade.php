@extends('layouts.app')

@section('content')
<div class="mb-8">
    <h1 class="text-3xl font-bold text-slate-800">Booking Lapangan</h1>
    <p class="text-slate-500">Pilih lapangan dan jadwal bermain Anda</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-8">

    <!-- FORM -->
    <form action="/payment" method="POST" class="space-y-5">
    @csrf

    <div>
        <label>Lapangan</label>
        <select name="lapangan" id="lapangan"
            class="w-full px-4 py-3 rounded-lg border">
            <option value="A" data-harga="150000">Lapangan A</option>
            <option value="B" data-harga="120000">Lapangan B</option>
            <option value="C" data-harga="180000">Lapangan C</option>
        </select>
    </div>

    <div>
        <label>Tanggal</label>
        <input name="tanggal" id="tanggal" type="date"
            class="w-full px-4 py-3 rounded-lg border">
    </div>

    <div>
        <label>Jam</label>
        <input name="jam" id="jam" type="time"
            class="w-full px-4 py-3 rounded-lg border">
    </div>

    <input type="hidden" name="harga" id="harga">

    <button type="submit"
        class="w-full bg-green-500 text-white py-3 rounded-lg font-semibold">
        Lanjut Pembayaran
    </button>
</form>


    <!-- RINGKASAN -->
    <div class="bg-white p-8 rounded-2xl shadow-lg">
        <h3 class="text-lg font-semibold mb-4">Ringkasan Booking</h3>

        <div class="space-y-3 text-slate-600">
            <div class="flex justify-between">
                <span>Lapangan</span>
                <span id="r-lapangan" class="font-medium">-</span>
            </div>
            <div class="flex justify-between">
                <span>Tanggal</span>
                <span id="r-tanggal" class="font-medium">-</span>
            </div>
            <div class="flex justify-between">
                <span>Jam</span>
                <span id="r-jam" class="font-medium">-</span>
            </div>
            <hr>
            <div class="flex justify-between text-lg">
                <span class="font-semibold">Total</span>
                <span id="r-total" class="font-bold text-green-600">-</span>
            </div>
        </div>

        <div class="mt-6 p-4 bg-green-50 border border-green-200 rounded-lg text-sm text-green-700">
            Pastikan data sudah benar sebelum melanjutkan pembayaran.
        </div>
    </div>

</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const lapangan = document.getElementById('lapangan');
    const hargaInput = document.getElementById('harga');

    function setHarga() {
        const selected = lapangan.options[lapangan.selectedIndex];
        hargaInput.value = selected.dataset.harga;
    }

    lapangan.addEventListener('change', setHarga);
    setHarga(); // ⬅ WAJIB (isi default)
});
</script>


<script>
const lapangan = document.getElementById('lapangan');
const tanggal = document.getElementById('tanggal');
const jam = document.getElementById('jam');

function updateRingkasan() {
    const selected = lapangan.options[lapangan.selectedIndex];
    const harga = selected.dataset.harga;
    

    document.getElementById('r-lapangan').innerText = 'Lapangan ' + selected.value;
    document.getElementById('r-tanggal').innerText = tanggal.value || '-';
    document.getElementById('r-jam').innerText = jam.value || '-';
    document.getElementById('r-total').innerText = 'Rp' + Number(harga).toLocaleString('id-ID');
}

lapangan.addEventListener('change', updateRingkasan);
tanggal.addEventListener('change', updateRingkasan);
jam.addEventListener('change', updateRingkasan);
</script>


@endsection

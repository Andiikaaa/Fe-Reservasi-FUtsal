<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Reservasi Tempat Futsal</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#22c55e'
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-slate-100">

<div class="flex min-h-screen">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-slate-900 text-slate-200 flex flex-col">
        <div class="p-6 text-2xl font-bold text-primary">
            ⚽ CourtReserve
        </div>

        <nav class="flex-1 px-4 space-y-2">
            <a href="/dashboard" class="block px-4 py-2 rounded-lg hover:bg-primary hover:text-white transition">Dashboard</a>
            <a href="/lapangan" class="block px-4 py-2 rounded-lg hover:bg-primary hover:text-white transition">Lapangan</a>
            <a href="/booking" class="block px-4 py-2 rounded-lg hover:bg-primary hover:text-white transition">Booking</a>
            <a href="/profile" class="block px-4 py-2 rounded-lg hover:bg-primary hover:text-white transition">Profil</a>
            <a href="/admin/users" class="block px-4 py-2 rounded-lg hover:bg-primary hover:text-white transition">Admin</a>
        </nav>

        <div class="p-4 border-t border-slate-700">
            <a href="/logout" class="block text-red-400 hover:text-red-500 transition">
                Logout
            </a>
        </div>
    </aside>

    <!-- MAIN -->
    <main class="flex-1 flex flex-col">
        <!-- TOPBAR -->
        <header class="bg-white shadow px-8 py-4 flex justify-between items-center">
            <h1 class="text-lg font-semibold">Sistem Reservasi Tempat Futsal</h1>
            <span class="text-sm text-gray-500">User: Clara</span>
        </header>

        <!-- CONTENT -->
        <section class="p-8 animate-fade-in">
            @yield('content')
        </section>
    </main>

</div>

<style>
@keyframes fade-in {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}
.animate-fade-in {
    animation: fade-in 0.5s ease-out;
}
</style>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Radio - Polres Malang</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-black via-gray-800 to-gray-200 text-white">

    <!-- Navbar -->
    <header class="p-5 bg-gradient-to-r from-gray-900 via-gray-700 to-gray-500 shadow-lg flex justify-between items-center">
        <h1 class="text-2xl font-bold">📡 Dashboard Admin Radio</h1>
        <a href="/radio" class="text-sm bg-gray-200 text-gray-900 px-4 py-2 rounded-lg hover:bg-white transition">⬅ Kembali</a>
    </header>

    <!-- Content -->
    <main class="p-6">
        <!-- Card Info -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            <div class="bg-white bg-opacity-10 backdrop-blur-lg p-6 rounded-xl border border-gray-600 shadow-lg">
                <h2 class="text-lg font-bold">Total Radio</h2>
                <p class="text-3xl font-extrabold mt-2 text-amber-300">24 Unit</p>
            </div>
            <div class="bg-white bg-opacity-10 backdrop-blur-lg p-6 rounded-xl border border-gray-600 shadow-lg">
                <h2 class="text-lg font-bold">Aktif</h2>
                <p class="text-3xl font-extrabold mt-2 text-green-400">20</p>
            </div>
            <div class="bg-white bg-opacity-10 backdrop-blur-lg p-6 rounded-xl border border-gray-600 shadow-lg">
                <h2 class="text-lg font-bold">Perlu Perbaikan</h2>
                <p class="text-3xl font-extrabold mt-2 text-red-400">4</p>
            </div>
        </div>

        <!-- Tabel Data -->
        <div class="bg-white bg-opacity-10 backdrop-blur-lg p-6 rounded-xl border border-gray-600 shadow-lg">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-semibold">📋 Data Radio</h2>
                <button class="bg-gradient-to-r from-gray-700 to-black px-4 py-2 rounded-lg hover:scale-105 transition">+ Tambah Data</button>
            </div>
            <table class="w-full text-left border-collapse text-gray-200">
                <thead>
                    <tr class="bg-gray-700 bg-opacity-50">
                        <th class="p-3">No</th>
                        <th class="p-3">Nama Radio</th>
                        <th class="p-3">Status</th>
                        <th class="p-3">Lokasi</th>
                        <th class="p-3">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-600">
                    <tr class="hover:bg-gray-700 hover:bg-opacity-30 transition">
                        <td class="p-3">1</td>
                        <td class="p-3">HT-Alpha</td>
                        <td class="p-3 text-green-400 font-bold">Aktif</td>
                        <td class="p-3">Unit Lalu Lintas</td>
                        <td class="p-3">
                            <button class="px-3 py-1 bg-blue-600 rounded-lg">Edit</button>
                            <button class="px-3 py-1 bg-red-600 rounded-lg">Hapus</button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-700 hover:bg-opacity-30 transition">
                        <td class="p-3">2</td>
                        <td class="p-3">HT-Bravo</td>
                        <td class="p-3 text-red-400 font-bold">Rusak</td>
                        <td class="p-3">Unit Reskrim</td>
                        <td class="p-3">
                            <button class="px-3 py-1 bg-blue-600 rounded-lg">Edit</button>
                            <button class="px-3 py-1 bg-red-600 rounded-lg">Hapus</button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-700 hover:bg-opacity-30 transition">
                        <td class="p-3">3</td>
                        <td class="p-3">HT-Charlie</td>
                        <td class="p-3 text-green-400 font-bold">Aktif</td>
                        <td class="p-3">Unit Sabhara</td>
                        <td class="p-3">
                            <button class="px-3 py-1 bg-blue-600 rounded-lg">Edit</button>
                            <button class="px-3 py-1 bg-red-600 rounded-lg">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

</body>
</html>

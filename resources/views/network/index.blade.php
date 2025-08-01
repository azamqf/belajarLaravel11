<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Network List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900 font-sans">

    <!-- Container -->
    <div class="min-h-screen flex flex-col items-center justify-center p-6">

        <!-- Card -->
        <div class="w-full max-w-5xl bg-white shadow-xl rounded-3xl overflow-hidden">

            <!-- Header -->
            <div class="bg-gradient-to-r from-black via-gray-800 to-gray-900 px-8 py-6">
                <h1 class="text-4xl font-bold text-white mb-1">📡 Daftar Jaringan</h1>
                <p class="text-sm text-gray-400">Informasi lengkap mengenai jaringan yang tersedia.</p>
            </div>

            <!-- Content -->
            <div class="p-6 overflow-x-auto">

                <table class="w-full table-auto text-sm text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-xs tracking-wider">
                            <th class="px-6 py-3">ID</th>
                            <th class="px-6 py-3">Nama Jaringan</th>
                            <th class="px-6 py-3 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-100">
                        @forelse ($networks as $network)
                            <tr class="hover:bg-gray-50 transition duration-200">
                                <td class="px-6 py-4 font-semibold text-gray-800">{{ $network->id }}</td>
                                <td class="px-6 py-4 text-gray-700">{{ $network->name }}</td>
                                <td class="px-6 py-4 text-center space-x-2">
                                    <a href="#" class="bg-black text-white text-xs px-3 py-1 rounded hover:bg-gray-800 transition">Edit</a>
                                    <a href="#" class="bg-gray-600 text-white text-xs px-3 py-1 rounded hover:bg-gray-700 transition">Hapus</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="px-6 py-4 text-center text-gray-500">Tidak ada data jaringan.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>

            <!-- Footer -->
            <div class="bg-gray-100 px-6 py-4 text-right text-xs text-gray-500 border-t">
                &copy; {{ date('Y') }} Sistem Jaringan. Dibuat dengan ❤️ di Laravel.
            </div>
        </div>
    </div>

</body>
</html>

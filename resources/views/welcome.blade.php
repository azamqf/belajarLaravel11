<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polres Malang - Beta Version</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .glass {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease-in-out;
        }
        .fade-in {
            animation: fade 1s ease-in forwards;
            opacity: 0;
        }
        @keyframes fade {
            to { opacity: 1; }
        }
    </style>
</head>
<body class="h-screen w-screen bg-cover bg-center text-white relative"
      style="background-image: url('https://images.unsplash.com/photo-1581092919535-5a31e84ba27f');">

    <!-- Overlay gradient -->
    <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/40 to-black/70"></div>

    <!-- Content -->
    <div class="relative flex flex-col justify-center items-center h-full text-center px-4 fade-in">
        <!-- Logo placeholder -->
        <div class="w-20 h-20 bg-white/20 rounded-full flex items-center justify-center mb-4">
            <span class="text-xl font-bold text-amber-400">Logo</span>
        </div>

        <h1 class="text-3xl md:text-5xl font-extrabold bg-gradient-to-r from-amber-400 to-yellow-200 text-transparent bg-clip-text">
            POLRES MALANG
        </h1>
        <p class="mt-2 text-lg md:text-xl text-gray-200">Aplikasi Manajemen Aset</p>
        <span class="text-sm text-gray-300 mt-1">Beta Version</span>

        <a href="/admin"
           class="mt-6 px-8 py-3 glass rounded-xl font-semibold text-lg hover:bg-white hover:text-black transition shadow-lg">
            Sign in
        </a>
    </div>
</body>
</html>

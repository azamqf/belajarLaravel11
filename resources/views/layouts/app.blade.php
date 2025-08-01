<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Senjata - Polres</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #1e293b, #0f172a);
            color: #e2e8f0;
            min-height: 100vh;
        }
        .navbar {
            background: #0f172a;
        }
        .card {
            border: none;
            border-radius: 15px;
        }
        .card-header {
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
        .table {
            color: #e2e8f0;
        }
        .table thead {
            background-color: #1e293b;
        }
        .btn-primary { background: #2563eb; border: none; }
        .btn-danger { background: #dc2626; border: none; }
        .btn-warning { background: #facc15; border: none; color: black; }
        footer {
            background: #0f172a;
            color: #94a3b8;
            padding: 10px 0;
            text-align: center;
            margin-top: 30px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-dark shadow">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">
                <i class="bi bi-shield-fill"></i> Polres - Aplikasi Senjata
            </a>
            <a href="/guns" class="btn btn-outline-light btn-sm">Kembali</a>
        </div>
    </nav>

    <div class="container py-4">
        @yield('content')
    </div>

    <footer>
        <small>© {{ date('Y') }} Polres | Aplikasi Senjata</small>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Polres - Website Senjata</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    
    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #0f172a;
            color: #f1f5f9;
            font-family: 'Poppins', sans-serif;
        }

        .card {
            background-color: #1e293b;
            border: none;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
        }

        .table-dark {
            background-color: #334155;
        }

        .table-hover tbody tr:hover {
            background-color: #475569;
            color: white;
        }

        .btn-primary {
            background-color: #2563eb;
            border: none;
        }

        .btn-primary:hover {
            background-color: #1d4ed8;
        }

        .btn-warning {
            background-color: #facc15;
            color: #1e293b;
        }

        .btn-danger {
            background-color: #ef4444;
            border: none;
        }

        footer {
            color: #94a3b8;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="card p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="fw-bold">📋 Daftar Senjata</h3>
                <a href="/guns/create" class="btn btn-primary">+ Tambah Senjata</a>
            </div>

            <div class="table-responsive">
                <table class="table table-hover text-white">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama Senjata</th>
                            <th>Jenis</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>AK-47</td>
                            <td>Rifle</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm">✏️ Edit</a>
                                <a href="#" class="btn btn-danger btn-sm">🗑️ Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>M4A1</td>
                            <td>Rifle</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm">✏️ Edit</a>
                                <a href="#" class="btn btn-danger btn-sm">🗑️ Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Glock 18</td>
                            <td>Pistol</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm">✏️ Edit</a>
                                <a href="#" class="btn btn-danger btn-sm">🗑️ Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mt-4">
                <a href="/" class="btn btn-outline-light">← Kembali</a>
            </div>
        </div>

        <footer class="text-center mt-5 small">
            © 2025 Polres | Website Senjata
        </footer>
    </div>
</body>
</html>

{{-- resources/views/guns/create.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Senjata</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark text-white">
    <div class="container py-5">
        <h2>Tambah Senjata</h2>
        <form>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Senjata</label>
                <input type="text" class="form-control" id="nama" placeholder="Contoh: AK-47">
            </div>
            <div class="mb-3">
                <label for="jenis" class="form-label">Jenis</label>
                <select class="form-control" id="jenis">
                    <option value="Rifle">Rifle</option>
                    <option value="Pistol">Pistol</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="/guns" class="btn btn-light">Kembali</a>
        </form>
    </div>
</body>
</html>

@extends('layouts.app')

@section('content')
    <h3 class="mb-4"><i class="bi bi-shield-fill"></i> Dashboard Admin Senjata</h3>

    <!-- Ringkasan -->
    <div class="row g-4 mb-4">
        <div class="col-md-4">
            <div class="card bg-dark text-warning shadow-lg p-3 text-center">
                <h6>Total Senjata</h6>
                <h2 class="fw-bold">24 Unit</h2>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-dark text-success shadow-lg p-3 text-center">
                <h6>Aktif</h6>
                <h2 class="fw-bold">20</h2>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-dark text-danger shadow-lg p-3 text-center">
                <h6>Perlu Perbaikan</h6>
                <h2 class="fw-bold">4</h2>
            </div>
        </div>
    </div>

    <!-- Tabel Data -->
    <div class="card shadow-lg">
        <div class="card-header bg-dark d-flex justify-content-between align-items-center">
            <h5 class="mb-0"><i class="bi bi-list-ul"></i> Data Senjata</h5>
            <a href="/guns/create" class="btn btn-sm btn-primary"><i class="bi bi-plus-circle"></i> Tambah Data</a>
        </div>
        <div class="card-body p-0">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Senjata</th>
                        <th>Jenis</th>
                        <th>Status</th>
                        <th>Lokasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>AK-47</td>
                        <td>Rifle</td>
                        <td><span class="text-success fw-bold">Aktif</span></td>
                        <td>Unit Sabhara</td>
                        <td>
                            <button class="btn btn-sm btn-warning">Edit</button>
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Glock 18</td>
                        <td>Pistol</td>
                        <td><span class="text-danger fw-bold">Perbaikan</span></td>
                        <td>Unit Reskrim</td>
                        <td>
                            <button class="btn btn-sm btn-warning">Edit</button>
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>M4A1</td>
                        <td>Rifle</td>
                        <td><span class="text-success fw-bold">Aktif</span></td>
                        <td>Unit Lalu Lintas</td>
                        <td>
                            <button class="btn btn-sm btn-warning">Edit</button>
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

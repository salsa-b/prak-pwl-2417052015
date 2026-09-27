<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kelas - PWL</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .card { border-radius: 15px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        .table thead th { background-color: #4e73df; color: white; border: none; }
        h2 { color: #2c3e50; font-weight: bold; }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-white border-0 pt-4 pb-0">
                        <h2 class="text-center mb-0">📚 Daftar Kelas</h2>
                        <p class="text-center text-muted mt-2">Modul Praktikum Pemweb Lanjut</p>
                    </div>
                    <div class="card-body p-4">
                        
                        <!-- Pesan Sukses (Baru Ditambahkan) -->
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <!-- Header dengan Tombol Tambah (Baru Ditambahkan) -->
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="mb-0">Data Kelas Tersedia</h5>
                            <a href="{{ route('kelas.create') }}" class="btn btn-success">➕ Tambah Kelas</a>
                        </div>

                        <table class="table table-hover align-middle">
                            <thead>
                                <tr>
                                    <th width="10%">ID</th>
                                    <th>Nama Kelas</th>
                                    <th width="20%" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($kelas as $k)
                                <tr>
                                    <td><span class="badge bg-secondary">{{ $k->id }}</span></td>
                                    <td class="fw-bold">{{ $k->nama_kelas }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('kelas.show', $k->id) }}" class="btn btn-sm btn-primary">
                                            Lihat Detail
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                        <div class="alert alert-info mt-3 mb-0 d-flex align-items-center" role="alert">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-info-circle-fill me-2" viewBox="0 0 16 16">
                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                            </svg>
                            <div>
                                Total data kelas yang tersedia: <strong>{{ $kelas->count() }} Kelas</strong>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-white border-0 text-center pb-4">
                        <a href="{{ route('user.index') }}" class="btn btn-success px-4">
                            👥 Lihat Data Mahasiswa
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
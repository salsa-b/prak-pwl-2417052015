<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa - PWL</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .card { border-radius: 15px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        .table thead th { background-color: #28a745; color: white; border: none; }
        h2 { color: #2c3e50; font-weight: bold; }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header bg-white border-0 pt-4 pb-0">
                        <h2 class="text-center mb-0">🎓 Daftar Mahasiswa</h2>
                        <p class="text-center text-muted mt-2">Data Mahasiswa & Kelas Terkait</p>
                    </div>
                    <div class="card-body p-4">
                        <table class="table table-hover align-middle">
                            <thead>
                                <tr>
                                    <th width="5%">ID</th>
                                    <th>Nama Mahasiswa</th>
                                    <th>NPM</th>
                                    <th>Kelas</th>
                                    <th width="15%" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $u)
                                <tr>
                                    <td><span class="badge bg-secondary">{{ $u->id }}</span></td>
                                    <td class="fw-bold">{{ $u->nama }}</td>
                                    <td>{{ $u->npm }}</td>
                                    <td>
                                        <span class="badge bg-info text-dark">
                                            {{ $u->kelas->nama_kelas ?? 'Tidak Ada Kelas' }}
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('user.show', $u->id) }}" class="btn btn-sm btn-success">
                                            Detail
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                        <div class="alert alert-success mt-3 mb-0 d-flex align-items-center" role="alert">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-people-fill me-2" viewBox="0 0 16 16">
                              <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                              <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                              <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                            </svg>
                            <div>
                                Total data mahasiswa: <strong>{{ $users->count() }} Orang</strong>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-white border-0 text-center pb-4">
                        <a href="{{ route('kelas.index') }}" class="btn btn-primary px-4">
                             Kembali ke Daftar Kelas
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
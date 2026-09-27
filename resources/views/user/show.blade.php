<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card" style="max-width: 600px; margin: auto;">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Profil Mahasiswa</h4>
            </div>
            <div class="card-body">
                <p><strong>Nama:</strong> {{ $user->nama }}</p>
                <p><strong>NPM:</strong> {{ $user->npm }}</p>
                <p><strong>Kelas:</strong> {{ $user->kelas->nama_kelas ?? 'Tidak terdaftar' }}</p>
            </div>
            <div class="card-footer text-center">
                <a href="{{ route('user.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</body>
</html>
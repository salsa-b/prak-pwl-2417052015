<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Kelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2>Detail Kelas: {{ $kelas->nama_kelas }}</h2>
        <div class="card mt-3">
            <div class="card-body">
                <p><strong>ID:</strong> {{ $kelas->id }}</p>
                <p><strong>Nama Kelas:</strong> {{ $kelas->nama_kelas }}</p>
                <hr>
                <h5>Daftar Siswa di Kelas Ini:</h5>
                <ul>
                    @forelse($kelas->users as $user)
                        <li>{{ $user->nama }} ({{ $user->npm }})</li>
                    @empty
                        <li class="text-muted">Belum ada siswa di kelas ini.</li>
                    @endforelse
                </ul>
            </div>
        </div>
        <a href="{{ route('kelas.index') }}" class="btn btn-secondary mt-3">Kembali</a>
    </div>
</body>
</html>
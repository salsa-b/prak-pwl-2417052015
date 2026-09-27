<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kelas - PWL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .card { border-radius: 15px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        h2 { color: #2c3e50; font-weight: bold; }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-white border-0 pt-4 pb-0">
                        <h2 class="text-center mb-0">➕ Tambah Kelas Baru</h2>
                    </div>
                    <div class="card-body p-4">
                        <!-- Pesan Error Validasi -->
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Form Tambah Kelas -->
                        <form action="{{ route('kelas.store') }}" method="POST">
                            @csrf 
                            
                            <div class="mb-3">
                                <label for="nama_kelas" class="form-label fw-bold">Nama Kelas</label>
                                <input 
                                    type="text" 
                                    class="form-control @error('nama_kelas') is-invalid @enderror" 
                                    id="nama_kelas" 
                                    name="nama_kelas" 
                                    placeholder="Contoh: PWL-D"
                                    value="{{ old('nama_kelas') }}"
                                    required
                                >
                                @error('nama_kelas')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary"> Simpan Kelas</button>
                                <a href="{{ route('kelas.index') }}" class="btn btn-secondary">❌ Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
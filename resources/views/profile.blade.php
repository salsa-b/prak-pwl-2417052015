<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Card - {{ $nama }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f0f2f5; min-height: 100vh; display: flex; align-items: center; justify-content: center; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif; }
        .main-container { width: 100%; max-width: 900px; padding: 20px; }
        .profile-card { background: white; border-radius: 20px; box-shadow: 0 10px 40px rgba(0,0,0,0.08); overflow: hidden; text-align: center; transition: transform 0.3s ease; height: 100%; display: flex; flex-direction: column; }
        .card-banner { height: 130px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
        .avatar-wrapper { width: 130px; height: 130px; margin: -65px auto 15px; position: relative; z-index: 2; padding: 4px; background: white; border-radius: 50%; }
        .avatar-img { width: 100%; height: 100%; object-fit: cover; border-radius: 50%; background-color: #e2e8f0; }
        .card-body-custom { padding: 0 30px 30px; flex-grow: 1; display: flex; flex-direction: column; }
        .profile-name { font-size: 1.75rem; font-weight: 800; color: #1a202c; margin-bottom: 5px; }
        .profile-role { color: #718096; font-size: 1rem; margin-bottom: 25px; }
        .btn-action { display: block; width: 100%; padding: 12px; border-radius: 50px; font-weight: 600; margin-bottom: 12px; transition: all 0.2s; }
        .btn-follow { background-color: #1d72f8; color: white; border: none; }
        .btn-follow:hover { background-color: #1557b0; color: white; }
        .btn-message { background-color: transparent; color: #4a5568; border: 1px solid #cbd5e0; }
        .btn-message:hover { background-color: #f7fafc; border-color: #a0aec0; }
        .info-divider { border-top: 1px solid #edf2f7; margin: 25px 0; }
        .info-row { display: flex; justify-content: space-between; text-align: left; }
        .info-item { flex: 1; }
        .info-label { font-size: 0.85rem; color: #718096; margin-bottom: 4px; }
        .info-value { font-size: 1.1rem; font-weight: 700; color: #2d3748; }
        .edit-panel { background: white; border-radius: 20px; padding: 30px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); height: 100%; }
        .form-label { font-weight: 600; font-size: 0.9rem; color: #4a5568; margin-bottom: 8px; }
        .form-control { border-radius: 10px; border: 1px solid #e2e8f0; padding: 12px 15px; font-size: 0.95rem; }
        .form-control:focus { border-color: #667eea; box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.2); }
        .btn-submit { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border: none; border-radius: 10px; padding: 14px; font-weight: 700; width: 100%; margin-top: 10px; transition: opacity 0.3s; }
        .btn-submit:hover { opacity: 0.9; color: white; }
    </style>
</head>
<body>

<div class="main-container">
    <div class="row g-4 align-items-stretch">
        <div class="col-lg-5 order-2 order-lg-1">
            <div class="edit-panel">
                <h4 class="mb-4 fw-bold text-dark">Edit Data</h4>
                <form action="{{ route('profile.update') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" value="{{ $nama }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kelas</label>
                        <input type="text" name="kelas" class="form-control" value="{{ $kelas }}" required>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">NPM</label>
                        <input type="text" name="npm" class="form-control" value="{{ $npm }}" required>
                    </div>
                    <button type="submit" class="btn btn-submit">Simpan Perubahan</button>
                </form>
            </div>
        </div>
        <div class="col-lg-7 order-1 order-lg-2">
            <div class="profile-card">
                <div class="card-banner"></div>
                <div class="card-body-custom">
                    <div class="avatar-wrapper">
                        <img src="{{ asset('images/gwej.jpeg') }}" class="avatar-img" alt="Foto Profil">
                    </div>
                    <h1 class="profile-name">{{ $nama }}</h1>
                    <p class="profile-role">Mahasiswa Ilmu Komputer</p>
                    <button class="btn btn-action btn-follow">Follow</button>
                    <button class="btn btn-action btn-message">Message</button>
                    <div class="info-divider"></div>
                    <div class="info-row">
                        <div class="info-item">
                            <div class="info-label">NPM</div>
                            <div class="info-value">{{ $npm }}</div>
                        </div>
                        <div class="info-item text-end">
                            <div class="info-label">Kelas</div>
                            <div class="info-value">{{ $kelas }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
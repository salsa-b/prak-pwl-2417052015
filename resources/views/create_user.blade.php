@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-primary text-white text-center">
                    <h4 class="mb-0">Buat Pengguna Baru</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('user.store') }}" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="nama" class="form-label fw-bold">Nama:</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" required>
                        </div>

                        <div class="mb-3">
                            <label for="npm" class="form-label fw-bold">NPM:</label>
                            <input type="text" class="form-control" id="npm" name="npm" placeholder="Masukkan NPM" required>
                        </div>

                        <div class="mb-3">
                            <label for="kelas_id" class="form-label fw-bold">Kelas:</label>
                            <select class="form-select" name="kelas_id" id="kelas_id" required>
                                <option value="" disabled selected>Pilih Kelas</option>
                                @foreach($kelas as $kelasItem)
                                    <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="d-grid gap-2 mt-4">
                            <button type="submit" class="btn btn-success btn-lg">Submit Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
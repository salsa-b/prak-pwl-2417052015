@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-warning text-dark text-center">
                    <h4 class="mb-0">Edit Pengguna</h4>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('user.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="nama" class="form-label fw-bold">Nama:</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $user->nama) }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="npm" class="form-label fw-bold">NPM:</label>
                            <input type="text" class="form-control" id="npm" name="npm" value="{{ old('npm', $user->nim) }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="kelas_id" class="form-label fw-bold">Kelas:</label>
                            <select class="form-select" name="kelas_id" id="kelas_id" required>
                                @foreach($kelas as $kelasItem)
                                    <option value="{{ $kelasItem->id }}" {{ old('kelas_id', $user->kelas_id) == $kelasItem->id ? 'selected' : '' }}>
                                        {{ $kelasItem->nama_kelas }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="d-grid gap-2 mt-4">
                            <button type="submit" class="btn btn-primary btn-lg">Update</button>
                            <a href="/user" class="btn btn-secondary">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

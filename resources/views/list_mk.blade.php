@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4 text-center">Daftar Mata Kuliah</h1>
    
    <div class="card shadow-sm">
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <a href="{{ route('matakuliah.create') }}" class="btn btn-primary mb-3">Tambah Mata Kuliah</a>
            
            <table class="table table-striped table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Mata Kuliah</th>
                        <th scope="col">SKS</th>
                        <th scope="col" style="width: 20%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mks as $mk)
                    <tr>
                        <td>{{ $mk->id }}</td>
                        <td>{{ $mk->nama_mk }}</td>
                        <td>{{ $mk->sks }}</td>
                        <td>
                            <a href="{{ route('matakuliah.edit', $mk->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            
                            <form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
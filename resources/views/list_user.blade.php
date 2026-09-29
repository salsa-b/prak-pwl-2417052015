@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4 text-center">Daftar Pengguna</h1>
    
    @include('components.user_table')
</div>
@endsection
<div class="card shadow-sm">
    <div class="card-body">
        <table class="table table-striped table-bordered table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NPM</th>
                    <th scope="col">Kelas</th>
                    <th scope="col" style="width: 20%;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->nama }}</td>
                    <td>{{ $user->nim }}</td>
                    <td>{{ $user->nama_kelas }}</td>
                    <td>
                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
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

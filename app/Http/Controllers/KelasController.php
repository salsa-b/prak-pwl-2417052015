<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    // Method untuk menampilkan semua data kelas
    public function index()
    {
        $kelas = Kelas::all();
        return view('kelas.index', compact('kelas'));
    }

    // Method untuk menampilkan form tambah kelas
    public function create()
    {
        return view('kelas.create');
    }

    // Method untuk menyimpan data kelas ke database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_kelas' => 'required|string|max:255',
        ]);

        // Simpan data ke database
        Kelas::create([
            'nama_kelas' => $request->nama_kelas,
        ]);

        // Redirect kembali ke halaman daftar kelas dengan pesan sukses
        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil ditambahkan!');
    }

    // Method untuk menampilkan detail satu kelas
    public function show($id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('kelas.show', compact('kelas'));
    }
}
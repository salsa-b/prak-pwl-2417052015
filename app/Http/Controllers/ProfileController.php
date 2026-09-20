<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($nama = 'Salsabila Eka Putri', $kelas = 'Sistem Informasi', $npm = '2417052015')
    {
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm
        ];

        return view('profile', $data);
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'kelas' => 'required|string|max:100',
            'npm' => 'required|string|max:20'
        ]);

        return redirect()->route('profile.show', [
            'nama' => $validated['nama'],
            'kelas' => $validated['kelas'],
            'npm' => $validated['npm']
        ]);
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'List Mata Kuliah',
            'mks' => MataKuliah::all(),
        ];
        return view('list_mk', $data);
    }

    public function create()
    {
        return view('create_mk', ['title' => 'Create Mata Kuliah']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_mk' => 'required',
            'sks' => 'required|integer|min:1|max:6',
        ]);

        MataKuliah::create([
            'nama_mk' => $request->input('nama_mk'),
            'sks' => $request->input('sks'),
        ]);

        return redirect()->to('/mata-kuliah')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $mk = MataKuliah::findOrFail($id);
        return view('edit_mk', ['title' => 'Edit Mata Kuliah', 'mk' => $mk]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_mk' => 'required',
            'sks' => 'required|integer|min:1|max:6',
        ]);

        try {
            $mk = MataKuliah::findOrFail($id);
            $mk->update([
                'nama_mk' => $request->input('nama_mk'),
                'sks' => $request->input('sks'),
            ]);
        } catch (ModelNotFoundException $e) {
            return redirect()->to('/mata-kuliah')->with('error', 'Gagal memperbarui: data tidak ditemukan!');
        } catch (\Throwable $e) {
            return redirect()->to('/mata-kuliah')->with('error', 'Gagal memperbarui data!');
        }

        return redirect()->to('/mata-kuliah')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
        try {
            $mk = MataKuliah::findOrFail($id);
            $mk->delete();
        } catch (ModelNotFoundException $e) {
            return redirect()->to('/mata-kuliah')->with('error', 'Gagal menghapus: data tidak ditemukan!');
        } catch (\Throwable $e) {
            return redirect()->to('/mata-kuliah')->with('error', 'Gagal menghapus data!');
        }

        return redirect()->to('/mata-kuliah')->with('success', 'Data berhasil dihapus!');
    }
}

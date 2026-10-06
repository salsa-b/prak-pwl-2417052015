<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\UserModel;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    public function index()
    {
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser(),
        ];
        return view('list_user', $data);
    }

    public function create()
    {
        $kelas = $this->kelasModel->getKelas();
        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
        ];
        return view('create_user', $data);
    }

    public function store(Request $request)
    {
        $this->userModel->create([
            'nama' => $request->input('nama'),
            'nim' => $request->input('npm'),
            'kelas_id' => $request->input('kelas_id'),
        ]);

        return redirect()->to('/user')->with('success', 'Data user berhasil ditambahkan!');
    }

    // ===== Modul 6: Update & Delete untuk User =====

    public function edit($id)
    {
        try {
            $user = UserModel::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            return redirect()->to('/user')->with('error', 'Data user tidak ditemukan!');
        }

        $data = [
            'title' => 'Edit User',
            'user' => $user,
            'kelas' => $this->kelasModel->getKelas(),
        ];
        return view('edit_user', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'npm' => 'required',
            'kelas_id' => 'required|exists:kelas,id',
        ]);

        try {
            $user = UserModel::findOrFail($id);
            $user->update([
                'nama' => $request->input('nama'),
                'nim' => $request->input('npm'),
                'kelas_id' => $request->input('kelas_id'),
            ]);
        } catch (ModelNotFoundException $e) {
            return redirect()->to('/user')->with('error', 'Gagal memperbarui: data user tidak ditemukan!');
        } catch (\Throwable $e) {
            return redirect()->to('/user')->with('error', 'Gagal memperbarui data user!');
        }

        return redirect()->to('/user')->with('success', 'Data user berhasil diperbarui!');
    }

    public function destroy($id)
    {
        try {
            $user = UserModel::findOrFail($id);
            $user->delete();
        } catch (ModelNotFoundException $e) {
            return redirect()->to('/user')->with('error', 'Gagal menghapus: data user tidak ditemukan!');
        } catch (\Throwable $e) {
            return redirect()->to('/user')->with('error', 'Gagal menghapus data user!');
        }

        return redirect()->to('/user')->with('success', 'Data user berhasil dihapus!');
    }
}

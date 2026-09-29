<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matakuliah;

class MatakuliahController extends Controller
{
    public function index()
    {
        $data =[
            'title' => 'list Mata Kuliah',
            'mks' =>  Matakuliah::all(),
        ];
        return view('list_mk', $data);
    }
    
    public function create()
    {
        $data = [
            'title' => 'Tambah Mata Kuliah',
        ];

        return view('create_mk', $data);
    }

    public function store(Request $request)
    {
        Matakuliah::create([
            'nama_mk' => $request->input('nama_mk'),
            'sks' => $request->input('sks'),
        ]);
        return redirect()->to('/matakuliah');
    }
}
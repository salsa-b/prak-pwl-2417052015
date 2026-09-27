<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kelas;

class KelasSeeder extends Seeder
{
    public function run(): void
    {
        Kelas::create(['nama_kelas' => 'PWL-A']);
        Kelas::create(['nama_kelas' => 'PWL-B']);
        Kelas::create(['nama_kelas' => 'PWL-C']);
    }
}
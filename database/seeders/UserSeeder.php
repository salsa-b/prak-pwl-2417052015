<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserModel;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        UserModel::create([
            'nama' => 'Salsabila Ekaputri',
            'npm' => '2417052015',
            'kelas_id' => 1, // PWL-A
        ]);

        UserModel::create([
            'nama' => 'Budi Santoso',
            'npm' => '2417052016',
            'kelas_id' => 2, // PWL-B
        ]);
    }
}
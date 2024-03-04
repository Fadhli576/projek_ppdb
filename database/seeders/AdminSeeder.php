<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password'=> bcrypt('admin123'),
            'nisn'=>'1',
            'no_hp'=>'1',
            'asal_sekolah'=>'1',
            'jenis_kelamin'=>'laki-laki',
            'no_hp_ayah'=>'1',
            'no_hp_ibu'=>'1',
            'referensi'=>'1',
            'role'=>'admin',
            'status'=>'100'

        ]);
    }
}

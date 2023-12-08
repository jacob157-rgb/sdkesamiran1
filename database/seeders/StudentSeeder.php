<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        DB::table('student')->insert([
            'users_id' => 3, //siswa roles
            'image' => 'siswa.jpg',
            'NIS' => '987654321',
            'nama_siswa' => 'Rizki Putra ',
            'tempat_tanggal_lahir_siswa' => 'Banyumas, 03 desember 2021',
            'kelas' => 'kelas 1',
            'alamat_lengkap' => 'bayumas jawa tengah',
            'nama_ibu' => 'uswatun khasanah',
            'nama_ayah' => 'mulyono',
            'foto_kk' => 'kk.jpg',
            'no_tlp' => '0912831893',
            'kelamin' => 'L',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

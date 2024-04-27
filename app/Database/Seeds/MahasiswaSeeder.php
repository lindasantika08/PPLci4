<?php

namespace App\Database\Seeds;

use App\Models\DataMahasiswa;
use CodeIgniter\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    public function run()
    {
        // Get the Database instance
        $db = db_connect();

        // Data mahasiswa
        $data = [
            [
                'NIM' => '221511052',
                'Nama' => 'Linda Santika',
                'Umur' => 19
            ],
            [
                'NIM' => '221511037',
                'Nama' => 'Afyar Siti Ababil',
                'Umur' => 19
            ],
            [
                'NIM' => '221511038',
                'Nama' => 'Agista Diva Briliani',
                'Umur' => 19
            ],
            [
                'NIM' => '221511065',
                'Nama' => 'Taufik Muhamad Ramadhan',
                'Umur' => 20
            ],
            [
                'NIM' => '221511063',
                'Nama' => 'Rizki Gunawan',
                'Umur' => 19
            ],
            [
                'NIM' => '221511041',
                'Nama' => 'Alfien Sukma Perwira',
                'Umur' => 20
            ],
            [
                'NIM' => '221511054',
                'Nama' => 'Mahesya Setia Nugraha',
                'Umur' => 20
            ],
            [
                'NIM' => '221511035',
                'Nama' => 'Adinda Raisa Azahra',
                'Umur' => 19
            ],
            [
                'NIM' => '221511043',
                'Nama' => 'Aqila Gifari Wandana',
                'Umur' => 19
            ],
            [
                'NIM' => '221511058',
                'Nama' => 'Muhammad Ikhsan Maulana Taqwim',
                'Umur' => 19
            ]
        ];

        // Insert data ke dalam tabel 'mahasiswa'
        $db->table('mahasiswa')->insertBatch($data);
    }
}

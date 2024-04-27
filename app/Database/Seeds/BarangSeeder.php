<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\BarangModel;

class BarangSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kode' => 'B001',
                'nama_barang' => 'Pena',
                'harga' => 5000
            ],
            [
                'kode' => 'B002',
                'nama_barang' => 'Penghapus',
                'harga' => 3000
            ],
            [
                'kode' => 'B003',
                'nama_barang' => 'Pensil',
                'harga' => 2000
            ],
            [
                'kode' => 'B004',
                'nama_barang' => 'Buku',
                'harga' => 5000
            ],
            [
                'kode' => 'B005',
                'nama_barang' => 'Pengserut',
                'harga' => 3500
            ],
            [
                'kode' => 'B006',
                'nama_barang' => 'Sampul Buku',
                'harga' => 1500
            ],
            [
                'kode' => 'B007',
                'nama_barang' => 'Binder',
                'harga' => 10000
            ],
            
        ];

        // Insert data ke dalam tabel barang
        $this->db->table('barang')->insertBatch($data);
    }
}

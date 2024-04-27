<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\DataMahasiswa;

class Mahasiswa extends Controller
{
    public function display()
    {
        // Buat instance dari model DataMahasiswa
        $mahasiswaModel = new DataMahasiswa();

        // Mengambil data mahasiswa dari model menggunakan findAll()
        $data['students'] = $mahasiswaModel->findAll();

        // Load view 'v_mahasiswa.php' dan kirimkan data
        return view('v_mahasiswa', $data);
    }
}

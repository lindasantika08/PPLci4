<?php

namespace App\Controllers;

use App\Models\BarangModel;
use CodeIgniter\Controller;

class Barang extends Controller
{

    public function index()
    {
        $model = new BarangModel();
        $data['barang'] = $model->findAll(); // Mengambil semua data barang
        return view('barang/index', $data);
    }


    public function view($id)
    {
        $model = new BarangModel();
        $data['barang'] = $model->find($id); // Mengambil data barang berdasarkan ID
        return view('barang/view', $data);
    }


    public function delete($id)
    {
        $model = new BarangModel();
        $model->deleteBarang($id);
        return redirect()->to('/barang');
    }

    public function search()
    {
        $model = new BarangModel();
        $keyword = $this->request->getVar('keyword'); // Mendapatkan keyword pencarian dari pengguna

        // Lakukan pencarian menggunakan model BarangModel
        $data['barang'] = $model->search($keyword);

        return view('barang/index', $data);
    }

    public function update($id)
    {
    // Periksa apakah data barang dengan id yang diberikan ada
    $model = new BarangModel();
    $barang = $model->find($id);

    // Jika data barang tidak ditemukan, tampilkan halaman 404
    if (!$barang) {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }

    // Tampilkan formulir update
    return view('barang/update', ['barang' => $barang]);
    }

    public function updateAction($id)
    {
        // Ambil data yang dikirimkan melalui formulir
        $data = [
            'kode' => $this->request->getPost('kode'),
            'gambar' => $this->request->getPost('gambar'),
            'nama_barang' => $this->request->getPost('nama_barang'),
            'harga' => $this->request->getPost('harga'),
            'stok' => $this->request->getPost('stok'),
            'deskripsi' => $this->request->getPost('deskripsi')
        ];

        $model = new BarangModel();
        $model->updateBarang($id, $data);

        // Redirect ke halaman daftar barang setelah update selesai
        return redirect()->to('/barang');
    }

    public function input()
    {
        return view('barang/input');
    }

    public function add()
    {
        $model = new BarangModel();
        
        $data = [
            'kode' => $this->request->getPost('kode'),
            'nama_barang' => $this->request->getPost('nama_barang'),
            'harga' => $this->request->getPost('harga')
        ];

        $model->insert($data);

        return redirect()->to('/barang');
    }

}

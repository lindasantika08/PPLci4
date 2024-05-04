<?php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Files\File;

class CBarang extends BaseController
{

    public function index()
    {
        $model = new BarangModel();
        $data['barang'] = $model->findAll();
        return view('v_barang', $data);
    }

    public function search()
    {
        $keyword = $this->request->getGet('keyword');
        $model = new BarangModel();

        $data['barang'] = $model->like('nama_barang', $keyword)->paginate(10);
        $data['pager'] = $model->pager;

        $config['full_tag_open'] = '<div class="pagination">';
        $config['full_tag_close'] = '</div>';

        return view('v_barang', $data);
    }


    public function view($id)
    {
        $model = new BarangModel();
        $data['barang'] = $model->find($id); // Mengambil data barang berdasarkan ID
        return view('v_detail', $data);
    }

    public function input()
    {
        return view('v_input');
    }

    public function add()
    {
        $model = new BarangModel();

        $img = $this->request->getFile('gambar');
        $img->move(ROOTPATH. 'public/assets/images');

        $data = [
            'kode' => $this->request->getPost('kode'),
            'nama_barang' => $this->request->getPost('nama_barang'),
            'harga' => $this->request->getPost('harga'),
            'stok' => $this->request->getPost('stok'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'gambar' => $img->getClientPath(),
        ];

        $model->insert($data);

        return redirect()->to('/CBarang');
    }

    public function delete($id)
    {
        $model = new BarangModel();
        $model->deleteBarang($id);
        return redirect()->to('/CBarang');
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
    return view('v_update', ['barang' => $barang]);
    }

    public function updateAction($id)
    {
        $img = $this->request->getFile('gambar');
        if ($img) {
            
            $img->move(ROOTPATH. 'public/assets/images');
        }
      
        $data = [
            'kode' => $this->request->getPost('kode'),
            'gambar' => $img->getClientPath(),
            'nama_barang' => $this->request->getPost('nama_barang'),
            'harga' => $this->request->getPost('harga'),
            'stok' => $this->request->getPost('stok'),
            'deskripsi' => $this->request->getPost('deskripsi')
        ];

        $model = new BarangModel();
        $model->updateBarang($id, $data);

        // Redirect ke halaman daftar barang setelah update selesai
        return redirect()->to('/CBarang');
    }
}

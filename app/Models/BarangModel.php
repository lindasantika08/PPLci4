<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table = 'barang';
    protected $primaryKey = 'id_barang';
    protected $allowedFields = ['kode', 'gambar', 'nama_barang', 'harga', 'stok', 'deskripsi'];

    public function getBarangPaginated($perPage = 10)
    {
        return $this->paginate($perPage);
    }

    public function getBarang()
    {
        $query = $this->query("SELECT kode, gambar, nama_barang, harga, stok, deskripsi FROM barang")->getResultArray();
        return $query;

    }

    public function updateBarang($id, $data)
{
    $kode = $data['kode'];
    $gambar = $data ['gambar'];
    $nama_barang = $data['nama_barang'];
    $harga = $data['harga'];
    $stok = $data['stok'];
    $deskripsi = $data['deskripsi'];

    $db = \Config\Database::connect();

    $result = $db->query("UPDATE barang SET kode = ?, gambar = ?, nama_barang = ?, harga = ?, stok = ?, deskripsi = ? WHERE id_barang = ?", [$kode, $gambar, $nama_barang, $harga, $stok, $deskripsi, $id]);

}


    public function deleteBarang($id)
    {

        return $this->delete($id);
    }

    public function search($keyword)
    {

        $db = db_connect();
        $result= $db->query("SELECT * FROM barang WHERE nama_barang LIKE '%$keyword%'");

        return $result->getResult('array');
    }
}

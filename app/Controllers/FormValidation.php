<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Services;

class FormValidation extends Controller
{
    public function index(){
        return view('v_form');
    }

    public function submit()
    {
        // Validasi input dari formulir
        $validation = Services::validation();
        $validation->setRules([
            'nip' => 'required|exact_length[18]',
            'nama' => 'required',
            'tgl_lahir' => 'required|valid_date',
            'gender' => 'required',
            'pendidikan' => 'required',
            'no_hp' => 'required|numeric',
            'email' => 'required|valid_email'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            // Jika validasi gagal, kembali ke halaman formulir dengan pesan kesalahan
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Jika validasi berhasil, tampilkan tampilan lain dengan pesan sukses
        return view('v_sukses');
    }



    //     // Tampilkan form dengan pesan error (jika ada)
    //     return view('v_form', $data);
    // }

    // public function submit(){
    //     redirect()->to('/v_template');
    // }
}

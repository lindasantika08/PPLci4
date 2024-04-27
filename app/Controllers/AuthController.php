<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class AuthController extends BaseController
{
    public function login()
    {
        $session = session();
        $model = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = ['username' => $username, 'password' => $password];
        $data = $model->auth($data);
        // $model->where('username', $username)->first()
        if($data){
            $pass = $data->password;
            // $verify_pass = password_verify($password, $pass);
            if($pass == $password){
                $ses_data = [
                    'id'       => $data->id,
                    'username'     => $data->username,
                    'password'    => $data->password,
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/CHome');
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/CLogin');
            }
        }else{
            $session->setFlashdata('msg', 'username not Found');
            return redirect()->to('/CLogin');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/CLogin');
    }
}

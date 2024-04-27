<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'akun';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['username', 'password'];

    public function auth($akun)
    {
        $db = \Config\Database::connect();
        $username = $akun['username'];
        $password = $akun ['password'];
        $user = $db->query("SELECT * FROM akun WHERE username = '$username' and password ='$password'");
        $user = $user->getRow();
        return  $user;
    }
}

<?php

class RegisterForm extends CFormModel
{
    public $username;
    public $password;
    public $role;

    // Definisikan aturan validasi
    public function rules()
    {
        return array(
            array('username, password, role', 'required'),
            array('username', 'unique', 'className' => 'User', 'attributeName' => 'username', 'message' => 'Username sudah digunakan.'),
            array('role', 'in', 'range' => array('admin', 'pegawai', 'dokter')), // Validasi role
            array('password', 'length', 'min' => 6, 'message' => 'Password harus memiliki minimal {min} karakter.'),
        );
    }

    // Menghash password sebelum disimpan ke database
    public function hashPassword()
    {
        return md5($password);
    }
}

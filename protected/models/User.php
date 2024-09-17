<?php

class User extends CActiveRecord
{
    public $username;
    public $password;
    public $role;

    // Tentukan nama tabel yang digunakan oleh model
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    // Menentukan nama tabel di database
    public function tableName()
    {
        return 'user'; // Sesuaikan dengan nama tabel Anda
    }

    // Definisikan aturan validasi
    public function rules()
    {
        return array(
            array('username, password, role', 'required'), // Pastikan semua field diperlukan
            array('role', 'in', 'range' => array('admin', 'pegawai', 'dokter')), // Validasi role
            array('password', 'length', 'min' => 6), // Minimal panjang password
            array('username', 'unique', 'message' => 'Username sudah digunakan.'), // Username harus unik
        );
    }

    // Definisikan relasi dengan tabel lain (jika ada)
    public function relations()
    {
        // Misalnya, jika ada relasi dengan tabel lain
        return array();
    }

    // Metode untuk validasi password
    public function validatePassword($password)
    {
        return CPasswordHelper::verifyPassword($password, $this->password);
    }

    // Metode sebelum menyimpan data ke database
    public function beforeSave()
    {
        if (parent::beforeSave()) {
            if ($this->isNewRecord) {
                $this->password = CPasswordHelper::hashPassword($this->password); // Hash password sebelum disimpan
            }
            return true;
        }
        return false;
    }
}

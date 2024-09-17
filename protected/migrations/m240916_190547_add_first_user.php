<?php

class m240916_190547_add_first_user extends CDbMigration
{
    public function up()
    {
        $this->insert('User', array(
            'username' => 'admin',
            'password' => md5('admin'),
            'role' => 'admin',
        ));

        $this->insert('User', array(
            'username' => 'pegawai',
            'password' => md5('pegawai'),
            'role' => 'pegawai',
        ));

        $this->insert('User', array(
            'username' => 'dokter',
            'password' => md5('dokter'),
            'role' => 'dokter',
        ));
    }

    public function down()
    {
        $this->delete('User', 'username=:username', array(':username' => 'admin'));
    }
}
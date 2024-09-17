<?php

class m230909_123456_create_user_table extends CDbMigration
{
    public function up()
    {
        $this->createTable('user', array(
            'id' => 'pk',
            'username' => 'string NOT NULL',
            'password' => 'string NOT NULL',
            'role' => "enum('admin', 'pegawai', 'dokter') NOT NULL",
            'nama_lengkap' => 'string NOT NULL',
        ));
    }

    public function down()
    {
        $this->dropTable('user');
    }
}

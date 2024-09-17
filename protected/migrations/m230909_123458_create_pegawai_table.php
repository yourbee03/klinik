<?php

class m230909_123458_create_pegawai_table extends CDbMigration
{
    public function up()
    {
        $this->createTable('pegawai', array(
            'id' => 'pk',
            'nama_pegawai' => 'string NOT NULL',
            'jabatan' => 'string NOT NULL',
        ));
    }

    public function down()
    {
        $this->dropTable('pegawai');
    }
}

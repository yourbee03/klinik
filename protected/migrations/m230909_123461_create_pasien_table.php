<?php

class m230909_123461_create_pasien_table extends CDbMigration
{
    public function up()
    {
        $this->createTable('pasien', array(
            'id' => 'pk',
            'nama_pasien' => 'string NOT NULL',
            'tanggal_lahir' => 'date',
            'alamat' => 'text',
        ));
    }

    public function down()
    {
        $this->dropTable('pasien');
    }
}

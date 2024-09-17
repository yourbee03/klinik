<?php

class m230909_123460_create_obat_table extends CDbMigration
{
    public function up()
    {
        $this->createTable('obat', array(
            'id' => 'pk',
            'nama_obat' => 'string NOT NULL',
            'harga' => 'decimal(10,2) NOT NULL',
        ));
    }

    public function down()
    {
        $this->dropTable('obat');
    }
}

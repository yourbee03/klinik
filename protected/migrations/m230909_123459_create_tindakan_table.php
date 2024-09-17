<?php

class m230909_123459_create_tindakan_table extends CDbMigration
{
    public function up()
    {
        $this->createTable('tindakan', array(
            'id' => 'pk',
            'nama_tindakan' => 'string NOT NULL',
            'biaya' => 'decimal(10,2) NOT NULL',
        ));
    }

    public function down()
    {
        $this->dropTable('tindakan');
    }
}

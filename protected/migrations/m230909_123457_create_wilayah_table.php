<?php


class m230909_123457_create_wilayah_table extends CDbMigration
{
    public function up()
    {
        $this->createTable('wilayah', array(
            'id' => 'pk',
            'nama_wilayah' => 'string NOT NULL',
        ));
    }

    public function down()
    {
        $this->dropTable('wilayah');
    }
}

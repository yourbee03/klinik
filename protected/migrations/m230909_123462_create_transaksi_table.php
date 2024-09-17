<?php

class m230909_123462_create_transaksi_table extends CDbMigration
{
    public function up()
    {
        $this->createTable('transaksi', array(
            'id' => 'pk',
            'pasien_id' => 'int NOT NULL',
            'tanggal' => 'date NOT NULL',
            'total' => 'decimal(10,2) NOT NULL',
        ));

        $this->addForeignKey('fk_transaksi_pasien', 'transaksi', 'pasien_id', 'pasien', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_transaksi_pasien', 'transaksi');
        $this->dropTable('transaksi');
    }
}

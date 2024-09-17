<?php

class Transaksi extends CActiveRecord
{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'transaksi';
    }

    public function rules()
    {
        return array(
            array('pasien_id, tanggal, total', 'required'),
            array('pasien_id', 'numerical', 'integerOnly'=>true),
            array('total', 'numerical'),
        );
    }

    public function relations()
    {
        return array(
            'pasien' => array(self::BELONGS_TO, 'Pasien', 'pasien_id'),
        );
    }
}

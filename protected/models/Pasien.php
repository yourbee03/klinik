<?php

class Pasien extends CActiveRecord
{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'pasien';
    }

    public function rules()
    {
        return array(
            array('nama_pasien', 'required'),
            array('nama_pasien', 'length', 'max'=>255),
            array('tanggal_lahir', 'date', 'format'=>'yyyy-MM-dd'),
            array('alamat', 'safe'),
        );
    }
}

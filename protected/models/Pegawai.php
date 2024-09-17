<?php

class Pegawai extends CActiveRecord
{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'pegawai';
    }

    public function rules()
    {
        return array(
            array('nama_pegawai, jabatan', 'required'),
            array('nama_pegawai, jabatan', 'length', 'max'=>255),
        );
    }
}

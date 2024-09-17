<?php

class Wilayah extends CActiveRecord
{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'wilayah';
    }

    public function rules()
    {
        return array(
            array('nama_wilayah', 'required'),
            array('nama_wilayah', 'length', 'max'=>255),
        );
    }
}

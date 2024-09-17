<?php
/* @var $this PegawaiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
    'Manajemen Pegawai',
);

$this->menu=array(
    array('label'=>'Tambah Pegawai', 'url'=>array('create')),
    array('label'=>'Kelola Pegawai', 'url'=>array('admin')),
);
?>

<h1>Manajemen Pegawai</h1>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view', // Menggunakan tampilan _view untuk setiap pegawai
)); ?>

<?php
/* @var $this PasienController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
    'Pendaftaran Pasien',
);

$this->menu=array(
    array('label'=>'Tambah Pasien', 'url'=>array('create')),
    array('label'=>'Kelola Pasien', 'url'=>array('admin')),
);
?>

<h1>Pendaftaran Pasien</h1>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view', // Menggunakan tampilan _view untuk setiap pasien
)); ?>

<?php
/* @var $this ObatController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
    'Manajemen Obat',
);

$this->menu=array(
    array('label'=>'Tambah Obat', 'url'=>array('create')),
    array('label'=>'Kelola Obat', 'url'=>array('admin')),
);
?>

<h1>Manajemen Obat</h1>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view', // Menggunakan tampilan _view untuk setiap obat
)); ?>

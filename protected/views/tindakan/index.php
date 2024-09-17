<?php
/* @var $this TindakanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
    'Manajemen Tindakan',
);

$this->menu=array(
    array('label'=>'Tambah Tindakan', 'url'=>array('create')),
    array('label'=>'Kelola Tindakan', 'url'=>array('admin')),
);
?>

<h1>Manajemen Tindakan</h1>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view', // Menggunakan tampilan _view untuk setiap tindakan
)); ?>

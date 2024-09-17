<?php
/* @var $this TransaksiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
    'Transaksi Pembayaran',
);

$this->menu=array(
    array('label'=>'Tambah Transaksi', 'url'=>array('create')),
    array('label'=>'Kelola Transaksi', 'url'=>array('admin')),
);
?>

<h1>Transaksi Pembayaran</h1>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view', // Menggunakan tampilan _view untuk setiap transaksi
)); ?>

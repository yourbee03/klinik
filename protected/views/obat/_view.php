<div class="view">
    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('nama_obat')); ?>:</b>
    <?php echo CHtml::encode($data->nama_obat); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('harga')); ?>:</b>
    <?php echo CHtml::encode($data->harga); ?>
    <br />
</div>

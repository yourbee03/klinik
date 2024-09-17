<div class="view">
    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('pasien_id')); ?>:</b>
    <?php echo CHtml::encode($data->pasien->nama_lengkap); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('total_biaya')); ?>:</b>
    <?php echo CHtml::encode($data->total_biaya); ?>
    <br />
</div>

<div class="view">
    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('nama_lengkap')); ?>:</b>
    <?php echo CHtml::encode($data->nama_lengkap); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('jabatan')); ?>:</b>
    <?php echo CHtml::encode($data->jabatan); ?>
    <br />
</div>

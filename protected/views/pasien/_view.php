<div class="view">
    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('nama_lengkap')); ?>:</b>
    <?php echo CHtml::encode($data->nama_lengkap); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?>:</b>
    <?php echo CHtml::encode($data->alamat); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('nomor_telepon')); ?>:</b>
    <?php echo CHtml::encode($data->nomor_telepon); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_lahir')); ?>:</b>
    <?php echo CHtml::encode($data->tanggal_lahir); ?>
    <br />
</div>

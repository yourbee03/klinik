<?php
$this->pageTitle = 'Pendaftaran Pengguna';
$this->breadcrumbs = array(
    'Pendaftaran',
);
?>

<h1>Pendaftaran Pengguna</h1>

<?php 
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'register-form',
    'enableAjaxValidation' => false,
)); 
?>

<div class="row">
    <?php echo $form->labelEx($model, 'username'); ?>
    <?php echo $form->textField($model, 'username'); ?>
    <?php echo $form->error($model, 'username'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model, 'password'); ?>
    <?php echo $form->passwordField($model, 'password'); ?>
    <?php echo $form->error($model, 'password'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model, 'role'); ?>
    <?php echo $form->dropDownList($model, 'role', array(
        'admin' => 'Admin',
        'pegawai' => 'Pegawai',
        'dokter' => 'Dokter',
    )); ?>
    <?php echo $form->error($model, 'role'); ?>
</div>

<div class="row buttons">
    <?php echo CHtml::submitButton('Daftar'); ?>
</div>

<?php $this->endWidget(); ?>


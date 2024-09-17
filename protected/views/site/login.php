<?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'login-form',
    'enableClientValidation' => true,
)); ?>

<div>
    <?php echo $form->labelEx($model, 'username'); ?>
    <?php echo $form->textField($model, 'username'); ?>
    <?php echo $form->error($model, 'username'); ?>
</div>

<div>
    <?php echo $form->labelEx($model, 'password'); ?>
    <?php echo $form->passwordField($model, 'password'); ?>
    <?php echo $form->error($model, 'password'); ?>
</div>

<div>
    <?php echo $form->checkBox($model, 'rememberMe'); ?>
    <?php echo $form->label($model, 'rememberMe'); ?>
    <?php echo $form->error($model, 'rememberMe'); ?>
</div>

<div>
    <?php echo CHtml::submitButton('Login'); ?>
</div>

<div>
    <p>
        Belum memiliki akun? <?php echo CHtml::link('Daftar di sini', array('user/register')); ?>
    </p>
</div>

<?php $this->endWidget(); ?>

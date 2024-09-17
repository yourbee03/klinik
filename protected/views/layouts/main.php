<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="language" content="en">

    <!-- Title -->
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

</head>

<body>

<div class="container" id="page">

    <div id="header">
        <div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
        <h2>Sistem Informasi Klinik</h2>
    </div><!-- header -->

    <div id="mainmenu">
        <?php $this->widget('zii.widgets.CMenu', array(
            'items'=>array(
                array('label'=>'Beranda', 'url'=>array('/site/index')),
                array('label'=>'Pendaftaran Pasien', 'url'=>array('/pasien/index'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Manajemen Pegawai', 'url'=>array('/pegawai/index'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Manajemen Obat', 'url'=>array('/obat/index'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Manajemen Tindakan', 'url'=>array('/tindakan/index'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Transaksi', 'url'=>array('/transaksi/index'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Register', 'url'=>array('/user/register'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        )); ?>
    </div><!-- mainmenu -->

    <?php if(isset($this->breadcrumbs)):?>
        <div id="breadcrumbs">
            <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                'links'=>$this->breadcrumbs,
            )); ?>
        </div><!-- breadcrumbs -->
    <?php endif?>

    <div id="content">
        <?php echo $content; ?>
    </div><!-- content -->

    <div class="clear"></div>

    <div id="footer">
        <p>&copy; <?php echo date('Y'); ?> Klinik. All Rights Reserved.<br/>
        Powered by Yii Framework.</p>
    </div><!-- footer -->

</div><!-- page -->

</body>
</html>

<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Selamat Datang';
?>

<h1>Selamat Datang di Sistem Informasi Klinik</h1>

<p>Aplikasi ini dirancang untuk memudahkan pengelolaan data klinik termasuk pendaftaran pasien, pengelolaan pegawai, obat, tindakan medis, dan transaksi pembayaran.</p>

<div class="quick-actions">
    <h3>Menu Utama</h3>
    <ul>
        <li><?php echo CHtml::link('Pendaftaran Pasien', array('pasien/index')); ?></li>
        <li><?php echo CHtml::link('Manajemen Pegawai', array('pegawai/index')); ?></li>
        <li><?php echo CHtml::link('Manajemen Obat', array('obat/index')); ?></li>
        <li><?php echo CHtml::link('Manajemen Tindakan', array('tindakan/index')); ?></li>
        <li><?php echo CHtml::link('Transaksi Pembayaran', array('transaksi/index')); ?></li>
    </ul>
</div>

<div class="about-clinic">
    <h3>Tentang Klinik Kami</h3>
    <p>Klinik ini melayani berbagai kebutuhan kesehatan dengan profesionalisme tinggi. Kami menyediakan layanan pendaftaran, pengobatan, tindakan medis, serta pembayaran dengan sistem yang terintegrasi.</p>
</div>

<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules' => array(
    'gii' => array(
        'class' => 'system.gii.GiiModule',
        'password' => 'your_password',
        'ipFilters' => array('127.0.0.1','::1'),
    ),
	'srbac'=>array(
        'userclass'=>'User', // Nama model User
        'userid'=>'id', // Primary key dari User
        'username'=>'username', // Field untuk username
        'debug'=>false, // Ubah ke false jika aplikasi sudah live
        'pageSize'=>10,
        'superUser' =>'Admin', // Role untuk super user
    ),
),


	// application components
	'components' => array(
        'authManager' => array(
            'class' => 'CDbAuthManager',
            'connectionID' => 'db',
            'itemTable' => 'authitem',
            'itemChildTable' => 'authitemchild',
            'assignmentTable' => 'authassignment',
   	 	),

		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),

		// uncomment the following to enable URLs in path-format
		
		'urlManager' => array(
            'urlFormat' => 'path', // Menggunakan format path
            'showScriptName' => false, // Untuk menyembunyikan index.php
            'rules' => array(
                // Routes untuk UserController
                'user/register' => 'user/register',
                'user/login' => 'user/login',
                'user/logout' => 'user/logout',
                
                // Routes untuk WilayahController
                'wilayah/index' => 'wilayah/index',
                'wilayah/create' => 'wilayah/create',
                'wilayah/update/<id:\d+>' => 'wilayah/update',
                'wilayah/delete/<id:\d+>' => 'wilayah/delete',
                
                // Routes untuk PegawaiController
                'pegawai/index' => 'pegawai/index',
                'pegawai/create' => 'pegawai/create',
                'pegawai/update/<id:\d+>' => 'pegawai/update',
                'pegawai/delete/<id:\d+>' => 'pegawai/delete',
                
                // Routes untuk TindakanController
                'tindakan/index' => 'tindakan/index',
                'tindakan/create' => 'tindakan/create',
                'tindakan/update/<id:\d+>' => 'tindakan/update',
                'tindakan/delete/<id:\d+>' => 'tindakan/delete',
                
                // Routes untuk ObatController
                'obat/index' => 'obat/index',
                'obat/create' => 'obat/create',
                'obat/update/<id:\d+>' => 'obat/update',
                'obat/delete/<id:\d+>' => 'obat/delete',
                
                // Routes untuk PasienController
                'pasien/index' => 'pasien/index',
                'pasien/create' => 'pasien/create',
                'pasien/update/<id:\d+>' => 'pasien/update',
                'pasien/delete/<id:\d+>' => 'pasien/delete',
                
                // Routes untuk TransaksiController
                'transaksi/index' => 'transaksi/index',
                'transaksi/create' => 'transaksi/create',
                'transaksi/update/<id:\d+>' => 'transaksi/update',
                'transaksi/delete/<id:\d+>' => 'transaksi/delete',
                
                // Route untuk homepage
                '' => 'site/index',
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ),
        ),
		

		// database settings are configured in database.php
		'db'=>array(
		'connectionString' => 'mysql:host=localhost;dbname=klinik',
		'emulatePrepare' => true,
		'username' => 'root',
		'password' => '',
		'charset' => 'utf8',
		),


		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>YII_DEBUG ? null : 'site/error',
		),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),

	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);

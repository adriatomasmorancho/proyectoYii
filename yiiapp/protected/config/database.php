<?php

// This is the database connection configuration.
return array(
	//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	
	'connectionString' => 'mysql:host=localhost;port=3306;dbname=yii',
	'emulatePrepare' => true,
	'username' => 'root',
	'password' => 'root_1234',
	'charset' => 'utf8',
);
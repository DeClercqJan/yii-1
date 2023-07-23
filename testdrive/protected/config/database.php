<?php

// This is the database connection configuration.
return array(
	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	// todo: checken of dit effectief werkt (moet ik iets runnen?) want merk nog geen verschil. edit: als ik dan later naar http://localhost:8500/index.php?r=gii/default/index ga, faalt het dus toch effect
//	'connectionString' => 'mysql:host=localhost;dbname=testdrive',
//	'emulatePrepare' => true,
//	'username' => 'root',
//	'password' => '',
//	'charset' => 'utf8',
);
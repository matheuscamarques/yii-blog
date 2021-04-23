<?php

//echo $_SERVER['SERVER_ADDR'];
// This is the database connection configuration.
return array(
	//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	
	'connectionString' => 'mysql:host=172.19.0.4;dbname=yiiblog',
	'emulatePrepare' => true,
	'username' => 'sanonichan',
	'password' => 'password',
	'charset' => 'utf8',
	
);
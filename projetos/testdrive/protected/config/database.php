<?php

//echo $_SERVER['SERVER_ADDR'];
// This is the database connection configuration.
return array(
	//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	// bind ip of db in docker-compose.yml
	'connectionString' => 'mysql:host=172.20.0.8;dbname=yiiblog',
	'emulatePrepare' => true,
	'username' => 'sanonichan',
	'password' => 'password',
	'charset' => 'utf8',
	
);
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'default';
$query_builder = TRUE;
$db['default'] = array(
	'dsn'	=> '',
	'hostname' => '127.0.0.1',
	'username' => 'root',
<<<<<<< HEAD
	// iloveMSQL123 - ikigai
	// 'password' => 'iloveMSQL123',
	'password' => '12210093',
=======
	// iloveMSQL123 - ikigai,
	'password' => '12210093',
	'password' => 'iloveMSQL123',
>>>>>>> 41d63348f24cfdf5ab38743c1b054a98c0a60522
	'database' => 'mhss',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

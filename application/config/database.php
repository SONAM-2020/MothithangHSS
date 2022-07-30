<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'default';
$query_builder = TRUE;
$db['default'] = array(
	'dsn'	=> '',
	'hostname' => '127.0.0.1',	
	'username' => 'root',
<<<<<<< HEAD
	'password' => '12210093',
=======
<<<<<<< HEAD
	// 'password' => 'iloveMSQL123',
	password' => 'iloveMSQL123',
=======
	'password' => 'root',
>>>>>>> c2aa502ed6766c1d9c47ebb164592e264c068247
>>>>>>> d9e039ca96c102d3e0d2dccdf46e53c646e9ade1
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
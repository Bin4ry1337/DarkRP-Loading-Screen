<?php

//Database Connection
$config = array(
	'host' => $dbhost, //Database Hostname
	'user' => $dbuser, //Database Username
	'pass' => $dbpass, //Database Password
	'db'   => $dbname  //Database Name
);

try 
{
	$con = new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['db'], $config['user'], $config['pass']);
}
catch (PDOException $e)
{
	die($e->getMessage());	
}

?>
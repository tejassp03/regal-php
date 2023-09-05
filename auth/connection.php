<?php
	$host = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'regal_test';

	$database_handler = new mysqli($host,$username,$password,$database);

	if($database_handler->connect_error) {
	  die("Connection Error");
	}

?>

<?php
	define('DB_NAME', "conferensia");
	define('DB_HOST', "localhost");
	define('DB_USER', "root");
	define('DB_PASS', "");
	
	define('URL', "http://");
	
	$link = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	
	if ($link) {

	}else{
		die("Bazaga ulanmadi: " . mysqli_connect_error());
	}
?>
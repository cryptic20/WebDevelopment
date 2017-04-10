<?php
	// [ DATABASE CONNECTION ]
	$dbserver	= "localhost";
	$dbusername	= "root";
	$dbpassword	= "";
	$db 		= "myblog";

	// [ ESTABLISH CONNECTION ]
	$conn = new mysqli($dbserver, $dbusername, $dbpassword, $db);
?>
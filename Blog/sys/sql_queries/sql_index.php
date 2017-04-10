<?php
	// [ CHECK CONNECTION ]
	if( $conn->connect_error)
	{
		die("Connection failed: ".$conn->connect_error);
	}
	else
	{
		// [ FETCH DATA FROM DB]
		$config_query = "SELECT * FROM configuration";
		$config_query_result = mysqli_query($conn, $config_query);
		$config = mysqli_fetch_assoc($config_query_result);

		// [ GENERAL SETTINGS ]
		$title 			= $config['name'];
		$seperator 		= $config['seperator'];
		$description 	= $config['description'];

		// [ TECHNICAL SETTINGS ]
		$maintenance 	= $config['maintenance'];
	}
?>
<?php

	session_start();
	
	require_once("sys/includes.php");
	require_once("sys/sql_queries/sql_index.php");

	if($maintenance == 1)
	{
		echo "Website is in maintenance";
	}
	elseif($maintenance == 0)
	{
		getPage();
	}

?>
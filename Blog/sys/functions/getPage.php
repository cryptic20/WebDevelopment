<?php
	function getPage()
	{
		if(isset($_GET['page']))
		{
			$page = $_GET['page'];
			switch($page)
			{
				case "index":
					require_once("frontend/pages/index.php");
					break;
			}
		}
		else
		{
			require_once("frontend/pages/index.php");
		}
	}
?>
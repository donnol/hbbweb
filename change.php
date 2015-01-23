<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>change account</title>
</head>

<body>
	<div>
		<?php

			session_start(); 
			//$old_sessionid = session_id();

			//session_regenerate_id();

			//$new_sessionid = session_id();

			//echo "Old Session: $old_sessionid<br />";
			//echo "New Session: $new_sessionid<br />";

			//print_r($_SESSION);
			session_destroy();
			header("location:index.php");		
		?>
	</div>
</body>
</html>

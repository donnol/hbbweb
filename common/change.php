<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>change account</title>
</head>

<body>
	<div>
		<?php
			if(session_start()){
				if(session_destroy()){
					header("location:index.php");
				}
			}
			else{
				header("location:404.php");
			}
		?>
	</div>
</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>delete book</title>
</head>

<body>
<?php 
		include("checkuser.php"); 
	?>
	<div style="background-color:#f1f2f3; text-align:center; padding: 15px;">
		<?php
		$id = $_GET["id"];
		echo "$id";
		
		@$conn = mysql_connect("localhost:3310", "root", "root");
		$db = mysql_select_db("book");
		$sql = "delete from book where id='$id';";
		$query = mysql_query($sql);
		
		mysql_close($conn);
		
		header("Location:dashboard.php");
		?>
	</div>
</body>
</html>

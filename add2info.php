<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>add 2 info</title>
</head>

<body>
<?php 
		session_start () ;
		if (!isset ($_SESSION['shili'])){
			echo "<p align=center>" ;
			echo "<font color=#ff0000 size=5><strong><big>" ;
			echo "You don't login,please<a href='index.php'>click here to login.</a>!" ;
			echo "</big></strong></font></p>" ;
			exit () ; 
		 } 
	?>
	<div style="background-color:#f1f2f3; padding:15px;"> 
		<?php
			$id = $_POST["id"];
			$name = $_POST["name"];
			$pwd = "123";
			$tel = $_POST["tel"];
			$addr = $_POST["addr"];
			$cert = $_POST["cert"];
			
			echo "$id,$name,$pwd,$tel,$addr,$cert";
			//echo "this is a add2info file.";
			
			@$conn = mysql_connect("localhost:3310", "root", "root");
			@$db = mysql_select_db("book");
			$sql = "insert into user set id='$id', name='$name', pwd='$pwd', tel='$tel', addr='$addr', cert='$cert';";
			$query = mysql_query($sql, $conn);
			
			mysql_close($conn);
			header("Location:userinfo.php");
			//echo  "<META     HTTP-EQUIV=\"Refresh\"     CONTENT=\"0; URL=userinfo.php\">";
		?>
		
	</div>
</body>
</html>

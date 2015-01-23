<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>user info</title>
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
	<div style="background-color:#f1f2f3; text-align:center; padding:15px; ">
		<form name="userinfo" action="#" method="post">
			<table border='1' align='center'>
				<tr>
					<td>index</td>
					<td>id</td>
					<td>name</td>
					<td>tel</td>
					<td>addr</td>
					<td>cert</td>
					<td>delete</td>
				</tr>
			<?php
	//echo "this is userinfo page"
	$i = 0;
	@$conn = mysql_connect("localhost:3310", "root", "root");
	$db = mysql_select_db("book");
	$sql1 = "select * from user";
	$query1 = mysql_query($sql1);
	//echo "$query1";
	while($row1 = mysql_fetch_array($query1)){
		//print_r($row1);
		//echo "<br>";
		$i = $i + 1;
		echo "
				<tr>
					<td>";
					echo "<a href=\"updateUser.php?id=$row1[id]\">$i </a></td>
					<td>";
					 echo "$row1[id]</td>
					<td> ";
					echo "$row1[1] </td>
					<td> ";
					echo "$row1[3] </td>
					<td> ";
					echo "$row1[4]</td>
					<td> ";
					echo "$row1[5] </td>
					<td><a href=\"deleteUser.php?id=$row1[id]\">delete</a></td>
				</tr>
			";
	}
		mysql_close($conn);
?>
		</table>	
		</form>
		<div>
			<button id="adduser" name="adduser" onClick="location.href='addUser.php'" style="float:right; background-color:#f2f3f4; text-align:center;">add</button>
		</div>
	</div>
</body>
</html>

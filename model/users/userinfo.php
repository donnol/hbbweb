<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>user info</title>
</head>

<body>
<?php 
		include("../../util/checkuser.php"); 
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

	$i = 0;
	include("../../util/connectsql.php");
					
	if(@$conn = connectsql()){
		$db = mysql_select_db("book");
		
		if($sql1 = "select * from users"){
		if($query1 = mysql_query($sql1)){
		//echo "$query1";
		include("../../util/removexss.php");
		while($row1 = mysql_fetch_array($query1)){
			//print_r($row1);
			//echo "<br>";
			$i = $i + 1;
		
			
			@$id = remove_xss($row1[id]);
			@$name = remove_xss($row1[name]);
			@$tel = remove_xss($row1[tel]);
			@$addr = remove_xss($row1[addr]);
			@$cert = remove_xss($row1[cert]);
		
			echo "
				<tr>
					<td>";
					echo "<a href=\"updateUser.php?id=$row1[id]\">$i </a></td>
					<td>";
					 echo "$id</td>
					<td> ";
					echo "$name </td>
					<td> ";
					echo "$tel </td>
					<td> ";
					echo "$addr</td>
					<td> ";
					echo "$cert </td>
					<td><a href=\"deleteUser.php?id=$id\">delete</a></td>
				</tr>
				";
		}
		}
		else{
			mysql_close($conn);
			header("location:../../common/404.php");
		}
		}
		else{
			mysql_close($conn);
			header("location:../../common/404.php");
		}
		mysql_close($conn);
	}
	else{
		header("Location:../../common/404.php");
	}
?>
		</table>	
		</form>
		<div>
			<button id="adduser" name="adduser" onClick="location.href='addUser.php'" style="float:right; background-color:#f2f3f4; text-align:center;">add</button>
		</div>
	</div>
</body>
</html>

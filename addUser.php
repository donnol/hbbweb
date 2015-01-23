<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>add user</title>
</head>

<body>
<?php 
		include("checkuser.php"); 
	?>
	<div>
		<?php
			@$conn = mysql_connect("localhost:3310", "root", "root");
			$db = mysql_select_db("book");
			$sql = "select max(id) from user;";
			$query = mysql_query($sql);
			$row = mysql_fetch_array($query);
			//echo "$row[0]";
			$new_id = $row[0] + 1;
		?>
		<form action="add2info.php" method="post" name="adduser">
			<table border="1" align="center">
				<tr>
					<td>NO.<input type="text" name="id" align="left" style="float:right;" value="<?php echo "$new_id";?>" /></td>
				</tr>
				<tr>
					<td>Name <input type="text" name="name" align="left" style="float:right;"/></td>
				</tr>
				<tr>
					<td>Telephone <input type="text" name="tel" align="left" style="float:right;"/></td>
				</tr>
				<tr>
					<td>Address <input type="text" name="addr" align="left" style="float:right;" /></td>
				</tr>
				<tr>
					<td>Certificate <input type="text" name="cert" align="left" style="float:right;"/></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" />&nbsp;
					<input type="reset" name="reset" /></td>
				</tr>
			</table>
		</form>

	</div>

</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>add book</title>
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
	<div>
	<?php
			@$conn = mysql_connect("localhost:3310", "root", "root");
			$db = mysql_select_db("book");
			$sql = "select max(id) from book;";
			$query = mysql_query($sql);
			$row = mysql_fetch_array($query);
			//echo "$row[0]";
			$new_id = $row[0] + 1;
		?>
		<form action="add2bookinfo.php" method="post" name="addbook">
			<table border="1" align="center">
				<tr>
					<td>NO.<input type="text" name="id" align="left" style="float:right;" value="<?php echo "$new_id";?>"/></td>
				</tr>
				<tr>
					<td>Name <input type="text" name="name" align="left" style="float:right;"/></td>
				</tr>
				<tr>
					<td>Category <input type="text" name="cate" align="left" style="float:right;"/></td>
				</tr>
				<tr>
					<td>Page <input type="text" name="page" align="left" style="float:right;" /></td>
				</tr>
				<tr>
					<td>Content <input type="text" name="content" align="left" style="float:right;"/></td>
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

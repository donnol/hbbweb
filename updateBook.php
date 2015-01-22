<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>update book</title>
</head>
<?php $id = $_GET["id"];?>
<body>
	<div>
		<form action="update2Bookinfo.php?id=<?php echo $id;?>" method="post" name="updatebook">
			<table border="1" align="center">
				<?php
					//$id = $_GET["id"];
					//echo "$id";
					
					@$conn = mysql_connect("localhost:3310", "root", "root");
					$db = mysql_select_db("book");
					$sql = "select * from book where id='$id';";
					$query = mysql_query($sql);
					$row = mysql_fetch_array($query);
					//print_r($row);
					mysql_close($conn);
					//print_r($row);
					//echo "$row[id]";
					//default value
				?>
				<tr>
					<td>NO.<?php echo "$row[id]";?></td>
				</tr>
				<tr>
					<td>Name <input type="text" name="name" align="left" style="float:right;" value="<?php echo "$row[name]";?>"/></td>
				</tr>
				<!--<tr>
					<td>Password <input type="password" name="pwd" align="left" style="float:right;" value="**********"/></td>
				</tr>
				this could be done in other place.
				-->
				<tr>
					<td>Category <input type="text" name="cate" align="left" style="float:right;" value="<?php echo "$row[category]";?>"/></td>
				</tr>
				<tr>
					<td>Page <input type="text" name="page" align="left" style="float:right;" value="<?php echo "$row[page]";?>" /></td>
				</tr>
				<tr>
					<td>Content <input type="text" name="content" align="left" style="float:right;" value="<?php echo "$row[content]";?>"/></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" />&nbsp;
					<a href="dashboard.php">return</a></td>
				</tr>
			</table>
		</form>

	</div>
</body>
</html>

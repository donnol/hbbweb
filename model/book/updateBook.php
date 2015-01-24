<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>update book</title>
</head>
<?php $id = $_GET["id"];?>
<body>
<?php 
		include("../../util/checkuser.php"); 
	?>
	<div>
		<form action="update2Bookinfo.php?id=<?php echo $id;?>" method="post" name="updatebook">
			<table border="1" align="center">
				<?php
					//$id = $_GET["id"];
					//echo "$id";
					
					include("../../util/connectsql.php");
					
					if(@$conn = connectsql()){
						include("../../util/injectcheck.php");
						$id = verify_id($id);
						
						$db = mysql_select_db("book");
						$sql = "select * from book where id='$id';";
						if($query = mysql_query($sql)){
						if($row = mysql_fetch_array($query)){

						include("../../util/removexss.php");
						@$nid = remove_xss($row[id]);
						@$name = remove_xss($row[name]);
						@$cate = remove_xss($row[category]);
						@$page = remove_xss($row[page]);
						@$content = remove_xss($row[content]);
						
						mysql_close($conn);
						}
						else{
							mysql_close($conn);
							header("Location:../../common/404.php");
						}
						}
						else{
							mysql_close($conn);
							header("Location:../../common/404.php");
						}
					}
					else{
						header("Location:../../common/404.php");
					}
				?>
				<tr>
					<td>NO.<?php echo "$nid";?></td>
				</tr>
				<tr>
					<td>Name <input type="text" name="name" align="left" style="float:right;" value="<?php echo "$name";?>"/></td>
				</tr>
				<!--<tr>
					<td>Password <input type="password" name="pwd" align="left" style="float:right;" value="**********"/></td>
				</tr>
				this could be done in other place.
				-->
				<tr>
					<td>Category <input type="text" name="cate" align="left" style="float:right;" value="<?php echo "$cate";?>"/></td>
				</tr>
				<tr>
					<td>Page <input type="text" name="page" align="left" style="float:right;" value="<?php echo "$page";?>" /></td>
				</tr>
				<tr>
					<td>Content <input type="text" name="content" align="left" style="float:right;" value="<?php echo "$content";?>"/></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" />&nbsp;
					<a href="../../common/dashboard.php">return</a></td>
				</tr>
			</table>
		</form>

	</div>
</body>
</html>

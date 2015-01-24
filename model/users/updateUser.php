<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>update user</title>
</head>
<?php $id = $_GET["id"];?>
<body>
<?php 
		include("../../util/checkuser.php"); 
	?>
	<div>
		<form action="update2Userinfo.php?id=<?php echo $id;?>" method="post" name="updateuser">
			<table border="1" align="center">
				<?php
					//$id = $_GET["id"];
					//echo "$id";
					
					include("../../util/connectsql.php");
					
					if(@$conn = connectsql()){
						$db = mysql_select_db("book");
						
						include("../../util/injectcheck.php");
						$id = verify_id($id);
						
						$sql = "select * from users where id='$id';";
						
						if($query = mysql_query($sql)){
						if($row = mysql_fetch_array($query)){
						
						include("../../util/removexss.php");
						@$nid = remove_xss($row[id]);
						@$name = remove_xss($row[name]);
						@$tel = remove_xss($row[tel]);
						@$addr = remove_xss($row[addr]);
						@$cert = remove_xss($row[cert]);
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
				<tr>
					<td>NO.<?php echo "$nid";?></td>
				</tr>
				<tr>
					<td>Name <input type="text" name="name" align="left" style="float:right;" value="<?php echo "$name";?>"/></td>
				</tr>
				<tr>
					<td>Telephone <input type="text" name="tel" align="left" style="float:right;" value="<?php echo "$tel";?>"/></td>
				</tr>
				<tr>
					<td>Address <input type="text" name="addr" align="left" style="float:right;" value="<?php echo "$addr";?>" /></td>
				</tr>
				<tr>
					<td>Certificate <input type="text" name="cert" align="left" style="float:right;" value="<?php echo "$cert";?>"/></td>
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

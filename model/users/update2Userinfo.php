<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>update2user info</title>
</head>

<body>
<?php 
		include("../../util/checkuser.php"); 
	?>
	<div style="background-color:#f1f2f3; padding:15px;"> 
		<?php
			include("../../util/injectcheck.php");
			$id = verify_id($_GET["id"]);
			$name = str_check($_POST["name"]);
			//$pwd = "123";
			$tel = str_check($_POST["tel"]);
			$addr = str_check($_POST["addr"]);
			$cert = str_check($_POST["cert"]);
			
			//echo "$id,$name,$tel,$addr,$cert";
			//echo "this is an update2userinfo file.";
			
			include("../../util/connectsql.php");
			if(@$conn = connectsql()){
				@$db = mysql_select_db("book");
				$sql = "update users set name='$name', tel='$tel', addr='$addr', cert='$cert' where id='$id';";
				if($query = mysql_query($sql, $conn)){
					mysql_close($conn);
					header("Location:userinfo.php");
				}
				else{
					mysql_close($conn);
					header("location:../../common/404.php");
				}
			}
			else{
				header("location:../../common/404.php");
			}
		?>
		
	</div>
</body>
</html>

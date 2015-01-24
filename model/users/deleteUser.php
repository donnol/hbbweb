<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>delete User</title>
</head>

<body>
<?php 
		include("../../util/checkuser.php"); 
	?>
	<div style="background-color:#f1f2f3; text-align:center; padding: 15px;">
		<?php
		include("../../util/injectcheck.php");
		$id = verify_id($_GET["id"]);
		echo "$id";
		
		include("../../util/connectsql.php");
		if(@$conn = connectsql()){
			$db = mysql_select_db("book");
			
			$sql = "delete from users where id='$id';";
			if($query = mysql_query($sql)){
				mysql_close($conn);
				header("Location:../../common/dashboard.php");
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

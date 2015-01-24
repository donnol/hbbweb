<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>add 2 info</title>
</head>

<body>
<?php 
		include("../../util/checkuser.php"); 
	?>
	<div style="background-color:#f1f2f3; padding:15px;"> 
		<?php
			include("../../util/injectcheck.php");
			$id = verify_id($_POST["id"]);
			$name = str_check($_POST["name"]);
			$pwd = "123";
			$sha1_pwd = sha1($pwd);
			$tel = str_check($_POST["tel"]);
			$addr = str_check($_POST["addr"]);
			$cert = str_check($_POST["cert"]);
			
			//echo "$id,$name,$pwd,$tel,$addr,$cert";
			//echo "this is a add2info file.";
			
			include("../../util/connectsql.php");
			if(@$conn = connectsql()){
				@$db = mysql_select_db("book");
				
				$sql_findIdandName = "select id,name from users";
				if($query_id = mysql_query($sql_findIdandName, $conn)){
				
				//check that have the same id ?
				$row = array();
				while($row = mysql_fetch_array($query_id)){		
						echo $row[0].$row[1];
						if($id == $row[0] || $name == $row[1]){
							//echo "the id has been used,please choose others.";
							mysql_close($conn);
							//sleep(10);
							header("location:../../common/404.php");
						}
				}
				
				$sql = "insert into users set id='$id', name='$name', pwd='$sha1_pwd', tel='$tel', addr='$addr', cert='$cert';";
				if($query = mysql_query($sql, $conn)){
					mysql_close($conn);
					header("Location:userinfo.php");
				}
				else{
					mysql_close($conn);
					header("Location:../../common/404.php");
				}	
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

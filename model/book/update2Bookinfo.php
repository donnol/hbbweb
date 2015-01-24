<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>upadte 2 book info</title>
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
			$cate = str_check($_POST["cate"]);
			$page = verify_id($_POST["page"]);
			$content = post_check($_POST["content"]);
			
			echo "$id,$name,$cate,$page,$content";
			//echo "this is an update2userinfo file.";
			
			include("../../util/connectsql.php");
					
			if(@$conn = connectsql()){
				@$db = mysql_select_db("book");
				$sql = "update book set name='$name', category='$cate', page='$page', content='$content' where id='$id';";
				if($query = mysql_query($sql, $conn)){			
					mysql_close($conn);
					header("Location:bookinfo.php");
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
		
	</div>
</body>
</html>

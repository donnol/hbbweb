<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>upadte 2 book info</title>
</head>

<body>
<?php 
		include("checkuser.php"); 
	?>
	<div style="background-color:#f1f2f3; padding:15px;"> 
		<?php
			$id = $_GET["id"];
			$name = $_POST["name"];
			//$pwd = "123";
			$cate = $_POST["cate"];
			$page = $_POST["page"];
			$content = $_POST["content"];
			
			include("htmlEncode.php");
			$decode_name = iterString(%name);
			
			echo "$id,$name,$cate,$page,$content";
			//echo "this is an update2userinfo file.";
			
			@$conn = mysql_connect("localhost:3310", "root", "root");
			@$db = mysql_select_db("book");
			$sql = "update book set name='$decode_name', category='$cate', page='$page', content='$content' where id='$id';";
			$query = mysql_query($sql, $conn);
			
			mysql_close($conn);
			header("Location:bookinfo.php");
			//echo  "<META     HTTP-EQUIV=\"Refresh\"     CONTENT=\"0; URL=bookinfo.php\">";
		?>
		
	</div>
</body>
</html>

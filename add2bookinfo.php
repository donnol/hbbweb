<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>add 2 book info</title>
</head>

<body>
<?php 
		include("checkuser.php"); 
	?>
	<div style="background-color:#f1f2f3; padding:15px;"> 
		<?php
			$id = $_POST["id"];
			$name = $_POST["name"];
			$cate = $_POST["cate"];
			$page = $_POST["page"];
			$content = $_POST["content"];
			
			//check the input char 
			include("htmlEncode.php");
			$decode_name = iterString($name);
			
			@$conn = mysql_connect("localhost:3310", "root", "root");
			if($conn){
				@$db = mysql_select_db("book");

				$sql = "insert into book set id='$id', name='$decode_name', category='	$cate', page='$page', content='$content';";
				
				$query = mysql_query($sql, $conn);
				if($query){
				
					mysql_close($conn);
					header("Location:bookinfo.php");
				}
				else{
					//echo "please check your id and name, they can not be same with the other have insert!";
					mysql_close($conn);
					header("location:404.php");
				}
				//echo  "<META     HTTP-EQUIV=\"Refresh\"     CONTENT=\"0; 			URL=bookinfo.php\">";
			}
		?>
		
	</div>
</body>
</html>

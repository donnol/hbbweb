<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>add 2 book info</title>
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
			$cate = str_check($_POST["cate"]);
			$page = verify_id($_POST["page"]);
			$content = post_check($_POST["content"]);

			if($page < 0){
				header("Location:../../common/404.php");
			}
			
			include("../../util/connectsql.php");
					
			if(@$conn = connectsql()){
				@$db = mysql_select_db("book");
				
				$sql_findid = "select id from book";
				if($query_id = mysql_query($sql_findid, $conn)){
				//$row = mysql_fetch_array($query_id);
				
				$row = array();
				while(@$row = mysql_fetch_array($query_id)){
					//for($i = 0; $i < count($row); $i++){
						//echo count($row).$row[0]."<br>";
						if($id == $row[0]){
							echo "the id has been used,please choose others.";
							mysql_close($conn);
							header("location:../../common/404.php");
						}
					//}
				}
				
				$sql = "insert into book set id='$id', name='$name', category='$cate', page='$page', content='$content';";
				
				if($query = mysql_query($sql, $conn)){
					mysql_close($conn);
					header("Location:bookinfo.php");
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
			}
			else{
				header("location:../../common/404.php");
			}
		?>	
	</div>
</body>
</html>

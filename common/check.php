<html>
<head>
	<title> check and go </title>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

</head>
<body>
	<div style="background-color:#f1f2f3;">
		<!-- how bad the wechat's translation is! -->
		checking...
	<div>
	<?php 
		if(session_start () ){                   //初始session
		if (isset ($_SESSION['shili']))
		{
			header ("Location:dashboard.php") ;    //重新定向到其他页面
			exit ;
		}                       //登录过的话立即结束
		
		include("../util/injectcheck.php");
		$shili_name = str_check($_POST['username']) ;    //获取参数
		$password = $_POST['pwd'] ;
		
		$sha1_pwd = sha1($password);
		
		include("../util/connectsql.php");
		@$conn = connectsql();
		if(@$conn){
			$db = mysql_select_db("book", $conn);
			$sql = "select count(*) from users where name='$shili_name' and pwd = '$sha1_pwd' ;";
			//var_dump($sql);
			if($res = mysql_query($sql, $conn)){
			if($row = mysql_fetch_array($res)){
			if($row[0] != 0){
				$_SESSION['shili'] = $shili_name;
				echo "<font color=red>success!</font>";
				echo "or you can <a href='dashboard.php'>click here to login in right now</a>";
				mysql_close($conn);
				header("Location:dashboard.php");				
			}
			else
			{
				echo "wrong account or password!<br>" ;
				echo "<font color=red>login failed!</font><br><a href='index.php'>please click here.</a>";
				mysql_close($conn);
				header("location:404.php");
			}
			}
			else{
				mysql_close($conn);
				header("location:404.php");
			}
			}
			else{
				mysql_close($conn);
				header("location:404.php");
			}
		}
		else{
			header("location:404.php");
		}
		}
		else{
			header("location:404.php");
		}
		?>
</body>
</html>
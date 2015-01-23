<html>
<head>
<meta>
<title> welcome </title>
</head>
<body>
	<?php
		session_start();//初始化session
		if (isset($_SESSION['shili']))
		{
			//if(session_id()){
				//header("location:index.php");
				//exit();
			//}
			//else{
 				header("Location:dashboard.php"); //重新定向到其他页面
				exit();
			//}
		}
	?>
	<script language="javascript">
		function checklogin(){
 			if((login.username.value!="")&&(login.password.value!=""))
 			{
  				return true;//判断用户名和密码不为空,返回TRUE
 			}
			else
 			{
  				alert ("昵称或密码不能为空!")
			}
		}
	</script>
	
	<div style="background-color:#f1f2f3; text-align:center; padding:15px;">
		welcome to login or sign up.
	</div>
	<div>
		<form name="loginform" action="check.php" method="post" onSubmit="return checklogin()">
			<table align="center">
				<tr>
					<td>User Name&nbsp;:<input type="text" name="username"></td>
					
				</tr>
				<tr>
					<td>Password&nbsp;&nbsp;:<input type="password" name="pwd"></td>
				</tr>
				<tr>
					<td>
						<input style="padding:5px;background-color:#f1f2f3;" type="submit" name="login">
					</td>
					<td>
						<input style="padding:5px;background-color:#f2f3f4;" type="reset" name="reset">
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>

<!--<?php
	@$conn = mysql_connect("localhost:3310", "root", "root");
	if($conn){
		$sqlpre = "create database ";
		$sqlsuf = $_POST[username];
		$sql = $sqlpre.$sqlsuf;
		$query = mysql_query($sql);
		if($query){
			echo "$conn";
		}
	}
	mysql_close($conn);
?>-->
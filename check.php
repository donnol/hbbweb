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
		session_start () ;                   //��ʼsession
		if (isset ($_SESSION['shili']))
		{
			header ("Location:dashboard.php") ;    //���¶�������ҳ��
			exit ;
		}                       //��¼���Ļ���������
		$shili_name=$_POST['username'] ;    //��ȡ����
		$password=$_POST['pwd'] ;
		
		//encode the name from the user input
		include("htmlEncode.php");
		$decode_name = iterString($shili_name);
		
		@$conn = mysql_connect("localhost:3310", "root", "root");
		if(@$conn){
			$db = mysql_select_db("book", $conn);
			$sql = "select count(*) from user where name='$decode_name' and pwd = '$password' ;";
			var_dump($sql);
			$res = mysql_query($sql, $conn);
			$row = mysql_fetch_array($res);
			if($row[0]!=0){
				$_SESSION['shili'] = $decode_name;
				echo "<font color=red>success!</font>";
				echo "or you can <a href='dashboard.php'>click here</a>";
				header("Location:dashboard.php");
				
			}
			else
			{
				//echo "<table width='100%' align=center><tr><td align=center>" ;
				echo "wrong account or password!<br>" ;
				echo "<font color=red>login failed!</font><br><a href='index.php'>please click here.</a>";
				//echo "</td></tr></table>" ;
			}
			mysql_close($conn);

		}
		/*if ($shili_name=="mr" and $password=="mrsoft")
		{
			session_register ("shili") ;        //ע���µı���,���浱ǰ�Ự���ǳ�
			$shili = $shili_name ;
			echo "<font color=red>��¼�ɹ�!</font>" ;
			header ("Location:shili.php") ;    //��¼�ɹ��ض��򵽹���ҳ��
		}
		else
		{
			echo "<table width='100%' align=center><tr><td align=center>" ;
			echo "�˺Ż��������,���߲��ǹ���Ա�˺�<br>" ;
			echo "<font color=red>��¼ʧ��!</font><br><a href='login.php'>����������</a>";
			echo "</td></tr></table>" ;
		}
	?>
	<?php
		echo	"<!-- change > create -->";
		$un= $_POST["username"];
		$pwd = $_POST["pwd"];
		//echo  $un, $pwd;
		@$conn = mysql_connect("localhost:3310", "root", "root");
		//echo "1";
		if(@$conn){
			//echo "2";
			$db = mysql_select_db("book", $conn);
			//echo "3";
			$sql = "select * from user where name='$un';";
			$res = mysql_query($sql, $conn);
			//echo "$res";
			$row = mysql_fetch_array($res);
			//print_r($row);
			//echo $row["name"], $row["pwd"];
			if($row["pwd"]==$pwd){
				echo "if over";
				$i = 5;
				echo " $i seconds,the page doesn't left,<br>";

				echo "please <a href='dashboard.php'>click here</a>";
				header("Location:dashboard.php");
				
			}

			mysql_close($conn);

		}
	*/?>
</body>
</html>
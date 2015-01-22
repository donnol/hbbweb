<html>
<head>
	<title> check and go </title>
</head>
<body>
	<div style="background-color:#f1f2f3;">
		<!-- how bad the wechat's translate is! -->
		checking...
	<div>
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
				
			}

			mysql_close($conn);
		}
	?>
</body>
</html>
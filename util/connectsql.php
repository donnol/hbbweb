<?php
	function connectsql(){
		if(@$conn = mysql_connect("localhost:3310", "root", "root")){
			return $conn;
		}
		else{
			echo "connect to the mysql failed!";
			return 0;
		}
	}
?>
<?php
	if(session_start () ){
		if (!isset ($_SESSION['shili'])){
			echo "<p align=center>" ;
			echo "<font color=#ff0000 size=5><strong><big>" ;
			echo "You don't login,please<a href='../common/index.php'>click here to login.</a>!" ;
			echo "</big></strong></font></p>" ;
			exit () ; 
		 }
	}
	else{
		header("location:../common/404.php");
	}
?>
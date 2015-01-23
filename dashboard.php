<html>
<head>
	<title> home </title>
	</head>
<body>
	<?php 
		session_start () ;
		if (!isset ($_SESSION['shili'])){
			echo "<p align=center>" ;
			echo "<font color=#ff0000 size=5><strong><big>" ;
			echo "You don't login,please<a href='index.php'>click here to login.</a>!" ;
			echo "</big></strong></font></p>" ;
			exit () ; 
		 } 
	?>
	<script type="text/javascript">
    window.onload=function(){
        document.getElementById("left").style.height = document.getElementById("tagContent").offsetHeight+"px";
    }
	</script>
	<div>
	<div style="background-color:#f1f2f3; text-align:center; padding:15px;">
		<!-- wow, the time is so slow that i can feel it wasting -->
		welcome home
		<div>
			<button id="change account" name="change account" style="float:right;" onClick="location.href='change.php'">change account</button><br><br>
			<button id="log out" name="log out" style="float:right;" onClick="location.href='logout.php'">log out</button>
		</div>
	</div>
		<!-- how to design? -->
	<div>
	<div id="left" style="float:left;background-color:#f7f7f7; text-align:left; padding:15px; width: 20%;">
		<ul id="tags">
			<li>
		<a onMouseOver="" href="userinfo.php">User information</a>
		</li>
		<li>
		<a onMouseOver="" href="bookinfo.php">Book information</a>
		</li>
		</ul>
	</div>
	<div id="tagContent" style="float:right;background-color:#f7f7f7; text-align:center; padding:15px; width:75%;">
		<div id="tagContent1" style="padding:20px;">
		<iframe src="userinfo.php" width="90%" height="20%">
			<p>ok?</p>
		</iframe>
		</div>
		<!--<div id="tagContent2" style="background-color:#CC99FF;">
		<iframe src="bookinfo.php" width="90%" height="50%">
			<p>ok.</p>
		</iframe>
		</div>-->
	</div>
	</div>
	</div>
		
</body>
</html>
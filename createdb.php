<?php
	@$conn = mysql_connect("localhost:3310", "root", "root");
	if(@$conn){
		$sql = "create database book;";
		$query = mysql_query($sql);
		$db = mysql_select_db("book");
		$sql2 = "create table user (id int not null primary key, name varchar(20), pwd varchar(20), tel varchar(20), addr varchar(20), cert varchar(20));";
		$sql3 = "create table book (id int not null primary key, name varchar(20), category varchar(20), page varchar(20), content varchar(20));";
		$sql4 = "create table manager (id int not null primary key, name varchar(20), category varchar(20));";
		$query2 = mysql_query($sql2);
		$query3 = mysql_query($sql3);
		$query4 = mysql_query($sql4);
		echo "$query, $query2, $query3, $query4";
		$sql5 = "insert into user set id = 1, name='jd', pwd = '123';";
		$query5 = mysql_query($sql5);
		echo "1--$query5";
		$sql6 = "select * from user where name='jd';";
		$query6 = mysql_query($sql6);
		echo "$query6";
		$row = mysql_fetch_array($query6);
		echo $row['id'].$row['name'].$row['pwd'];
		mysql_close($conn);
	}
?>
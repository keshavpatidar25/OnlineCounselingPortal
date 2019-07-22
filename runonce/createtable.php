<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Create Table 1</title>
</head>
<body>
<?php
	$con = mysql_connect("localhost:3306","root","");
	if(!$con)
		die('Could not connect: ' . mysql_error());
	if (mysql_query("CREATE DATABASE COUNSELING",$con))
  		echo "Database created";
	else
		echo "Database not created ".mysql_error();
	if (mysql_select_db("COUNSELING",$con))
		echo "<br />Database connected";
	else
		die("<br />Database not connected ".mysql_error());
	if (mysql_query("CREATE TABLE LOGIN (USERNAME VARCHAR(25) NOT NULL, PRIMARY KEY (USERNAME), PASSWORD VARCHAR(255) NOT NULL, GOWEB INT NOT NULL);",$con))
		echo "<br />Table created";
	else
		echo "<br />Table not created ".mysql_error();
	if (mysql_query("INSERT INTO LOGIN VALUES ('AINCHARGE',md5('pass1'),1);",$con))
		echo "<br />Row inserted";
	else
		echo "<br />Row not inserted ".mysql_error();
	if (mysql_query("INSERT INTO LOGIN VALUES ('DINCHARGE',md5('pass2'),2);",$con))
		echo "<br />Row inserted";
	else
		echo "<br />Row not inserted ".mysql_error();
	if (mysql_query("INSERT INTO LOGIN VALUES ('CINCHARGE',md5('pass3'),3);",$con))
		echo "<br />Row inserted";
	else
		echo "<br />Row not inserted ".mysql_error();
	if (mysql_query("INSERT INTO LOGIN VALUES ('FINCHARGE',md5('pass4'),4);",$con))
		echo "<br />Row inserted";
	else
		echo "<br />Row not inserted ".mysql_error();
	mysql_close($con);
?>
</body>
</html>
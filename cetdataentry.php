<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CET Data Entry</title>
</head>
<body>
<?php
	function checkinput($value)
	{
		// Stripslashes
		if (get_magic_quotes_gpc())
	  		$value = stripslashes($value);
		// Quote if not a number
		if (!is_numeric($value))
			$value = "'" . mysql_real_escape_string($value) . "'";
		return $value;
	}
	$rollno = checkinput($_POST['rollno']);
	$fname = checkinput($_POST['fname']);
	$lname = checkinput($_POST['lname']);
	$fathersname = checkinput($_POST['fathersname']);	
	$gender = checkinput($_POST['gender']);
	$nationality = checkinput($_POST['nationality']);
	$mp = checkinput($_POST['mp']);
	$category = checkinput($_POST['category']);
	$subcategory = checkinput($_POST['subcategory']);
	$score = checkinput($_POST['score']);
	if ((strcmp($rollno,"''")==0) || (strcmp($fname,"''")==0) || (strcmp($lname,"''")==0) || 
	(strcmp($fathersname,"''")==0) || (strcmp($gender,"''")==0) || 
	(strcmp($nationality,"''")==0) || (strcmp($mp,"''")==0) || (strcmp($category,"''")==0) || 
	(strcmp($subcategory,"''")==0) || (strcmp($score,"''")==0))
	{
		header("Location: cetdataentry.html");
		die();
	}
	if (strcmp($subcategory,"'NULL'")==0)
		$subcategory='NULL';
	include("connectdb.php");
	$sql = "INSERT INTO CET VALUES ($rollno,$fname,$lname,$fathersname,$gender,$nationality,$mp,$category,$subcategory,$score);";
	if (mysql_query($sql,$con))
	{
		$file=fopen("insertintocet.sql","a+") or exit("Unable to open file!");
		file_put_contents("insertintocet.sql","\r\n".'mysql_query("'.$sql.'");',FILE_APPEND);
		fclose($file);
		echo "<br /><br /><h3>Row inserted</h3>";
		header("Location: cetdataentry.html");
	}
	else
	{
		echo "<br /><br /><h3>Row not inserted ".mysql_error()."</h3>";
		header( "refresh:5;url=cetdataentry.html" );
		echo "<br /><br /><h3>You will be redirected in 5 seconds...</h3>";
		echo '<br /><br /><h3>or <a href="cetdataentry.html">Click Here</a></h3>';
	}
	mysql_close($con);
?>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Check</title>
</head>
<body>
<?php
	function check_input($value)
	{
		// Stripslashes
		if (get_magic_quotes_gpc())
	  	{
	  		$value = stripslashes($value);
  		}
	  	$value = "'" . mysql_real_escape_string($value) . "'";
		return $value;
	}
	if (isset($_COOKIE["attendance"]))
		setcookie("attendance", "", time()-3600);
	if (isset($_COOKIE["document"]))
		setcookie("document", "", time()-3600);
	if (isset($_COOKIE["choice"]))
		setcookie("choice", "", time()-3600);
	if (isset($_COOKIE["fees"]))
		setcookie("fees", "", time()-3600);
	$user=check_input($_POST["user"]);
	$pass=check_input($_POST["pass"]);
	if ((strcmp($user,"''")==0) || (strcmp($pass,"''")==0))
	{
		header("Location: login.php");
		die();
	}
	$con = mysql_connect("localhost:3306","root","");
	if(!$con)
		die('Could not connect: ' . mysql_error());
	$db=mysql_select_db("COUNSELING", $con);
	if(!$db)
		die('Could not select database: '. mysql_error());
	$sql="SELECT * FROM login WHERE username=$user and password=md5($pass);";
	$result = mysql_query($sql);
	if(!$result)
		die('Could not match data: ' . mysql_error());
	$num_rows = mysql_num_rows($result);
	if($num_rows<=0)
		echo "Invalid Username/Password";
	else
	{
		$row = mysql_fetch_array($result);
		if($row['GOWEB']==1)
			setcookie("attendance",$user, time()+(3600 * 24));
		else if($row['GOWEB']==2)
			setcookie("document",$user, time()+(3600 * 24));
		else if($row['GOWEB']==3)
			setcookie("choice",$user, time()+(3600 * 24));
		else if($row['GOWEB']==4)
			setcookie("fees",$user, time()+(3600 * 24));
		echo "Success";
	}
	mysql_close($con);
?>
</body>
</html>
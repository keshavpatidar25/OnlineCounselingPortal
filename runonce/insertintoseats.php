<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert Into Seats</title>
</head>
<body>
<?php
	include("connectdb.php");
	if(mysql_query("INSERT INTO SEATS VALUES('M.TECH.',5,2,2,1,1,1,1,1,4,2,1,1,1,1,3,1,2);",$con))
		echo "<br />M.Tech row inserted.";
	else
		echo "<br />M.Tech row not inserted : ".mysql_error();
	if(mysql_query("INSERT INTO SEATS VALUES('MCA',5,2,2,1,1,1,1,1,4,2,1,1,1,1,3,1,2);",$con))
		echo "<br />MCA row inserted.";
	else
		echo "<br />MCA row not inserted : ".mysql_error();
	mysql_close($con);
?>
</body>
</html>
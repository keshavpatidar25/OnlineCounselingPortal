<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Create Table 2</title>
</head>
<body>
<?php
	include("connectdb.php");
	if(mysql_query("CREATE TABLE CET 
	(ROLLNO INT NOT NULL, 
	 PRIMARY KEY (ROLLNO),
	 FNAME VARCHAR(25) NOT NULL,
	 LNAME VARCHAR(25) NOT NULL,
	 FATHERSNAME VARCHAR(25) NOT NULL,
	 GENDER VARCHAR(1) NOT NULL,
	 NATIONALITY VARCHAR(3) NOT NULL DEFAULT 'IND',
	 MP INT(1) NOT NULL DEFAULT 0,
	 CATEGORY VARCHAR(3) NOT NULL DEFAULT 'GEN',
	 SUBCATEGORY VARCHAR(2),
	 SCORE INT(3) NOT NULL,
	 CHECK (NATIONALITY IN ('IND','NRI','FRN')),
	 CHECK (MP IN (0,1)),	 
	 CHECK (CATEGORY IN ('GEN','SC','ST','OBC')),
	 CHECK (SUBCATEGORY IN (NULL,'PH','JK')),
	 CHECK (GENDER IN ('M','F')),
	 CHECK (SCORE BETWEEN 0 AND 200));",$con))
	 	echo "<br />CET Table created";
	else
		echo "<br />CET Table not created ".mysql_error();
	if(mysql_query("CREATE TABLE RANK 
	(ROLLNO INT NOT NULL,
	 PRIMARY KEY (ROLLNO),
	 AI INT NOT NULL,
	 UNIQUE (AI),
	 AIF INT,
	 UNIQUE (AIF),
	 AISC INT,
	 UNIQUE (AISC),
	 AISCF INT,
	 UNIQUE (AISCF),
	 AIST INT,
	 UNIQUE (AIST),
	 AISTF INT,
	 UNIQUE (AISTF),
	 AIOBC INT,
	 UNIQUE (AIOBC),
	 AIOBCF INT,
	 UNIQUE (AIOBCF),
	 MP INT,
	 UNIQUE (MP),
	 MPF INT,
	 UNIQUE (MPF),
	 MPSC INT,
	 UNIQUE (MPSC),
	 MPSCF INT,
	 UNIQUE (MPSCF),
	 MPST INT,
	 UNIQUE (MPST),
	 MPSTF INT,
	 UNIQUE (MPSTF),
	 MPOBC INT,
	 UNIQUE (MPOBC),
	 MPOBCF INT,
	 UNIQUE (MPOBCF),
	 NRI INT,
	 UNIQUE (NRI));",$con))
	 	echo "<br />RANK Table created";
	else
		echo "<br />RANK Table not created ".mysql_error();
	if(mysql_query("CREATE TABLE ATTENDANCE 
	(ROLLNO INT NOT NULL,
	 PRIMARY KEY (ROLLNO),
	 ATT INT(1) NOT NULL,
	 CHECK (ATT IN (0,1)));",$con))
	 	echo "<br />ATTENDANCE Table created";
	else
		echo "<br />ATTENDANCE Table not created ".mysql_error();
	if(mysql_query("CREATE TABLE DOCUMENT 
	(ROLLNO INT NOT NULL,
	 PRIMARY KEY (ROLLNO),
	 DOC INT(1) NOT NULL,
	 TENTH FLOAT(5,2),
	 TWELFTH FLOAT(5,2),
	 INCOME FLOAT(10,2),
	 CHECK (DOC IN (0,1)),
	 CHECK (TENTH >= 50),
	 CHECK (TWELFTH >= 50),
	 CHECK (INCOME>=0));",$con))
	 	echo "<br />DOCUMENT Table created";
	else
		echo "<br />DOCUMENT Table not created ".mysql_error();
	if(mysql_query("CREATE TABLE ADMISSION 
	(ROLLNO INT NOT NULL,
	 PRIMARY KEY (ROLLNO),
	 ADM INT(1) NOT NULL,
	 CHECK (ADM IN (0,1)),
	 COURSE VARCHAR(15),
	 SEAT VARCHAR(6));",$con))
	 	echo "<br />ADMISSION Table created";
	else
		echo "<br />ADMISSION Table not created ".mysql_error();
	if(mysql_query("CREATE TABLE FEES 
	(ROLLNO INT NOT NULL,
	 PRIMARY KEY (ROLLNO),
	 FEE INT(1) NOT NULL,
	 CHECK (FEE IN (0,1)),
	 DDNO INT(6),
	 DDAMT FLOAT(7,2),
	 DDDATE DATE,
	 DDBANK VARCHAR(25));",$con))
	 	echo "<br />FEES Table created";
	else
		echo "<br />FEES Table not created ".mysql_error();
	mysql_close($con);
?>
</body>
</html>
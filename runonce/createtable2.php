<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Create Table 3</title>
</head>
<body>
<?php
	include("connectdb.php");
	if(mysql_query("CREATE TABLE SEATS 
	(COURSE VARCHAR(15) NOT NULL,
	 PRIMARY KEY (COURSE),
	 AI INT(3) NOT NULL,
	 AIF INT(3) NOT NULL,
	 AISC INT(3) NOT NULL,
	 AISCF INT(3) NOT NULL,
	 AIST INT(3) NOT NULL,
	 AISTF INT(3) NOT NULL,
	 AIOBC INT(3) NOT NULL,
	 AIOBCF INT(3) NOT NULL,
	 MP INT(3) NOT NULL,
	 MPF INT(3) NOT NULL,
	 MPSC INT(3) NOT NULL,
	 MPSCF INT(3) NOT NULL,
	 MPST INT(3) NOT NULL,
	 MPSTF INT(3) NOT NULL,
	 MPOBC INT(3) NOT NULL,
	 MPOBCF INT(3) NOT NULL,
	 NRI INT(3) NOT NULL,
	 CHECK (AI>=0),
	 CHECK (AIF>=0),
	 CHECK (AISC>=0),
	 CHECK (AISCF>=0),
	 CHECK (AIST>=0),
	 CHECK (AISTF>=0),
	 CHECK (AIOBC>=0),
	 CHECK (AIOBCF>=0),
	 CHECK (MP>=0),
	 CHECK (MPF>=0),
	 CHECK (MPSC>=0),
	 CHECK (MPSCF>=0),
	 CHECK (MPST>=0),
	 CHECK (MPSTF>=0),
	 CHECK (MPOBC>=0),
	 CHECK (MPOBCF>=0),
	 CHECK (NRI>=0));",$con))
	 	echo "<br />SEATS Table created";
	else
		echo "<br />SEATS Table not created ".mysql_error();
		
	if(mysql_query("ALTER TABLE RANK 
	ADD CONSTRAINT fk_rollno 
	FOREIGN KEY (ROLLNO) REFERENCES CET(ROLLNO) ON DELETE CASCADE;",$con))
	 	echo "<br />RANK Table Foreign Key Set";
	else
		echo "<br />RANK Table Foreign Key Not Set ".mysql_error();
		
	if(mysql_query("ALTER TABLE ATTENDANCE 
	ADD CONSTRAINT fk_rollno1 
	FOREIGN KEY (ROLLNO) REFERENCES CET(ROLLNO) ON DELETE CASCADE;",$con))
	 	echo "<br />ATTENDANCE Table Foreign Key Set";
	else
		echo "<br />ATTENDANCE Table Foreign Key Not Set ".mysql_error();
		
	if(mysql_query("ALTER TABLE DOCUMENT 
	ADD CONSTRAINT fk_rollno2 
	FOREIGN KEY (ROLLNO) REFERENCES ATTENDANCE(ROLLNO) ON DELETE CASCADE;",$con))
	 	echo "<br />DOCUMENT Table Foreign Key Set";
	else
		echo "<br />DOCUMENT Table Foreign Key Not Set ".mysql_error();
		
	if(mysql_query("ALTER TABLE ADMISSION 
	ADD CONSTRAINT fk_rollno3 
	FOREIGN KEY (ROLLNO) REFERENCES DOCUMENT(ROLLNO) ON DELETE CASCADE;",$con))
	 	echo "<br />ADMISSION Table Foreign Key Set";
	else
		echo "<br />ADMISSION Table Foreign Key Not Set ".mysql_error();
		
	if(mysql_query("ALTER TABLE FEES 
	ADD CONSTRAINT fk_rollno4 
	FOREIGN KEY (ROLLNO) REFERENCES ADMISSION(ROLLNO) ON DELETE CASCADE;",$con))
	 	echo "<br />FEES Table Foreign Key Set";
	else
		echo "<br />FEES Table Foreign Key Not Set ".mysql_error();
		
	if(mysql_query("ALTER TABLE ADMISSION 
	ADD CONSTRAINT fk_course 
	FOREIGN KEY (COURSE) REFERENCES SEATS(COURSE) ON DELETE CASCADE;",$con))
	 	echo "<br />ADMISSION Table Course Foreign Key Set";
	else
		echo "<br />ADMISSION Table Course Foreign Key Not Set ".mysql_error();
	mysql_close($con);
?>
</body>
</html>
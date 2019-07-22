<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert Into Rank</title>
</head>
<body>
<?php
	include("connectdb.php");
	$ai=0;
	$aif=0;
	$aisc=0;
	$aiscf=0;
	$aist=0;
	$aistf=0;
	$aiobc=0;
	$aiobcf=0;
	$mp=0;
	$mpf=0;
	$mpsc=0;
	$mpscf=0;
	$mpst=0;
	$mpstf=0;
	$mpobc=0;
	$mpobcf=0;
	$nri=0;
	$total=0;
	$result = mysql_query("SELECT * FROM CET ORDER BY SCORE DESC, ROLLNO ASC;",$con);
	while($row = mysql_fetch_array($result))
	{
		$rollno=$row['ROLLNO'];
		$total++;
		$ai++;
		if(strcmp($row['GENDER'],'F')==0)
		{
			$aif++;
			if(strcmp($row['CATEGORY'],'GEN')==0)
			{
				if(strcmp($row['MP'],'1')==0)
				{
					$mp++;
					$mpf++;
					if(mysql_query("INSERT INTO RANK VALUES($rollno,$ai,$aif,NULL,NULL,NULL,NULL,NULL,NULL,$mp,$mpf,NULL,NULL,NULL,NULL,NULL,NULL,NULL);",$con))
						echo "<br />$total row inserted.";	
					else
						echo "<br />$total row not inserted : ".mysql_error();
				}
				else
				{
					if(strcmp($row['NATIONALITY'],'NRI')==0)
					{
						$nri++;
						if(mysql_query("INSERT INTO RANK VALUES($rollno,$ai,$aif,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,$nri);",$con))
							echo "<br />$total row inserted.";	
						else
							echo "<br />$total row not inserted : ".mysql_error();
					}
					else
					{
						if(mysql_query("INSERT INTO RANK VALUES($rollno,$ai,$aif,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);",$con))
							echo "<br />$total row inserted.";	
						else
							echo "<br />$total row not inserted : ".mysql_error();
					}
				}
			}
			else if(strcmp($row['CATEGORY'],'SC')==0)
			{
				$aisc++;
				$aiscf++;
				if(strcmp($row['MP'],'1')==0)
				{
					$mp++;
					$mpf++;
					$mpsc++;
					$mpscf++;
					if(mysql_query("INSERT INTO RANK VALUES($rollno,$ai,$aif,$aisc,$aiscf,NULL,NULL,NULL,NULL,$mp,$mpf,$mpsc,$mpscf,NULL,NULL,NULL,NULL,NULL);",$con))
						echo "<br />$total row inserted.";	
					else
						echo "<br />$total row not inserted : ".mysql_error();
				}
				else
				{
					if(mysql_query("INSERT INTO RANK VALUES($rollno,$ai,$aif,$aisc,$aiscf,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);",$con))
						echo "<br />$total row inserted.";	
					else
						echo "<br />$total row not inserted : ".mysql_error();
				}
			}
			else if(strcmp($row['CATEGORY'],'ST')==0)
			{
				$aist++;
				$aistf++;
				if(strcmp($row['MP'],'1')==0)
				{
					$mp++;
					$mpf++;
					$mpst++;
					$mpstf++;
					if(mysql_query("INSERT INTO RANK VALUES($rollno,$ai,$aif,NULL,NULL,$aist,$aistf,NULL,NULL,$mp,$mpf,NULL,NULL,$mpst,$mpstf,NULL,NULL,NULL);",$con))
						echo "<br />$total row inserted.";	
					else
						echo "<br />$total row not inserted : ".mysql_error();
				}
				else
				{
					if(mysql_query("INSERT INTO RANK VALUES($rollno,$ai,$aif,NULL,NULL,$aist,$aistf,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);",$con))
						echo "<br />$total row inserted.";	
					else
						echo "<br />$total row not inserted : ".mysql_error();
				}
			}
			else if(strcmp($row['CATEGORY'],'OBC')==0)
			{
				$aiobc++;
				$aiobcf++;
				if(strcmp($row['MP'],'1')==0)
				{
					$mp++;
					$mpf++;
					$mpobc++;
					$mpobcf++;
					if(mysql_query("INSERT INTO RANK VALUES($rollno,$ai,$aif,NULL,NULL,NULL,NULL,$aiobc,$aiobcf,$mp,$mpf,NULL,NULL,NULL,NULL,$mpobc,$mpobcf,NULL);",$con))
						echo "<br />$total row inserted.";	
					else
						echo "<br />$total row not inserted : ".mysql_error();
				}
				else
				{
					if(mysql_query("INSERT INTO RANK VALUES($rollno,$ai,$aif,NULL,NULL,NULL,NULL,$aiobc,$aiobcf,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);",$con))
						echo "<br />$total row inserted.";	
					else
						echo "<br />$total row not inserted : ".mysql_error();
				}
			}
		}
		else //Male Gender
		{
			if(strcmp($row['CATEGORY'],'GEN')==0)
			{
				if(strcmp($row['MP'],'1')==0)
				{
					$mp++;
					if(mysql_query("INSERT INTO RANK VALUES($rollno,$ai,NULL,NULL,NULL,NULL,NULL,NULL,NULL,$mp,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);",$con))
						echo "<br />$total row inserted.";	
					else
						echo "<br />$total row not inserted : ".mysql_error();
				}
				else
				{
					if(strcmp($row['NATIONALITY'],'NRI')==0)
					{
						$nri++;
						if(mysql_query("INSERT INTO RANK VALUES($rollno,$ai,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,$nri);",$con))
							echo "<br />$total row inserted.";	
						else
							echo "<br />$total row not inserted : ".mysql_error();
					}
					else
					{
						if(mysql_query("INSERT INTO RANK VALUES($rollno,$ai,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);",$con))
							echo "<br />$total row inserted.";	
						else
							echo "<br />$total row not inserted : ".mysql_error();
					}
				}
			}
			else if(strcmp($row['CATEGORY'],'SC')==0)
			{
				$aisc++;
				if(strcmp($row['MP'],'1')==0)
				{
					$mp++;
					$mpsc++;
					if(mysql_query("INSERT INTO RANK VALUES($rollno,$ai,NULL,$aisc,NULL,NULL,NULL,NULL,NULL,$mp,NULL,$mpsc,NULL,NULL,NULL,NULL,NULL,NULL);",$con))
						echo "<br />$total row inserted.";	
					else
						echo "<br />$total row not inserted : ".mysql_error();
				}
				else
				{
					if(mysql_query("INSERT INTO RANK VALUES($rollno,$ai,NULL,$aisc,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);",$con))
						echo "<br />$total row inserted.";	
					else
						echo "<br />$total row not inserted : ".mysql_error();
				}
			}
			else if(strcmp($row['CATEGORY'],'ST')==0)
			{
				$aist++;
				if(strcmp($row['MP'],'1')==0)
				{
					$mp++;
					$mpst++;
					if(mysql_query("INSERT INTO RANK VALUES($rollno,$ai,NULL,NULL,NULL,$aist,NULL,NULL,NULL,$mp,NULL,NULL,NULL,$mpst,NULL,NULL,NULL,NULL);",$con))
						echo "<br />$total row inserted.";	
					else
						echo "<br />$total row not inserted : ".mysql_error();
				}
				else
				{
					if(mysql_query("INSERT INTO RANK VALUES($rollno,$ai,NULL,NULL,NULL,$aist,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);",$con))
						echo "<br />$total row inserted.";	
					else
						echo "<br />$total row not inserted : ".mysql_error();
				}
			}
			else if(strcmp($row['CATEGORY'],'OBC')==0)
			{
				$aiobc++;
				if(strcmp($row['MP'],'1')==0)
				{
					$mp++;
					$mpobc++;
					if(mysql_query("INSERT INTO RANK VALUES($rollno,$ai,NULL,NULL,NULL,NULL,NULL,$aiobc,NULL,$mp,NULL,NULL,NULL,NULL,NULL,$mpobc,NULL,NULL);",$con))
						echo "<br />$total row inserted.";	
					else
						echo "<br />$total row not inserted : ".mysql_error();
				}
				else
				{
					if(mysql_query("INSERT INTO RANK VALUES($rollno,$ai,NULL,NULL,NULL,NULL,NULL,$aiobc,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);",$con))
						echo "<br />$total row inserted.";	
					else
						echo "<br />$total row not inserted : ".mysql_error();
				}
			}
		}
	}
	if(mysql_query("commit;",$con))
		echo "<br />Commit";
	else
		echo "<br />Cannot Commit : ".mysql_error();
	mysql_close($con);
?>
</body>
</html>
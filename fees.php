<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CET Counseling Fees Submission</title>
<meta name="keywords" content="CET Counseling Fees Submission" />
<meta name="description" content="CET Counseling Phase Four : Fees Submission" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

	<script type="text/javascript" src="scripts/swfobject/swfobject.js"></script>
        
    <script type="text/javascript">
      var flashvars = {};
      flashvars.cssSource = "css/piecemaker.css";
      flashvars.xmlSource = "piecemaker.xml";
		
      var params = {};
      params.play = "true";
      params.menu = "false";
      params.scale = "showall";
      params.wmode = "transparent";
      params.allowfullscreen = "true";
      params.allowscriptaccess = "always";
      params.allownetworking = "all";
	  
      swfobject.embedSWF('piecemaker.swf', 'piecemaker', '960', '500', '10', null, flashvars,    
      params, null);
    
    </script>

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="scripts/jquery.min.js"></script>
<script type="text/javascript" src="scripts/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

<script type="text/javascript">
	function onlyNumbers(e)
	{
		var keynum;
		var keychar;
		var numcheck;
		if(window.event) // IE8 and earlier
		{
			keynum = e.keyCode;
		}
		else if(e.which) // IE9/Firefox/Chrome/Opera/Safari
		{
			keynum = e.which;
		}
		keychar = String.fromCharCode(keynum);
		numcheck = /\d/;
		return numcheck.test(keychar);
	}
	function checkDate()
	{
		var d = new Date(document.frmfees.dddate.value);
		if(isNaN(d))
		{
			document.frmfees.dddate.value="";
			document.getElementById("msg").innerHTML="Not a valid date";
		}
		else if((d.getMonth()<9) && (d.getDate()<10))
			document.frmfees.dddate.value=d.getFullYear()+"-0"+(d.getMonth()+1)+"-0"+d.getDate();
		else if(d.getMonth()<9)
			document.frmfees.dddate.value=d.getFullYear()+"-0"+(d.getMonth()+1)+"-"+d.getDate();
		else if(d.getDate()<10)
			document.frmfees.dddate.value=d.getFullYear()+"-"+(d.getMonth()+1)+"-0"+d.getDate();
		else
			document.frmfees.dddate.value=d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate();
	}
	function checkDDNo()
	{
		if((Number(document.frmfees.ddno.value)<100000) || (Number(document.frmfees.ddno.value>999999)))
		{
			document.frmfees.ddno.value="";
			document.getElementById("msg").innerHTML="DD Number should be of exactly six digits.";
		}
	}
	function checkValues()
	{
		if((document.frmfees.ddno.value=="") || (document.frmfees.dddate.value=="") || (document.frmfees.ddbank.value==""))
		{
			document.getElementById("msg").innerHTML="Required fields should not be left blank.";
			return false;
		}
	}
</script>

</head>
<body onload="document.frmfees.reset();">
	<?php
		if (!isset($_COOKIE["fees"]))
		{
			if (isset($_COOKIE["attendance"]))
				setcookie("attendance", "", time()-3600);
			if (isset($_COOKIE["document"]))
				setcookie("document", "", time()-3600);
			if (isset($_COOKIE["choice"]))
				setcookie("choice", "", time()-3600);
			header("Location: login.php");
			die();
		}
	?>
	<div id="templatemo_wrapper">

		<div id="templatemo_header">
    
			<div id="site_title">
				<h1><a href="http://www.iips.edu.in" target="_blank"></a></h1>
			</div>
        
			<div id="templatemo_menu" class="ddsmoothmenu">
				<ul>
                	<li><a href="seats.php" target="_blank">Seat Details</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div> <!-- end of templatemo_menu -->
        
		</div> <!-- end of header -->
       
		<div id="templatemo_main">
			<div class="cleaner">
            	
				<div id="msg" class="form1" style="color:#003;"></div>
            	<table border="1" class="tabletext" bordercolor="#000000" style="width:50%; margin:25px; float:left;">
                	<tr>
                    	<td colspan="2">Rollno</td>
                        <td colspan="2" id="rollno"></td>
                    </tr>
                    <tr>
                    	<td colspan="2">Name</td>
                        <td colspan="2" id="fullname"></td>
                    </tr>
                    <tr>
                    	<td colspan="2">Gender</td>
                        <td colspan="2" id="gender"></td>
                    </tr>
                    <tr>
                    	<td colspan="2">Score</td>
                        <td colspan="2" id="score"></td>
                    </tr>
                    <tr>
                    	<td>AI Rank</td>
                        <td id="ai" style="text-align:center;"></td>
                        <td>AI Female Rank</td>
                        <td id="aif" style="text-align:center;"></td>
                	</tr>
                    <tr>
                    	<td style="width:35%;">MP Rank</td>
                        <td id="mp" style="text-align:center;width:15%;"></td>
                        <td style="width:35%;">MP Female Rank</td>
                        <td id="mpf" style="text-align:center;width:15%;"></td>
                	</tr>
                    <tr>
                    	<td>AI SC Rank</td>
                        <td id="aisc" style="text-align:center;"></td>
                        <td>AI SC Female Rank</td>
                        <td id="aiscf" style="text-align:center;"></td>
                	</tr>
                    <tr>
                    	<td>MP SC Rank</td>
                        <td id="mpsc" style="text-align:center;"></td>
                        <td>MP SC Female Rank</td>
                        <td id="mpscf" style="text-align:center;"></td>
                	</tr>
                    <tr>
                    	<td>AI ST Rank</td>
                        <td id="aist" style="text-align:center;"></td>
                        <td>AI ST Female Rank</td>
                        <td id="aistf" style="text-align:center;"></td>
                	</tr>
                    <tr>
                    	<td>MP ST Rank</td>
                        <td id="mpst" style="text-align:center;"></td>
                        <td>MP ST Female Rank</td>
                        <td id="mpstf" style="text-align:center;"></td>
                	</tr>
                    <tr>
                    	<td>AI OBC Rank</td>
                        <td id="aiobc" style="text-align:center;"></td>
                        <td>AI OBC Female Rank</td>
                        <td id="aiobcf" style="text-align:center;"></td>
                	</tr>
                    <tr>
                    	<td>MP OBC Rank</td>
                        <td id="mpobc" style="text-align:center;"></td>
                        <td>MP OBC Female Rank</td>
                        <td id="mpobcf" style="text-align:center;"></td>
                	</tr>
                    <tr>
                    	<td colspan="2">NRI Rank</td>
                        <td colspan="2" id="nri" style="text-align:center;"></td>
                	</tr>
                </table>
                <form name="frmfees" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                <fieldset style="float:right; width:35%; margin:25px;">
                	<legend>Fees Payment</legend>
                    	<table border="0">
                        	<tr>
	                			<td>Amount</td>
                                <td><input type="radio" name="amt" value="10000" checked="checked" />10000</td>
                                <td><input type="radio" name="amt"  value="3000" />3000</td>
                          	</tr>
                            <tr>
	                        	<td>DD Number </td>
                                <td colspan="2"><input type="number" name="ddno" onkeypress="return onlyNumbers(event);" onblur="checkDDNo();" /></td>
                      		</tr>
                            <tr>
                            	<td>DD Date (yyyy-mm-dd)</td>
                                <td colspan="2"><input type="date" name="dddate" onblur="checkDate();" /></td>
                           	</tr>
                            <tr>
                            	<td>DD Bank </td>
                                <td colspan="2"><input type="text" name="ddbank" onkeypress="return !onlyNumbers(event);" /></td>
                           	</tr>
                            <tr>
                                <td colspan="3" style="text-align:center;">
                                	<input type="submit" name="submit" onclick="return checkValues();" value="Submit" />
                                    &emsp;&emsp;&emsp;&emsp;
                                    <input type="submit" name="submit" value="Reject" />
                                </td>
                           	</tr>
                        </table>
            	</fieldset>
				</form>
				
                </div>
            </div>
        </div>
    </div>
    
	<div id="templatemo_footer_wrapper">
		<div id="templatemo_footer">
			Copyright © 2012 KAP Corporation
		</div>
	</div> 
    <?php
		function checkInput1($value)
		{
			// Stripslashes
			if (get_magic_quotes_gpc())
	  			$value = stripslashes($value);
			// Quote
				$value = "'" . mysql_real_escape_string($value) . "'";
			return $value;
		}
		function checkInput2($value)
		{
			// Stripslashes
			if (get_magic_quotes_gpc())
	  			$value = stripslashes($value);
			// Quote if not a number
			if(!is_numeric($value))
				$value = "'" . mysql_real_escape_string($value) . "'";
			return $value;
		}
		function sqlQuery($con)
		{
			$sql="SELECT * FROM ((CET AS C INNER JOIN RANK AS R ON C.ROLLNO=R.ROLLNO) INNER JOIN ADMISSION AS A ON R.ROLLNO=A.ROLLNO) LEFT JOIN FEES AS F ON A.ROLLNO=F.ROLLNO WHERE ADM=1 AND FEE IS NULL ORDER BY AI;";
			$result=mysql_query($sql,$con);
			if(!$result)
			{
				die('<script type="text/javascript">
				alert("Could not match data : ' . mysql_error().'");
				document.frmfees.submit[0].disabled=true;
				document.frmfees.submit[1].disabled=true;
				</script>');
			}
			if(mysql_num_rows($result)==0)
			{
				?>
		   		<script type="text/javascript">
				document.getElementById("rollno").innerHTML="";
				document.getElementById("fullname").innerHTML="";
				document.getElementById("gender").innerHTML="";						
				document.getElementById("score").innerHTML="";
				document.getElementById("ai").innerHTML="";
				document.getElementById("aif").innerHTML="";
				document.getElementById("aisc").innerHTML="";
				document.getElementById("aiscf").innerHTML="";
				document.getElementById("aist").innerHTML="";
				document.getElementById("aistf").innerHTML="";
				document.getElementById("aiobc").innerHTML="";
				document.getElementById("aiobcf").innerHTML="";
				document.getElementById("mp").innerHTML="";
				document.getElementById("mpf").innerHTML="";
				document.getElementById("mpsc").innerHTML="";
				document.getElementById("mpscf").innerHTML="";
				document.getElementById("mpst").innerHTML="";
				document.getElementById("mpstf").innerHTML="";
				document.getElementById("mpobc").innerHTML="";
				document.getElementById("mpobcf").innerHTML="";
				document.getElementById("nri").innerHTML="";
				document.frmfees.submit[0].disabled=true;
				document.frmfees.submit[1].disabled=true;
				alert("No Students Left.");
				document.getElementById("msg").innerHTML="No Students Left.";
				</script>  
    	      	<?php
				die();
			}
					
			$row = mysql_fetch_array($result);
			?>
			<script type="text/javascript">
			document.getElementById("rollno").innerHTML="<?php echo $row[0]; ?>";
			document.getElementById("fullname").innerHTML="<?php echo $row["FNAME"].' '.$row["LNAME"]; ?>";
			document.getElementById("gender").innerHTML="<?php echo $row["GENDER"]; ?>";						
			document.getElementById("score").innerHTML="<?php echo $row["SCORE"]; ?>";
			document.getElementById("ai").innerHTML="<?php echo $row["AI"]; ?>";
			document.getElementById("aif").innerHTML="<?php echo $row["AIF"]; ?>";
			document.getElementById("aisc").innerHTML="<?php echo $row["AISC"]; ?>";
			document.getElementById("aiscf").innerHTML="<?php echo $row["AISCF"]; ?>";
			document.getElementById("aist").innerHTML="<?php echo $row["AIST"]; ?>";
			document.getElementById("aistf").innerHTML="<?php echo $row["AISTF"]; ?>";
			document.getElementById("aiobc").innerHTML="<?php echo $row["AIOBC"]; ?>";
			document.getElementById("aiobcf").innerHTML="<?php echo $row["AIOBCF"]; ?>";
			document.getElementById("mp").innerHTML="<?php echo $row[19]; ?>";
			document.getElementById("mpf").innerHTML="<?php echo $row["MPF"]; ?>";
			document.getElementById("mpsc").innerHTML="<?php echo $row["MPSC"]; ?>";
			document.getElementById("mpscf").innerHTML="<?php echo $row["MPSCF"]; ?>";
			document.getElementById("mpst").innerHTML="<?php echo $row["MPST"]; ?>";
			document.getElementById("mpstf").innerHTML="<?php echo $row["MPSTF"]; ?>";
			document.getElementById("mpobc").innerHTML="<?php echo $row["MPOBC"]; ?>";
			document.getElementById("mpobcf").innerHTML="<?php echo $row["MPOBCF"]; ?>";
			document.getElementById("nri").innerHTML="<?php echo $row["NRI"]; ?>";
			</script>
			<?php
			return $row;
		}
		include("connectdb.php");
		$row=sqlQuery($con);
		if(isset($_POST["submit"]))
		{
			$rno=checkInput2($row[0]);
			$ddno=checkInput2($_POST["ddno"]);
			$ddamt=checkInput1($_POST["amt"]);
			$dddate=checkInput1($_POST["dddate"]);
			$ddbank=checkInput1($_POST["ddbank"]);
			if($_POST["submit"]=="Reject")
			{
				$sql3="INSERT INTO FEES VALUES($rno,0,NULL,NULL,NULL,NULL);";
				$result3=mysql_query($sql3,$con);
				if(!$result3)
				{
					die('<script type="text/javascript">
					alert("Admission Cannot Be Cancelled. Error : ' . mysql_error().'");
					document.frmfees.submit[0].disabled=true;
					document.frmfees.submit[1].disabled=true;
					</script>');
				}
				echo '<script type="text/javascript">document.getElementById("msg").innerHTML="Rollno '.$rno.' Admission Cancelled.";</script>';
				$sql4="SELECT * FROM ADMISSION WHERE ROLLNO=$rno;";
				$result4=mysql_query($sql4,$con);
				if(!$result4)
				{
					die('<script type="text/javascript">
					alert("Admission Cancelled but the allotted seat cannot be incremented. Error : ' . mysql_error().'");
					document.frmfees.submit[0].disabled=true;
					document.frmfees.submit[1].disabled=true;
					</script>');
				}
			 	if(mysql_num_rows($result4)==0)
				{
					die('<script type="text/javascript">
					alert("Admission Cancelled but allotted seat cannot be incremented. Error : Cannot find any valid record of '.$rno.' in Admission Table.");
					document.frmfees.submit[0].disabled=true;
					document.frmfees.submit[1].disabled=true;
					</script>');
				}
				$row1=mysql_fetch_array($result4);
				$course=checkInput1($row1["COURSE"]);
				$seat=$row1["SEAT"];
				$sql5="UPDATE SEATS SET $seat=$seat+1  WHERE COURSE=$course;";
				$result5=mysql_query($sql5,$con);
				if(!$result5)
				{
					die('<script type="text/javascript">
					alert("Admission Cancelled but the allotted seat cannot be incremented. Error : ' . mysql_error().'");
					document.frmfees.submit[0].disabled=true;
					document.frmfees.submit[1].disabled=true;
					</script>');
				}
				echo '<script type="text/javascript">document.getElementById("msg").innerHTML=document.getElementById("msg").innerHTML+"<br />Allotted Seat Incremented.";</script>';

			}
			else if($_POST["submit"]=="Submit")
			{
				
				$sql6="INSERT INTO FEES VALUES($rno,1,$ddno,$ddamt,$dddate,$ddbank);";
				$result6=mysql_query($sql6,$con);
				if(!$result6)
				{
					die('<script type="text/javascript">
					alert("Fees Payment could not be done. Error : Cannot Enter Data. Details : ' . mysql_error().'");
					document.frmfees.submit[0].disabled=true;
					document.frmfees.submit[1].disabled=true;
					</script>');
				}
				echo '<script type="text/javascript">document.getElementById("msg").innerHTML="Rollno '.$rno.' Fees Paid. Admission Confirmed.";</script>';
			}
		}
		$row=sqlQuery($con);
	?>
</body>
</html>
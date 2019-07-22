<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CET Counseling Course Selection</title>
<meta name="keywords" content="CET Counseling Course Selection" />
<meta name="description" content="CET Counseling Phase Three : Course Selection" />
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
	function courseFunc()
	{
		document.frmcourse.submit[0].disabled=true;
		document.frmcourse.submit[1].disabled=true;
		document.frmcourse.changecourse.click();
	}
	function seatsCheck()
	{
		document.getElementById("ai1").checked=true;
		if(document.getElementById("ai1").disabled==true)
		{
			document.getElementById("ai1").checked=false;
			document.getElementById("aif1").checked=true;
		}
		else
			return;
		if(document.getElementById("aif1").disabled==true)
		{
			document.getElementById("aif1").checked=false;
			document.getElementById("aisc1").checked=true;
		}
		else
			return;
		if(document.getElementById("aisc1").disabled==true)
		{
			document.getElementById("aisc1").checked=false;
			document.getElementById("aiscf1").checked=true;
		}
		else
			return;
		if(document.getElementById("aiscf1").disabled==true)
		{
			document.getElementById("aiscf1").checked=false;
			document.getElementById("aist1").checked=true;
		}
		else
			return;
		if(document.getElementById("aist1").disabled==true)
		{
			document.getElementById("aist1").checked=false;
			document.getElementById("aistf1").checked=true;
		}
		else
			return;
		if(document.getElementById("aistf1").disabled==true)
		{
			document.getElementById("aistf1").checked=false;
			document.getElementById("aiobc1").checked=true;
		}
		else
			return;
		if(document.getElementById("aiobc1").disabled==true)
		{
			document.getElementById("aiobc1").checked=false;
			document.getElementById("aiobcf1").checked=true;
		}
		else
			return;
		if(document.getElementById("aiobcf1").disabled==true)
		{
			document.getElementById("aiobcf1").checked=false;
			document.getElementById("mp1").checked=true;
		}
		else
			return;
				if(document.getElementById("mp1").disabled==true)
		{
			document.getElementById("mp1").checked=false;
			document.getElementById("mpf1").checked=true;
		}
		else
			return;
		if(document.getElementById("mpf1").disabled==true)
		{
			document.getElementById("mpf1").checked=false;
			document.getElementById("mpsc1").checked=true;
		}
		else
			return;
		if(document.getElementById("mpsc1").disabled==true)
		{
			document.getElementById("mpsc1").checked=false;
			document.getElementById("mpscf1").checked=true;
		}
		else
			return;
		if(document.getElementById("mpscf1").disabled==true)
		{
			document.getElementById("mpscf1").checked=false;
			document.getElementById("mpst1").checked=true;
		}
		else
			return;
		if(document.getElementById("mpst1").disabled==true)
		{
			document.getElementById("mpst1").checked=false;
			document.getElementById("mpstf1").checked=true;
		}
		else
			return;
		if(document.getElementById("mpstf1").disabled==true)
		{
			document.getElementById("mpstf1").checked=false;
			document.getElementById("mpobc1").checked=true;
		}
		else
			return;
		if(document.getElementById("mpobc1").disabled==true)
		{
			document.getElementById("mpobc1").checked=false;
			document.getElementById("mpobcf1").checked=true;
		}
		else
			return;
		if(document.getElementById("mpobcf1").disabled==true)
		{
			document.getElementById("mpobcf1").checked=false;
			document.getElementById("nri1").checked=true;
		}
		else
			return;
		if(document.getElementById("nri1").disabled==true)
		{
			document.getElementById("nri1").checked=false;
		}
		else
			return;
		document.frmcourse.submit[0].disabled=true;
		document.getElementById("msg").innerHTML="No Seats Available. Please Change Course.";
	}
	
</script>

</head>
<body onload="seatsCheck();">
	<?php
		if (!isset($_COOKIE["choice"]))
		{
			if (isset($_COOKIE["attendance"]))
				setcookie("attendance", "", time()-3600);
			if (isset($_COOKIE["document"]))
				setcookie("document", "", time()-3600);
			if (isset($_COOKIE["fees"]))
				setcookie("fees", "", time()-3600);
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
           
                <form name="frmcourse" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
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
                    <tr>
                    	<td colspan="2" style="text-align:center;">
                        	<input type="radio" name="course" value="M.TECH." id="M.TECH." checked="checked" onchange="courseFunc();" />
                            M.TECH(IT)(5 <span style = "vertical-align:super; font-size : 8px;">1</span>/<span style = "vertical-align:sub; font-size : 9px;">2</span> yr)
                     	</td>
                        <td colspan="2" style="text-align:center;">
                        	<input type="radio" name="course" id="MCA" value="MCA" onchange="courseFunc();" />
                            MCA(6 yr)
                     	</td>
                	</tr>
                    <tr>
                    	<td colspan="2" style="text-align:center;">
                        	<input type="submit" name="submit" value="Submit" />
                            <button name="changecourse" style="display:none;">Change Course</button>
                      	</td>
                    	<td colspan="2" style="text-align:center;">
                        	<input type="submit" name="submit" value="Reject" />
                      	</td>
                 	</tr>
                </table>
                
                <fieldset style="float:right; width:30%; margin:25px;">
                	<legend>Available Seats</legend>
                    <input type="radio" name="seat" id="ai1" value="AI" checked="checked" /> AI Rank <br />
                    <input type="radio" name="seat" id="aif1" value="AIF" /> AI Female Rank <br />
                    <input type="radio" name="seat" id="aisc1" value="AISC" /> AI SC Rank <br />
                    <input type="radio" name="seat" id="aiscf1" value="AISCF" /> AI SC Female Rank <br />
                    <input type="radio" name="seat" id="aist1" value="AIST" /> AI ST Rank <br />
                    <input type="radio" name="seat" id="aistf1" value="AISTF" /> AI ST Female Rank <br />
                    <input type="radio" name="seat" id="aiobc1" value="AIOBC" /> AI OBC Rank <br />
                    <input type="radio" name="seat" id="aiobcf1" value="AIOBCF" /> AI OBC Female Rank <br />
                    <input type="radio" name="seat" id="mp1" value="MP" /> MP Rank <br />
                    <input type="radio" name="seat" id="mpf1" value="MPF" /> MP Female Rank <br />
                    <input type="radio" name="seat" id="mpsc1" value="MPSC" /> MP SC Rank <br />
                    <input type="radio" name="seat" id="mpscf1" value="MPSCF" /> MP SC Female Rank <br />
                    <input type="radio" name="seat" id="mpst1" value="MPST" /> MP ST Rank <br />
                    <input type="radio" name="seat" id="mpstf1" value="MPSTF" /> MP ST Female Rank <br />
                    <input type="radio" name="seat" id="mpobc1" value="MPOBC" /> MP OBC Rank <br />
                    <input type="radio" name="seat" id="mpobcf1" value="MPOBCF" /> MP OBC Female Rank <br />
                    <input type="radio" name="seat" id="nri1" value="NRI" /> NRI Rank <br />		      		        
            	</fieldset>
				</form>           
				
            </div>
        </div>
    </div>
    
	<div id="templatemo_footer_wrapper" style="clear:both;">
		<div id="templatemo_footer">
			Copyright © 2012 KAP Corporation
		</div>
	</div> 
	<?php
		function checkInput($value)
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
			$sql="SELECT * FROM ((CET AS C INNER JOIN RANK AS R ON C.ROLLNO=R.ROLLNO) INNER JOIN DOCUMENT AS D ON R.ROLLNO=D.ROLLNO) LEFT JOIN ADMISSION AS A ON D.ROLLNO=A.ROLLNO WHERE DOC=1 AND ADM IS NULL ORDER BY AI;";
			$result=mysql_query($sql,$con);
			if(!$result)
			{
				die('<script type="text/javascript">
				alert("Could not match data : ' . mysql_error().'");
				document.frmcourse.submit[0].disabled=true;
				document.frmcourse.submit[1].disabled=true;
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
				document.frmcourse.submit[0].disabled=true;
				document.frmcourse.submit[1].disabled=true;
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
			if(Number(<?php echo $row[6]; ?>)==0)
			{
				document.getElementById("mp1").disabled=true;
				document.getElementById("mpf1").disabled=true;
				document.getElementById("mpsc1").disabled=true;
				document.getElementById("mpscf1").disabled=true;
				document.getElementById("mpst1").disabled=true;
				document.getElementById("mpstf1").disabled=true;
				document.getElementById("mpobc1").disabled=true;
				document.getElementById("mpobcf1").disabled=true;
			}
			
			<?php
			if(strcmp($row["GENDER"],"M")==0)
			{ 
				?>
				document.getElementById("aif1").disabled=true;
				document.getElementById("aiscf1").disabled=true;
				document.getElementById("aistf1").disabled=true;
				document.getElementById("aiobcf1").disabled=true;
				document.getElementById("mpf1").disabled=true;
				document.getElementById("mpscf1").disabled=true;
				document.getElementById("mpstf1").disabled=true;
				document.getElementById("mpobcf1").disabled=true;				
				<?php
			}
			
			if(strcmp($row["CATEGORY"],"GEN")==0)
			{ 
				?>
				document.getElementById("aisc1").disabled=true;
				document.getElementById("aiscf1").disabled=true;
				document.getElementById("aist1").disabled=true;
				document.getElementById("aistf1").disabled=true;
				document.getElementById("aiobc1").disabled=true;
				document.getElementById("aiobcf1").disabled=true;
				document.getElementById("mpsc1").disabled=true;
				document.getElementById("mpscf1").disabled=true;
				document.getElementById("mpst1").disabled=true;
				document.getElementById("mpstf1").disabled=true;
				document.getElementById("mpobc1").disabled=true;
				document.getElementById("mpobcf1").disabled=true;				
				<?php
			}
			else if(strcmp($row["CATEGORY"],"SC")==0)
			{
				?>
				document.getElementById("aist1").disabled=true;
				document.getElementById("aistf1").disabled=true;
				document.getElementById("aiobc1").disabled=true;
				document.getElementById("aiobcf1").disabled=true;
				document.getElementById("mpst1").disabled=true;
				document.getElementById("mpstf1").disabled=true;
				document.getElementById("mpobc1").disabled=true;
				document.getElementById("mpobcf1").disabled=true;				
				<?php
			}
			else if(strcmp($row["CATEGORY"],"ST")==0)
			{
				?>
				document.getElementById("aisc1").disabled=true;
				document.getElementById("aiscf1").disabled=true;
				document.getElementById("aiobc1").disabled=true;
				document.getElementById("aiobcf1").disabled=true;
				document.getElementById("mpsc1").disabled=true;
				document.getElementById("mpscf1").disabled=true;
				document.getElementById("mpobc1").disabled=true;
				document.getElementById("mpobcf1").disabled=true;				
				<?php
			}
			else if(strcmp($row["CATEGORY"],"OBC")==0)
			{
				?>
				document.getElementById("aisc1").disabled=true;
				document.getElementById("aiscf1").disabled=true;
				document.getElementById("aist1").disabled=true;
				document.getElementById("aistf1").disabled=true;
				document.getElementById("mpsc1").disabled=true;
				document.getElementById("mpscf1").disabled=true;
				document.getElementById("mpst1").disabled=true;
				document.getElementById("mpstf1").disabled=true;
				<?php
			}
			if(strcmp($row["NATIONALITY"],"NRI")!=0)
			{ 
				?>
				document.getElementById("nri1").disabled=true;
				<?php
			}
			?>
			</script>  
			<?php
			return $row;
		}
		function sqlQuery1($course,$con)
		{
			$sql1="SELECT * FROM SEATS WHERE COURSE=$course;";
			$result1=mysql_query($sql1,$con);
			if(!$result1)
			{
				die('<script type="text/javascript">
				alert("Could not match data : ' . mysql_error().'");
				document.frmcourse.submit[0].disabled=true;
				document.frmcourse.submit[1].disabled=true;
				</script>');
			}
			if(mysql_num_rows($result1)==0)
			{
				die('<script type="text/javascript">
				alert("Invalid Course Name");
				document.frmcourse.submit[0].disabled=true;
				document.frmcourse.submit[1].disabled=true;
				</script>');
			}
			$row1 = mysql_fetch_array($result1);
			?>
            <script type="text/javascript">
			<?php
			if($row1['AI']=="0")
			{
				?>
				document.getElementById("ai1").disabled=true;
				<?php
			}
			else
			{
				?>
				document.getElementById("ai1").disabled=false;
				<?php
			}
			if($row1['AIF']=="0")
			{
				?>
				document.getElementById("aif1").disabled=true;
				<?php
			}
			else
			{
				?>
				document.getElementById("aif1").disabled=false;
				<?php
			}
			if($row1['AISC']=="0")
			{
				?>
				document.getElementById("aisc1").disabled=true;
				<?php
			}
			else
			{
				?>
				document.getElementById("aisc1").disabled=false;
				<?php
			}
			if($row1['AISCF']=="0")
			{
				?>
				document.getElementById("aiscf1").disabled=true;
				<?php
			}
			else
			{
				?>
				document.getElementById("aiscf1").disabled=false;
				<?php
			}
			if($row1['AIST']=="0")
			{
				?>
				document.getElementById("aist1").disabled=true;
				<?php
			}
			else
			{
				?>
				document.getElementById("aist1").disabled=false;
				<?php
			}
			if($row1['AISTF']=="0")
			{
				?>
				document.getElementById("aistf1").disabled=true;
				<?php
			}
			else
			{
				?>
				document.getElementById("aistf1").disabled=false;
				<?php
			}
			if($row1['AIOBC']=="0")
			{
				?>
				document.getElementById("aiobc1").disabled=true;
				<?php
			}
			else
			{
				?>
				document.getElementById("aiobc1").disabled=false;
				<?php
			}
			if($row1['AIOBCF']=="0")
			{
				?>
				document.getElementById("aiobcf1").disabled=true;
				<?php
			}
			else
			{
				?>
				document.getElementById("aiobcf1").disabled=false;
				<?php
			}
			if($row1['MP']=="0")
			{
				?>
				document.getElementById("mp1").disabled=true;
				<?php
			}
			else
			{
				?>
				document.getElementById("mp1").disabled=false;
				<?php
			}
			if($row1['MPF']=="0")
			{
				?>
				document.getElementById("mpf1").disabled=true;
				<?php
			}
			else
			{
				?>
				document.getElementById("mpf1").disabled=false;
				<?php
			}
			if($row1['MPSC']=="0")
			{
				?>
				document.getElementById("mpsc1").disabled=true;
				<?php
			}
			else
			{
				?>
				document.getElementById("mpsc1").disabled=false;
				<?php
			}
			if($row1['MPSCF']=="0")
			{
				?>
				document.getElementById("mpscf1").disabled=true;
				<?php
			}
			else
			{
				?>
				document.getElementById("mpscf1").disabled=false;
				<?php
			}
			if($row1['MPST']=="0")
			{
				?>
				document.getElementById("mpst1").disabled=true;
				<?php
			}
			else
			{
				?>
				document.getElementById("mpst1").disabled=false;
				<?php
			}if($row1['MPSTF']=="0")
			{
				?>
				document.getElementById("mpstf1").disabled=true;
				<?php
			}
			else
			{
				?>
				document.getElementById("mpstf1").disabled=false;
				<?php
			}if($row1['MPOBC']=="0")
			{
				?>
				document.getElementById("mpobc1").disabled=true;
				<?php
			}
			else
			{
				?>
				document.getElementById("mpobc1").disabled=false;
				<?php
			}if($row1['MPOBCF']=="0")
			{
				?>
				document.getElementById("mpobcf1").disabled=true;
				<?php
			}
			else
			{
				?>
				document.getElementById("mpobcf1").disabled=false;
				<?php
			}if($row1['NRI']=="0")
			{
				?>
				document.getElementById("nri1").disabled=true;
				<?php
			}
			else
			{
				?>
				document.getElementById("nri1").disabled=false;
				<?php
			}
			?>
			</script>
            <?php
		}
		include("connectdb.php");
		if((!isset($_POST["submit"])) && (!isset($_POST["changecourse"])))
		{
			sqlQuery1("'M.TECH.'",$con);
			$row=sqlQuery($con);
		}
		else if(isset($_POST["changecourse"]))
		{
			$course=checkInput($_POST["course"]);
			sqlQuery1($course,$con);
			?>
	    	<script type="text/javascript">
				document.getElementById('<?php echo $_POST["course"]; ?>').checked=true;			
			</script>
			<?php
			$row=sqlQuery($con);
		}
		else if(isset($_POST["submit"]))
		{
			$course=checkInput($_POST["course"]);
			sqlQuery1($course,$con);
			$row=sqlQuery($con);
			$rno=checkInput($row[0]);
			$seat=checkInput($_POST["seat"]);
			
			if($_POST["submit"]=="Reject")
			{
				$sql3="INSERT INTO ADMISSION VALUES($rno,0,NULL,NULL);";
				$result3=mysql_query($sql3,$con);
				if(!$result3)
				{
					die('<script type="text/javascript">
					alert("Admission Cannot Be Cancelled. Error : ' . mysql_error().'");
					document.frmcourse.submit[0].disabled=true;
					document.frmcourse.submit[1].disabled=true;
					</script>');
				}
				echo '<script type="text/javascript">document.getElementById("msg").innerHTML="Rollno '.$rno.' Admission Cancelled.";</script>';
			}
			else if($_POST["submit"]=="Submit")
			{
				
				$sql4="INSERT INTO ADMISSION VALUES($rno,1,$course,$seat);";
				$result4=mysql_query($sql4,$con);
				if(!$result4)
				{
					die('<script type="text/javascript">
					alert("Seat Not Allotted. Error : Cannot Enter Data. Details : ' . mysql_error().'");
					document.frmcourse.submit[0].disabled=true;
					document.frmcourse.submit[1].disabled=true;
					</script>');
				}
				$sql5="UPDATE SEATS SET ".$_POST['seat']."=".$_POST['seat']."-1 
					  WHERE COURSE=$course;";
  				$result5=mysql_query($sql5,$con);
				if(!$result5)
				{
					die('<script type="text/javascript">
					alert("Seat Not Allotted. Error : ' . mysql_error().'");
					document.frmcourse.submit[0].disabled=true;
					document.frmcourse.submit[1].disabled=true;
					</script>');
				}
				echo '<script type="text/javascript">document.getElementById("msg").innerHTML="Rollno '.$rno.' Seat Allotted.";</script>';
			}
			?>
	        <script type="text/javascript">
				document.getElementById("M.TECH.").checked=true;
			</script>
	        <?php
			sqlQuery1("'M.TECH.'",$con);
			$row=sqlQuery($con);
		}
	?>
</body>
</html>
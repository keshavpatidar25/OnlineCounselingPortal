<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CET Counseling Attendance</title>
<meta name="keywords" content="CET Counseling Attendance" />
<meta name="description" content="CET Counseling Phase One : Attendance" />
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
</script>

</head>
<body onload="document.frmsearch.reset();">
	<?php
		if (!isset($_COOKIE["attendance"]))
		{
			if (isset($_COOKIE["document"]))
				setcookie("document", "", time()-3600);
			if (isset($_COOKIE["choice"]))
				setcookie("choice", "", time()-3600);
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
				
				<form name="frmsearch" action="attendancesearch.php" target="_blank" method="post" style="text-align:right;">
                	Enter Rollno you want to search &nbsp;&nbsp;
                    <input type="search" name="rollno" style="background-color:#E8E8E8;" onkeypress="return onlyNumbers(event);" />
                    <input type="submit" name="search" value="Search" />
              	</form>
                
                <form name="frmattend" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
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
                        	<input type="radio" name="attendance" value="1" checked="checked" />
                            Present
                     	</td>
                        <td colspan="2" style="text-align:center;">
                        	<input type="radio" name="attendance" value="0" />
                            Absent
                     	</td>
                	</tr>
                    <tr>
                    	<td colspan="4" style="text-align:center;">
                        	<input type="submit" id="sub" name="submit" value="Submit" />
                      	</td>
                 	</tr>
                </table>
                
                <fieldset style="float:right; width:30%; margin:25px;">
                	<legend>Sort By</legend>
                    <input type="radio" name="sort" id="ai1" value="ai" checked="checked" onchange="document.getElementById('sub').disabled=true;" /> AI Rank <br />
                    <input type="radio" name="sort" id="aif1" value="aif" onchange="document.getElementById('sub').disabled=true;" /> AI Female Rank <br />
                    <input type="radio" name="sort" id="aisc1" value="aisc" onchange="document.getElementById('sub').disabled=true;" /> AI SC Rank <br />
                    <input type="radio" name="sort" id="aiscf1" value="aiscf" onchange="document.getElementById('sub').disabled=true;" /> AI SC Female Rank <br />
                    <input type="radio" name="sort" id="aist1" value="aist" onchange="document.getElementById('sub').disabled=true;" /> AI ST Rank <br />
                    <input type="radio" name="sort" id="aistf1" value="aistf" onchange="document.getElementById('sub').disabled=true;" /> AI ST Female Rank <br />
                    <input type="radio" name="sort" id="aiobc1" value="aiobc" onchange="document.getElementById('sub').disabled=true;" /> AI OBC Rank <br />
                    <input type="radio" name="sort" id="aiobcf1" value="aiobcf" onchange="document.getElementById('sub').disabled=true;" /> AI OBC Female Rank <br />
                    <input type="radio" name="sort" id="r.mp1" value="r.mp" onchange="document.getElementById('sub').disabled=true;" /> MP Rank <br />
                    <input type="radio" name="sort" id="mpf1" value="mpf" onchange="document.getElementById('sub').disabled=true;" /> MP Female Rank <br />
                    <input type="radio" name="sort" id="mpsc1" value="mpsc" onchange="document.getElementById('sub').disabled=true;" /> MP SC Rank <br />
                    <input type="radio" name="sort" id="mpscf1" value="mpscf" onchange="document.getElementById('sub').disabled=true;" /> MP SC Female Rank <br />
                    <input type="radio" name="sort" id="mpst1" value="mpst" onchange="document.getElementById('sub').disabled=true;" /> MP ST Rank <br />
                    <input type="radio" name="sort" id="mpstf1" value="mpstf" onchange="document.getElementById('sub').disabled=true;" /> MP ST Female Rank <br />
                    <input type="radio" name="sort" id="mpobc1" value="mpobc" onchange="document.getElementById('sub').disabled=true;" /> MP OBC Rank <br />
                    <input type="radio" name="sort" id="mpobcf1" value="mpobcf" onchange="document.getElementById('sub').disabled=true;" /> MP OBC Female Rank <br />
                    <input type="radio" name="sort" id="nri1" value="nri" onchange="document.getElementById('sub').disabled=true;" /> NRI Rank <br />		      		        
                    <input type="submit" name="submitsort" value="Sort" onclick="document.getElementById('sub').disabled=false;" />
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
		include("connectdb.php");
		if((isset($_POST["submitsort"])) || (isset($_POST["submit"])))
		{
			$sort=$_POST['sort'];
			$sql="SELECT * FROM (CET AS C INNER JOIN RANK AS R ON C.ROLLNO=R.ROLLNO) LEFT JOIN ATTENDANCE AS A ON R.ROLLNO=A.ROLLNO WHERE ATT IS NULL AND $sort IS NOT NULL ORDER BY AI;";
			?>
	    	<script type="text/javascript">
				document.getElementById('<?php echo $sort; ?>'+'1').checked="checked";
			</script>
			<?php
		}
			
		if((!isset($_POST["submitsort"])) && (!isset($_POST["submit"])) && (!isset($_POST["search"])))
		{
			$sql="SELECT * FROM (CET AS C INNER JOIN RANK AS R ON C.ROLLNO=R.ROLLNO) LEFT JOIN ATTENDANCE AS A ON R.ROLLNO=A.ROLLNO WHERE ATT IS NULL ORDER BY AI;";
		}
		
		$result=mysql_query($sql,$con);
		if(!$result)
		die('<script type="text/javascript">alert("Could not match data: ' . mysql_error().'");</script>');
		if(mysql_num_rows($result)<=0)
		{
			echo '<script type="text/javascript">alert("No students left.");</script>';
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
			document.getElementById('sub').disabled=true;
			document.getElementById("msg").innerHTML="No Students Left";
			</script>  
          	<?php
			die();
		}
		else
		{
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
		}
		
		if(isset($_POST["submit"]))
		{	
			$rno=checkinput($row[0]);
			$att=checkinput($_POST['attendance']);
			$sql1="INSERT INTO ATTENDANCE VALUES($rno,$att);";
			$result1=mysql_query($sql1,$con);
			if(!$result1)
			{
				die('<script type="text/javascript">alert("Could not insert data: ' . mysql_error().'");</script>');
			}
			else
			{
				echo '<script type="text/javascript">document.getElementById("msg").innerHTML="Rollno '.$rno.' Attendence Marked.";</script>';
			}
		
			$result=mysql_query($sql,$con);
			if(!$result)
			die('<script type="text/javascript">alert("Could not match data: ' . mysql_error().'");</script>');
			if(mysql_num_rows($result)<=0)
			{
				echo '<script type="text/javascript">alert("No students left.");</script>';
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
				document.getElementById('sub').disabled=true;
				document.getElementById("msg").innerHTML="No Students Left";
				</script>  
                <?php
				die();
			}
			else
			{
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
			}
		}
	?>
    
</body>
</html>
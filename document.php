<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CET Counseling Document Submission</title>
<meta name="keywords" content="CET Counseling Document Submission" />
<meta name="description" content="CET Counseling Phase Two : Document Submission" />
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
		function enableIncome()
		{
			if(document.frmdoc.caste.checked==true)
				document.frmdoc.incomecert.disabled=false;
			else
			{
				document.frmdoc.incomecert.checked=false;
				document.frmdoc.incomecert.disabled=true;
			}
			if(document.frmdoc.incomecert.checked==true)
				document.frmdoc.income.disabled=false;
			else
			{
				document.frmdoc.income.value="";
				document.frmdoc.income.disabled=true;
			}
		}
		
		function tenthCalc()
		{
			document.getElementById("main").hidden=true;
			document.getElementById("calc").hidden=false;
			document.getElementById("sub6").hidden=false;
			document.getElementById("mark6").hidden=false;
			document.getElementById("calcbtn").disabled=false;
			document.getElementById("sub1").innerHTML="English";
			document.getElementById("sub2").innerHTML="Hindi";
			document.getElementById("sub3").innerHTML="Mathematics";
			document.getElementById("sub4").innerHTML="Social Science";
			document.getElementById("sub5").innerHTML="Science";
			document.getElementById("sub6").innerHTML="Information Technology";
			document.getElementById("mark1").disabled=false;
			document.getElementById("mark2").disabled=false;
			document.getElementById("mark3").disabled=false;
			document.getElementById("mark4").disabled=false;
			document.getElementById("mark5").disabled=false;
			document.getElementById("mark6").disabled=false;
			document.frmdoc.tenth.disabled=true;
			document.frmdoc.tenthcalc.disabled=true;
			document.frmdoc.twelfth.disabled=true;
			document.frmdoc.twelfthcalc.disabled=true;
			document.frmdoc.tc.disabled=true;
			document.frmdoc.mc.disabled=true;
			document.frmdoc.mp.disabled=true;
			document.frmdoc.caste.disabled=true;
			document.frmdoc.incomecert.disabled=true;
			document.frmdoc.income.disabled=true;
			document.getElementById("accept").disabled=true;
			document.getElementById("reject").disabled=true;
		}
		function twelfthCalc()
		{
			document.getElementById("main").hidden=true;
			document.getElementById("calc").hidden=false;
			document.getElementById("sub6").hidden=true;
			document.getElementById("mark6").hidden=true;
			document.getElementById("calcbtn").disabled=false;
			document.getElementById("sub1").innerHTML="English";
			document.getElementById("sub2").innerHTML="Physics";
			document.getElementById("sub3").innerHTML="Chemistry";
			document.getElementById("sub4").innerHTML="Mathematics";
			document.getElementById("sub5").innerHTML="Optional";
			document.getElementById("sub6").innerHTML="";
			document.getElementById("mark1").disabled=false;
			document.getElementById("mark2").disabled=false;
			document.getElementById("mark3").disabled=false;
			document.getElementById("mark4").disabled=false;
			document.getElementById("mark5").disabled=false;
			document.getElementById("mark6").disabled=true;
			document.frmdoc.tenth.disabled=true;
			document.frmdoc.tenthcalc.disabled=true;
			document.frmdoc.twelfth.disabled=true;
			document.frmdoc.twelfthcalc.disabled=true;
			document.frmdoc.tc.disabled=true;
			document.frmdoc.mc.disabled=true;
			document.frmdoc.mp.disabled=true;
			document.frmdoc.caste.disabled=true;
			document.frmdoc.incomecert.disabled=true;
			document.frmdoc.income.disabled=true;
			document.getElementById("accept").disabled=true;
			document.getElementById("reject").disabled=true;
		}
		
		function marksCalc()
		{
			var total,per;
			if(document.getElementById("mark6").disabled==false)
			{
				total= Number(document.getElementById("mark1").value) + Number(document.getElementById("mark2").value) + Number(document.getElementById("mark3").value) + Number(document.getElementById("mark4").value) + Number(document.getElementById("mark5").value) + Number(document.getElementById("mark6").value);
				per = total/6;
				document.frmdoc.tenth.value=per;
			}
			else
			{
				total= Number(document.getElementById("mark1").value) + Number(document.getElementById("mark2").value) + Number(document.getElementById("mark3").value) + Number(document.getElementById("mark4").value) + Number(document.getElementById("mark5").value);
				per = total/5;
				document.frmdoc.twelfth.value=per;
			}
			document.getElementById("calc").hidden=true;
			document.getElementById("mark1").disabled=true;
			document.getElementById("mark2").disabled=true;
			document.getElementById("mark3").disabled=true;
			document.getElementById("mark4").disabled=true;
			document.getElementById("mark5").disabled=true;
			document.getElementById("mark6").disabled=true;
			document.getElementById("calcbtn").disabled=true;
			document.getElementById("mark1").value="";
			document.getElementById("mark2").value="";
			document.getElementById("mark3").value="";
			document.getElementById("mark4").value="";
			document.getElementById("mark5").value="";
			document.getElementById("mark6").value="";
			document.frmdoc.tenth.disabled=true;
			document.frmdoc.tenthcalc.disabled=false;
			document.frmdoc.twelfth.disabled=true;
			document.frmdoc.twelfthcalc.disabled=false;
			document.frmdoc.tc.disabled=false;
			document.frmdoc.mc.disabled=false;
			document.frmdoc.mp.disabled=false;
			document.frmdoc.caste.disabled=false;
			enableIncome();
			document.getElementById("accept").disabled=false;
			document.getElementById("reject").disabled=false;
			document.getElementById("main").hidden=false;
		}
		function submitChk()
		{
			var x=true;
			if(document.getElementById("accept").checked==true)
			{
				if((Number(document.frmdoc.tenth.value))<50)
				{
					document.getElementById("msg").innerHTML="";
					document.getElementById("msg").innerHTML=document.getElementById("msg").innerHTML+"Tenth Percentage should be greater than or equal to 50%.<br />";
					x=false;
				}
				if((Number(document.frmdoc.twelfth.value))<50)
				{
					document.getElementById("msg").innerHTML=document.getElementById("msg").innerHTML+"Twelfth Percentage should be greater than or equal to 50%.<br />";
					x=false;
				}
				if(document.frmdoc.tc.checked==false)
				{
					document.getElementById("msg").innerHTML=document.getElementById("msg").innerHTML+"Transfer Certificate Submission is compulsory.<br />";
					x=false;
				}
				if(document.frmdoc.mc.checked==false)
				{
					document.getElementById("msg").innerHTML=document.getElementById("msg").innerHTML+"Migration Certificate Submission is compulsory.<br />";
					x=false;
				}
			}
			if (x==false)
				return x;
			else
			{
				document.frmdoc.tenth.disabled=false;
				document.frmdoc.twelfth.disabled=false;
				document.frmdoc.income.disabled=false;
				return x;
			}
		}
	</script>
</head>
<body onload="document.getElementById('calc').hidden=true;document.frmdoc.reset();">
	<?php
		if (!isset($_COOKIE["document"]))
		{
			if (isset($_COOKIE["attendance"]))
				setcookie("attendance", "", time()-3600);
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
          		  		  
            	<div style="position:relative;top:auto;left:auto;width:100%;height:392px;" id="calc">
                	<table border="0" style="margin:auto; padding:50px 0px;">
                    	<tr>
                        	<td id="sub1"></td>
                            <td><input type="number" id="mark1" value="" disabled="disabled" /></td>
                       	</tr>
                        <tr>
                            <td id="sub2"></td>
                            <td><input type="number" id="mark2" value="" disabled="disabled" /></td>
                       	</tr>
                        <tr>
                            <td id="sub3"></td>
                            <td><input type="number" id="mark3" value="" disabled="disabled" /></td>
                       	</tr>
                        <tr>
                            <td id="sub4"></td>
                            <td><input type="number" id="mark4" value="" disabled="disabled" /></td>
                       	</tr>
                        <tr>
                            <td id="sub5"></td>
                            <td><input type="number" id="mark5" value="" disabled="disabled" /></td>
                       	</tr>
                        <tr>
                            <td id="sub6"></td>
                            <td><input type="number" id="mark6" value="" disabled="disabled" /></td>
                       	</tr>
                        <tr>
                        	<td colspan="2" style="text-align:center;">
								<button id="calcbtn" onclick="marksCalc();return false;" disabled="disabled">Calculate</button>
                          	</td>
                       	</tr>
					</table>
                </div>
                <div id="main">
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
                <form name="frmdoc" onsubmit="return submitChk();" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                <fieldset style="float:right; width:35%; margin:25px;">
                	<legend>Documents</legend>
                    	<table border="0">
                        	<tr>
	                			<td>Tenth Percentage </td>
                                <td style="width:120px;"><input type="number" name="tenth" style="width:120px;" disabled="disabled" /></td>
                                <td><button name="tenthcalc" onclick="tenthCalc();return false;">Calculate</button></td>
                          	</tr>
                            <tr>
	                        	<td>Twelfth Percentage </td>
                                <td><input type="number" name="twelfth" style="width:120px;" disabled="disabled" /></td>
                                <td><button name="twelfthcalc" onclick="twelfthCalc();return false;">Calculate</button></td>
                        	</tr>
                            <tr>
                            	<td colspan="3">
	                            	<input type="checkbox" name="tc" value="true" />Transfer Certificate
                               	</td>
							</tr>    
                            <tr>
                            	<td colspan="3">
	                            	<input type="checkbox" name="mc" value="true" />Migration Certificate
                               	</td>
							</tr>
                            <tr>
                            	<td colspan="3">
	                            	<input type="checkbox" name="mp" value="true" />MP Domicile
                               	</td>
							</tr>
    
                            <tr>
                            	<td colspan="3">
	                            	<input type="checkbox" name="caste" value="true" onchange="enableIncome();" />Caste Certificate
                               	</td>
							</tr>
                            <tr>
                            	<td colspan="3">
	                            	<input type="checkbox" name="incomecert" onchange="enableIncome();" disabled="disabled" />Income Certificate
                                    &nbsp;&nbsp;
                                    <input type="number" name="income" onkeypress="return onlyNumbers(event);" disabled="disabled" />
                               	</td>
							</tr>
                            <tr>
                            	<td colspan="3" style="text-align:center">
                                	<input type="radio" id="accept" name="docsub" value="1" checked="checked" />Accept&emsp;&emsp;&emsp;&emsp;
                                	<input type="radio" id="reject" name="docsub" value="0" />Reject
                               	</td>
                          	</tr>
							<tr>
                            	<td colspan="3" style="text-align:center;">
                                	<input type="submit" name="submit" value="Submit" />
                                    &emsp;&emsp;&emsp;&emsp;
                                    <input type="reset" name="reset" value="Reset" onclick="document.getElementById('msg').innerHTML=''; document.frmdoc.incomecert.disabled=true; document.frmdoc.income.disabled=true;" />
                               	</td>
                          	</tr>
                        </table>
            	</fieldset>
				</form>
				
                </div>
            </div>
        </div>
    </div>
	<div id="templatemo_footer_wrapper" style="clear:both;">
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
			$sql="SELECT * FROM ((CET AS C INNER JOIN RANK AS R ON C.ROLLNO=R.ROLLNO) INNER JOIN ATTENDANCE AS A ON R.ROLLNO=A.ROLLNO) LEFT JOIN DOCUMENT AS D ON A.ROLLNO=D.ROLLNO WHERE ATT=1 AND DOC IS NULL ORDER BY AI;";
			
			$result=mysql_query($sql,$con);
			if(!$result)
			{
				die('<script type="text/javascript">
				alert("Could not match data : ' . mysql_error().'");
				document.frmdoc.submit.disabled=true;
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
				document.getElementById('calc').hidden=true;
				document.frmdoc.submit.disabled=true;
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
				document.frmdoc.mp.checked=false;
				document.frmdoc.mp.hidden=true;
			}
			else
			{
				document.frmdoc.mp.hidden=false;
			}
			<?php
			if(strcmp($row["CATEGORY"],"GEN")==0)
			{ 
				?>
				document.frmdoc.caste.checked=false;
				document.frmdoc.caste.hidden=true;
				document.frmdoc.incomecert.checked=false;
				enableIncome();				
				document.frmdoc.incomecert.hidden=true;
				document.frmdoc.income.hidden=true;
				<?php
			}
			else
			{
				?>
				document.frmdoc.caste.hidden=false;
				document.frmdoc.incomecert.hidden=false;
				document.frmdoc.income.hidden=false;
				enableIncome();
				<?php
			}
			?>
			</script>  
			<?php
			return $row;
		}
		include("connectdb.php");
		$row=sqlQuery($con);
		$rno=checkInput2($row[0]);
		if(isset($_POST["submit"]))
		{
			$doc=checkInput2($_POST["docsub"]);
			$ten=checkInput1($_POST["tenth"]);
			$twelve=checkInput1($_POST["twelfth"]);
			$income=checkInput1($_POST["income"]);
			if($doc==0)
			{
				$sql1="INSERT INTO DOCUMENT VALUES($rno,0,NULL,NULL,NULL);";
				$result1=mysql_query($sql1,$con);
				if(!$result1)
				{
					die('<script type="text/javascript">alert("Could not insert data: ' . mysql_error().'");</script>');
				}
				else
				{
					echo '<script type="text/javascript">document.getElementById("msg").innerHTML="Rollno '.$rno.' Documents Submitted.";</script>';
				}
			}
			else if($doc==1)
			{

				if(strcmp($row[6],"1")==0)
				{
					
					if(strcmp($_POST["mp"],"true")!=0)
					{
						$sql2="UPDATE CET SET MP=0 WHERE ROLLNO=$rno;";
						$result2=mysql_query($sql2,$con);
						if(!$result2)
						{
							die('<script type="text/javascript">alert("Could not update data: ' . mysql_error().'");</script>');
						}
						
						$sql3="UPDATE RANK SET MP=NULL,MPF=NULL,MPSC=NULL,MPSCF=NULL,MPST=NULL,MPSTF=NULL,MPOBC=NULL,MPOBCF=NULL WHERE ROLLNO=$rno;";
						$result3=mysql_query($sql3,$con);
						if(!$result3)
						{
							die('<script type="text/javascript">alert("Could not update data: ' . mysql_error().'");</script>');
						}
					}
				}
				if(strcmp($row["CATEGORY"],"GEN")!=0)
				{
					if(strcmp($_POST["caste"],"true")!=0)
					{
						$sql4="UPDATE CET SET CATEGORY='GEN' WHERE ROLLNO=$rno;";
						$result4=mysql_query($sql4,$con);
						if(!$result4)
						{
							die('<script type="text/javascript">alert("Could not update data: ' . mysql_error().'");</script>');
						}
						
						$sql5="UPDATE RANK SET AISC=NULL,AISCF=NULL,AIST=NULL,AISTF=NULL,AIOBC=NULL,AIOBCF=NULL,MPSC=NULL,MPSCF=NULL,MPST=NULL,MPSTF=NULL,MPOBC=NULL,MPOBCF=NULL WHERE ROLLNO=$rno;";
						$result5=mysql_query($sql5,$con);
						if(!$result5)
						{
							die('<script type="text/javascript">alert("Could not update data: ' . mysql_error().'");</script>');
						}
					}
				}
				if($income=="''")
					$income="NULL";
				$sql6="INSERT INTO DOCUMENT VALUES($rno,1,$ten,$twelve,$income);";
				$result6=mysql_query($sql6,$con);
				if(!$result6)
				{
					die('<script type="text/javascript">alert("Could not insert data: ' . mysql_error().'");</script>');
				}
				else
				{
					echo '<script type="text/javascript">document.getElementById("msg").innerHTML="Rollno '.$rno.' Documents Submitted.";</script>';
				}
			}
		}
		$row=sqlQuery($con);
	?>
</body>
</html>
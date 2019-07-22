<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>IIPS Counselling Seat Details</title>
	<meta name="keywords" content="IIPS Counselling Seat Details" />
	<meta name="description" content="IIPS Counselling Seat Details" />
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

		ddsmoothmenu.init
		({
			mainmenuid: "templatemo_menu", //menu DIV id
			orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
			classname: 'ddsmoothmenu', //class added to menu's outer DIV
			//customtheme: ["#1c5a80", "#18374a"],
			contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
		})

	</script>

    <script type="text/javascript">
		var t=30;
		var x;
		function timedCount()
		{ 
			document.getElementById("timer").innerHTML='<a href="login.php" target="_blank" style="color:#FFF; font-family:\'Comic Sans MS\', cursive; font-size:50px; font-weight:bold;">'+t+'</a>';
			if(t!=0)
			{
				t--;
				x=setTimeout("timedCount();",1000);
			}
			else
			{
				clearTimeout(x);
				window.location="seats.php";
			}
		}
	</script>
</head>
<body onload="timedCount();">
	<div id="templatemo_wrapper">

		<div id="templatemo_header" style="background-position:top center;">
    
			<div id="site_title" style="width:100%;"><h1><a style="margin-left:auto; margin-right:auto;" href="http://www.iips.edu.in" target="_blank">International Institute of Professional Studies</a></h1></div>
			<div style="text-align:right; position:relative; bottom:75px; right:25px;" id="timer"></div>

    	</div> <!-- end of header -->
    
		<div id="templatemo_main">
            <div class="cleaner" style="font-weight:bold; text-align:center;">
            	<table border="1" cellpadding="5" style="font-size:16px; margin-left:auto; margin-right:auto; width:900px;">
               		<tr style="font-size:24px;">
                   		<td colspan="4" style="width:450px;">M.TECH.</td>
   	                    <td colspan="4" style="width:450px;">MCA</td>
       	            </tr>
                   	<tr>
                       	<td style="width:175px;">All India</td>
                      	<td style="width:50px;" id="ai0"></td>
                       	<td style="width:175px;">All India Female</td>
                        <td style="width:50px;" id="aif0"></td>
                        <td style="width:175px;">All India</td>
                        <td style="width:50px;" id="ai1"></td>
                        <td style="width:175px;">All India Female</td>
                        <td style="width:50px;" id="aif1"></td>
                  	</tr>
                    <tr>
                       	<td>All India SC</td>
                        <td id="aisc0"></td>
                        <td>All India SC Female</td>
                        <td id="aiscf0"></td>
                        <td>All India SC</td>
                        <td id="aisc1"></td>
                        <td>All India SC Female</td>
                        <td id="aiscf1"></td>
                   	</tr>
                    <tr>
                       	<td>All India ST</td>
                        <td id="aist0"></td>
                        <td>All India ST Female</td>
                        <td id="aistf0"></td>
                        <td>All India ST</td>
                        <td id="aist1"></td>
                        <td>All India ST Female</td>
                        <td id="aistf1"></td>
                    </tr>
                    <tr>
                       	<td>All India OBC</td>
                        <td id="aiobc0"></td>
                        <td>All India OBC Female</td>
                        <td id="aiobcf0"></td>
                        <td>All India OBC</td>
                        <td id="aiobc1"></td>
                        <td>All India OBC Female</td>
                        <td id="aiobcf1"></td>
                    </tr>
                    <tr>
                    	<td>MP</td>
                        <td id="mp0"></td>
                        <td>MP Female</td>
                        <td id="mpf0"></td>
                        <td>MP</td>
                        <td id="mp1"></td>
                        <td>MP Female</td>
                        <td id="mpf1"></td>
                  	</tr>
                    <tr>
                      	<td>MP SC</td>
                    	<td id="mpsc0"></td>
                        <td>MP SC Female</td>
                        <td id="mpscf0"></td>
                        <td>MP SC</td>
                        <td id="mpsc1"></td>
                        <td>MP SC Female</td>
                        <td id="mpscf1"></td>
                   	</tr>
                    <tr>
                       	<td>MP ST</td>
                        <td id="mpst0"></td>
                        <td>MP ST Female</td>
                        <td id="mpstf0"></td>
                        <td>MP ST</td>
                        <td id="mpst1"></td>
                        <td>MP ST Female</td>
                        <td id="mpstf1"></td>
                    </tr>
                    <tr>
                       	<td>MP OBC</td>
                        <td id="mpobc0"></td>
                        <td>MP OBC Female</td>
                        <td id="mpobcf0"></td>
                        <td>MP OBC</td>
                        <td id="mpobc1"></td>
                        <td>MP OBC Female</td>
                        <td id="mpobcf1"></td>
                    </tr>
                    <tr>
                    	<td colspan="2" style="width:225px;">NRI</td>
                        <td colspan="2" style="width:2255px;" id="nri0"></td>
                        <td colspan="2" style="width:2255px;">NRI</td>
                        <td colspan="2" style="width:2255px;" id="nri1"></td>
                 	</tr>
           		</table>
                <br />
                <div id="msg" class="form1" style="color:#000; font-size:18px; font-weight:bold;"></div>
			</div>
       	</div>
	</div>
    
   	<div id="templatemo_footer_wrapper">
   		<div id="templatemo_footer">
   		   	Copyright © 2012 KAP Corporation
    	</div>
	</div>   
    
    <?php
		include("connectdb.php");
		$sql="SELECT * FROM SEATS;";
		$result=mysql_query($sql,$con);
		if(!$result)
		{
			die('<script type="text/javascript">
			alert("Could not match data : ' . mysql_error().'");
			</script>');
		}
		if(mysql_num_rows($result)==0)
		{
			?>
			<script type="text/javascript">
			var i;
			for(i=0;i<=1;i++)
			{
				document.getElementById("ai"+i).innerHTML="";
				document.getElementById("aif"+i).innerHTML="";
				document.getElementById("aisc"+i).innerHTML="";
				document.getElementById("aiscf"+i).innerHTML="";
				document.getElementById("aist"+i).innerHTML="";
				document.getElementById("aistf"+i).innerHTML="";
				document.getElementById("aiobc"+i).innerHTML="";
				document.getElementById("aiobcf"+i).innerHTML="";
				document.getElementById("mp"+i).innerHTML="";
				document.getElementById("mpf"+i).innerHTML="";
				document.getElementById("mpsc"+i).innerHTML="";
				document.getElementById("mpscf"+i).innerHTML="";
				document.getElementById("mpst"+i).innerHTML="";
				document.getElementById("mpstf"+i).innerHTML="";
				document.getElementById("mpobc"+i).innerHTML="";
				document.getElementById("mpobcf"+i).innerHTML="";
				document.getElementById("nri"+i).innerHTML="";
				alert("Error : No Entries Found In Seats Table.");
			}
			</script>  
    	   	<?php
			die();
		}
		$i=0;					
		while($row = mysql_fetch_array($result))
		{
			?>
			<script type="text/javascript">
				document.getElementById("ai"+<?php echo $i; ?>).innerHTML="<?php echo $row["AI"]; ?>";
				document.getElementById("aif"+<?php echo $i; ?>).innerHTML="<?php echo $row["AIF"]; ?>";
				document.getElementById("aisc"+<?php echo $i; ?>).innerHTML="<?php echo $row["AISC"]; ?>";
				document.getElementById("aiscf"+<?php echo $i; ?>).innerHTML="<?php echo $row["AISCF"]; ?>";
				document.getElementById("aist"+<?php echo $i; ?>).innerHTML="<?php echo $row["AIST"]; ?>";
				document.getElementById("aistf"+<?php echo $i; ?>).innerHTML="<?php echo $row["AISTF"]; ?>";
				document.getElementById("aiobc"+<?php echo $i; ?>).innerHTML="<?php echo $row["AIOBC"]; ?>";
				document.getElementById("aiobcf"+<?php echo $i; ?>).innerHTML="<?php echo $row["AIOBCF"]; ?>";
				document.getElementById("mp"+<?php echo $i; ?>).innerHTML="<?php echo $row["MP"]; ?>";
				document.getElementById("mpf"+<?php echo $i; ?>).innerHTML="<?php echo $row["MPF"]; ?>";
				document.getElementById("mpsc"+<?php echo $i; ?>).innerHTML="<?php echo $row["MPSC"]; ?>";
				document.getElementById("mpscf"+<?php echo $i; ?>).innerHTML="<?php echo $row["MPSCF"]; ?>";
				document.getElementById("mpst"+<?php echo $i; ?>).innerHTML="<?php echo $row["MPST"]; ?>";
				document.getElementById("mpstf"+<?php echo $i; ?>).innerHTML="<?php echo $row["MPSTF"]; ?>";
				document.getElementById("mpobc"+<?php echo $i; ?>).innerHTML="<?php echo $row["MPOBC"]; ?>";
				document.getElementById("mpobcf"+<?php echo $i; ?>).innerHTML="<?php echo $row["MPOBCF"]; ?>";
				document.getElementById("nri"+<?php echo $i; ?>).innerHTML="<?php echo $row["NRI"]; ?>";
			</script>
			<?php
			$i++;
		}
		$sql1="SELECT * FROM (CET AS C INNER JOIN RANK AS R ON C.ROLLNO=R.ROLLNO) INNER JOIN FEES AS F ON R.ROLLNO=F.ROLLNO WHERE FEE=1 ORDER BY AI DESC;";
		$result1=mysql_query($sql1,$con);
		if(!$result1)
		{
			die('<script type="text/javascript">
			alert("Could not match data : ' . mysql_error().'");
			</script>');
		}
		if(mysql_num_rows($result1)==0)
		{
			?>
            <script type="text/javascript">
				document.getElementById("msg").innerHTML="";
			</script>
           	<?php
		}
		else
		{
			$row1=mysql_fetch_array($result1);
			?>
            <script type="text/javascript">
				document.getElementById("msg").innerHTML="Last Admission : <?php echo 'Rollno : '.$row1[0].' Name : '.$row1["FNAME"].' '.$row1["LNAME"] ?>";
			</script>
            <?php
		}
	?>
    
</body>
</html>
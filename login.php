<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>IIPS Counselling Login Page</title>
	<meta name="keywords" content="IIPS Counselling" />
	<meta name="description" content="IIPS Counselling" />
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
		function eraseText(obj)
		{
			if((obj.value=="Enter Login ID") && (obj.name=="username"))
				obj.value="";
			else if((obj.value=="Enter Password") && (obj.name=="password"))
				obj.value="";
		}
		function loginDet()
		{
			var user, pass;
			user=document.getElementById("user").value;
			pass=document.getElementById("pass").value;
			if((user.length==0)||(pass.length==0))
			{
				document.getElementById("ErrorDis").innerHTML="Username/Password Not Entered.";
				return;
			}
			var xmlhttp;
			if (window.XMLHttpRequest)
  			{// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=new XMLHttpRequest();
			}
			else
			{// code for IE6, IE5
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  			}
			xmlhttp.onreadystatechange=function()
  			{
  				if (xmlhttp.readyState==4 && xmlhttp.status==200)
    			{
					if(xmlhttp.responseText.match("Success")=="Success")
						window.location="redirect.php";
					else
	    				document.getElementById("ErrorDis").innerHTML=xmlhttp.responseText;
    			}
  			}
			xmlhttp.open("POST","chklogin.php",true);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp.send("user="+user+"&pass="+pass);
		}
	</script>
</head>
<body>
	<?php
		if (isset($_COOKIE["attendance"]))
			header('Location: attendance.php');
		else if (isset($_COOKIE["document"]))
			header('Location: document.php');
		else if (isset($_COOKIE["choice"]))
			header('Location: choice.php');
		else if (isset($_COOKIE["fees"]))
			header('Location: fees.php');
	?>
	<div id="templatemo_wrapper">

		<div id="templatemo_header" style="background-position:top center;">
    
			<div id="site_title" style="width:100%;"><h1><a style="margin-left:auto; margin-right:auto;" href="http://www.iips.edu.in" target="_blank">International Institute of Professional Studies</a></h1></div>
        
    	</div> <!-- end of header -->
    
    	<div id="templatemo_fw">
        	<div id="piecemaker">
         			<p>&nbsp;</p>
        	</div>
		</div>
   		<div id="templatemo_main">
            <div class="cleaner">
	            <div class="form1" style="color:#F00;" id="ErrorDis"></div>
            </div>
   			<div class="cleaner" style="background-image:url(images/login-modal1.jpg); background-repeat:no-repeat; background-position: top center; width:500px; height:300px; margin-left:auto; margin-right:auto;">
   				<form onsubmit="loginDet();return false;" method="post">
       				<table class="form1"  border="0" style="margin:0px auto; padding-top:50px;" >
       					<tr>
           					<td style="color:#FFF;padding:0px 0px 30px 0px;">LOGIN ID</td>
            				<td style="padding:0px 0px 30px 0px;">
                   				<input id="user" class="form1" name="username" type="text" size="18" value="Enter Login ID" onfocus="eraseText(this)"/>
              				</td>
            			</tr>
            			<tr>
            				<td style="color:#FFF;padding:0px 0px 30px 0px;">PASSWORD&nbsp;&nbsp;</td>
             				<td style="padding:0px 0px 30px 0px;"> 
                    			<input id="pass" class="form1" name="password" type="password" size="18" value="Enter Password" onfocus="eraseText(this)" />
                  			</td>
          	  			</tr>
            			<tr>
            				<td colspan="2" align="center">
                				<input class="form1" style="width:104px;height:43px;background: url(images/login-btn.png) no-repeat;" name="submitlp" type="submit" value="" />
                  			 </td>
              			</tr>
					</table> 	
      			</form>
            </div>
        <br />
        <br />
  		</div>
	</div>
   	<div id="templatemo_footer_wrapper">
   		<div id="templatemo_footer">
   		   	Copyright © 2012 KAP Corporation
    	</div>
	</div>   
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CET Counseling Logout</title>
<meta name="keywords" content="CET Counseling Logout" />
<meta name="description" content="CET Counseling Logout" />
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
	var t=5;
	var x;
	function timedCount()
	{
		document.getElementById("logoutmsg").innerHTML='<br />You have successfully logged out.<br /><br />You will be redirected to login page within '+t+' seconds...<br /><br />Or <a href="login.php">Click Here...</a>';
		if(t!=0)
		{
			t--;
			x=setTimeout("timedCount();",1000);
		}
		else
		{
			clearTimeout(x);
			window.location="login.php";
		}
	}
</script>

</head>
<body onload="timedCount();">

	<?php
		if (isset($_COOKIE["attendance"]))
			setcookie("attendance", "", time()-3600);
		if (isset($_COOKIE["document"]))
			setcookie("document", "", time()-3600);
		if (isset($_COOKIE["choice"]))
			setcookie("choice", "", time()-3600);
		if (isset($_COOKIE["fees"]))
			setcookie("fees", "", time()-3600);
	?>
    
	<div id="templatemo_wrapper">

		<div id="templatemo_header" style="background-position:top center;">
    		<div id="site_title" style="width:100%;">
	            <h1>
    		        <a style="margin-left:auto; margin-right:auto;" href="http://www.iips.edu.in" target="_blank">International Institute of Professional Studies</a>
               	</h1>
       		</div>
   		</div> <!-- end of header -->

        <div class="cleaner" style="height:435px;">
	        <p class="form1" id="logoutmsg" style="color:#003;"></p>
    	</div>
        
  	</div>
    
	<div id="templatemo_footer_wrapper">
		<div id="templatemo_footer">
			Copyright © 2012 KAP Corporation
		</div>
	</div> 
  	
</body>
</html>
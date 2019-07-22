<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Redirect Page</title>
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
</body>
</html>
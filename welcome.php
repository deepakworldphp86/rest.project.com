<?php 
//session_start();
include('config.php');
include('connection.php');

/*if($_SESSION['SESS_ID'] == '' && $_SESSION['SESS_NAME'] == '')
{
	echo "<script>document.location='sign-in.php'</script>";
	exit;
}*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Phone Directory</title>
<link rel="stylesheet" href="commonincludes/css/style.css" type="text/css" />
</head>

<body>
<!--Main Container Start-->
<div id="container">
	
		<!--Header Section Start-->
		<?php include('includes/inc.header.php'); ?>
		<!--Header Section End-->
		
		<div class="hLine"></div>
		
		<!--Middle Section Start-->
		<?php include('includes/inc.welcome-middle.php');?>
		<!--Middle Section End-->
		
		<div class="hLine"></div>
		
		<!--Footer Section Start-->
		<?php include('includes/inc.footer.php');?>		
		<!--Footer Section End-->
</div>
<!--Main Container End-->
</body>
</html>

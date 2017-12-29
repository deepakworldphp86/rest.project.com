<?php 
session_start();
include('config.php');
include('connection.php');

$err_msg = '';
$eid = '';
$pass = '';

//echo "<pre>"; print_r($_REQUEST); exit;

if(isset($_REQUEST['check_login']) && $_REQUEST['check_login'] == 'CHECK')
{
		//echo "<pre>"; print_r($_REQUEST); exit;
		$eid = $_REQUEST['eid'];
		if($eid == '')
		{
			$err_msg = '*Please Enter Your Email-Id.';
		}
		
		$pass = $_REQUEST['pass'];
		if($eid !='' && $pass == '')
		{
			$err_msg = '*Please Enter Your Password.';
		}
		
		//echo "<pre>"; print_r($_REQUEST); exit;
		if($eid <> '' && $pass <> '')
		{	
				$pass = md5($pass);
				$sel_que = "SELECT fld_id, fld_firstName, fld_lastName FROM tbl_signup WHERE fld_userName='$eid' AND fld_password='$pass'";
				//echo $sel_que; exit;				
				$sel_res = mysqli_query($connect_db,$sel_que);								
				
				if(mysqli_affected_rows($connect_db) > 0)
				{
					$row = mysqli_fetch_array($sel_res,MYSQLI_BOTH);
					//print_r($row);exit;
					$id = $row['fld_id'];
					//echo $id; exit;
					$fname = ucfirst($row['fld_firstName']);
					$last_name = ucfirst($row['fld_lastName']);
					
					$_SESSION['SESS_ID'] = $id; 
					$_SESSION['SESS_NAME'] = $fname.' '.$last_name;
					
					echo "<script>document.location='dashboard.php'</script>";
					exit;
				}
				else
				{
					$err_msg = 'Please Enter Correct Email-Id & Password.';
				}
				
		}
}
if(isset($_REQUEST['m']) && $_REQUEST['m'] == 1)
{
	$err_msg = 'You have logout sucessfully.';
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Phone Directory</title>
<link rel="stylesheet" href="commonincludes/css/style.css" type="text/css" />
<script language="javascript" src="commonincludes/js/jquery-1.4.4.js" type="text/javascript"></script>
<!--<script language="javascript" src="commonincludes/js/checkLogin.js" type="text/javascript"></script>-->
</head>

<body>
<!--Main Container Start-->
<div id="container">
	
		<!--Header Section Start-->
		<?php include('includes/inc.header.php'); ?>
		<!--Header Section End-->
		
		<div class="hLine"></div>
		
		<!--Middle Section Start-->
		<?php include('includes/inc.sign-in-middle.php');?>
		<!--Middle Section End-->
		
		<div class="hLine"></div>
		
		<!--Footer Section Start-->
		<?php include('includes/inc.footer.php');?>		
		<!--Footer Section End-->
</div>
<!--Main Container End-->
</body>
</html>

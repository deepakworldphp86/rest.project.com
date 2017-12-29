<?php 
session_start();
include('config.php');
include('connection.php');

//echo "<pre>"; print_r($_REQUEST); exit;
$id = $_SESSION['SESS_ID'];
$sel_query = "SELECT fld_userName, fld_firstName, fld_lastName, fld_hno, fld_country, fld_state, fld_city, fld_pincode, fld_dob, fld_gender, fld_mobileNumber, fld_hobbies, fld_photo FROM tbl_signup WHERE fld_id='$id'";
//echo $sel_query;exit;
$res = mysqli_query($connect_db,$sel_query);
$row = mysqli_fetch_array($res,MYSQLI_BOTH);
$email_Id = $row['fld_userName'];
$first_name = ucfirst($row['fld_firstName']);
$last_name = ucfirst($row['fld_lastName']);
$house_no = $row['fld_hno'];
$country = $row['fld_country'];
$state = $row['fld_state'];
$city = $row['fld_city'];
$pincode = $row['fld_pincode'];
$dob = $row['fld_dob'];
$gender = $row['fld_gender'];

if($gender == 'M')
	$gen = 'Male';
else
	$gen = 'Female';
$mobile_num = $row['fld_mobileNumber'];
$hobbies = $row['fld_hobbies'];
if($hobbies){
$hobby = explode(',', $hobbies);
//print_r($hobby);exit;
}
$image = $row['fld_photo'];
$imagePath = 'upload/'.$image;
if($_SESSION['SESS_ID'] == '' && $_SESSION['SESS_NAME'] == '')
{
	echo "<script>document.location='sign-in.php'</script>";
	exit;
}
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
		<?php include('includes/inc.inner-header.php'); ?>
		<!--Header Section End-->
		
		<div class="hLine"></div>
		
		<!--Middle Section Start-->
		<?php include('includes/inc.dashboard-middle.php');?>
		<!--Middle Section End-->
		
		<div class="hLine"></div>
		
		<!--Footer Section Start-->
		<?php include('includes/inc.footer.php');?>		
		<!--Footer Section End-->
</div>
<!--Main Container End-->
</body>
</html>

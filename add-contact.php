<?php 
session_start();
include('config.php');
include('connection.php');

$err_msg = '';
//echo "test"; exit;
//echo "<pre>"; print_r($_REQUEST); exit;
if(!empty($_REQUEST['check_Contact']) && $_REQUEST['check_Contact'] == 'CONTACT')
{
			
			//echo "<pre>"; print_r($_REQUEST); exit;
			
			$f_name = $_REQUEST['fname'];
			if($f_name == '')
			{
				$err_msg = 'Please Enter Your First Name.';
			}
			$last_name = $_REQUEST['lastName'];
			if(!empty($f_name) && $last_name == '')
			{
				$err_msg = 'Please Enter Your Last Name.';
			}
			$house = $_REQUEST['hno'];
			if(!empty($f_name) && !empty($last_name) && $house == '')
			{
				$err_msg = 'Please Enter Your H.No. & Street No. & Building No.';
			}
			$country = $_REQUEST['country'];
			if(!empty($f_name) && !empty($last_name) && !empty($house) && $country == '')
			{
				$err_msg = 'Please Select Your Country.';
			}
			$state = $_REQUEST['state'];
			if(!empty($f_name) && !empty($last_name) && !empty($house) && !empty($country) && $state == '')
			{
				$err_msg = 'Please Select Your State.';
			}
			$city = $_REQUEST['city'];
			if(!empty($f_name) && !empty($last_name) && !empty($house) && !empty($country) && !empty($state) && $city  == '')
			{
				$err_msg = 'Please Enter Your City.';
			}			
			$pcode = $_REQUEST['pcode'];
			if(!empty($f_name) && !empty($last_name) && !empty($house) && !empty($country) && !empty($state) && !empty($city) && $pcode == '')
			{
				$err_msg = 'Please Enter Your Pincode.';
			}
			$qualify = $_REQUEST['qlist'];
			if(!empty($f_name) && !empty($last_name) && !empty($house) && !empty($country) && !empty($state) && !empty($city) && !empty($pcode) && $qualify == '')
			{
				$err_msg = 'Please Select Your Qualification.';
			}
			$job_profile = $_REQUEST['jprofile'];
			if(!empty($f_name) && !empty($last_name) && !empty($house) && !empty($country) && !empty($state) && !empty($city) && !empty($pcode) && !empty($qualify) && $job_profile == '')
			{
				$err_msg = 'Please Enter Your Job Profile.';
			}
			$mNum1 = $_REQUEST['mob1'];
			if(!empty($f_name) && !empty($last_name) && !empty($house) && !empty($country) && !empty($state) && !empty($city) && !empty($pcode) && !empty($qualify) && !empty($job_profile) && $mNum1 == '')
			{
				$err_msg = 'Please Enter Your First Mobile No.';
			}
			$mNum2 = $_REQUEST['mob2'];
			if(!empty($f_name) && !empty($last_name) && !empty($house) && !empty($country) && !empty($state) && !empty($city) && !empty($pcode) && !empty($qualify) && !empty($job_profile) && !empty($mNum1) && $mNum2 == '')
			{
				$err_msg = 'Please Enter Your Second Mobile No.';
			}
			$p_number = $_REQUEST['phone'];
			if(!empty($f_name) && !empty($last_name) && !empty($house) && !empty($country) && !empty($state) && !empty($city) && !empty($pcode) && !empty($qualify) && !empty($job_profile) && !empty($mNum1) && !empty($mNum2) && $p_number == '')
			{
				$err_msg = 'Please Enter Your Phone Number.';
			}
			$email_id = $_REQUEST['email_id'];
			if(!empty($f_name) && !empty($last_name) && !empty($house) && !empty($country) && !empty($state) && !empty($city) && !empty($pcode) && !empty($qualify) && !empty($job_profile) && !empty($mNum1) && !empty($mNum2) && !empty($p_number) && $email_id == '')
			{
				$err_msg = 'Please Enter Your Email-Id.';
			}			
			
			$addDate = date('Y-m-d');
			$gen = $_REQUEST['gender'];
			
			$sel = "INSERT INTO tbl_contact(fld_firstName, fld_lastName, fld_hno, fld_country, fld_state, fld_city, fld_pincode, fld_qualify, fld_gender, fld_jobProfile, fld_mob1,  	fld_mob2, fld_phone, fld_eid, fld_addedDate) VALUES('$f_name', '$last_name', '$house', '$country', '$state', '$city', '$pcode', '$qualify', '$gen', '$job_profile', '$mNum1', '$mNum2', '$p_number', '$email_id', '$addDate')";
			@mysqli_query($connect_db,$sel);			
			
			echo "<script>document.location='list-contact.php'</script>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Phone Directory</title>
<link rel="stylesheet" href="commonincludes/css/style.css" type="text/css"/>
<script language="javascript" src="commonincludes/js/jquery-1.4.4.js" type="text/javascript"></script>
<script language="javascript" src="commonincludes/js/validate_contact.js" type="text/javascript"></script>
</head>

<body>
<!--Main Container Start-->
<div id="container">
	
		<!--Header Section Start-->
		<?php include('includes/inc.inner-header.php'); ?>
		<!--Header Section End-->
		
		<div class="hLine"></div>
		
		<!--Middle Section Start-->
		<?php include('includes/inc.addcontact-middle.php');?>
		<!--Middle Section End-->
		
		<div class="hLine"></div>
		
		<!--Footer Section Start-->
		<?php include('includes/inc.footer.php');?>		
		<!--Footer Section End-->
</div>
<!--Main Container End-->
</body>
</html>

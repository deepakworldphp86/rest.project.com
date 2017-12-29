<?php 
session_start();
include('config.php');
include('connection.php');

//echo "test"; exit;

if(isset($_REQUEST['vid']) && $_REQUEST['vid'] > 0)
{
		$vid = $_REQUEST['vid'];
		$sel = "SELECT fld_firstName, fld_lastName, fld_hno, fld_country, fld_state, fld_city, fld_pincode, fld_qualify, fld_gender, fld_jobProfile, fld_mob1, fld_mob2, fld_phone, fld_eid FROM tbl_contact WHERE fld_id='$vid'";
		$res = @mysqli_query($connect_db,$sel);
		$row = @mysqli_fetch_array($res,MYSQLI_BOTH);
		
		$fname = ucfirst($row['fld_firstName']);
		$lname = ucfirst($row['fld_lastName']);
		
		$name = $fname.' '.$lname;
		$hno = $row['fld_hno'];
		$cntry = $row['fld_country'];
		$sts = $row['fld_state'];
		
		$sel_ctry = "SELECT country FROM tbl_countries WHERE country_id='$cntry'";
		$res_ctry = @mysqli_query($connect_db,$sel_ctry);
		$row_ctry = @mysqli_fetch_array($res_ctry,MYSQLI_BOTH);
		
		$c_name = $row_ctry['country'];
		
		$sel_stt = "SELECT fld_name FROM tbl_state WHERE fld_id='$sts'";
		$res_stt = @mysqli_query($connect_db,$sel_stt);
		$row_stt = @mysqli_fetch_array($res_stt,MYSQLI_BOTH);
		
		$s_name = $row_stt['fld_name'];					
		$city = $row['fld_city'];
		$pcode = $row['fld_pincode'];
		
		$address = $hno.','.$c_name.','.$s_name.','.$city.','.$pcode;
		$qua = $row['fld_qualify'];
		if($qua == 1)
		{
			$qualify = "BA";
		}else if($qua == 2)
		{
			$qualify = "BCOM";
			
		}else if($qua == 3)
		{
			$qualify = "BCA";
			
		}else{
			
			$qualify = "BED";
		}
		
		$gen = $row['fld_gender'];
		if($gen == 'M')
		{	
			$gender = 'Male';
		}else{
			$gender = 'Female';	
		}
		
		$jobProfile = $row['fld_jobProfile'];
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
		<?php include('includes/inc.view-middle.php');?>
		<!--Middle Section End-->
		
		<div class="hLine"></div>
		
		<!--Footer Section Start-->
		<?php include('includes/inc.footer.php');?>		
		<!--Footer Section End-->
</div>
<!--Main Container End-->
</body>
</html>

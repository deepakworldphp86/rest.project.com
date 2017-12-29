<?php 
include('config.php');
include('connection.php');

$err_msg = '';
if(!empty($_REQUEST['vid']) && $_REQUEST['vid'] > 0)
{
		$id = $_REQUEST['vid'];
		$sel = "SELECT fld_userName, fld_firstName, fld_lastName, fld_country FROM tbl_signup WHERE fld_id='$id'";
		$res = @mysqli_query($connect_db,$sel);
		$row = @mysqli_fetch_array($res,MYSQLI_BOTH);
		
		$email_id = $row['fld_userName'];
		$firstName = $row['fld_firstName'];
		$lastName = $row['fld_lastName'];
		
		$name = ucfirst($firstName).' '.ucfirst($lastName);
		$c_id = $row['fld_country'];
		
		$sel_query = "SELECT country FROM tbl_countries WHERE country_id='$c_id'";
		$result = @mysqli_query($connect_db,$sel_query);
		$row1 = @mysqli_fetch_array($result,MYSQLI_BOTH);
		
		$country = $row1['country'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Phone Directory</title>
<link rel="stylesheet" href="../commonincludes/css/style.css" type="text/css"/>
</head>

<body>
<!--Main Container Start-->
<div id="container">
	
		<!--Header Section Start-->
		<?php include('includes/inc.inner-header.php'); ?>
		<!--Header Section End-->
		
		<div class="hLine"></div>
		
		<!--Middle Section Start-->
        <div class="p10">
                <div class="topTitle" style="text-decoration:underline;">Your Information</div>
                <div>&nbsp;</div>
                
                <div>
                    <div class="title2">Email-Id : </div>
                    <div><?=$email_id;?></div>
                </div>
                
                <div class="cBoth h10"></div>
                
                <div>
                    <div class="title2">Name : </div>
                    <div><?=$name;?></div>
                </div>
                               
                <div class="cBoth h10"></div>
                
                <div>
                    <div class="title2">Country : </div>
                    <div><?=$country;?></div>
                </div>
                <div>&nbsp;</div>
        
        </div>
		<!--Middle Section End-->
		
		<div class="hLine"></div>
		
		<!--Footer Section Start-->
		<?php include('includes/inc.footer.php');?>		
		<!--Footer Section End-->
</div>
<!--Main Container End-->
</body>
</html>

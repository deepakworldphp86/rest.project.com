<?php 
session_start();
include('config.php');
include('connection.php');
$msg = '';

if(!empty($_REQUEST['msg']))
{
	if($_REQUEST['msg'] == 1)
	{
		$msg = 'Record has been update sucessfully.';
	}
	else
	{
		$msg = 'Record has not been updated.';
	}
}

if(!empty($_REQUEST['vid']) && $_REQUEST['vid'] > 0)
{
	$d_id = $_REQUEST['vid'];
	
	$sel = "DELETE FROM tbl_signup WHERE fld_id='$d_id'";
	@mysqli_query($connect_db,$sel);
	
	$msg = 'Record has been deleted sucessfully.';
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Phone Directory</title>
<link rel="stylesheet" href="../commonincludes/css/style.css" type="text/css"/>
<script language="javascript" type="text/javascript">

function checkStatus(id, val)
{
	
	if(id !='' && val !='')
	{
		if(confirm('Do You Want To Change Status.')){
			document.location='userManagement.php?sid='+id+"&sv="+val;
			return true;
		}
		else{
			
		}
	}
}

function delCheck(id)
{
	if(id != '')
	{
		if(confirm('Are you sure delete.')){
		
			document.location='userManagement.php?vid='+id;
			return true;
		}else{
		
		}
	}
}

</script>
</head>

<body>
<!--Main Container Start-->
<div id="container">
	
		<!--Header Section Start-->
		<?php include('includes/inc.header.php'); ?>
		<!--Header Section End-->
		
		<div class="hLine"></div>
		
		<!--Middle Section Start-->
        <?php include('includes/inc.usermanagement-middle.php');?>        
		<!--Middle Section End-->
		
		<div class="hLine"></div>
		
		<!--Footer Section Start-->
		<?php include('includes/inc.footer.php');?>		
		<!--Footer Section End-->
</div>
<!--Main Container End-->
</body>
</html>

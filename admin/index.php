<?php 
session_start();
include('config.php');
include('connection.php');
$err_msg = '';
$uname = '';
$pass = '';

if(isset($_REQUEST['checkLogin']) && $_REQUEST['checkLogin'] == 'CHECK')
{
	
			if($_REQUEST['uname'] == '')
				
					$err_msg = 'Please Enter Username.';
			else
					$uname = $_REQUEST['uname'];
			if($_REQUEST['uname'] !='' && $_REQUEST['pass'] == '')
				
					$err_msg = 'Please Enter Password,';
			else
					$pass = $_REQUEST['pass'];
			
			$sel_que = "SELECT fld_id FROM tbl_admin WHERE fld_userName='$uname' AND fld_password='$pass'";
			$res = @mysqli_query($connect_db,$sel_que);
			
			if(@mysqli_affected_rows($connect_db) > 0)
			{
				$row = @mysqli_fetch_array($res,MYSQLI_BOTH);
				
				$id = $row['fld_id'];
				$userName = $row['fld_userName'];
				
				$_SESSION['SESS_ID'] = $id;
				$_SESSION['SESS_NAME'] = $userName;
				
				echo "<script>document.location='home.php'</script>";
				exit;				
			}
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
		<?php include('includes/inc.header.php'); ?>
		<!--Header Section End-->
		
		<div class="hLine"></div>
		
		<!--Middle Section Start-->
        <form name="frm1" method="post" action="" onsubmit="">
        <input type="hidden" name="checkLogin" value="CHECK"/>
		<div style="padding:20px;">
        		<div style="font-family:Arial, Helvetica, sans-serif; font-size:18px; font-weight:bold; color:#0066CC;">Admin Panel</div>
                
                <div style="clear:both; height:20px; font-size:12px; color:#FF0000;"><?=$err_msg;?></div>
                <div style="padding:10px;">
                    <div>
                            <div style="float:left; width:100px; font-family:Arial, Helvetica, sans-serif; font-size:14px;">User Name</div>
                            <div><input type="text" name="uname" id="uname" value=""/></div>
                    </div>
                    
                    <div style="clear:both; height:10px;"></div>
                    
                    <div>
                        <div style="float:left; width:100px; font-family:Arial, Helvetica, sans-serif; font-size:14px;">Password</div>
                        <div><input type="password" name="pass" id="pass" value=""/></div>
                    </div>
                    
                    <div style="clear:both; height:10px;"></div>
                    
                    <div>
                            <div><input type="submit" name="submit" id="submit" value="Login"/></div>
                    </div>
                </div>
                
        </div>
        </form>
		<!--Middle Section End-->
		
		<div class="hLine"></div>
		
		<!--Footer Section Start-->
		<?php include('includes/inc.footer.php');?>		
		<!--Footer Section End-->
</div>
<!--Main Container End-->
</body>
</html>

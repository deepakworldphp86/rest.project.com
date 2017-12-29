<?php 
include('config.php');
include('connection.php');

//echo "<pre>"; print_r($_REQUEST); exit;

/*$dob = 2010-10-05
$dob_body = explode('-', $dob);
$day = $dob_body[2];
*/

if(!empty($_REQUEST['eid']) && $_REQUEST['eid'] > 0)
{
	//echo "<pre>"; print_r($_REQUEST); exit;
	$eid = $_REQUEST['eid'];
	
	$sel_que = "SELECT fld_firstName, fld_lastName, fld_hno, fld_country, fld_state, fld_city, fld_pincode, fld_mobileNumber, fld_dob, fld_gender, fld_photo, fld_hobbies FROM tbl_signup WHERE fld_id='$eid'";
	//echo $sel_que; exit;
	$res = @mysqli_query($connect_db,$sel_que);
	$row = @mysqli_fetch_array($res,MYSQLI_BOTH);
	
	$first_name = $row['fld_firstName'];
	$last_name = $row['fld_lastName'];
	$house = $row['fld_hno'];
	$country = $row['fld_country'];
	$state = $row['fld_state'];
	$city = $row['fld_city'];
	$pincode = $row['fld_pincode'];
	$mnumber = $row['fld_mobileNumber'];
	$dob = $row['fld_dob'];
	$dob_body = explode('-', $dob);
	$day = $dob_body[2];
	$month = $dob_body[1];
	$year = $dob_body[0];
	$gender = $row['fld_gender'];
	$photo = $row['fld_photo'];
	
	if($photo <> '')
	{
		$photo_path = '../upload/'.$photo;
	}
	else
	{
		$photo_path = '';
	}		
	
	$hobb = $row['fld_hobbies'];
	$hobb_Body = explode(',', $hobb);	
}

//echo "<pre>"; print_r($_REQUEST); exit;

if(!empty($_REQUEST['uid']) && $_REQUEST['uid'] > 0)
{
	//echo "<pre>"; print_r($_REQUEST); exit;
	
	$uid = $_REQUEST['uid'];
	
	$first_name = $_REQUEST['fname'];
	$lastName = $_REQUEST['lastName'];
	$house = $_REQUEST['house'];
	$cntry = $_REQUEST['contry'];
	$stat = $_REQUEST['state'];
	$city = $_REQUEST['city'];
	$pcode = $_REQUEST['pincode'];
	$mNum = $_REQUEST['mobile'];
	$day = $_REQUEST['day'];
	$month = $_REQUEST['month'];
	$year = $_REQUEST['year'];
	
	$date_birth = $year.'-'.$month.'-'.$day;
	
	$date = date('Y-m-d');
	
	$img_name = $_FILES['photo']['name'];
	if($img_name <> '')
	{
			$tmp_name = $_FILES['photo']['tmp_name'];
			$file_ext = end(explode('.', $img_name));
			$file_ext = strtolower($file_ext);
			
			$new_name = time().'.'.$file_ext;
			$img_path = '../upload/'.$new_name;
			
			move_uploaded_file($tmp_name, $img_path);
			$old_name = $_REQUEST['Image'];
			
			$unlink_path = '../upload/'.$old_name;
			unlink($unlink_path);
	}
	else
	{
			$new_name = $_REQUEST['Image'];
	}	
	$gen = $_REQUEST['gender'];
		
	$update_query = "UPDATE tbl_signup SET fld_firstName='$first_name', fld_lastName='$lastName', fld_hno='$house', fld_country='$cntry', fld_state='$stat', fld_city='$city', fld_pincode='$pcode', fld_mobileNumber='$mNum', fld_dob='$date_birth', fld_updateDate='$date', fld_photo='$new_name', fld_gender='$gen' WHERE fld_id='$uid'";
	
	//echo $update_query; exit;
	$res_que = @mysqli_query($connect_db,$update_query);
	
	echo "<script>document.location='userManagement.php'</script>";
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
        <form name="frm" method="post" action="" enctype="multipart/form-data">
        <input type="hidden" name="uid" value="<?=$eid;?>"/>
        <input type="hidden" name="Image" value="<?=$photo;?>"/>
       <div class="p10">
       		<div class="topTitle">Registration</div>
        	<div style="color:#FF0000;">&nbsp;</div>
            
            <div>
            	<div class="title1">First Name</div>
                <div><input type="text" name="fname" id="fname" value="<?=$first_name;?>"/></div>
            </div>
            
            <div class="cBoth h10"></div>
            
            <div>
            	<div class="title1">Last Name</div>
                <div><input type="text" name="lastName" id="lastName" value="<?=$last_name;?>"/></div>
            </div>
            
            <div class="cBoth h10"></div>
            
            <div>
            	<div class="title1">House No./ Street No./ Building No.</div>
                <div><input type="text" name="house" id="house" value="<?=$house;?>"/></div>
            </div>
            
            <div class="cBoth h10"></div>
            
            <div>
            	<div class="title1">Country</div>
                <div>
                	<select name="contry" id="contry" style="width:150px;">
                    	<option value="">----Select----</option>
                        <?php 
							
							$sel_que = "SELECT country_id, country FROM tbl_countries ORDER BY country ASC";
							$res = @mysqli_query($connect_db,$sel_que);
							while($row = @mysqli_fetch_array($res,MYSQLI_BOTH))
							{
								$cid = $row['country_id'];
								$cname = $row['country'];
														
						?>
                        <option value="<?=$cid;?>" <?php if($country == $cid) echo "selected";?> ><?=$cname;?></option>
                        <?php 
						}?>
                    </select>
                </div>
            </div>
            
            <div class="cBoth h10"></div>
            
            <div>
            	<div class="title1">State</div>
                <div>
                	<select name="state" id="state" style="width:150px;">
                    	<option value="">----Select----</option>
                        <?php
                        
							$sel = "SELECT fld_id, fld_name FROM tbl_state ORDER BY fld_name ASC";
							$res = @mysqli_query($connect_db,$sel);
							while($row = @mysqli_fetch_array($res,MYSQLI_BOTH))
							{
								$sid = $row['fld_id'];
								$sname = $row['fld_name'];
						?>
                        <option value="<?=$sid;?>" <?php if($state == $sid) echo "selected";?>><?=$sname;?></option>
                        <?php 
						}?>
                    </select>                    
                </div>                
            </div>
            
            <div class="cBoth h10"></div>
            
            <div>
            	<div class="title1">City</div>
                <div><input type="text" name="city" id="city" value="<?=$city;?>"/></div>
            </div>
            
            <div class="cBoth h10"></div>
            
            <div>
            	<div class="title1">Pincode</div>
                <div><input type="text" name="pincode" id="pincode" value="<?=$pincode;?>"/></div>                
            </div>
            
            <div class="cBoth h10"></div>
            
            <div>
            	<div class="title1">Mobile No.</div>
                <div><input type="text" name="mobile" id="mobile" value="<?=$mnumber;?>"/></div>
            </div>
            
            <div class="cBoth h10"></div>
            
            <div>
				<div class="title">Date of Birth<span style="color:#FF0000;">*</span></div>
				<div>
								<select name="day" id="day">
							
								<option value="">Day:</option>
								
								<?php for($i=1; $i<=31; $i++){ ?>
								
								<option value="<?php echo $i;?>"<?php if($day == $i) echo "selected";?>><?php echo $i;?></option>
								
								<?php }?>
							</select>
							
							<select name="month" id="month">
								
								<option value="">Month:</option>
								<?php for($i=0; $i<count($monthArray); $i++) {?>
								<option value="<?php echo $i;?>"<?php if($month == $i) echo "selected";?>><?php echo $monthArray[$i];?></option>
								<?php }?>
							</select>
							
							<select name="year" id="year">
							
								<option value="">Year:</option>
								
								<?php for($i=2013; $i>=1980; $i--) {?>
								
								<option value="<?php echo $i;?>"<?php if($year == $i) echo "selected";?>><?php echo $i;?></option>
								
								<?php }?>
							</select>				
					</div>
			</div>
            
            <div class="cBoth h10"></div>
            
            <div>
				<div class="title">Gender</div>
				<div>
					<input type="radio" name="gender" value="M" <?php if($gender == 'M') echo "checked";?>/>Male&nbsp;
					<input type="radio" name="gender" value="F" <?php if($gender == 'F') echo "checked";?>/>Female
				</div>
			</div>
            
            <div class="cBoth h10"></div>
            
            <div>
				<div class="title">Upload Photo<span style="color:#FF0000;">*</span></div>
				<div class="fLeft"><input type="file" name="photo" id="photo" value=""/></div>
                <div class="fLeft">&nbsp;<img src="<?=$photo_path;?>" style="height:80px; border:1px solid #999999; padding:1px;"/></div>
			</div>
            
            <div class="cBoth h10"></div>
            
            <div>
					<div class="title">Hobbies</div>
					<div style="font-family:Arial, Helvetica, sans-serif; font-size:14px;">
							<input type="checkbox" name="hobbies[]" value="M"/>Music&nbsp;
							<input type="checkbox" name="hobbies[]" value="H"/>Hockey&nbsp;
							<input type="checkbox" name="hobbies[]" value="C"/>Cricket&nbsp;
							<input type="checkbox" name="hobbies[]" value="R"/>Reading Books
					</div>
			</div>
            
            <div class="cBoth h10"></div>
            
            <div>
            	<div><input type="submit" name="update" id="update" value="Update"/></div>
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

<?php
session_start();
include('config.php');
include('connection.php');

//echo "<pre>"; print_r($_REQUEST); exit;
if(!empty($_REQUEST['u_edit']) && $_REQUEST['u_edit'] > 0)
{
		//echo "<pre>"; print_r($_REQUEST); exit;
		$id = $_REQUEST['u_edit'];
		$sel = "SELECT fld_userName, fld_firstName, fld_lastName, fld_hno, fld_country, fld_state, fld_city, fld_pincode, fld_phoneNumber, fld_mobileNumber, fld_dob, fld_gender, fld_photo FROM tbl_signup WHERE fld_id='$id'";
		//echo $sel; exit;
		$res = mysqli_query($connect_db,$sel);
		$row = mysqli_fetch_array($res,MYSQLI_BOTH);
		
		$email_id = $row['fld_userName'];
		$fname = ucfirst($row['fld_firstName']);
		$lname = ucfirst($row['fld_lastName']);
		$house = $row['fld_hno'];
		$country = $row['fld_country'];
		$state = $row['fld_state'];
		$city = $row['fld_city'];
		$pcode = $row['fld_pincode'];
		$phone = $row['fld_phoneNumber'];
		$mNum = $row['fld_mobileNumber'];
		$birth_day = $row['fld_dob'];
		$dob_body = explode('-', $birth_day);
		
		$day = $dob_body[2];
		$month = $dob_body[1];
		$year = $dob_body[0];
		
		$gen = $row['fld_gender'];
		$photo = $row['fld_photo'];
		if($photo <> '')
		{
				$img_path = 'upload/'.$photo;
		}
		else
		{	
				$img_path = '';
		}		
}

//echo "<pre>"; print_r($_REQUEST); exit;

if(!empty($_REQUEST['editChk']) && $_REQUEST['editChk'] > 0)
{
		
		//echo "<pre>"; print_r($_REQUEST); exit;
		$eid = $_REQUEST['editChk'];
		
		$imag = $_FILES['photo']['name'];
		if($imag <> '')
		{
			$tmp_name = $_FILES['photo']['tmp_name'];
			$img_ext = end(explode('.', $tmp_name));
			$img_ext = strtolower($img_ext);
			
			$new_image = time().'.'.$img_ext;
			$img_path = 'upload/'.$new_image;
			move_uploaded_file($tmp_name, $img_path);
			
			$old_file = $_REQUEST['img'];
			$unlink_file = 'upload/'.$old_file;
			unlink($unlink_file);			
		}
		else
		{
			$new_image = $_REQUEST['img'];
		}
		
		$firstName = $_REQUEST['fname'];
		$lastName = $_REQUEST['lastName'];
		$hNum = $_REQUEST['hnum'];
		$cntry = $_REQUEST['country'];
		$state = $_REQUEST['state'];
		$city = $_REQUEST['city'];
		$pincode = $_REQUEST['pincode'];
		$phone_no = $_REQUEST['pnum'];
		$mobi = $_REQUEST['mnum'];
		$day = $_REQUEST['day'];
		$month = $_REQUEST['month'];
		$year = $_REQUEST['year'];
		
		$dob = $year.'-'.$month.'-'.$day;
		
		$gender = $_REQUEST['gender'];
		$upDate = date('Y-m-d');
		
		$udt_query = "UPDATE tbl_signup SET fld_firstName='$firstName', fld_lastName='$lastName', fld_hno='$hNum', fld_country='$cntry', fld_state='$state', fld_city='$city', fld_pincode='$pincode', fld_phoneNumber='$phone_no', fld_mobileNumber='$mobi', fld_dob='$dob', fld_gender='$gender', fld_photo='$new_image', fld_updateDate='$upDate' WHERE fld_id='$eid'";
		
		mysqli_query($connect_db,$udt_query);
		
		echo "<script>document.location='dashboard.php'</script>";
	
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
        <form name="frm" method="post" action="" enctype="multipart/form-data">
        <input type="hidden" name="editChk" value="<?=$id;?>"/>
        <input type="hidden" name="img" value="<?=$photo;?>"/>
        <div class="p15">
        
           <div class="topTitle">Login Information</div>
            
                <div class="p10">
                        <div>
                            <div class="title">Email-Id<span style="color:#FF0000;">*</span></div>
                            <div><input type="text" name="eid" id="eid" value="<?=$email_id;?>" readonly="readonly"/></div>
                        </div>                     
				</div>
                
            <div class="h10"></div>
            
            <div class="topTitle">Personal Information</div>
            
            <div class="p10">
            
                    <div>
                        <div class="title">First Name<span style="color:#FF0000;">*</span></div>
                        <div><input type="text" name="fname" id="fname" value="<?=$fname;?>"/></div>
                    </div>
                    
                    <div class="h10"></div>
                    
                    <div>
                        <div class="title">Last Name</div>
                        <div><input type="text" name="lastName" id="lastName" value="<?=$lname;?>"/></div>
                    </div>
                    
                    <div class="cBoth h10"></div>
                    
                    <div>
                        <div class="title">H.No / Street No. / Building No.<span style="color:#FF0000;">*</span></div>
                        <div><input type="text" name="hnum" id="hnum" value="<?=$house;?>" /></div>
                    </div>
                    
                    <div class="cBoth h10"></div>
                    
                    <div>
                        <div class="title">Country<span style="color:#FF0000;">*</span></div>
                        <div>
                                <select name="country" id="country">
                                    
                                    <option value="">-----Select-----</option>
                                    <?php 
                                    
                                    $sel_que = "SELECT country_id, country FROM tbl_countries ORDER BY country ASC";
                                    $sel_res = mysqli_query($connect_db,$sel_que);
                                    
                                    while($row = mysqli_fetch_array($sel_res,MYSQLI_BOTH)){
                                    
                                        $cid = $row['country_id'];
                                        $c_name = $row['country'];
                                    ?>
                                    <option value="<?=$cid;?>"<?php if($country == $cid) echo "selected";?>><?=$c_name;?></option>
                                    <?php }?>								
                                </select>
                        </div>
                    </div>
                    
                    <div class="cBoth h10"></div>
                    
                    <div>
                        <div class="title">State</div>
                        <div>
                                <select name="state" id="state">
                                    <option value="">-----Select-----</option>
                                    <?php 
                                    
                                        $sel_que = "SELECT fld_id, fld_name FROM tbl_state ORDER BY fld_name ASC";
                                        $res = mysqli_query($connect_db,$sel_que);
                                        
                                        while($row = mysqli_fetch_array($res,MYSQLI_BOTH)) {
                                        
                                            $s_id = $row['fld_id'];
                                            $s_name = $row['fld_name'];										
                                    ?>
                                    <option value="<?=$s_id;?>"<?php if($state == $s_id) echo "selected";?>><?=$s_name;?></option>
                                    <?php 
                                    }?>
                                </select>
                        </div>
                    </div>
                    
                    <div class="cBoth h10"></div>
                    
                    <div>
                        <div class="title">City<span style="color:#FF0000;">*</span></div>
                        <div><input type="text" name="city" id="city" value="<?=$city;?>" /></div>
                    </div>
                    
                    <div class="cBoth h10"></div>
                    
                    <div>
                        <div class="title">Pincode<span style="color:#FF0000;">*</span></div>
                        <div><input type="text" name="pincode" id="pincode" value="<?=$pcode;?>"/></div>
                    </div>
                    
                    <div class="cBoth h10"></div>
                    
                    <div>
                        <div class="title">Land-line No.</div>
                        <div><input type="text" name="pnum" id="pnum" value="<?=$phone;?>" /></div>
                    </div>
                    
                    <div class="cBoth h10"></div>
                    
                    <div>
                        <div class="title">Mobile No.<span style="color:#FF0000;">*</span></div>
                            <div><input type="text" name="mnum" id="mnum" value="<?=$mNum;?>" /></div>
                    </div>
                    
                    <div class="cBoth h10"></div>
                    
                    <div>
                        <div class="title">Qualification</div>
                        <div>
                            
                                <select name="qlist" id="qlist" multiple="multiple">
                                    <option value="">----Select-----</option>
                                    <option value="0">BA</option>
                                    <option value="1">BCOM</option>
                                </select>
                        </div>
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
                    
                    <div class="h10"></div>
                    
                    <div>
                        <div class="title">Gender</div>
                        <div>
                                <input type="radio" name="gender" value="M" <?php if($gen == 'M') echo "checked";?>/>Male&nbsp;
                                <input type="radio" name="gender" value="F" <?php if($gen == 'F') echo "checked";?>/>Female
                        </div>
                    </div>
                    
                    <div class="cBoth h10"></div>
                    
                    <div>
                        <div class="title">Upload Photo<span style="color:#FF0000;">*</span></div>
                        <div class="fLeft"><input type="file" name="photo" id="photo" value="" /></div>
                        <div class="fLeft">&nbsp; <img src="<?=$img_path;?>" style="border:1px solid #666666; height:80px; padding:1px;"/></div>
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
                    
                    <div class="cBoth h15"></div>
                    
                    <div>
                        <div class="fLeft" style="font-family:'Times New Roman', Times, serif; font-size:14px; font-weight:normal;"><input type="checkbox" name="agree" id="agree" value=""/>I Agreed with Term & Conditions are applied.</div>					
                    </div>
                    
                    <div class="cBoth h10"></div>
                    
                    <div>
                        <div><input type="submit" name="submit" id="submit" value="Update" /></div>
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

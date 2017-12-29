<?php //echo "<pre>";print_r($hobby);?>

<div style="height:400px; padding:20px;">


	<div style="width:200px;">
			<div>
				<img src="<?=$imagePath;?>" width="200px;" style="padding:2px; width:50%;border:1px solid #999999;"/>
			</div>
		<div>
			<div class="fLeft"><?=$email_Id;?></div>
			<div class="fRight"><a href="user-edit.php?u_edit=<?=$id;?>">Edit</a></div>
		</div>
	</div>
	
	<div class="cBoth"> &nbsp; </div>
	
	<div style="font-family:Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold;">Name : <?=$first_name;?> <?=$last_name;?></div>
	
	<div class="h5"></div>
	
	<div>
		<div style="font-family:Arial, Helvetica, sans-serif; font-size:13px;">Address : <?=$house_no;?></div>
		<div style="padding-left:60px; font-family:Arial, Helvetica, sans-serif; font-size:13px;" class="fLeft"><?=$city;?> - </div>
		<div style="font-family:Arial, Helvetica, sans-serif; font-size:13px;"><?=$pincode;?></div>
	</div>
	
	<div class="h5"></div>
	
	<div style="font-family:Arial, Helvetica, sans-serif; font-size:13px;">Date of Birth : <?=$dob;?></div>
	
	<div class="h5"></div>
	
	<div style="font-family:Arial, Helvetica, sans-serif; font-size:13px;">Gender : <?=$gen;?></div>
	
	<div class="h5"></div>
	
	<div style="font-family:Arial, Helvetica, sans-serif; font-size:13px;">Mobile No.: <?=$mobile_num;?></div>
	<?php /*if(!empty($hobby)){ ?>
	<div class="dash">Hobbies : <?=$hobby;?></div>
	<?php } */?>
</div>

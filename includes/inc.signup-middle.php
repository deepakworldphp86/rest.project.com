<form name="frm" method="post" action="" onsubmit="return validate();" enctype="multipart/form-data">
<input type="hidden" name="validateLogin" value="VALID" />
<div class="p15">
			
			<?php if (@$rest_code == 201) { ?>
                
                    <strong>Success!</strong> <?php echo @$message; ?>.
               
			<?php } ?>

            <?php if (@$rest_code == 403 or @$rest_code == 409) { ?>
                
                    <strong>Error!</strong> <?php echo @$message; ?>.
               
			<?php } ?>
		<div class="topTitle">Login Information</div>
		
			<div class="p10">
					<div>
						<div class="title">Email-Id<span style="color:#FF0000;">*</span></div>
						<div><input type="email" name="email" id="email" value=""/></div>
					</div>
					
					<div class="h10"></div>
					
					<div>
						<div class="title">Password<span style="color:#FF0000;">*</span></div>
						<div><input type="password" name="password" id="password" value=""/></div>
					</div>
					
					<div class="h10"></div>
					
					<div>
						<div class="title">Confirm Password</div>
						<div><input type="password" name="repass" id="repass" value=""/></div>
					</div>
			</div>
			
		<div class="h10"></div>
		
		<div class="topTitle">Personal Information</div>
		
		<div class="p10">
		
				<div>
					<div class="title">First Name<span style="color:#FF0000;">*</span></div>
					<div><input type="text" name="firstName" id="firstName" value=""/></div>
				</div>
				
				<div class="h10"></div>
				
				<div>
					<div class="title">Last Name</div>
					<div><input type="text" name="lastName" id="lastName" value=""/></div>
				</div>
				
				<div class="cBoth h10"></div>
				
				<div>
					<div class="title">H.No / Street No. / Building No.<span style="color:#FF0000;">*</span></div>
					<div><input type="text" name="houseNumber" id="houseNumber" value="" /></div>
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
								<option value="<?=$cid;?>"><?=$c_name;?></option>
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
								<option value="<?=$s_id;?>"><?=$s_name;?></option>
								<?php 
								}?>
							</select>
					</div>
				</div>
				
				<div class="cBoth h10"></div>
				
				<div>
					<div class="title">City<span style="color:#FF0000;">*</span></div>
					<div><input type="text" name="city" id="city" value="" /></div>
				</div>
				
				<div class="cBoth h10"></div>
				
				<div>
					<div class="title">Pincode<span style="color:#FF0000;">*</span></div>
					<div><input type="text" name="pincode" id="pincode" value=""/></div>
				</div>
				
				<div class="cBoth h10"></div>
				
				<div>
					<div class="title">Land-line No.</div>
					<div><input type="text" name="phoneNumber" id="phoneNumber" value="" /></div>
				</div>
				
				<div class="cBoth h10"></div>
				
				<div>
					<div class="title">Mobile No.<span style="color:#FF0000;">*</span></div>
						<div><input type="text" name="mobileNumer" id="mobileNumer" value="" /></div>
				</div>
				
				<div class="cBoth h10"></div>
				
				<div>
					<div class="title">Qualification</div>
					<div>
						
							<select name="qualification" id="qualification" multiple="multiple">
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
								
								<option value="<?php echo $i;?>"><?php echo $i;?></option>
								
								<?php }?>
							</select>
							
							<select name="month" id="month">
								
								<option value="">Month:</option>
								<?php for($i=0; $i<count($monthArray); $i++) {?>
								<option value="<?php echo $i;?>"><?php echo $monthArray[$i];?></option>
								<?php }?>
							</select>
							
							<select name="year" id="year">
							
								<option value="">Year:</option>
								
								<?php for($i=2013; $i>=1980; $i--) {?>
								
								<option value="<?php echo $i;?>"><?php echo $i;?></option>
								
								<?php }?>
							</select>				
					</div>
				</div>
				
				<div class="h10"></div>
				
				<div>
					<div class="title">Gender</div>
					<div>
							<input type="radio" name="gender" value="M" checked="checked"/>Male&nbsp;
							<input type="radio" name="gender" value="F"/>Female
					</div>
				</div>
				
				<div class="cBoth h10"></div>
				
				<!---<div>
					<div class="title">Upload Photo<span style="color:#FF0000;">*</span></div>
					<div><input type="file" name="photo" id="photo" value="" /></div>
				</div>-->
				
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
					<div><input type="submit" name="submit" id="submit" value="Submit" /></div>
				</div>
		</div>			
</div>
</form>

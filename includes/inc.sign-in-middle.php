<form name="frm1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return checkLogin();">
<input type="hidden" name="check_login" value="CHECK" />
<div class="p20">
		
		<div>
			<div class="fLeft" style="padding:5px;"><img src="upload/images/red telephone.jpg" class="imgCss" style="width:300px;"/></div>
		</div>
		<?php

if (@$_SESSION['rest_code'] == 201) {
    ?>
                
    <strong>Success!</strong> 
    <?php
    echo $_SESSION['message'];
    unset($_SESSION['message']);
    unset($_SESSION['rest_code']);
    }?>
		<div style="padding-top:30px;">
				
				<div style="font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold; color:#009999; padding-left:100px; float:left; text-decoration:underline;">LOG-IN</div> &nbsp;
				
				<div class="h10"></div> &nbsp;
				<div style="float:left; padding-left:100px; font-family:Arial, Helvetica, sans-serif; font-size:11px; color:#FF0000;"><?php echo $err_msg;?></div>
				
				<div>
					<div class="lable">Email-Id</div>
					<div><input type="text" name="eid" id="eid" value=""/></div>
				</div>
												
				<div class="h15"></div>
				
				<div>
					<div class="lable">Password</div>
					<div><input type="password" name="pass" id="pass" value=""/></div>
				</div>
				
				<div class="h15"></div>
				
				<div>
					<div class="lable">&nbsp;</div>
					<div>
							<input type="submit" name="submit" id="submit" value="Log-In" />
							<input type="submit" name="cancel" id="cancel" value="Cancel"/>
					</div>
				</div>
		</div>
		
		<div class="cBoth"></div>
</div>
</form>

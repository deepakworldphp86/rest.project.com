<?php 
$msg = '';

if(isset($_REQUEST['sid']) && $_REQUEST['sid'] > 0 && $_REQUEST['sv'] != '')
{
	
	$sid = $_REQUEST['sid'];
	$sv = $_REQUEST['sv'];
	
	if($sv == 1)
	
		$us = 0;
	else
		$us = 1;
		
	$update_que = "UPDATE tbl_signup SET fld_status='$us' WHERE fld_id='$sid'";
	@mysqli_query($connect_db,$update_que);	
}
?>


<div style="padding:20px;">
		<?=$msg;?>
        <div style="border:1px solid #000;">
        
        	<div style="background-color:#CCCCCC;">
                <div class="lable" style="width:50px;">S.No.</div>
                <div class="lable" style="width:130px;">Name</div>
                <div class="lable" style="width:180px;">Email-Id</div>
                <div class="lable" style="width:130px;">Country</div>
                <div class="lable" style="width:100px;">Status</div>
                <div class="lable" style="width:130px;">Added Date</div>
                <div class="lable1" style="width:130px;">Action</div>                
                <div class="cBoth"></div>
			</div>        
        </div>
        
        <div class="cBoth" style="background-color:#000000; height:1px;"></div>
        
                <?php
				
					$sel_que = "SELECT fld_id, fld_firstName, fld_lastName, fld_userName, fld_country, fld_status, fld_addedDate FROM tbl_signup";
					//echo $sel_que; exit;
					$res = @mysqli_query($connect_db,$sel_que);
					
					$i = 1;
					
					while($row = @mysqli_fetch_array($res,MYSQLI_BOTH))
					{
						$id = $row['fld_id'];
						
						$fname = ucfirst($row['fld_firstName']);
						$lname = ucfirst($row['fld_lastName']);
						$name = $fname.' '.$lname;
						$eid = $row['fld_userName'];
						
						$cid = $row['fld_country'];
						
						$cntry = "SELECT country FROM tbl_countries WHERE country_id='$cid'";
						$res1 = @mysqli_query($connect_db,$cntry);
						$row1 = @mysqli_fetch_array($res1,MYSQLI_BOTH);
						
						$cntry_name = $row1['country'];
						$st_val = '';
						$status = $row['fld_status'];
						if($status == 1)
								$st_val = 'Active';
						else
								$st_val = 'Inactive';
						$addedDate = $row['fld_addedDate'];					
				?>
                <div style="border:1px solid #000;">
                    <div class="txt1" style="width:50px;"><?=$i;?></div>
                    <div class="txt1" style="width:130px;"><?=$name;?></div>
                    <div class="txt1" style="width:180px;"><?=$eid;?></div>
                    <div class="txt1" style="width:130px;"><?=$cntry_name;?></div>
                    <div class="txt1" style="width:100px;"><a href="javascript:;" onClick="checkStatus('<?=$id?>', '<?=$status;?>')"><?=$st_val;?></a></div>
                    <div class="txt1" style="width:130px;"><?=$addedDate;?></div>
                    <div class="txt2" style="width:130px;"><a href="edit-user.php?eid=<?=$id;?>">Edit</a> | <a href="view.php?vid=<?=$id;?>">View</a> | <a href="javascript:;" onclick="delCheck('<?=$id?>');">Delete</a></div>                
                    <div class="cBoth"></div>
                </div>
                
                <div class="cBoth" style="background-color:#000000; height:1px;"></div>
                
                <?php 
				$i++;
				}
				?>
                
       
</div>

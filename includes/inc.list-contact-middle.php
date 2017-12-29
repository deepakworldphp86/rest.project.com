<div class="p20">
	
    <div style="border:1px solid #CCCCCC;">
    	
        <div>
            <div class="lable" style="width:50px;">S.No.</div>
            <div class="lable" style="width:130px;">Name</div>
            <div class="lable" style="width:130px;">Mobile No.</div>
            <div class="lable" style="width:100px;">Alternate No.</div>
            <div class="lable" style="width:200px;">Email Id</div>
            <div class="lable" style="width:100px;">Status</div>
            <div class="lable1" style="width:150px;">Action</div>            
        </div>
        <div class="cBoth clHoLine"></div>
        
        <?php 				
		$sel = "SELECT fld_id, fld_firstName, fld_lastName, fld_mob1, fld_mob2, fld_eid, fld_status FROM tbl_contact";
		$res = @mysqli_query($connect_db,$sel);
		$i = 1;
		while($row = @mysqli_fetch_array($res,MYSQLI_BOTH))
		{
			$id = $row['fld_id'];
			$fname = $row['fld_firstName'];
			$lname = $row['fld_lastName'];
			
			$name = $fname.' '.$lname;
			$mob1 = $row['fld_mob1'];
			$alt_no = $row['fld_mob2'];
			$email_Id = $row['fld_eid'];
			
			$stv = $row['fld_status'];
			if($stv == 1)
			{
				$sv = 'Active';
			}
			else
			{
				$sv = 'Inactive';
			}				
	?>
	<div>	
		<div class="txt1" style="width:50px;"><?=$i;?></div>
		<div class="txt1" style="width:130px;"><?=$name;?></div>
		<div class="txt1" style="width:130px;"><?=$mob1;?></div>
		<div class="txt1" style="width:100px;"><?=$alt_no;?></div>
		<div class="txt1" style="width:200px;"><?=$email_Id;?></div>
		<div class="txt1" style="width:100px;"><?=$sv;?></div>
		<div class="txt2" style="width:150px;"><a href="view.php?vid=<?=$id;?>">View</a> | Edit | Delete</div>
	</div>
	<div class="cBoth clHoLine"></div>                   
	<?php 
	$i++;
	}
	?> 
        
    </div>         
            
</div>

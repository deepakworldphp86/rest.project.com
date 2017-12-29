<form name="frm" method="post" action="" enctype="multipart/form-data" onSubmit="return validate_contact();"> 
<input type="hidden" name="check_Contact" value="CONTACT"/>
<div class="p10">
        <div style="border:1px solid #999999; width:400px; padding:5px;">
                <div class="topTitle">Personal Information</div>
                
                <div style="color:#FF0000; font-size:12px;"><?=$err_msg;?>&nbsp;</div>
                
                <div>
                        <div class="title1">First Name</div>
                        <div><input type="text" name="fname" id="fname" value=""/></div>
                </div>
                
                <div class="cBoth h10"></div>
                
                <div>
                        <div class="title1">Last Name</div>
                        <div><input type="text" name="lastName" id="lastName" value=""/></div>
                </div>
                
                <div class="cBoth h10"></div>
                
                <div>
                        <div class="title1">H.No. / Street No. / Building No.</div>
                        <div><input type="text" name="hno" id="hno" value=""/></div>
                </div>
                
                <div class="cBoth h10"></div>
                
                <div>
                        <div class="title1">Country</div>
                        <div>
                                <select name="country" id="country" style="width:150px;">
                                	<option value="">----Select----</option>
                                    <?php 
									
										$sel = "SELECT country_id, country FROM tbl_countries ORDER BY country ASC";
										$res = mysqli_query($connect_db,$sel);
																		
										
										while($row = mysqli_fetch_array($res,MYSQLI_BOTH))
										{																					
											$cid = $row['country_id'];
											$c_name = $row['country'];									
									?>
                                    <option value="<?=$cid;?>"><?=$c_name;?></option>
                                    <?php } ?>
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
										$res1 = mysqli_query($connect_db,$sel);
										
										while($row = mysqli_fetch_array($res1,MYSQLI_BOTH))
										{
											$sid = $row['fld_id'];
											$s_name = $row['fld_name'];
									?>
                                    <option value="<?=$sid;?>"><?=$s_name;?></option>
                                    <?php }?>
								</select>
                        </div>
                </div>
                
                <div class="cBoth h10"></div>
                
                <div>
                		<div class="title1">City</div>
                        <div><input type="text" name="city" id="city" value=""/></div>
                </div>
                
                <div class="cBoth h10"></div>
                
                <div>
                        <div class="title1">Pincode</div>
                        <div><input type="text" name="pcode" id="pcode" value=""/></div>
                </div>
                
                <div class="cBoth h10"></div>
                
                <div>
                        <div class="title1">Qualification</div>
                        <div>
                                <select name="qlist" id="qlist" style="width:150px;">
                                    <option value="">----Select----</option>
                                    <option value="1">BA</option>
                                    <option value="2">BCOM</option>
                                    <option value="3">BCA</option>
                                    <option value="4">BED</option>
                                </select>
                        </div>
                </div>
                
                <div class="cBoth h10"></div>
                
                <div>
                        <div class="title1">Gender</div>
                        <div>
                                <input type="radio" name="gender" value="M" checked="checked"/>Male&nbsp;
                                <input type="radio" name="gender" value="F"/>Female
                        </div>
                </div>
                
                <div class="cBoth h10"></div>
                
                <div>
                        <div class="title1">Job Profile</div>
                        <div><input type="text" name="jprofile" id="jprofile" value=""/></div>
                </div>
                
                <div class="cBoth h10"></div>
                
                <div class="topTitle">Contact Information</div>
                
                <div class="cBoth h10"></div>
                
                <div>
                        <div class="title1">Mobile No.1</div>
                        <div><input type="text" name="mob1" id="mob1" value=""/></div>
                </div>
                
                <div class="cBoth h10"></div>
                
                <div>
                        <div class="title1">Alternate No<span style="color:#FF0000;">*</span></div>
                        <div><input type="text" name="mob2" id="mob2" value=""/></div>
                </div>
                
                <div class="cBoth h10"></div>
                
                <div>
                        <div class="title1">Phone</div>
                        <div><input type="text" name="phone" id="phone" value=""/></div>
                </div>
                
                <div class="cBoth h10"></div>
                
                <div>
                        <div class="title1">Email-Id</div>
                        <div><input type="text" name="email_id" id="email_id" value=""/></div>
                </div>
                
                <div class="cBoth h10"></div>
                
                <div>
                        <div><input type="submit" name="add" id="add" value="Add"/></div>
                </div>
        </div>
</div>
</form>

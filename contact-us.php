<?php
include('config.php');

//
#
/**/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome UIMS</title>
<link rel="stylesheet" href="<?=CSS_PATH;?>style.css" />
<script language="javascript" src="<?=JS_PATH;?>common.js" type="text/ecmascript"></script>
</head>
<body>

<!-- main container start -->
<div id="container">
	
    <!-- header start -->
	<?php include('includes/inc.header.php');?>
    <!-- header end -->
    
    <div class="verLine"></div>
        
    <!-- Middle section start -->
	 <?php include('includes/inc.contact-us-middle.php');?>
    <!-- Middle section end -->
       
	<div class="verLine"></div>
    
    <!-- Footer section start -->
	 <?php include('includes/inc.footer.php');?>
    <!-- Footer section end -->
    
</div>
<!-- main container end -->

</body>
</html>
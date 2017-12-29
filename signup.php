<?php
include('config.php');
include('connection.php');
// Signup by rest Api

$param = array();
$url = "http://rest.project.com/users/ucreate";
if (isset($_REQUEST['validateLogin']) && $_REQUEST['validateLogin'] == 'VALID') {


    $param['email'] = $_REQUEST['email'];
    $param['password'] = md5($_REQUEST['password']);
    $param['firstName'] = $_REQUEST['firstName'];
    $param['lastName'] = $_REQUEST['lastName'];
    $param['houseNumber'] = $_REQUEST['houseNumber'];
    $param['country'] = $_REQUEST['country'];
    $param['state'] = $_REQUEST['state'];
    $param['city'] = $_REQUEST['city'];
    $param['pincode'] = $_REQUEST['pincode'];
    $param['phoneNumber'] = $_REQUEST['phoneNumber'];
    $param['mobileNumer'] = $_REQUEST['mobileNumer'];
    $param['qualification'] = $_REQUEST['qualification'];
    $day = $_REQUEST['day'];
    $month = $_REQUEST['month'];
    $year = $_REQUEST['year'];

    $param['dob'] = $year . '-' . $month . '-' . $day;
    $param['gender'] = $_REQUEST['gender'];
    $hobb = $_REQUEST['hobbies'];
    $param['hobbies'] = implode(',', $hobb);

    $param['status'] = $status = 1;
    $param['addedDate'] = date('Y-m-d');
    $data = http_build_query($param);

    /*     * ****************************** Curl start here **************************************** */

    //init curl
    $ch = curl_init();

    //Set the URL to work with
    curl_setopt($ch, CURLOPT_URL, $url);

    // ENABLE HTTP POST
    curl_setopt($ch, CURLOPT_POST, 1);

    //Set the post parameters
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

    //Handle cookies for the login
    curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');

    //Setting CURLOPT_RETURNTRANSFER variable to 1 will force cURL
    //not to print out the results of its query.
    //Instead, it will return the results as a string return value
    //from curl_exec() instead of the usual true/false.
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    //execute the request (the login)
    $store = curl_exec($ch);
    //print_r($store);
    //exit;
    
    $decode = (array) json_decode($store);
    $rest_code = '';
    $rest_code = $decode['data']->rest_code;
    $message = '';
    $message = $decode['data']->message;
    //echo "<pre>";print_r($decode);exit;
   
    if ($rest_code == 201) { 
        session_start();
        $_SESSION['rest_code'] = $rest_code;
        $_SESSION['message']   = $message;
        echo'<script>window.location="http://rest.project.com/sign-in.php";</script>';
        end();
        
    }
 
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Phone Directory</title>
        <link rel="stylesheet" href="commonincludes/css/style.css" type="text/css" />
        <script language="javascript" src="commonincludes/js/jquery-1.4.4.js" type="text/javascript"></script>
        <script language="javascript" src="commonincludes/js/validate.js" type="text/javascript"></script>
    </head>

    <body>
        <!--Main Container Start-->
        <div id="container">

            <!--Header Section Start-->
            <?php include('includes/inc.header.php'); ?>
            <!--Header Section End-->
		
            <div class="hLine"></div>

            <!--Middle Section Start-->
            <?php include('includes/inc.signup-middle.php'); ?>
            <!--Middle Section End-->

            <div class="hLine"></div>

            <!--Footer Section Start-->
            <?php include('includes/inc.footer.php'); ?>		
            <!--Footer Section End-->
        </div>
        <!--Main Container End-->
    </body>
</html>

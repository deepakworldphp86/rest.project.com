<?php 
session_start();

$_SESSION['SESS_ID'] = '';
$_SESSION['SESS_NAME'] = '';

unset($_SESSION[['SESS_ID']);
unset($_SESSION[['SESS_NAME']);

echo "<script>document.location='sign-in.php?m=1'</script>";
exit;
?>
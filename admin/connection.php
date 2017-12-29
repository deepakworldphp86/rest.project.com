<?php 
$connect_db = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
$sel_db = @mysqli_select_db($connect_db,DB_NAME);
?>

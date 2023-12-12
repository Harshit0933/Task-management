<?php   
session_start();  
unset($_SESSION['sess_user']);  
unset($_SESSION['sess_insert']);
//unset($_SESSION['sess_update']);
session_destroy();  
header("location:index.php");  
?>  


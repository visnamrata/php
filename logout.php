<?php  
session_start();  
session_destroy();  
header("Location: smart.php");//use for the redirection to some page  
?>  
<?php
session_start();
if(isset( $_SESSION['uname'])){
	session_destroy();
	header("location:login page.php");
}
else{
	header("location:login page.php");
}
?>
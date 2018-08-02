<?php
session_start();

session_unset();

session_destroy();

if(isset($_SESSION['email'])){
	echo "<script>Unknown error occured: Logout failed</script>";
	header("Location: ../");
}else{
	header("Location: ../ath/login.php");
}
?>
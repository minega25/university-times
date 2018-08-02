<?php
session_start();

include 'connect.php';
$user_ok = "";
$id = "";
$email = "";
$level = "";
$hash_psswd = "";
 function check_requir($email_eval,$passwd){
	   $sql = "select * from emp_registration where email like '$email_eval' and password like '$passwd' and type like 'super' or type like 'root'";
	   $sql_run = mysql_query($sql);
	   $row = mysql_num_rows($sql_run);
	   if ($row > 0){
		   return true;
	   }
	   else{
		   return false;
	   }
   }
   
if(isset($_SESSION["email"]) && isset($_SESSION["level"]) && isset($_SESSION["password"])){
	$email = filter_var($_SESSION["email"],FILTER_SANITIZE_EMAIL );
	$level = filter_var($_SESSION["level"],FILTER_SANITIZE_STRING);
	$hash_psswd = $_SESSION["password"];
	
	$user_ok = check_requir($email,$hash_psswd );
	
}
switch($user_ok){
		case true :
				$sql_log_update = "update emp_registration set last_login =now() where email like '$email' ";
				$sql_log_update_run = mysql_query($sql_log_update);
				break;
		case false :
			header("Location: ath/login.php");
			break;
	}
  
?>
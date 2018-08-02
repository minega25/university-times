<?php
	include 'includes/connect.php';
	if(isset($_POST['appr_toggle'])){
		$get_status = preg_replace('#[^0-9]#','',$_POST['appr_toggle']);
		$get_id = preg_replace('#[^0-9!]#','',$_POST['id']);
		if($get_status == 0){
			$sql_appr = "update comments set com_status = 'approved' where com_id = $get_id";
			$sql_appr_run = mysql_query($sql_appr);
			if(!$sql_appr_run){
				echo "error occured";
			}else{
				echo "<button onclick='javascript: comment_send(1,$get_id);' class='btn btn-link'>approved</button>";
			}
		}else if($get_status == 1){
			$sql_appr = "update comments set com_status = 'unapproved' where com_id = $get_id";
			$sql_appr_run = mysql_query($sql_appr);
			if(!$sql_appr_run){
				echo "error occured";
			}else{
				echo "<button onclick='javascript: comment_send(0,$get_id);' class='btn btn-link'>unapproved</button>";
			}
			
		}
	}
	
?>
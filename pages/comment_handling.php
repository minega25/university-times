<?php
include '../forms/connect.php';
if(isset($_POST['commentor']) && isset($_POST['comment']) && isset($_POST['from'])){
	$get_commentor = preg_replace('#[^ a-zA-Z0-9!?]#i','',$_POST['commentor']);
	$get_comment = preg_replace('#[^ a-zA-Z0-9!?]#i','',$_POST['comment']);
	$from_page= preg_replace('#[^0-9]#i','',$_POST['from']);
	$time = date("y-m-d h:i:sa");	
	$sql = "INSERT INTO `comments` ( `com_name`, `comment`, `com_status`,`recieved_at`,`from_post`) VALUES ( '$get_commentor', '$get_comment', 'unapproved', '$time', $from_page )";
	$sql_run = mysql_query($sql);
	if(!$sql_run){
		echo "Upps some error occured";
	}else{
	echo "<button onclick='comment_send();' class='btn btn-link'><span class='glyphicon glyphicon-thumbs-up'> SENT</span></button>";
	}	
	
	}

?>
<?php
 include 'includes/connect.php';
 if(isset($_GET['delete_post'])){
		$post_to_delete = preg_replace('#[^ a-zA-Z0-9!]#i','',$_GET['delete_post']);
		$sql = "delete from reporter where post_id = '$post_to_delete'";
		$run_post = mysql_query($sql);
		echo "<script>alert('post deleted!');</script>";
		header("Location: view_post.php");

 }


?>
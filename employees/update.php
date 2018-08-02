<?php
 include 'includes/connect.php';
 if(isset($_POST["submit"])){
	 
	$name1 = preg_replace('#[^ a-zA-Z0-9!?.]#i','',$_POST['name']);
	$time = date('h:i:sa');
	$cat1 = preg_replace('#[^ a-zA-Z0-9!?.]#i','',$_POST['cat']);
	$story1 = preg_replace('#[^ a-zA-Z0-9!?.]#i','',$_POST['story']);
	$title1 = preg_replace('#[^ a-zA-Z0-9!?.]#i','',$_POST['title']);
	$university1 = preg_replace('#[^ a-zA-Z0-9!?.]#i','',$_POST['university']);
	$target_dir = "new_images/";
	$target_file = $target_dir.basename($_FILES['image']['name']);
	$image1 = $_FILES['image']['name'];
	$imageFileType1 = pathinfo($target_file,PATHINFO_EXTENSION);
	move_uploaded_file($_FILES["image"]["tmp_name"], $target_file) ;

 $sql1 = "update reporter set name = '$name1' where post_id = '$get_post '";
 $sql2 = "update reporter set category_id='$cat1'  where post_id = '$get_post '";
 $sql3 = "update reporter set story ='$story1' where post_id = '$get_post '";
 $sql4 = "update reporter set university='$university1' where post_id = '$get_post '";
 $sql5 = "update reporter set image = '$image1'  where post_id = '$get_post '";
 $sql_run1= mysql_query($sql1);
  $sql_run2= mysql_query($sql2);
   $sql_run3= mysql_query($sql3);
    $sql_run4= mysql_query($sql4);
	 $sql_run5= mysql_query($sql5);
 echo "<script>alert('post successfully submited !')</script>";
echo "<script>window.open('posting.php','_self')</script>";
 }

?>
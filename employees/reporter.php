<html lang="en">
<head>
    <title>registration form</title>
	<meta charset="utf-8"><!--start of meta-information about the page -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="minega shyaka patrick @makerere university" />
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
	<link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/slick.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/theme.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	
</head>
<body>
<div class="container">
  <header id="header" style="">
    <div class="row">
      <div class="col-lg-1 col-md-1 col-xs-4 "><img  src="../images/Joyent_48px.png" style="border: 3px solid black;" class="logo_pic" alt=""></div>
        <div class="col-lg-4 col-md-4 col-xs-8"><a class="logo" href="index.html"><em> The</br> University</em><strong>Times</strong></br> <span>Get informed right now</span></a></div>
       </div>

  </header>
  <h2 class="" style="text-align: center; padding: 30px 30px; top: 10px; " ><u>story submit form</u></h2>
  <section class="panel panel-primary">
  <div class="row">
	<form class="form-horizontal panel-body"  action="reporter.php" method="post"id="uniform"  enctype="multipart/form-data">
	<div class="form-group">
			<label for="name" class="control-label col-lg-2">enter name:</label>
			<div class="col-lg-6"><input type="text" class="form-control" name="name" id="name" placeholder="enter your name" required /></div>
	</div>
	<div class="form-group">
			<label for="category" class="control-label col-lg-2">choose category:</label>
			<div class="col-lg-6"><select class="form-control" name="cat">
									<option> select category </option>
									
									<?php
										include 'includes/connect.php';
										$sql = "SELECT * FROM `categories` LIMIT 0, 30 ";
										$sql_run = mysql_query($sql);
										while($rows = mysql_fetch_array($sql_run)){
											$cat_id = $rows['category_id'];
											$cat_name = $rows['category_name'];
										
											
											print"<option value='$cat_id '>$cat_name</options>";
										}
										
									?>
								  </select>
			</div>
	</div>
	<div class="form-group">
			<label for="university" class="control-label col-lg-2">enter university name:</label>
			<div class="col-lg-6"><input type="text" class="form-control" id="university" name="university" placeholder="enter your university" /></div>
	</div>
	<div class="form-group">
			<label for="title" class="control-label col-lg-2">enter title:</label>
			<div class="col-lg-6"><input type="text" class="form-control" id="title" name="title" placeholder="required" required/></div>
	</div>
	<div class="form-group">
			<label for="image" class="control-label col-lg-2">upload image:</label>
			<div class="col-lg-6"><input type="file" class="form-control" id="image" name="image" required /></div>
	</div>
	
	
	<div class="form-group">
			<label for="body" class="control-label col-lg-2">enter body:</label>
			<div class="col-lg-6"><textarea class="form-control" name="story" id="story" style="height:400px;" required></textarea></div>
			
	</div>
	<input type="reset" class="btn btn-danger " value="clear screen"  />

	<input type="submit" class="btn btn-primary" value="send"  style="margin-left: 30%;"  >
		</form>
	</div>
  </section>

  	<footer>
	</footer>
	</div>
<script src="../assets/js/jquery.min.js"></script> 
<script src="../assets/js/bootstrap.min.js"></script> 
<script src="../assets/js/wow.min.js"></script> 
<script src="../assets/js/slick.min.js"></script> 
<script src="../assets/js/custom.js"></script>
</body>
</html>
<div style="">
<?php
 include 'includes/connect.php';
 if(isset($_POST["name"])){
	 
	$name = $_POST['name'];
	$time = date('h:i:sa');
	$cat = $_POST['cat'];
	$story = $_POST['story'];
	$title = $_POST['title'];
	$university = $_POST['university'];
	$target_dir = "new_images/";
	$target_file = $target_dir.basename($_FILES['image']['name']);
	$image = $_FILES['image']['name'];
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	move_uploaded_file($_FILES["image"]["tmp_name"], $target_file) ;

 $sql = "INSERT INTO reporter (category_id,name,university,title,image,story,post_time)VALUES('$cat','$name','$university','$title','$image','$story','$time')";
 $sql_run= mysql_query($sql);
 echo "<script>alert('post successfully submited !')</script>";
echo "<script>window.open('reporter.php','_self')</script>";
 }


?></div>
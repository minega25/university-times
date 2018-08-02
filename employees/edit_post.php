<?php
	include 'includes/check_login.php';
	if(isset($_GET['edit_post'])){
		$get_id = preg_replace('#[^0-9!]#','',$_GET['edit_post']);
		$sql_var_get = "SELECT * from reporter where post_id = $get_id limit 1";
		$sql_var_get_run = mysql_query($sql_var_get);
		$rowFetch = mysql_fetch_array($sql_var_get_run);
		$name = $rowFetch['name'];
		$university = $rowFetch['university'];
		$title = $rowFetch['title'];
		$image = $rowFetch['image'];
		$story = $rowFetch['story'];
		$cat = $rowFetch['category_id'];
	}
?>
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
  <div class="row">
   <div class="col-lg-2">
  <a href="index.php"><span class="glyphicon glyphicon-home btn btn-link" style="font-size:25px; color: orangered"></span></a>
  </div>
  <div class="col-lg-1 col-lg-offset-9">
  <ul class="nav nav-pills"><li class="active"><a href="includes/logout.php">LogOut</a></li></ul>
  </div>
  </div>
	 <section class="panel panel-primary">
	  <div class="row">
		<form class="form-horizontal panel-body"  action="edit_post.php" method="post"  enctype="multipart/form-data">
		<input type="hidden" value="<?php echo"$get_id"; ?>" name="id" />
		<div class="form-group">
				<label for="name" class="control-label col-lg-2">enter name:</label>
				<div class="col-lg-6"><input type="text" class="form-control" name="name" value="<?php echo"$name"; ?>" id="name" placeholder="enter your name" required /></div>
		</div>
		<div class="form-group">
				<label for="category" class="control-label col-lg-2">choose category:</label>
				<div class="col-lg-6"><select class="form-control" name="cat"  value="<?php echo"$cat"; ?>">
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
				<div class="col-lg-6"><input type="text" class="form-control" id="university" name="university"  value="<?php echo"$university"; ?>" placeholder="enter your university" /></div>
		</div>
		<div class="form-group">
				<label for="title" class="control-label col-lg-2">enter title:</label>
				<div class="col-lg-6"><input type="text" class="form-control"  value="<?php echo"$title"; ?>" id="title" name="title" placeholder="required" required/></div>
		</div>
		<div class="form-group">
				<label for="image" class="control-label col-lg-2">upload image:</label>
				<div class="col-lg-6"><input type="file"  value="<?php echo"$image"; ?>" class="form-control" id="image" name="image" required /></div>
		</div>
		
		
		<div class="form-group">
				<label for="body" class="control-label col-lg-2">enter body:</label>
				<div class="col-lg-6"><textarea class="form-control"  name="story" id="story" rows="20" required> <?php echo"$story"; ?></textarea></div>
				
		</div>
		<input type="reset" class="btn btn-danger " value="clear screen"  />

		<input type="submit" class="btn btn-primary" value="send"  style="margin-left: 30%;"  >
			</form>
		</div>
	  </section>
	  </div>
</body>
</html>
<?php
	if(isset($_POST['name'])){
		$getId = preg_replace('#[^0-9!]#','',$_POST['id']);
		$getName = preg_replace('#[^ a-zA-Z0-9!]#i','',$_POST['name']);
		$getCat = preg_replace('#[^0-9!]#','',$_POST['cat']);
		$getUn = preg_replace('#[^ a-zA-Z0-9!]#i','',$_POST['university']);
		$getTitle = preg_replace('#[^ a-zA-Z0-9!?]#i','',$_POST['title']);
		$getStory = preg_replace('#[^ a-zA-Z0-9!?]#i','',$_POST['story']);
		$target_dir = "new_images/";
		$target_file = $target_dir.basename($_FILES['image']['name']);
		$image = $_FILES['image']['name'];
		move_uploaded_file($_FILES["image"]["tmp_name"], $target_file) ;
		$sql_update = "update reporter set name = '$getName', category_id = '$getCat' , university = '$getUn', image = '$image',title = '$getTitle', story='$getStory' where post_id = $getId ";
		$sql_update_run = mysql_query($sql_update);
		if(!$sql_update_run){
			echo "Unknown failure occured...";
		}else{
			echo"<script>window.open('view_post.php','_self');</script>";
		}
	}
?>
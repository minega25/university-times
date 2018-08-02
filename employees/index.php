<?php
	include 'includes/check_login.php';
?>
<html lang="en">
<head>
    <title></title>
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
	<script>
	</script>
	<style type="text/css" rel="stylesheet">
		.admin_sidebar ul li{text-transform: uppercase;  font-size: 25px;  padding: 15px 15px;}
		
	</style>
</head>
<body>
<div class="container">
  <header id="header" style="">
    <div class="row">
      <div class="col-lg-1 col-md-1 col-xs-4 "><img  src="../images/Joyent_48px.png" style="border: 3px solid black;" class="logo_pic" alt=""></div>
        <div class="col-lg-4 col-md-4 col-xs-8"><a class="logo" href="index.html"><em> The</br> University</em><strong>Times</strong></br> <span>Get informed right now</span></a></div>
		<div class="col-lg-5 col-md-5"><img src="images/admin.jpg" height="112px" /></div>
	  </div>

  </header>
  <div class="row">

  <div class="col-lg-1 col-lg-offset-11">
  <ul class="nav nav-pills"><li class="active"><a href="includes/logout.php">LogOut</a></li></ul>
  </div>
  </div>
<div class="row">
 <div class="col-lg-12">
<ul  class="panel panel-danger list-inline col-lg-offset-5">
<?php 
include 'includes/connect.php';
$sql = "select count(*) from comments where com_status like 'unapproved'";
$sql_run = mysql_query($sql);
$rows = mysql_fetch_row($sql_run);
$pending_comments = $rows[0];
?>
  <li><p>To do tasks:</p></li>
  <li><a href="view_comments.php" class="text-danger">comments(<?php echo "$pending_comments"; ?>);</a></li>
  <li><a href="" class="text-primary">new stories(0);</a></li>
</ul>
  </div>
</div>
<div class="row">
<div class="col-lg-4">
<ul>
<li><a href="posting.php"><span class="glyphicon glyphicon-floppy-open btn btn-link" style=" font-size: 200px; color: orangered"></span></a></li>
<a href="posting.php"><li style="padding-left: 50px ;font-family: 'Oswald';font-size: 20px;">insert new post</a></li>
</ul>
</div>
<div class="col-lg-4">
<ul>
<li><a href="view_post.php"><span class="glyphicon glyphicon-edit  btn btn-link" style="font-size: 200px; color: orangered"></span></a></li>
<li style="padding-left: 50px ;font-family: 'Oswald';font-size: 20px;"><a href="view_post.php">Edit/Delete post</a></li>
</ul>
</div>
<div class="col-lg-4">
<ul>
<li><a href="user_mgt.php"><span class="glyphicon glyphicon-user  btn btn-link" style="font-size: 200px; color: orangered"></span></li>
<a href="user_mgt.php"><li style="padding-left: 50px ;font-family: 'Oswald';font-size: 20px;">Manage users</a></li>
</ul>
</div>
</div>
<div class="row" style="margin-bottom: 50px;">
<div class="col-lg-4">
<ul>
<li><a href="view_comments.php"><span class="glyphicon glyphicon-comment  btn btn-link" style="font-size: 200px; color: orangered"></span></a></li>
<li style="padding-left: 50px ;font-family: 'Oswald';font-size: 20px;"><a href="view_comments.php">Manage Comments</a></li>
</ul>
</div>
<div class="col-lg-4">
<ul>
<li><a href="cat_mgt.php"><span class="glyphicon glyphicon-th-list  btn btn-link" style="font-size: 200px; color: orangered"></span></a></li>
<li style="padding-left: 50px ;font-family: 'Oswald';font-size: 20px;"><a href="cat_mgt.php">Insert new category</a></li>
</ul>
</div>
<div class="col-lg-4">
<ul>
<li><a href="reporter.php"><span class="glyphicon glyphicon-envelope  btn btn-link" style="font-size: 200px; color: orangered"></span></li>
<li style="padding-left: 50px ;font-family: 'Oswald';font-size: 20px;"><a href="reporter.php">Review sent stories</a></li>
</ul>
</div>
</div>
<div class="row">
<div class="col-lg-3">

  </div>
</div>
<script src="../assets/js/jquery.min.js"></script> 
<script src="../assets/js/bootstrap.min.js"></script> 
<script src="../assets/js/wow.min.js"></script> 
<script src="../assets/js/slick.min.js"></script> 
<script src="../assets/js/custom.js"></script>
</body>
</html>
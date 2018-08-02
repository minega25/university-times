<?php
session_start();
?>
<html lang="en">
<head>
    <title></title>
	<meta charset="utf-8"><!--start of meta-information about the page -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="minega shyaka patrick @makerere university" />
	<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
	<link rel="stylesheet" type="text/css" href="../../assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/slick.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/theme.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->

</head>
<body>
<div class="container">
  <header id="header" style="">
    <div class="row">
      <div class="col-lg-1 col-md-1 col-xs-4 "><img  src="../../images/Joyent_48px.png" style="border: 3px solid black;" class="logo_pic" alt=""></div>
        <div class="col-lg-4 col-md-4 col-xs-8"><a class="logo" href="index.html"><em> The</br> University</em><strong>Times</strong></br> <span>Get informed right now</span></a></div>
	
	  </div>

  </header>
  
  <div class="row">
  <div class="col-lg-12 col-lg-offset-3 wow fadeInLeftBig">
  <img src="../images/admin2.jpg"  />
  </div>
  </div>
   <div class="panel panel-default">
		  <div class="panel-body">
  <div class="row">
  <div class="col-lg-12 col-lg-offset-4 wow fadeInRightBig">
	<form method="post" action="login.php" class="form-horizontal">
		<div class="form-group">
			<div class="col-lg-6"><input type="email" placeholder="enter your email" class="form-control" name="user_email" required /></div>
		</div>
		<div class="form-group">
			<div class="col-lg-6"><input type="password" placeholder="enter your password" class="form-control" name="user_passwd" /></div>
		</div>
		<div class="form-group">
		<div class="col-lg-6"><button type="submit" class="btn btn-primary">send</button></div>
		</div>
	</form>
  </div>
  </div>
  </div>
  </div>
  </div>
  <script src="../../assets/js/jquery.min.js"></script> 
<script src="../../assets/js/bootstrap.min.js"></script> 
<script src="../../assets/js/wow.min.js"></script> 
<script src="../../assets/js/slick.min.js"></script> 
<script src="../../assets/js/custom.js"></script>
</body>
</html>
<?php
include '../includes/connect.php';
if(isset($_SESSION['email'])){
	header("Location: ../");
}
if(isset($_POST['user_email'])){
	$email = $_POST['user_email'];
	$passwd = $_POST['user_passwd'];
	$encr = md5($passwd);
	$sql = "select * from emp_registration where email like '$email' and password like '$encr' and status like 'activated' ";
	$sql_run = mysql_query($sql);
	$row = mysql_num_rows($sql_run);
	if ($row < 1){
		echo "<script>alert('match not found.If you are a member check system admin for activation');</script>";
		echo "<script>window.open('login.php','_self')</script>";
		exit();
	}
	$rows = mysql_fetch_array($sql_run);
	$id = $rows['employee_id'];
	$level = $rows['type'];
	$email = $rows['email'];
	$hash_psswd = $rows['password'];

	$_SESSION["email"] = $email;
	$_SESSION["level"] = $level;
	$_SESSION["password"] = $hash_psswd;
	header("Location: ../");

}
?>

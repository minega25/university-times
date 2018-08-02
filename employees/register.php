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
  <header id="header" style="border-bottom: 1px dotted grey">
    <div class="row">
      <div class="col-lg-1 col-md-1 col-xs-4 "><img  src="../images/Joyent_48px.png" style="border: 3px solid black;" class="logo_pic" alt=""></div>
        <div class="col-lg-4 col-md-4 col-xs-8"><a class="logo" href="index.html"><em> The</br> University</em><strong>Times</strong></br> <span>Get informed right now</span></a></div>
       </div>
  </header>
  <h2 class="" style="text-align: center; " ><u>Employee registration system</u></h2>
  

		<form action="forms/registration.php" method="post" class="form-horizontal  panel panel-default" role="form">
		<div class="panel-body">
			<div class="form-group">
			<label for="employee_id" class="control-label col-lg-2">enter employee_id:</label>
			<div class="col-lg-6"><input type="text" class="form-control" name="employee_id" placeholder="enter employee_id" /></div>
			</div>
			<div class="form-group">
			<label for="firstname" class="control-label col-lg-2">enter firstname:</label>
			<div class="col-lg-6"><input type="text" class="form-control" name="first_name" placeholder="enter firstname" /></div>
			</div>
			<div class="form-group">
			<label for="lastname" class="control-label col-lg-2">enter lastname:</label>
			<div class="col-lg-6"><input type="text" class="form-control" name="last_name" placeholder="enter lastname" /></div>
			</div>
			<div class="form-group">
			<label for="email" class="control-label col-lg-2">enter email:</label>
			<div class="col-lg-6"><input type="email" class="form-control" name="email" placeholder="enter email" /></div>
			</div>
			<div class="form-group">
			<label for="email" class="control-label col-lg-2">generate password:</label>
			<div class="col-lg-6"><input type="password" class="form-control" name="password" required /></div>
			</div>
			<div class="form-group">
			<label for="email" class="control-label col-lg-2">confirm password:</label>
			<div class="col-lg-6"><input type="password" class="form-control"  required /></div>
			</div>
			<div class="form-group">
			<label for="phonenumber" class="control-label col-lg-2">enter phonenumber:</label>
			<div class="col-lg-6"><input type="tel" class="form-control" name="phone_number" placeholder="enter phonenumber" /></div>
			</div>
			<div class="form-group">
			<label for="hiredate" class="control-label col-lg-2">enter hiredate:</label>
			<div class="col-lg-6"><input type="date" class="form-control" name="hire_date" placeholder="enter hiredate" /></div>
			</div>
			<div class="form-group">
			<label for="salary" class="control-label col-lg-2">enter salary:</label>
			<div class="col-lg-6"><input type="number" class="form-control" name="salary" placeholder="enter salary" /></div>
			</div>
			<div class="form-group">
			<label for="department_id" class="control-label col-lg-2">enter department_id:</label>
			<div class="col-lg-6"><input type="number" class="form-control" name="department_id" placeholder="enter department_id" /></div>
			</div>
			</div>
			<input type="submit" class="btn btn-primary" name="submit" value="register" style="margin-left: 40%;"/>
		</form>

  
 </div>
 
	
	<footer>
	</footer>
<script src="../assets/js/jquery.min.js"></script> 
<script src="../assets/js/bootstrap.min.js"></script> 
<script src="../assets/js/wow.min.js"></script> 
<script src="../assets/js/slick.min.js"></script> 
<script src="../assets/js/custom.js"></script>
</body>
</html>
<?php
 include 'includes/connect.php';

 ?>
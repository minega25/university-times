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
  <div class="row">
	<div class="col-lg-12">
		<table class="table table-bordered table-hover ">
	<thead>
	<tr>
		<th>category_id</th>
		<th>category name</th>
		<th>remove</th>
		
	</tr>
	</thead>
	<tbody>
	
	<?php 
					include 'includes/connect.php';
										$sql = "SELECT * FROM `categories` order by category_id desc LIMIT 0, 30 ";
										$sql_run = mysql_query($sql);
										while($rows = mysql_fetch_array($sql_run)){
											$id = $rows['category_id'];
											$name = $rows['category_name'];
											
										
											print"
												<tr>
													<td>$id </td>
													<td>$name</td>
													<td class='danger'><a href='cat_mgt.php?delete_cat=$id' class='btn btn-link'><u><span class='glyphicon glyphicon-trash' style='font-size: 20px;' ></span></u></a></td>
												</tr>";
										}
		
			?>
	
	</tbody>
	</table>
	</div>
  </div>
  <div class="row">
  <div class="col-lg-1">
	<p style="font-size: 25px;">&#9997;</p>
  </div>
   <div class="col-lg-11">
	<form class="form-inline" action="cat_mgt.php" method="post">
		<div class="form-group">
			<label>Add category:</label>
			<input type="text" class="form-control" name="cat_name" required />
		</div>
		<div class="form-group"><input type="submit" class="form-control" name="submit" /></div>
	</form>
   </div>
  </div>
  	</div>
<script src="../assets/js/jquery.min.js"></script> 
<script src="../assets/js/bootstrap.min.js"></script> 
<script src="../assets/js/wow.min.js"></script> 
<script src="../assets/js/slick.min.js"></script> 
<script src="../assets/js/custom.js"></script>
</body>
</html>
<?php
	if(isset($_GET['delete_cat'])){
	$get_cat = preg_replace('#[^0-9!]#i','',$_GET['delete_cat']);
	$sql_del = "delete from categories where category_id = $get_cat";
	$sql_run_del = mysql_query($sql_del);
	echo "<script>alert('category deleted')</script>";
	echo "<script>window.open('cat_mgt.php','_self')</script>";
	}
	if(isset($_POST['cat_name'])){
		$name = preg_replace('#[^ a-zA-Z0-9!]#i','',$_POST['cat_name']);
		$sql_insert = "insert into categories (category_name) values ('$name')";
		$sql_insert_run = mysql_query($sql_insert);
		echo "<script>alert('category $name added ');</script>";
		echo "<script>window.open('cat_mgt.php','_self')</script>";
	}
?>

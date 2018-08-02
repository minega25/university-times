<?php
	include 'includes/check_login.php';
    if($level != "root" ){
        header("Location: index.php");
    }
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
	<script language="javascript" type="text/javascript">
		function back(){
		document.getElementById("payload").style.display = "block";
		document.getElementById("results").style.display = "none";
	}
	function search(){
		var hr = new XMLHttpRequest();
		document.getElementById("payload").style.display = "none";
		document.getElementById("results").style.display = "block";
		var search_load = document.getElementById("value_search").value;
		var url = "includes/parser.php";
		var vars = "name_search="+ search_load;
		hr.open("POST",url,true);
		hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		hr.onreadystatechange = function(){
			if(hr.readyState ==4 && hr.status == 200){
				var return_data = hr.responseText;
				document.getElementById("results").innerHTML = return_data;
			}
		}
		hr.send(vars);	
		document.getElementById("results").innerHTML = "<img src='images/loading.gif' />";
	}
	</script>
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
	<div class="col-lg-4  col-lg-offset-8">
	<form onSubmit="return false;">
	<div class="form-group">
	<div class="input-group">
	<input type="search" class="form-control" id="value_search"  placeholder="search post" />
	<div class="input-group-addon"><button type="submit" onClick="javascript:search();" id="search_area_show" class="btn btn-link btn-xs"><span class="glyphicon glyphicon-search" style="font-size: 16px;" ></span></button></div>
	</div>
	</div>
	</form>
	</div>
	</div>
  <div id="payload">
   <ul role="tablist" class="nav nav-tabs custom-tabs">
              <li class="active" role="presentation"><a data-toggle="tab" role="tab" aria-controls="home" href="#view">view employee detail</a></li>
              <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="messages" href="#insert" class="insert">insert new employees</a></li>
			  <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="messages" href="#change" class="">change user password</a></li>
   </ul>
   <div class="tab-content">

 <div id="view" class="tab-pane fade in active" role="tabpanel">
  <div class="row">
	<div class="col-lg-12 view_employee">
		<table class="table table-bordered table-hover ">
	<thead>
	<tr>
		<th>id</th>
		<th>first name</th>
		<th>last name</th>
		<th>email</th>
		<th>phone number</th>
		<th>hire date</th>
		<th>priviledge level</th>
		<th>salary</th>
		<th>department_id</th>
		<th>last_seen</th>
		<th>status</th>
		<th>remove</th>
		
	</tr>
	</thead>
	<tbody>
	
	<?php 
					include 'includes/connect.php';
										$sql = "SELECT * FROM `emp_registration` order by employee_id desc LIMIT 0, 30 ";
										$sql_run = mysql_query($sql);
										while($rows = mysql_fetch_array($sql_run)){
											$id = $rows['employee_id'];
											$first = $rows['first_name'];
											$last = $rows['last_name'];
											$email = $rows['email'];
											$phone_number = $rows['phone_number'];
											$hire_date = $rows['hire_date'];
											$priviledge = $rows['type'];
											$salary = $rows['salary'];
											$department_id = $rows['department_id'];
											$status = $rows['status'];
											$last_seen = $rows['last_login'];
										
											print"
												<tr>
														<td>$id</td>
														<td>$first</td>
														<td>$last</td>
														<td>$email</td>
														<td>$phone_number</td>
														<td>$hire_date</td>
														<td>$priviledge</td>
														<td>$salary</td>
														<td>$department_id</td>
														<td>$last_seen</td>
														<td><a href ='user_mgt.php?user=$id'>$status</a></td>
													<td class='danger'><a href='user_mgt.php?delete_user=$id' class='btn btn-link'><u><span class='glyphicon glyphicon-trash' style='font-size: 20px;' ></span></u></a></td>
												</tr>";
										}
		
			?>
	
	</tbody>
	</table>
	</div>
  </div>
    </div>
	<!-- end of first tab -->
<div id="insert" class="tab-pane fade " role="tabpanel" >
<div class="row">
  <div class="col-lg-12 add_employee">
	<form action="user_mgt.php" method="post" class="form-horizontal  panel panel-default" role="form">
		<div class="panel-body">
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
			<div class="col-lg-6"><input type="password" class="form-control" name="password" placeholder="enter password" required /></div>
			</div>
			<div class="form-group">
			<label for="email" class="control-label col-lg-2">confirm password:</label>
			<div class="col-lg-6"><input type="password" class="form-control" name = "password_conf" placeholder="confirm password" required /></div>
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
			<label for="salary" class="control-label col-lg-2">priviledge level:</label>
			<div class="col-lg-6">
			<select class="form-control" name ="level" required>
			<option>regular</option>
			<option>super</option>
			<option>root</option>
			</select>
			</div>
			</div>
			<div class="form-group">
			<label for="department_id" class="control-label col-lg-2">enter department_id:</label>
			<div class="col-lg-6"><input type="number" class="form-control" name="department_id" placeholder="enter department_id" /></div>
			</div>
			</div>
			<input type="submit" class="btn btn-primary" name="submit" value="register" style="margin-left: 40%;"/>
		</form>
  </div>
  </div>

    </div>
	 <div id="change" class="tab-pane fade " role="tabpanel">
         <div class="row">
             <div class="col-lg-12">
                 
             </div>
         </div>
	 </div>
	</div>
  </div>
  <div id="results" style="display: none;">
	
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
include 'includes/connect.php';
	if(isset($_POST['submit'])){
		$first = $_POST['first_name'];
		$last = $_POST['last_name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$password_conf= $_POST['password_conf'];
		$phone_number = $_POST['phone_number'];
		$hire_date = $_POST['hire_date'];
		$salary = $_POST['salary'];
		$level = $_POST['level'];
		$department_id = $_POST['department_id'];
		
		if ($password === $password_conf){
			$encr = md5($password);
		}else{
			echo "<script>alert('passwords given do not match');</script>";
			echo "<script>window.open('javascript:history.go(-1)','_self')</script>";
			exit();
		}
		
	    $sql_insert = "INSERT INTO `emp_registration` (`first_name`, `last_name`, `password`, `email`, `phone_number`, `hire_date`, `type`, `salary`, `department_id`, `status`) 
	                   VALUES ('$first', '$last', '$encr', '$email', '$phone_number', '$hire_date', '$level', '$salary', '$department_id', 'activated');";
	
	    $sql_run_insert = mysql_query($sql_insert);
		if(!$sql_run_insert){
			echo "<script>alert('error in creating user account');</script>";
			echo "<script>window.open('user_mgt.php','_self');</script>";
		}else{
			echo "<script>alert ('user account successfully created')</script>";
			echo "<script>window.open('user_mgt.php','_self');</script>";
		}
	}
?>
<?php
	if(isset($_GET['user'])){
		$getId = preg_replace('#[^ a-zA-Z0-9!?.]#i','',$_GET['user']);
				$sql_getStatus = "select * from emp_registration where employee_id = $getId";
				$sql_getStatus_run = mysql_query($sql_getStatus);
				if(!$sql_getStatus_run){
					echo "no user selected: refer to system admin. for more";
				}else{
				$rows = mysql_fetch_array($sql_getStatus_run);
				$status_get = $rows['status'];
				}
				switch($status_get){
					case "activated":
						$sql_status_change = "UPDATE emp_registration SET status = 'disactivated' WHERE employee_id = $getId";
						$sql_status_change_run = mysql_query($sql_status_change);
						echo "<script>window.open('user_mgt.php','_self')</script>";
						break;
					case "disactivated":
						$sql_status_change = "UPDATE emp_registration SET status = 'activated' WHERE employee_id = $getId";
						$sql_status_change_run = mysql_query($sql_status_change);
						echo "<script>window.open('user_mgt.php','_self')</script>";
						break;
					default:
						echo "<script>alert('unknown input: refer to system admin');</script>";
						exit();
				}
	}
?>
<?php
 include 'includes/connect.php';
 if(isset($_GET['delete_user'])){
		$user_to_delete = preg_replace('#[^ a-zA-Z0-9!?.]#i','',$_GET['delete_user']);
		$sql = "delete from emp_registration where employee_id = '$user_to_delete'";
		$run_user_delete = mysql_query($sql);
		echo "<script>alert('user deleted!');</script>";
		echo "<script>window.open('user_mgt.php','_self')</script>";

 }


?>
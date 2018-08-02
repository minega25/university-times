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
	function comment_send(x,id){
		var hr = new XMLHttpRequest();
		var url = "appr_comment.php";
		var vars = "appr_toggle="+x+"&id="+id;
		hr.open("POST",url,true);
		hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		hr.onreadystatechange = function(){
			if(hr.readyState ==4 && hr.status == 200){
				var return_data = hr.responseText;
				document.getElementById("approvediv"+id).innerHTML = return_data;
			}
		}
		hr.send(vars);	
		document.getElementById("approvediv"+id).innerHTML = "<img src='images/loading.gif' />";
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
<h2 class="" style="text-align: center; padding: 30px 30px; top: 10px; " ><u>manage comments</u></h2>
  <div class="row">
  <div class="col-lg-12 table-responsive">
	<table class="table table-bordered table-hover ">
	<thead>
	<tr>
	    <th>id</th>
		<th>name</th>
		<th>message</th>
		<th>from post id</th>
		<th>status</th>
		<th>remove</th>
		
	</tr>
	</thead>
	<tbody>
	
	<?php 
					include 'includes/connect.php';
										$sql = "SELECT * FROM `comments` order by com_id desc";
										$sql_run = mysql_query($sql);
										while($rows = mysql_fetch_array($sql_run)){
											$com_id = $rows['com_id'];
											$name = $rows['com_name'];
											$comment = $rows['comment'];
											$com_status = $rows['com_status'];
											$from_post = $rows['from_post'];
											if($com_status == "approved"){
												$x = 1;
											}else{
												$x = 0;
											}
											print"
												<tr>
													<td>$com_id</td>
													<td>$name</td>
													<td>$comment</td>
													<td>$from_post</td>
													<td id ='approvediv$com_id'><button class='btn btn-link' onClick='javascript: comment_send($x,$com_id);' >$com_status</button></td>
													<td class='danger'><a href='delete.php?delete_post=' class='btn btn-link'><u><span class='glyphicon glyphicon-trash' style='font-size: 20px;' ></span></u></a></td>
												</tr>
																						";
										}
		
			?>
	
	</tbody>
	</table>
  
  </div>
  </div>
  </div>
 </body>
 </html>
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
     var text = document.getElementById("story_repl").value;
     var result=  text.replace(/"/g,"");
	function search(){
		var hr = new XMLHttpRequest();
		document.getElementById("payload").style.display = "none";
		document.getElementById("results").style.display = "block";
		var search_load = document.getElementById("value_search").value;
		var url = "parser_post.php";
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
  <h2 class="" style="text-align: center; padding: 30px 30px; top: 10px; " ><u>manage post</u></h2>
	<div class="row">
	<div class="col-lg-4  col-lg-offset-8">
	<form onSubmit="javascript: return false;">
	<div class="form-group">
	<div class="input-group">
	<input type="search" class="form-control" id="value_search" name="post_search"  placeholder="search post" />
	<div class="input-group-addon"><button  onClick="javascript:search();" class="btn btn-link btn-xs"><span class="glyphicon glyphicon-search" style="font-size: 16px;" ></span></button></div>
	</div>
	</div>
	</form>
	</div>
	</div>
	<div id="payload">
  <div class="row">
  <div class="col-lg-12 table-responsive">
	<table class="table table-bordered table-hover ">
	<thead>
	<tr>
	    <th>id</th>
		<th>author</th>
		<th>title</th>
		<th>image</th>
		
		<th>posted at</th>
		<th>change</th>
		<th>remove</th>
		
	</tr>
	</thead>
	<tbody>
	
	<?php 
					include 'includes/connect.php';
										$sql = "SELECT * FROM `reporter` order by post_id desc LIMIT 0, 30 ";
										$sql_run = mysql_query($sql);
										while($rows = mysql_fetch_array($sql_run)){
											$post_id = $rows['post_id'];
											$title = $rows['title'];
											$story = $rows['story'];
											$story_short = substr($story,0,60);
											$post_time = $rows['post_time'];
											$image = $rows['image'];
											$name = $rows['name'];
											print"
												<tr>
													<td>$post_id</td>
													<td>$name</td>
													<td>$title</td>
													<td><img src='new_images/$image' width='70px' height='70px'></td>
													
													<td>$post_time</td>
													<td class='info' ><a href='edit_post.php?edit_post=$post_id' class='btn btn-link'><u>edit</u></a></td>
													<td class='danger'><a href='delete.php?delete_post=$post_id' class='btn btn-link'><u><span class='glyphicon glyphicon-trash' style='font-size: 20px;' ></span></u></a></td>
												</tr>
																						";
										}
		
			?>
	
	</tbody>
	</table>
  
  </div>
  </div>
  </div>
  <div id="results"></div>
  </div>
<script src="../assets/js/jquery.min.js"></script> 
<script src="../assets/js/bootstrap.min.js"></script> 
<script src="../assets/js/wow.min.js"></script> 
<script src="../assets/js/slick.min.js"></script> 
<script src="../assets/js/custom.js"></script>
</body>
</html>
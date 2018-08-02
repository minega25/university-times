<!DOCTYPE html>
<html lang="en">
<head>
<title>UniversityTimes</title>
<meta charset="utf-8"><!--start of meta-information about the page -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="minega shyaka patrick @makerere university" />
<!-- facebook crawler helper -->
<?php
include '../forms/connect.php';
								if(isset($_GET['post'])){
										$get_post_f = preg_replace('#[^0-9]#i','',$_GET['post']);
										$sql_f = "SELECT * FROM `reporter` where post_id = '$get_post_f' ";
										$sql_run_f = mysql_query($sql_f);
										while($rows = mysql_fetch_array($sql_run_f)){
											$title_f = $rows['title'];
											$cat_id_f = $rows['category_id'];
											$name_f = $rows['name'];
											
											$story_f = $rows['story'];
											$story1_f = substr($story_f,0,70);
											$post_time_ = $rows['post_time'];
											$image_f = $rows['image'];
										$image = $rows['image'];}
										echo "<meta property='og:url' content='http://localhost:8080/unit/pages/single.php?post=$get_post_f' />
											  <meta property='og:type' content='article' />
											  <meta property='og:title' content='$title_f' />
											  <meta property='og:description' content='$story1_f' />
											  <meta property='og:image' content='http://localhost:8080/unit/images/$image_f ' />";
								}
?>


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

function search_show(){
	 document.getElementById("search_default").style.display= "none";
	 document.getElementById("search_prompt").style.display= "inline-block";
 }
 function search(){
	    document.getElementById("payload").style.display = "none";
		document.getElementById("search_results").style.display = "block";
		var hr = new XMLHttpRequest();
		var url = "parser.php";
		var search_load = document.getElementById("value_search").value;
		var vars = "name_search="+ search_load;

		hr.open("POST",url,true);
		hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		hr.onreadystatechange = function(){
			if(hr.readyState ==4 && hr.status == 200){
				var return_data = hr.responseText;
				document.getElementById("search_results").innerHTML = return_data;
			}
		}
		hr.send(vars);	
		document.getElementById("search_results").innerHTML = "<img src='images/loading.gif' />";
	 }
function prompt_reverse(){
	var s_load = document.getElementById("value_search").value;
	if(s_load == ""){
		var leave = document.getElementById("search_prompt");
		leave.style.display= "none";
		document.getElementById("search_default").style.display= "inline-block";
	}
}
		function back(){
		document.getElementById("payload").style.display = "block";
		document.getElementById("search_results").style.display = "none";
	}


	/************** comment send functionality **********/
function comment_send(){
		var hr = new XMLHttpRequest();
		var url = "comment_handling.php";
		var commentor = document.getElementById("commentor").value;
		var comment_from = document.getElementById("comment_from").value;
		var  comment = document.getElementById("comment").value;
		var vars = "commentor="+commentor+"&comment="+comment+"&from="+comment_from;

		hr.open("POST",url,true);
		hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		hr.onreadystatechange = function(){
			if(hr.readyState ==4 && hr.status == 200){
				var return_data = hr.responseText;
				document.getElementById("comment_send").innerHTML = return_data;
			}
		}
		hr.send(vars);
		document.getElementById("comment_send").innerHTML = "<img src='images/loading.gif' />";
}
</script>
</head>
<!-- end of meta-information about the page -->
<body>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '350662605293219',
      xfbml      : true,
      version    : 'v2.8'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="social-icons affix">
  <ul>
    <li><a href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
    <li><a href="http://www.googleplus.com"><i class="fa fa-google-plus"></i></a></li>
    <li><a href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
	<li><a href="http://www.youtube.com"><i class="fa fa-youtube"></i></a></li>
    <li><a href="http://www.instragram.com"><i class="fa fa-instagram"></i></a></li>
  </ul>

</div>
<div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-1 col-md-1 col-xs-4 "><img  src="../images/Joyent_48px.png" style="border: 3px solid black;" class="logo_pic" alt=""></div>
        <div class="col-lg-4 col-md-4 col-xs-8"><a class="logo" href="../"><em> The</br> University</em><strong>Times</strong></br> <span>Get informed right now</span></a></div>
       <div class="col-lg-7 col-md-7 header_bottom_right"><a href="#"><img src="../images/upperbanner.jpg" alt=""></a></div>
      </div>
  </header>
  
  <div id="navarea">
    <div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8  nav_area_custom" >
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        
          
        <div class="navbar-header">
		
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav custom_nav">
		  <li class=''><a href='../'>home</a></li>
		  <?php
										include '../forms/connect.php';
										$sql = "SELECT * FROM `categories` LIMIT 0, 6 ";
										$sql_run = mysql_query($sql);
										while($rows = mysql_fetch_array($sql_run)){
											$cat_id = $rows['category_id'];
											$cat_name = $rows['category_name'];
										
											
											print"<li class=''><a href='category.php?cat=$cat_id'>$cat_name</a></li>";
										}
										
									?>
            
            <li class="dropdown"><a class="" data-toggle="dropdown" role="button" aria-expanded="false">More &#9662;</a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="pages/technology.html">technology</a></li>
                <li><a href="pages/404.html">Lifestyle</a></li>
                <li><a href="pages/404.html">Culture</a></li>
                <li><a href="pages/404.html">blah</a></li>
              </ul>
           </li>
          </ul>
        </div>
        
        
        </div>
      
        
    </nav>
    </div>
    
<div class="col-lg-4 col-md-4 col-sm-4 btn_custom" id="search_default">
    <ul>
          <li><a class="btn btn-link login_click"  ><span class="glyphicon glyphicon-user" style="font-size: 25px; color: orangered" ><em>login</em></span></a></li>
          <li><a class="btn btn-link "><span class="glyphicon glyphicon-subscribe" style="font-size: 25px; color: orangered" ><em>Subscribe</em></span></a></li>
          <li><a class="btn btn-link " onClick="javascript:search_show();"><span class="glyphicon glyphicon-search" style="font-size: 25px; color: orangered" ></span></a></li>
    </ul>
</div>
	
 <div class="col-lg-4" id="search_prompt" style="display: none;">
	<form onSubmit="return false;">
	<div class="form-group " style="margin-top: 9px;">
	<div class="input-group">
	<input type="search" class="form-control" id="value_search" onblur="javascript:prompt_reverse();" placeholder="search post" style="height: 40px; "/>
	<div class="input-group-addon"><button type="submit" onClick="javascript:search();" id="search_area_show" class="btn btn-link btn-xs"><span class="glyphicon glyphicon-search" style="font-size: 16px;" ></span></button></div>
	</div>
	</div>
	</form>
</div>
	</div>
  </div>
  <section id="mainContent">
    <div class="content_bottom">
      <div class="col-lg-8 col-md-8">
        <div class="content_bottom_left">
          <div class="single_page_area">
            <ol class="breadcrumb">
			<?php 
					include '../forms/connect.php';
								if(isset($_GET['post'])){
										$get_post = preg_replace('#[^0-9]#','',$_GET['post']);
										$sql = "SELECT * FROM `reporter` where post_id = '$get_post' ";
										$sql_run = mysql_query($sql);
										while($rows = mysql_fetch_array($sql_run)){
											$title = $rows['title'];
											$cat_id = $rows['category_id'];
											
											
										}
										$get_cat_name = "SELECT * FROM `categories` where category_id like '%$cat_id%' ";
										$get_catname_run = mysql_query($get_cat_name);
										while($rows1 = mysql_fetch_array($get_catname_run)){
											$cat_name = $rows1['category_name'];
										}
										print "
										
										<li><a href='#'>Home</a></li>
										<li><a href='#'>$cat_name</a></li>
										<li class='active'>$title</li>
										</ol>
										<h2 class='post_titile'> $title </h2>";
								}
		
			?>
               <div class="single_page_content">
			   <?php 
					include '../forms/connect.php';
								if(isset($_GET['post'])){
										$get_post = preg_replace('#[^0-9]#i','',$_GET['post']);
										$sql = "SELECT * FROM `reporter` where post_id = '$get_post' ";
										$sql_run = mysql_query($sql);
										while($rows = mysql_fetch_array($sql_run)){
											$title = $rows['title'];
											$cat_id = $rows['category_id'];
											$name = $rows['name'];
											$story = $rows['story'];
											$story1 = substr($story,0,500);
											$story2 = substr($story,501,9000);
											$post_time = $rows['post_time'];
											$image = $rows['image'];
										}
										$get_cat_name = "SELECT * FROM `categories` where category_id like '%$cat_id%' ";
										$get_catname_run = mysql_query($get_cat_name);
										while($rows1 = mysql_fetch_array($get_catname_run)){
											$cat_name = $rows1['category_name'];
										}
										print "
							<div class='post_commentbox'> <a href='#'><i class='fa fa-user'>$name</i></a> <span><i class='fa fa-calendar'></i>$post_time</span> <a href='#'><i class='fa fa-tags'></i>$cat_name</a> </div>
              <img class='img-center img-responsive' src='../employees/new_images/$image' width='650px' />
              <p class='text-justify single_content' style='font-family: Geneva, Tahoma, sans-serif'>$story1</p>
              <p class='text-justify single_content'>$story2</p>        
	";}
		
     ?>  
			
              
              
              
            </div>
          </div>
        </div>
        <div class='post_pagination'>
<?php 
include '../forms/connect.php';
$decr= preg_replace('#[^ a-zA-Z0-9!?.]#i','',$_GET['post']) - 1;
$sql_previous = "SELECT * FROM `reporter` where post_id = $decr ";
$sql_run1 = mysql_query($sql_previous);
$rows1 = mysql_fetch_array($sql_run1);
$title_previous = $rows1['title'];
$post_id_previous = $rows1['post_id'];
$incr= preg_replace('#[^ a-zA-Z0-9!?.]#i','',$_GET['post']) + 1;
$sql_next = "SELECT * FROM `reporter` where post_id = $incr ";
$sql_run2 = mysql_query($sql_next);
$rows2 = mysql_fetch_array($sql_run2);
$title_next = $rows2['title'];
$post_id_next = $rows2['post_id'];	
if(!$post_id_previous){
	echo "
	<div class='prev'> <a class='angle_left' href=''><i class='fa fa-angle-double-left'></i></a>
	<div class='pagincontent'> <span>Previous Post</span> <a href=''>No more previous Post</a> </div>
	</div>
	";
	}else{
	print "
	<div class='prev'> <a class='angle_left' href='single.php?post=$post_id_previous'><i class='fa fa-angle-double-left'></i></a>
	<div class='pagincontent'> <span>Previous Post</span> <a href='single.php?post=$post_id_previous'>$title_previous</a> </div>
	</div>";}
	if(!$post_id_next){
		echo "
			 <div class='next'>
			<div class='pagincontent'> <span>Next Post</span> <a href=''>No Next Post</a> </div>
			<a class='angle_right' href=''><i class='fa fa-angle-double-right'></i></a> </div>
			";
	}else{
		echo"
			 <div class='next'>
			<div class='pagincontent'> <span>Next Post</span> <a href='single.php?post=$post_id_next'>$title_next</a> </div>
			<a class='angle_right' href='single.php?post=$post_id_next'><i class='fa fa-angle-double-right'></i></a> </div>
			";}
	?>

			
          
        </div>
<div
class="fb-like"
data-share="true"
data-width="450"
data-show-faces="true">
</div>
	    <div class="share_post">
				<a class="facebook" href="#"><i class="fa fa-facebook"></i>Facebook</a> 
				<a class="twitter" href="#"><i class="fa fa-twitter"></i>Twitter</a> 
				<a class="googleplus" href="#"><i class="fa fa-google-plus"></i>Google+</a> 
				<a class="linkedin" href="#"><i class="fa fa-linkedin"></i>LinkedIn</a> 
				<a class="whatsapp" href="#"><img height='29px' width='30px' src='../images/whatsapp.png' alt='' />Whatsapp</a>  
		</div>

        <div class="similar_post">
          <h2>Similar Post You May Like <i class="fa fa-thumbs-o-up"></i></h2>
          <ul class="small_catg similar_nav wow fadeInDown animated">
		<?php 
					include '../forms/connect.php';
								
										$get_post = preg_replace('#[^0-9]#','',$_GET['post']);
										$sql = "SELECT * FROM `reporter` where post_id = $get_post ";
										$sql_run = mysql_query($sql);
										while($rows = mysql_fetch_array($sql_run)){
											
											$cat_id = $rows['category_id'];
											
										}
										$sql2 = "SELECT * FROM `reporter` where category_id like '$cat_id' LIMIT 1, 3";
										$sql_run2 = mysql_query($sql2);
										
										while($rows1 = mysql_fetch_array($sql_run2)){
											$post_id = $rows1['post_id'];
											$title = $rows1['title'];
											$story= substr($rows1['story'],0,85);
											$image = $rows1['image'];
											print "
										<li>
									
										  <div class='media wow fadeInDown animated' style='visibility: visible; animation-name: fadeInDown;'> <a class='media-left related-img' href='single.php?post=$post_id'><img src='../employees/new_images/$image'></a>
											<div class='media-body'>
											  <h4 class='media-heading'><a href='single.php?post=$post_id'>$title </a></h4>
											  
											</div>
										  </div>
										</li>";
										}
								
		
			?>
            
          </ul>
        </div>
		<div class="comment_section">
			<h3>Comments area</h3>
			<div class="comment_insert">
			<form class="form-horizontal" onSubmit="javascript: return false;">
			<div class="form-group commentor-name">
			<input class="form-control" type="text" id="commentor" placeholder="enter name" required/> 
			</div>
			<div class="form-group">
			<textarea class="form-control" rows="7" id="comment" placeholder="Enter your comment" required></textarea>
			</div>
			<div class="form-group">
			<input type="hidden" id="comment_from" value="<?php echo "$get_post" ?>" />
			</div>
			<div class="form-group " id="comment_send">
			<button onclick="comment_send();" class="btn btn-link"><span class="glyphicon glyphicon-send"> SEND</span></button>
			</div>
			</form>
			</div>
			<div class="comments">
			<ul class="wow fadeInDown animated">
<?php
				$sql_comment = "select * from comments where from_post = $get_post and com_status like 'approved'";
				$sql_comment_run = mysql_query($sql_comment);
				
				while($row_com = mysql_fetch_array($sql_comment_run)){
					$commentor = $row_com['com_name'];
					$comment =  $row_com['comment'];
					$time_com = $row_com['recieved_at'];
					echo "
					<li class='comment_views wow fadeInDown animated'>
					<div class='post_commentbox'> <a href='#'><img src='../images/avatar.gif' />&nbsp; $commentor wrote:</a> <span><p><i class='fa fa-calendar'>$time_com</i></p></span></div>
					<span class='comment'><p>$comment<p></span>
				     </li>
					";
				}
				$count_sql = "select count(*) from comments where from_post = $get_post and com_status like 'approved' " ;
				$count_sql_run = mysql_query($count_sql);
				$count_row = mysql_fetch_row($count_sql_run);
				$num_rows = $count_row[0];
				if($num_rows < 1){
					echo "<li class='comment_views wow fadeInDown animated'>
					<div class='post_commentbox'> </div>
					<span class='comment_none'><h4>Be the first one to comment on this post...</h4></span>
				     </li>";
				}
?>
			</ul>
			</div>
		</div>
		
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="content_bottom_right">
          <div class="single_bottom_rightbar">
            <h2>Recent Post</h2>
            <ul class="small_catg popular_catg wow fadeInDown">
              <?php 
					include '../forms/connect.php';
										$sql = "SELECT * FROM `reporter` order by rand() LIMIT 0, 4 ";
										$sql_run = mysql_query($sql);
										while($rows = mysql_fetch_array($sql_run)){
											$post_id = $rows['post_id'];
											$title = $rows['title'];
											$image = $rows['image'];
											$story = $rows['story'];
											$story_short = substr($story,0,110);
											
											print"<li>
													<div class='media wow fadeInDown'> <a href='single.php?post=$post_id' class='media-left'><img  src='../employees/new_images/$image'> </a>
													  <div class='media-body'>
														<h4 class='media-heading'><a href='single.php?post=$post_id'>$title</a></h4>
														<p>$story_short... </p>
													  </div>
													</div></li>";
										}
		
			?>
            </ul>
          </div>
          <div class="single_bottom_rightbar">
            <ul role="tablist" class="nav nav-tabs custom-tabs">
              <li class="active" role="presentation"><a data-toggle="tab" role="tab" aria-controls="home" href="#mostPopular">Most Popular</a></li>
              <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="messages" href="#recentComent">Recent Comment</a></li>
            </ul>
            <div class="tab-content">
              <div id="mostPopular" class="tab-pane fade in active" role="tabpanel">
                <ul class="small_catg popular_catg wow fadeInDown">
                  <?php 
					include '../forms/connect.php';
										$sql = "SELECT * FROM `reporter` order by rand() LIMIT 0, 4 ";
										$sql_run = mysql_query($sql);
										while($rows = mysql_fetch_array($sql_run)){
											$post_id = $rows['post_id'];
											$title = $rows['title'];
											$image = $rows['image'];
											$story = $rows['story'];
											$story_short = substr($story,0,110);
											
											print"<li>
													<div class='media wow fadeInDown'> <a href='single.php?post=$post_id' class='media-left'><img  src='../employees/new_images/$image'> </a>
													  <div class='media-body'>
														<h4 class='media-heading'><a href='single.php?post=$post_id'>$title</a></h4>
														<p>$story_short... </p>
													  </div>
													</div></li>";
										}
		
			?>
                </ul>
              </div>
              <div id="recentComent" class="tab-pane fade" role="tabpanel">
                <ul class="small_catg popular_catg">
                  <?php 
					include '../forms/connect.php';
										$sql = "SELECT * FROM `reporter` order by post_id desc LIMIT 0, 4 ";
										$sql_run = mysql_query($sql);
										while($rows = mysql_fetch_array($sql_run)){
											$post_id = $rows['post_id'];
											$title = $rows['title'];
											$image = $rows['image'];
											$story = $rows['story'];
											$story_short = substr($story,0,110);
											
											print"<li>
													<div class='media wow fadeInDown'> <a href='single.php?post=$post_id' class='media-left'><img  src='../employees/new_images/$image'> </a>
													  <div class='media-body'>
														<h4 class='media-heading'><a href='single.php?post=$post_id'>$title</a></h4>
														<p>$story_short... </p>
													  </div>
													</div></li>";
										}
		
			?>
                </ul>
              </div>
            </div>
          </div>
         
          <div class="single_bottom_rightbar wow fadeInDown">
            <div class="panel panel-default">
	  
			<div class="panel-body">
				<img src="../images/sideAdvert.jpg"class="img-responsive visible-lg visible-md">
			</div>
			</div>
            
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<footer id="footer">
  <div class="footer_top">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2">
          <div class="single_footer_top wow fadeInLeft">
           <h2>Sections</h2>
            <ul class="item1_nav">
              
              <li><a href="#">Home</a></li>
              <li><a href="#">Politics</a></li>
              <li><a href="#">Business</a></li>
              <li><a href="#">Sports</a></li>
             
            </ul>
          </div>
        </div>
         <div class="col-lg-2 col-md-2 col-sm-2">
          <div class="single_footer_top wow fadeInLeft">
           <h2></br></h2>
            <ul class="item2_nav">
              <li><a href="#">Jobs</a></li>
              <li><a href="#">Research</a></li>
              <li><a href="#">Technology</a></li>
              <li><a href="#">LifeStyle</a></li>
           </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="single_footer_top wow fadeInDown">
            <h2> UniversityTimes</h2>
			<ul class="item2_nav">
				<li><a href="">About Us</a></li>
				<li><a href="">Advertise with us</a></li>
				<li><a href="">Donate</a></li>
				<li><a href="">SubscribeNow</a></li>
			</ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="single_footer_top wow fadeInRight">
            <h2>Local links</h2>
            <ul class="item2_nav">
				<li><a href="">Campusbee.com</a></li>
				<li><a href="">dailyMonitor.com</a></li>
				
			</ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer_bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="footer_bottom_left">
            <p>Copyright &copy-2016 <a href="index.html">University<strong>Times</strong></a>  &#4960; All Rights Reserved</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="footer_bottom_right">
            <p><a href="#">Privacy</a> | <a href="#">terms and conditions</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="../assets/js/jquery.min.js"></script> 
<script src="../assets/js/bootstrap.min.js"></script> 
<script src="../assets/js/wow.min.js"></script> 
<script src="../assets/js/slick.min.js"></script> 
<script src="../assets/js/custom.js"></script>
</body>
</html>
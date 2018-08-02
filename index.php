<!DOCTYPE html>
<html lang="en">
<head>
<title>UniversityTimes</title>
<meta charset="utf-8"><!--start of meta-information about the page -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="minega shyaka patrick @makerere university" />
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<!-- end of meta-information about the page -->
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<div id="login_section">
 <div class="login_bckground">
   
    </div>
 <section id="mainContent">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-md-offset-3 col-lg-offset-3">
        <div class=" login_form ">
           <div class="login_close"><img src="images/Delete.png" height="30px" width="30px"></div>
          <h2> Log in:</h2>
		  <p>To save articles or get newsletters,alert or recommendations</p>
         
          
          <form action="forms/login.php" class="contact_form" method="post">

                  <label>Enter Email:</label><input class="form-control" type="email" placeholder="E-mail(required)" name="email" required>
                  <label>Enter Password:</label><input class="form-control" type="password" placeholder="Password(required)" name="password" required>
                  
				<div class="checkbox pull-left"><label><input type="checkbox">Remember me</label></div>
                  <input type="submit" value="Done" name="submit" >
          </form>
		  
		  <h3><em>Dont have an account?</em> </h3>
		  <a href="">Subscribe Now</a>
        </div>
      </div>
    </div>
  </section>
</div>
<div class="search_area">
<div class="search_bckground">

</div>
<section id="mainContent">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-md-offset-3 col-lg-offset-3">
	  
	  <div class="login_form ">
	  <div class="search_close" ><img src="images/Delete.png" height="30px" width="30px"></div>
<form action="forms/results.php" method="post" class="form-horizontal">
	
	<input type="search" class="form-control " name="search" placeholder="search by keyword" required>
	
	<input type="submit" class="btn btn-default " value="Go" >
	
</form>
</div>
</div>
</div>
</section>
	
	
</div>

<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="social_media">
  <ul>
    <li><a href="http://www.facebook.com"><img src="images/Facebook_48px.png"></a></li>
    <li><a href="http://www.googleplus.com"><img src="images/Google Plus-48.png"></a></li>
    <li><a href="http://www.twitter.com"><img src="images/Twitter Filled-50.png"></a></li>
  </ul>

</div>
<div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-1 col-md-1 col-xs-4 "><img  src="images/Joyent_48px.png" style="border: 3px solid black;" class="logo_pic" alt=""></div>
        <div class="col-lg-4 col-md-4 col-xs-8"><a class="logo" href="index.html"><em> The</br> University</em><strong>Times</strong></br> <span>Get informed right now</span></a></div>
       <div class="col-lg-7 col-md-7 header_bottom_right"><a href="#"><img src="images/upperbanner.jpg" alt=""></a></div>
      </div>
  </header>
  
  <div id="navarea" class="container">
    <div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8  nav_area_custom" >
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        
          
        <div class="navbar-header">
		
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav custom_nav">
		  <?php
										include 'forms/connect.php';
										$sql = "SELECT * FROM `categories` LIMIT 0, 7 ";
										$sql_run = mysql_query($sql);
										while($rows = mysql_fetch_array($sql_run)){
											$cat_id = $rows['category_id'];
											$cat_name = $rows['category_name'];
										
											
											print"<li class=''><a href=''>$cat_name</a></li>";
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
    
    <div class="col-lg-4 col-md-4 col-sm-4 btn_custom">
      <ul>
          <li><a class="btn btn-primary login_click"  >Login</a></li>
          <li><a class="btn btn-danger "><em>Subscribe</em></a></li>
          <li><a class="btn btn-info "><strong>Donate</strong></a></li>
          <li><a class="btn btn-link search_trigger"><img src="images/Search.png" height="33" width="30"></a></li>
        </ul>
    </div>
	</div>
  </div>
  <section id="mainContent">
    <div class="content_top">
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm8">
          <div class="latest_slider">
            <div class="slick_slider">   <!-- check slick_slider in js to change parameters -->  
              <div class="single_iteam"><img src="images/550x330x1.jpg" alt="" >
                <h2><a class="slider_tittle" href="pages/single.html">university times coming up blah blah blab blahuniversity times coming up blah blah blab blah</a></h2>
              </div>
              <div class="single_iteam"><img src="images/550x330x2.jpg" alt="" >
                <h2><a class="slider_tittle" href="pages/single.html">university times coming up blah blah blab blahuniversity times coming up blah blah blab blah</a></h2>
              </div>
              <div class="single_iteam"><img src="images/550x330x3.jpg" alt="" >
                <h2><a class="slider_tittle" href="pages/single.html">university times coming up blah blah blab blahuniversity times coming up blah blah blab blah</a></h2>
              </div>
              <div class="single_iteam"><img src="images/550x330x4.jpg" alt="" >
                <h2><a class="slider_tittle" href="pages/single.html">university times coming up blah blah blab blahuniversity times coming up blah blah blab blah</a></h2>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm4">
         <div class="content_middle_rightbar">
          <div class="single_category wow fadeInDown">
            <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a href="#" class="title_text">Top stories</a> </h2>
            <h3><a href="pages/single.html"> &#4960;university times side story 1 and and</a></h3>
            <h3> <a href="pages/single.html">&#4960;university times side story 2 and and</a></h3>
            <h3><a href="pages/single.html"> &#4960;university times side story 3 and ande</a></h3>
            <h3> <a href="pages/single.html">&#4960;university times side story 4 and and</a></h3>
            <a href="pages/single.html"><img src="images/sideAdvert.jpg" class="img-responsive"></a>

          </div>
        </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm8">
                   <div id="top_story" class="" role="">
                <ul class="small_catg popular_catg">
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">university times coming up blah blah blab blah </a></h4>
                        <p>university times a good solution for all people young ,old, keeping track of our former lives... </p>
                      </div>
                    </div>
                  </li>
                  <li>
                    
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">university times coming up blah blah blab blah </a></h4>
                        <p>university times a good solution for all people young ,old, keeping track of our former lives... </p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">university times coming up blah blah blab blah </a></h4>
                        <p>university times a good solution for all people young ,old, keeping track of our former lives... </p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm4" ><a href="pages/single.html"><img src="images/sideAvert1.jpg"class="img-responsive"></a></div>
      </div>
    </div>
    
    <div class="content_bottom">
      <div class="col-lg-8 col-md-8">
        <div class="content_bottom_left">
          <div class="single_category wow fadeInDown">
            <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#">LifeStyle</a> </h2>
            <div class="business_category_left wow fadeInDown">
              <ul class="fashion_catgnav">
                <li>
                  <div class="catgimg2_container"> <a href="pages/single.html"><img alt="" src="images/390x240x1.jpg"></a> </div>
                  <h2 class="catg_titile"><a href="pages/single.html">univeristy times coming soon</a></h2>
				      <span class="catg_para"><p> university times a good solution for all people young ,old, keeping track of our former lives...</p></span>
                  <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> </div>
                  
                </li>
              </ul>
            </div>
            <div class="business_category_right wow fadeInDown">
              <ul class="small_catg">
                <li>
                  <div class="media wow fadeInDown"> <a class="media-left" href="pages/single.html"><img src="images/112x112.jpg" alt=""></a>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="pages/404.html">university times coming up blah blah blab blah </a></h4>
                      <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="#">University times coming up blah blah blab blah </a></h4>
                      <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="#">university times coming up blah blah blab blah </a></h4>
                      <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="games_fashion_area">
            <div class="games_category">
              <div class="single_category">
                <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#">Sports</a> </h2>
                <ul class="fashion_catgnav wow fadeInDown">
                  <li>
                    <div class="catgimg2_container"> <a href="pages/404.html"><img alt="" src="images/390x240x1.jpg"></a> </div>
                    <h2 class="catg_titile"><a href="#">univeristy times coming soon</a></h2>
                   <p>university times a good solution for all people young ,old, keeping track of our former lives...</p>
                  <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> </div>
				  </li>
                </ul>
                <ul class="small_catg wow fadeInDown">
                  <li>
                    <div class="media"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">university times coming up blah blah blab blah </a></h4>
                        <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">university times coming up blah blah blab blah </a></h4>
                        <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="fashion_category">
              <div class="single_category">
                <div class="single_category wow fadeInDown">
                  <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#">Research</a> </h2>
                  <ul class="fashion_catgnav wow fadeInDown">
                    <li>
                      <div class="catgimg2_container"> <a href="#"><img alt="" src="images/390x240x1.jpg"></a> </div>
                      <h2 class="catg_titile"><a href="#">univeristy times coming soon....</a></h2>
                     <p>university times a good solution for all people young ,old, keeping track of our former lives...</p>
                    <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> </div>
					</li>
                  </ul>
                  <ul class="small_catg wow fadeInDown">
                    <li>
                      <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#">university times coming up blah blah blab blah.... </a></h4>
                          <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#">university times coming up blah blah blab blah.... </a></h4>
                          <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="technology_catrarea">
            <div class="single_category">
              <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a href="pages/technology.html" class="title_text" href="#">Technology</a> </h2>
              <div class="business_category_left">
                <ul class="fashion_catgnav wow fadeInDown">
                  <li>
                    <div class="catgimg2_container"> <a href="#"><img alt="" src="images/390x240x1.jpg"></a> </div>
                    <h2 class="catg_titile"><a href="#">univeristy times coming soon</a></h2>
                    <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> </div>
                    <p>university times a good solution for all people young ,old, keeping track of our former lives...</p>
                  </li>
                </ul>
              </div>
              <div class="business_category_right">
                <ul class="small_catg wow fadeInDown">
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">university times coming up blah blah blab blah </a></h4>
                        <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">university times coming up blah blah blab blah </a></h4>
                        <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">university times coming up blah blah blab blah </a></h4>
                        <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="content_bottom_right">
          <div class="single_bottom_rightbar">
            <h2>Recent Post</h2>
           <ul class="small_catg popular_catg wow fadeInDown">
              <li>
                <div class="media wow fadeInDown"> <a href="#" class="media-left"><img alt="" src="images/112x112.jpg"> </a>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="#">university times coming up blah blah blab blah </a></h4>
                    <p>university times a good solution for all people young ,old, keeping track of our former lives... </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="#" class="media-left"><img alt="" src="images/112x112.jpg"> </a>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="#">university times coming up blah blah blab blah </a></h4>
                    <p>university times a good solution for all people young ,old, keeping track of our former lives... </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="#" class="media-left"><img alt="" src="images/112x112.jpg"> </a>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="#">university times coming up blah blah blab blah </a></h4>
                    <p>university times a good solution for all people young ,old, keeping track of our former lives... </p>
                  </div>
                </div>
              </li>
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
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">university times coming up blah blah blab blah </a></h4>
                        <p>university times a good solution for all people young ,old, keeping track of our former lives... </p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">university times coming up blah blah blab blah </a></h4>
                        <p>university times a good solution for all people young ,old, keeping track of our former lives... </p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">university times coming up blah blah blab blah </a></h4>
                        <p>university times a good solution for all people young ,old, keeping track of our former lives... </p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div id="recentComent" class="tab-pane fade" role="tabpanel">
                <ul class="small_catg popular_catg">
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">university times coming up blah blah blab blah </a></h4>
                        <p>university times a good solution for all people young ,old, keeping track of our former lives... </p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">university times coming up blah blah blab blah </a></h4>
                        <p>university times a good solution for all people young ,old, keeping track of our former lives... </p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">university times coming up blah blah blab blah </a></h4>
                        <p>university times a good solution for all people young ,old, keeping track of our former lives... </p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="single_bottom_rightbar wow fadeInDown">
            
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- start of footer -->

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
				<li><a href="pages/contact.html">Contact Us</a></li>
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

<!-- end of footer -->
<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/custom.js"></script>
</body>
</html>
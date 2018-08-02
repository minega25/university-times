<?php 
include '../forms/connect.php';
if(isset($_POST['name_search'])){
	$get_query = preg_replace('#[^ a-zA-Z0-9!?.]#i','',$_POST['name_search']);
	//pagination settings
	$pn = "";
	$sql = "SELECT * FROM `reporter` where story like '%$get_query%' or title like '%$get_query%'";
	$sql_run = mysql_query($sql);
	$total_rows = mysql_num_rows($sql_run);
	$rpp = 6;
	$last = ceil($total_rows/$rpp);
	if($last < 1){
		$last = 1;
	}
	if(isset($_POST['pn'])){
	$pn = preg_replace('#[^0-9]#','',$_POST['pn']);
	}
	if($pn == "" || $pn < 0){
		$pn = 0;
		}
	if($pn > $last){
		$pn = $last;
	}
	$next_page = $pn+1;
	$previous = $pn -1;
	$limit = "LIMIT ".($pn*$rpp).",$rpp";
	$sql_pag = "SELECT * FROM `reporter` where story like '%$get_query%' or title like '%$get_query%' $limit";
	$sql_pag_run = mysql_query($sql_pag);

	
}			
?>	
<div class="container">
<div class="row">
<div class="col-lg-2 col-md-1 col-sm1">
<button class="btn btn-link" onClick="javascript:back();"><span style="opacity: .7;border-radius: 100%; font-size: 25px;"class="glyphicon glyphicon-arrow-left"></span></button>
</div>
</div>
<div class="row">
<div class="col-lg-10 col-md-11 col-sm11">
<?php
	echo "<p style=' '> results fetched</p>";
?>
</div>
</div>
<div class="row">
<div class="col-lg-10 col-md-10 col-sm12">
<div id="top_story" class="" role="">
<ul class="small_catg popular_catg">
<?php				
while($rows = mysql_fetch_array($sql_pag_run)){
$post_id = $rows['post_id'];
$title = $rows['title'];
$image = $rows['image'];
$story = $rows['story'];
$story_short = substr($story,0,175);
$post_time = $rows['post_time'];
	print" <li>
			<div class='media wow fadeInDown'> <a class='media-left' href='pages/single.php?post=$post_id'><img src='employees/new_images/$image' ></a>
			<div class='media-body'>
				<h4 class='media-heading'><a href='pages/single.php?post=$post_id'>$title </a></h4>
					<p>$story_short... </p>
				<div class='comments_box'> <span class='meta_date'>$post_time</span> <span class='meta_comment'><a href='#'>No Comments</a></span> <span class='meta_more'><a  href='pages/single.php?post=$post_id'>Read More...</a></span> </div>
			</div>
			</div>
			</li>";
										}
?>

</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="pagination_area">
          <nav>
            <ul class="pagination">
<?php
switch($pn){
	case 0:
		echo "<script>pag_control();</script>";
		break;
	case $last:
		echo "<script>pag_control(1);</script>";
}
?>
              <li id="previous"><a><button  class="btn btn-link" onClick="javascript:search(<?php echo "$previous"; ?>);"><span aria-hidden="true">&laquo;</span></button></a></li>
			  <?php
			  for($i =1; $i <= ($last); $i++){
				  echo '<li><a><button class="btn btn-link" onClick="javascript:search('. ( $i-1 ) .');">'. $i .'</button></a></li>';
			  }
			  ?>
              <li  id="next"><a><button class="btn btn-link" onClick="javascript:search(<?php echo "$next_page"; ?>);"><span aria-hidden="true">&raquo;</span></button></a></li>
            </ul>
          </nav>
        </div>
</div>
</div>
</div>
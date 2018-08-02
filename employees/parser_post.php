  <div class="row">
  <div class="col-lg-12 table-responsive">
	<table class="table table-bordered table-hover ">
	<thead>
	<tr>
	    <th>id</th>
		<th>author</th>
		<th>title</th>
		<th>image</th>
		<th>story</th>
		<th>posted at</th>
		<th>change</th>
		<th>remove</th>
		
	</tr>
	</thead>
	<tbody>
	
	<?php 
					include 'includes/connect.php';
										if(isset($_POST['name_search'])){
											
										$getSearch = preg_replace('#[^ a-zA-Z0-9!?.]#i','',$_POST['name_search']);
										$sql = "SELECT * FROM `reporter` where title like '%$getSearch%' or name like '%$getSearch%'or story like '%$getSearch%' LIMIT 0, 30 ";
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
													<td>$story_short </td>
													<td>$post_time</td>
													<td class='info' ><a href='edit_post.php?edit_post=$post_id' class='btn btn-link'><u>edit</u></a></td>
													<td class='danger'><a href='delete.php?delete_post=$post_id' class='btn btn-link'><u><span class='glyphicon glyphicon-trash' style='font-size: 20px;' ></span></u></a></td>
												</tr>
																						";
										}
										}
			?>
	
	</tbody>
	</table>
  
  </div>
  </div>
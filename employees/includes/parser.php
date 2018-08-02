<div class="row"><button class="btn btn-link" onClick="javascript:back();"><span style="opacity: .7;border-radius: 100%; font-size: 25px;"class="glyphicon glyphicon-arrow-left"></span></button></div>
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
		<th>last_login</th>
		<th>status</th>
		<th>remove</th>
		
	</tr>
	</thead>
	<tbody>
	<?php
	include 'connect.php';
	if(isset($_POST['name_search'])){
										$get_query = $_POST['name_search'];
										$sql = "select * from emp_registration where first_name like '%$get_query%' or last_name like '%$get_query%'";
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
										echo"

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
	}
		?>

	</tbody>
	</table>
	</div>
  </div>

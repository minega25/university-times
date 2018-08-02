<?php
 include '../../forms/connect.php';
 $stmt = $db->prepare("insert into emp_registration( employee_id,first_name,last_name,email,phone_number,hire_date,salary,department_id) values(:employee_id,:first_name,:last_name,:email,:phone_number,:hire_date,:salary,:department_id)");
$stmt->bindValue (":employee_id",$_POST["employee_id"]);
$stmt->bindValue (":first_name",$_POST["first_name"]);
$stmt->bindValue (":last_name",$_POST["last_name"]);
$stmt->bindValue (":email",$_POST["email"]);
$stmt->bindValue (":phone_number",$_POST["phone_number"]);
$stmt->bindValue (":hire_date",$_POST["hire_date"]);
$stmt->bindValue (":salary",$_POST["salary"]);
$stmt->bindValue (":department_id",$_POST["department_id"]);

$stmt->execute();
 ?>
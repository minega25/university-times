<?php
include 'connect.php';

$stmt = $db->prepare("insert into contact(name,email,subject,message)
						values(:name,:email,:subject,:message)");
$stmt->bindValue (":name",$_POST["name"]);
$stmt->bindValue (":email",$_POST["email"]);
$stmt->bindValue (":subject",$_POST["subject"]);
$stmt->bindValue (":message",$_POST["message"]);

$stmt->execute();


?>
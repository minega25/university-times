<?php
include 'connect.php';

$stmt = $db->prepare("INSERT INTO login(email,password)VALUES(:email,password(:password))");

$stmt->bindValue(":email",$_POST["email"]);
$stmt->bindValue(":password",$_POST["password"]);

$stmt->execute();

?>
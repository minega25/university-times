<?php
 include '../../forms/connect.php';
 $stmt = $db->prepare("insert into reporter( name,university,title,story) values(:name,:university,:title,:story)");
$stmt->bindValue (":name",$_POST["name"]);
$stmt->bindValue (":university",$_POST["university"]);
$stmt->bindValue (":title",$_POST["title"]);
$stmt->bindValue (":story",$_POST["story"]);


$stmt->execute();
<?php
include "connect.php";

$name 		= $_POST['name'];
$phone 		= $_POST['phone'];
$address 	= $_POST['address'];
$gender 	= $_POST['gender'];
$course 	= $_POST['course_id'];
$lang 		= implode(",",$_POST['lang']);//Array to String

$sql = "INSERT INTO `student` (`id`,`name`,`phone`,`address`,`gender`,`course`,`language`) VALUES (NULL,'$name','$phone','$address','$gender','$course','$lang')";
$db->query($sql);

header('location:display.php');




?>
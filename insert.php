<?php
include "connection.php";

$name 		= $_POST['name'];
$phone 		= $_POST['phone'];
$address 	= $_POST['address'];
$gender 	= $_POST['gender'];
$course 	= $_POST['course_id'];
$lang 		= implode(",",$_POST['lang']);//Array to String

$sql = "INSERT INTO `students` (`Id`,`Name`,`Phone`,`Address`,`Gender`,`Course`,`Languages`) VALUES (NULL,'$name','$phone','$address','$gender','$course','$lang')";
$db->query($sql);

header('location:show.php');


?>
<?php
include "connection.php";

$up_id 		= $_POST['up_id'];
$name 		= $_POST['name'];
$phone 		= $_POST['phone'];
$address 	= $_POST['address'];
$gender 	= $_POST['gender'];
$course 	= $_POST['course_id'];
$lang	 	= implode(",",$_POST['lang']);

$sql = "UPDATE `students` SET `Name` = '$name',`Phone` = '$phone',`Address` = '$address', `Gender` = '$gender',`Course` = '$course',`Languages`= '$lang' WHERE `Id` ='$up_id'";
$db->query($sql);

header('location:show.php');


?>
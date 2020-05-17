<?php
include "connection.php";
$del_id = $_GET['del_id'];

//print $del_id;

$sql = "DELETE FROM `students` WHERE `Id` = '$del_id'";
$db->query($sql);

header("location:show.php");
?>

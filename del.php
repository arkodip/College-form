<?php
include "connect.php";
$del_id = $_GET['del_id'];

//print $del_id;

$sql = "DELETE FROM `student` WHERE `Id` = '$del_id'";
$db->query($sql);

header("location:dispay.php");
?>
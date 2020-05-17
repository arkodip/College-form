<?php
include "connect.php";

print "<TABLE BORDER = 1 CELLPADDING = 5 ALIGN = CENTER CELLSPACING =0>
			<TR>
				<TH>ID</TH>
				<TH>NAME</TH>
				<TH>PHONE</TH>
				<TH>ADDRESS</TH>
				<TH>Gender</TH>
				<TH>Courses</TH>
				<TH>Languages</TH>
				<TH>DELETE</TH>
				<TH>EDIT</TH>
			</TR>
		";

$sql = "SELECT * FROM `student`";
$res = $db->query($sql);
while($row = $res->fetch_array()) {

	$sql1 	= "SELECT * FROM `courses` WHERE `course_id` = '$row[Course]'"; //3
	$res1 	= $db->query($sql1);
	$course = $res1->fetch_array();

	print "
			<TR>
				<TD>$row[Id]</TD>
				<TD>$row[Name]</TD>
				<TD>$row[Phone]</TD>
				<TD>$row[Address]</TD>
				<TD>$row[Gender]</TD>
				<TD>$course[course_name]</TD>
				<TD>$row[Languages]</TD>
				<TD><A HREF = 'delete.php?del_id=$row[Id]' ONCLICK = \"return confirm('Are You Sure?')\">Delete</A></TD>
				<TD><A HREF = 'edit.php?edit_id=$row[Id]' >Edit</A></TD>
				
				
			</TR>";
}

print "</TABLE>";


?>
<A HREF = "insform.php">INSERT</A>
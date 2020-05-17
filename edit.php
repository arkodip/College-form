<?php
include "connection.php";


$sql = "SELECT * FROM `students` WHERE `Id` = '$_GET[edit_id]'";
$res = $db->query($sql);
$row = $res->fetch_array();

?>
<html>
	<body>
		<form method = "post" action = "update.php">
			<input type = "hidden" name = "up_id" value = "<?php print $row['Id']?>">
		<table>
			<tr>
					<td>Name</td>
					<td><input type = "text" name = "name" value = "<?php print $row['Name']?>"></td>
			</tr>
			<tr>
					<td>Phone</td>
					<td><input type = "text" name = "phone" value = "<?php print $row['Phone']?>"></td>
			</tr>
			<tr>
					<td>Address</td>
					<td><textarea name = "address"><?php print $row['Address']?></textarea></td>
			</tr>
			<tr>
					<td>Gender</td>
					<?php
					if($row['Gender']=="Male") {

						print "<td><input type = \"radio\" name = \"gender\" value = \"Male\" checked>Male<input type = \"radio\" name = \"gender\" value = \"Female\">Female</td>";
					}
					elseif($row['Gender']=="Female") {

						print "<td><input type = \"radio\" name = \"gender\" value = \"Male\" >Male<input type = \"radio\" name = \"gender\" value = \"Female\" checked>Female</td>";
					}
					else {

						 print "<td><input type = \"radio\" name = \"gender\" value = \"Male\" >Male<input type = \"radio\" name = \"gender\" value = \"Female\" >Female</td>"; 
					}

					?>
					
			</tr>
			<tr>
					<td>Courses</td>
					<td><select name = "course_id">
						<option selected disabled>Choose Your Course_Name</option>
						<?php
							$sql = "SELECT * FROM `courses`";
							$res = $db->query($sql);
							while($course = $res->fetch_array()) {

								if($row['Course']==$course['course_id']) {
									print "<option value = $course[course_id] selected>$course[course_name]</option>";
								}
								else {
								print "<option value = $course[course_id]>$course[course_name]</option>";
								}
							}

						?>
					</select>
				</td>
			</tr>
			<tr>
					<td>Language</td>
					<td>
						<?php
							$array = explode(",",$row['Languages']);//String to Array
							$sql = "SELECT * FROM `language`";
							$res = $db->query($sql);
							while($lang = $res->fetch_array()) {
								
								if(in_array($lang['lang_name'],$array))
									print "<input type = 'checkbox' name = 'lang[]' value = $lang[lang_name] checked>$lang[lang_name]";
								else 
									print "<input type = 'checkbox' name = 'lang[]' value = $lang[lang_name] >$lang[lang_name]";
							}

						?>
					
				</td>
			</tr>
			<tr>
					<td></td>
					<td><input type = "submit" name = "submit" value = "Edit"></td>
			</tr>
		</table>
		</form>
	</body>
</html>
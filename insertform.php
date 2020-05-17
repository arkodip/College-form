<?php
include "connection.php";
?>
<html>
	<body>
		<form method = "post" action = "insert.php">
		<table>

			<tr>
					<td>Name</td>
					<td><input type = "text" name = "name"></td>
			</tr>
			<tr>
					<td>Phone</td>
					<td><input type = "text" name = "phone"></td>
			</tr>
			<tr>
					<td>Address</td>
					<td><textarea name = "address"></textarea></td>
			</tr>
			<tr>
					<td>Gender</td>
					<td><input type = "radio" name = "gender" value = "Male">Male<input type = "radio" name = "gender" value = "Female">Female</td>
			</tr>
			<tr>
					<td>Courses</td>
					<td><select name = "course_id">
						<option selected disabled>Choose Your Course_Name</option>
						<?php
							$sql = "SELECT * FROM `courses`";
							$res = $db->query($sql);
							while($course = $res->fetch_array()) {

								print "<option value = $course[course_id]>$course[course_name]</option>";
							}

						?>
					</select>
				</td>
			</tr>
			<tr>
					<td>Language</td>
					<td>
						<?php
							$sql = "SELECT * FROM `language`";
							$res = $db->query($sql);
							while($lang = $res->fetch_array()) {

								print "<input type = 'checkbox' name = 'lang[]' value = $lang[lang_name]>$lang[lang_name]";
							}

						?>
					
				</td>
			</tr>
			<tr>
					<td></td>
					<td><input type = "submit" value = "Insert"></td>
			</tr>
			
		</table>
		</form>
	</body>
</html>
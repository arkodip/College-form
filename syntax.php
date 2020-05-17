Id 		Name     Phone   Address  


Select  = Print 
	SELECT * FROM `students`
	SELECT `Name` FROM `students` WHERE 1
	SELECT * FROM `students` WHERE `Id` = '2'

Insert
		INSERT INTO `students` (`Id`, `Name`, `Phone`, `Address`) VALUES (NULL, 'Tom', '89646747848', 'Kolkata');
Update
		UPDATE `students` SET `Name` = 'Johnny', `Phone` = '647748800', `Address` = 'NewTown-98' WHERE `Id` = '3';

Delete
	DELETE FROM `students` WHERE `Id` = '1';
<!DOCTYPE html>
<html>
<head>
	<title>Загрузка файла</title>
</head>
<body>
<form action="second_quest.php" method="POST" enctype="multipart/form-data">
	<input type="hidden" name="max_file_size" value="5242880"> 
	<input type="file" name="userfile[]" multiple>
	<input type="submit" name="upload" value="Загрузить">
</form>
<br><br><br>
<p style="color:green">

<?php 
	require_once 'vendor/AddFile.php';

	if( isset($_POST['upload']) ){
		echo AddFile::getResult($_FILES);

		unset($_POST['upload']);
	}
	
?>

</p>
</body>
</html>
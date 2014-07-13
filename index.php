<html>


<body>

	<form action= "index.php" method="POST">
		<input type ='text' name = 'idText'> <br/>
		<input type ='text' name = 'nameText'> <br/>
		<input type ='text' name = 'salaryText'> <br/>
		<input type ="submit" name ='submitButton'>
	</form>
<?php
	
	if(isset($_POST['idText'])) //without value it does not execute
	{
	$id = $_POST['idText'];
	$name = $_POST['nameText'];
	$salaryText = $_POST['salaryText'];
	
	echo $id. ' ' . $name . ' ' . $salaryText;
	}
	

?>
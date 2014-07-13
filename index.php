<html>


<body>

	<form action= "index.php" method="GET">
		<input type ='text' name = 'idText'> <br/>
		<input type ='text' name = 'nameText'> <br/>
		<input type ='text' name = 'salaryText'> <br/>
		<input type ="submit" name ='submitButton'>
	</form>
<?php
	
	if(isset($_GET['idText'])) //without value it does not execute
	{
	$id = $_GET['idText'];
	$name = $_GET['nameText'];
	$salaryText = $_GET['salaryText'];
	
	echo $id. ' ' . $name . ' ' . $salaryText;
	}


?>
</body>
</html>
<html>


<body>

	<form action= "index.php" method="GET">
		<input type ='text' name = 'idText'> <br/>
		<input type ='text' name = 'nameText'> <br/>
		<input type ='text' name = 'salaryText'> <br/>
		<input type ="submit" name ='submitButton'>
	</form>
<?php
	
	require 'employee.php'; //we can also use include
	if(isset($_GET['idText'])) //without value it does not execute
	{
	
	$an_employee = new Employee();
	$an_employee->id = $_GET['idText'];
	$an_employee->name =$_GET['nameText'];
	$an_employee->salary =$_GET['salaryText'];
	$salary_with_bonus = $an_employee->get_salary_with_bonus();
	echo $an_employee->id. ' ' . $an_employee->name. ' ' .$an_employee->salary. ' bonus ' .$salary_with_bonus;
	
	/*$id = $_GET['idText'];
	$name = $_GET['nameText'];
	$salaryText = $_GET['salaryText'];
	
	echo $id. ' ' . $name . ' ' . $salaryText;*/
	}


?>
</body>
</html>
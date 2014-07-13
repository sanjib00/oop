<body>

	<form action= "index.php" method="GET">
		Employee Name:<input type ='text'  name = 'employeeNameText'> <br/>
		Basic Amount<input type ='text'  name = 'basicAmount'> <br/>
		House Rent<input type ='text'  name = 'houseRentPer'>% of Basic <br/>
		Medical Allowance<input type ='text'  name = 'medAllowPer'>% of Basic <br/>
		<input type ="submit" name ='show me salary'>
	</form>
	
	<?php
	require 'salarycalculator.php'; 
	if(isset($_GET['employeeNameText'])) //without value it does not execute
	{
	
	$an_input = new SalaryCalculator();
	$an_input->employee_name = $_GET['employeeNameText'];
	$an_input->basic_amount =$_GET['basicAmount'];
	$an_input->house_rent_percent =$_GET['houseRentPer'];
	$an_input->medical_allowance_percent =$_GET['medAllowPer'];
	$total= $an_input->get_salary_amount();
	echo $total;
	}
?>
</body>
</html>
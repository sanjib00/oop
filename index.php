<body>

	<form action= "index.php" method="GET">
		Principle Amount<input type ='text'  name = 'prinAmountText'> <br/>
		Annual Interest<input type ='text'  name = 'annIntText'> <br/>
		Time Period<input type ='text'  name = 'timePeriodText'> <br/>
		<input type ="submit" name ='calculate'>
	</form>
	
	<?php
	require 'interestcalculator.php'; //we can also use include
	if(isset($_GET['prinAmountText'])) //without value it does not execute
	{
	
	$an_input = new InterestCalculator();
	$an_input->principal_amount = $_GET['prinAmountText'];
	$an_input->annual_interest_rate =$_GET['annIntText'];
	$an_input->time_period =$_GET['timePeriodText'];
	$Result = $an_input->get_total_amount();
	echo $an_input->principal_amount. ' '.$an_input->annual_interest_rate. '  ' .$an_input->time_period.  'total amount ' .$Result  ;
	
	
	}


	
	
	?>

</body>
</html>
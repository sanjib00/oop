<?php

class SalaryCalculator{
	public $employee_name;
	public $basic_amount;
	public $house_rent_percent;
	public $medical_allowance_percent;
	
	public function get_salary_amount()
	{
		
		
		$hrate = $this->house_rent_percent/100;
		$mrate = $this->medical_allowance_percent/100;
		$houserent =$this->basic_amount*$hrate;
		$medicalallowance=$this->basic_amount*$mrate;
		
		$total= $this->basic_amount+$houserent+$medicalallowance;
		return $total;
		
		
		
	}
}
?>
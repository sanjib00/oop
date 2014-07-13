<?php

class InterestCalculator{

	public $principal_amount;
	public $annual_interest_rate;
	public $time_period;
	
	public function get_total_amount()
	{
		$interest = $this->annual_interest_rate/100; //0.1
		//echo $interest."<br/>";
		$total = $this->principal_amount*$interest*$this->time_period;	 //10
		//echo $total."<br/>";
		$result = $this->principal_amount + $total; //
		//echo $result."<br/>";
		return $result;
		
		
		
	}
}
?>
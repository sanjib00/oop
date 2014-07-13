<?php

class Employee{

	public $id;
	public $name;
	public $salary;
	
	public function get_salary_with_bonus()
	{
		if($this->salary>=30000)
		
			return $this->salary+$this->salary*0.2;
			
		
		elseif($this->salary>=10000 && $this->salary<30000)
		
			return $this->salary+$this->salary*0.3;
			
		
			
		elseif($this->salary<10000)
	
			return $this->salary+$this->salary*0.5;
			 
		
		
		
	}
}
?>
<?php

class Salary_Calculator {
    
    private $age; // Numeric: Age of employee
	private $num_of_kid; // Numeric: How many kid the employee have
	private $is_use_car; // Boolean: Does this employee use company car
	private $salary; // Numeric: Employee salary
	private $country_tax; // Numeric : The country tax
	
	/**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($employee) {
		$this->salary = isset($employee['salary']) ? $employee['salary'] : 0;
        $this->age = isset($employee['age']) ? $employee['age'] : 0;
		$this->num_of_kid = isset($employee['num_of_kid']) ? $employee['num_of_kid'] : 0;
		$this->is_use_car = isset($employee['is_use_car']) ? $employee['is_use_car'] : false;
		$this->country_tax = 20; // Unit : %, it can be declare here or read from DB, which place we save it
		
    }

    /**
     * 
     *
     * @return void
     */
    public function calculate() {
		//Check the employee age
		if ($this->age > 50) {
			$this->salary = $this->salary * (100 + 7) / 100;
		}
		
		//Check the employee num of kid
		if ($this->num_of_kid > 2) {
			$this->country_tax = $this->country_tax - 2;
		}
		
		//Check the employee use the company car
		if ($this->is_use_car) {
			$this->salary = $this->salary - 500;
		}
		
		//Calculate the NET salary
		$net_salary = $this->salary * ( 100 - $this->country_tax ) / 100;
		
		return $net_salary;
        
    }
	

}

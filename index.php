<?php
	require('Salary_Calculator.php');
	
	//Alice is 26 years old, she has 2 kids and her salary is $6000
	$input = [
		'age' => 26,
		'num_of_kid' => 2,
		'salary' => 6000,
	];
	$a = new Salary_Calculator($input);
	echo '<pre>';
	echo 'Alice Net Salary:  $' . $a->calculate();
	
	
	//Bob is 52, he is using a company car and his salary is $4000
	$input = [
		'age' => 52,
		//'num_of_kid' => 2,
		'salary' => 4000,
		'is_use_car' => true,
	];
	$a = new Salary_Calculator($input);
	echo '<pre>';
	echo 'Bob Net Salary:  $' . $a->calculate();
	
	//Charlie is 36, he has 3 kids, company car and his salary is $5000
	$input = [
		'age' => 36,
		'num_of_kid' => 3,
		'salary' => 5000,
		'is_use_car' => true,
	];
	$a = new Salary_Calculator($input);
	echo '<pre>';
	echo 'Charlie Net Salary:  $' . $a->calculate();
?>


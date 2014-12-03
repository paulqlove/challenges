<?php

$units = [
			'Tsp' => ['Tsp' => 1, 'Tbsp' => 1/3, 'fl_oz' => 1/6, 'pint' => 1/96, 'Quart' => 1/192, 'Gallon' => 1/768], 
			'Tbsp' => ['Tsp' => 3, 'Tbsp' => 1, 'fl_oz' => 1/2, 'Pint' => 1/32,'Quart' => 1/64, 'Gallon' => 1/256], 
			'fl_oz' => ['Tsp' => 6, 'Tbsp' => 2, 'fl_oz' => 1, 'pint' => 1/16, 'Quart' => 1/32, 'Gallon' => 1/128],
			'Pint' => ['Tsp' => 96, 'Tbsp' => 32, 'fl_oz' => 16, 'pint' => 1, 'Quart' => 1/2, 'Gallon' => 1/8],
			'Quart' => ['Tsp' => 192, 'Tbsp' => 64, 'fl_oz' => 32, 'pint' => 2, 'Quart' => 1, 'Gallon' => 1/4],
			'Gallon' =>['Tsp' => 768, 'Tbsp' => 256, 'fl_oz' => 128, 'pint' => 8, 'Quart' => 4, 'Gallon' => 1]
			];
$listUnits = ['Tsp', 'Tbsp', 'fl_oz', 'Pint', 'Quart', 'Gallon'];





			//Ask for input measure
		$askInput = fwrite(STDOUT, "What would you like to convert" . PHP_EOL) . PHP_EOL;
		//ask what they want to convert to
		print_r($listUnits);
		//ask for measurement
		$convertThis = trim(fgets(STDIN)) . PHP_EOL;
		//user inputes the amount
		$askAmount = fwrite(STDOUT, "Enter the amount" . PHP_EOL) . PHP_EOL;
		$convertAmount = trim(fgets(STDIN)) . PHP_EOL;
		//ask what to convert to  
		$askConvert = fwrite(STDOUT, ' Choose from the list to convert' . PHP_EOL) . PHP_EOL;
		print_r($listUnits);
		//gets user input for conversion
		$convertTo = trim(fgets(STDIN)) . PHP_EOL;

//need to convert input to unit conversion rate

		

   
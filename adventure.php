<?php

$askName = fwrite(STDOUT,'WHAT IS YOUR NAME?') . PHP_EOL;
$userName = trim(fgets( STDIN)) . PHP_EOL;
$qEvidence = [
				'A' => 'A bullet shell', 
				'B' => 'A blade', 
				'C' => 'A cellphone', 
				'D' => 'A paper bag full of money'
				];


			

echo " Hello {$userName}\n you are a detective for the SAPD. You are on your way to work following the same route you usually take. A crime was just reported on Commerce St. so you turn around and head in that direction. As you arrive to the scene of the crime you notice on a ground..." . PHP_EOL;
foreach ($qEvidence as $key => $value) {
	echo $qEvidence['A'] . PHP_EOL . $qEvidence[B] . PHP_EOL . $qEvidence[C] . PHP_EOL . $qEvidence[D] . PHP_EOL;

}


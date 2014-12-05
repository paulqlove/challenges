<?php

function alphabet_soup($string){
	//make the string a array
	
	$stringSplit = explode(" ", $string);
	

	foreach($stringSplit as $key => $value){
		//split array into individual characters
		$stringParts = str_split($value);
		//Aplhabatize array
			asort($stringParts);
			var_dump($stringParts);
		//redifine variable after sorting
			$newOrder = $stringParts;
		//turn array into string
			
		$string .= ' ' . implode($newOrder) . ' ';
	}
	
	return  $string;
}


//Ask for user input
fwrite(STDOUT, 'Enter some string: ' . PHP_EOL);
//enter the string in
$string = trim(fgets(STDIN));

//call the function
echo alphabet_soup($string) . PHP_EOL;

<?php

/*Create the function so it will return a bool value true 
if the entered word is a palindrome. Function name example 
could be is_palindrome(). 
After you are complete test several known palindromes., 
Tthen test regular words in your function.

Try the following word examplesknown palindromes in your function

Amore, Roma
A man, a plan, a canal: Panama
No 'x' in 'Nixon*/

//ask for user to input a string
fwrite(STDOUT, 'Check to see if a word is a palindrome' . PHP_EOL);
//gets user inpute
$string =  trim(fgets(STDIN));
//reverse the string
$stringRev = strrev($string);
//echo the reverse string
echo $stringRev . PHP_EOL;
//compare 
if($string == $stringRev){
	echo $string . " is a palindrome!" . PHP_EOL;
}else{
	echo $string . " this is not a plaindrome" . PHP_EOL;
}


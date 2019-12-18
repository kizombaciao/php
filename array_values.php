<?php

// PHP function to illustrate the use of array_values() 
function Return_Values($array) 
{ 
	return (array_values($array)); 
} 

$array = array("ram"=>25, "krishna"=>10, "aakash"=>20, "gaurav"); 
print_r($array);
echo "\n"; 
print_r(Return_Values($array)); 

?> 



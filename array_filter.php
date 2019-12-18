<?php 

// PHP function to check for even elements in an array 
function Even($array) 
{ 
	// returns if the input integer is even 
	if($array % 2 == 0) 
	return TRUE; 
	else
	return FALSE; 
} 

$array = array(12, 0, 0, 18, 27, 0, 46); 
print_r(array_filter($array, "Even")); 

?> 



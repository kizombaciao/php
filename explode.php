#!/usr/bin/php

<?php 

	// original string 
	$OriginalString = "            Hello,      How can we help you?"; 
	
	// Without optional parameter NoOfElements 
	print_r(explode(" ",$OriginalString)); 
	print_r(explode(" ",trim($OriginalString))); 

	print_r(array_filter(explode(" ",$OriginalString))); 
	

    
    // with positive NoOfElements 
	//print_r(explode(" ",$OriginalString,3)); 
	// with negative NoOfElements 
	//print_r(explode(" ",$OriginalString,-1)); 
	
?> 


#!/usr/bin/env php
<?php  
	function ft_split($str)
	{
		$word = explode(" ", $str);
		$sort_word = array_values(array_filter($word));
		sort($sort_word);
		return ($sort_word);
    }
    //$s = "       test less    best mess      hess  ";
    $s = "            Hello,      How can we help you?";
    print_r(ft_split($s));

?>

#!/usr/bin/php
<?php

if ($argc < 3) {
    exit();
}
$search = $argv[1];

//echo $search."\n";

//echo "aaaaaaa\n";

//foreach ($argv as $w)
//    echo $w."\n";

//echo $argv[0]."\n";
//echo $argv[1]."\n";

unset($argv[0], $argv[1]);
$argv = array_reverse($argv);

//echo "aaaaaaa\n";

//foreach ($argv as $w)
//    echo $w."\n";


foreach ($argv as $v){
    $tmp = explode(":", $v);
    if ($search === $tmp[0]){
        echo $tmp[1]."\n";
        exit();
    }
}
?>


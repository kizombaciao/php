#!/usr/bin/php
<?php
    // ??? why do we need this ???
    function is_not_null($c)
    {
        if ($c == "0")
            return true;
        return !($c == null || empty($c));
    }       

    function is_sort($a, $b)
    {
        $a = strtolower($a);
        $b = strtolower($b);
        $sort = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
        $length = strlen($a) < strlen($b) ? strlen($a) : strlen($b);
        for ($i = 0; $i < $length; $i++)
        {
            $aa

        }

    }


    $arr = array();
    unset($argv[0]);
    foreach ($argv as $s)
    {
        $tmp = array_filter(explode(" ", $s), 'is_not_null');
        foreach($tmp as $s2)
            $array[] = $s2;
    
    }
    // can i not do array_values instead of the foreach above ???

    $i = 0;
    while ($i < count($array) - 1)
    {


    }

?>
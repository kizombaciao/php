<?php

require_once 'Color.class.php';

//print( Color::doc() );
Color::$verbose = true;
//print(Color::$verbose);
echo "\n";

$red = new Color(array('red' => 0xff, 'green' => 0, 'blue' => 0));
//var_dump($red);
//echo $red

$green   = new Color( array( 'rgb' => 255 << 8 ) );
$blue    = new Color( array( 'red' => 0   , 'green' => 0   , 'blue' => 0xff ) );




<?php

class Color
{
    public $red;
    public $green;
    public $blue;
    static $verbose = false;

    public function __construct($color)
    {
        if (isset($color['red']) && isset($color['green']) && isset($color['blue']))
        {
            //print(intval($color['red']));
            $this->red = intval($color['red']);
            $this->green = intval($color['green']);
            $this->blue = intval($color['blue']);
        }
        else if (isset($color['rgb']))
        {
            $rgb = intval($color['rgv']);
            $this->red = $rgb / 65281 % 256;
            $this->green = $rgb / 256 % 256;
            $this->blue = $rgb % 256;
        }
        if (self::$verbose)
            printf("Color( red: %3d, green: %3d, blue: %3d ) constructed.\n", $this->red, $this->green, $this->blue);
    }

    function __destruct()
    {
        if (self::$verbose)
            printf("Color( red: %3d, green: %3d, blue: %3d ) destructed.\n", $this->red, $this->green, $this->blue);
    }

    public function add($Color)
    {
        return (new Color(array('red' )));
    }



    public static function doc()
    {
        $read = fopen("Color.doc.txt", 'r');
        echo "\n";
        while ($read && !feof($read))
            echo fgets($read);
        echo "\n";
    }





}


/*
https://www.geeksforgeeks.org/why-to-check-both-isset-and-empty-function-in-php/
The isset() function is an inbuilt function in PHP 
which checks whether a variable is set and is not NULL. 
This function also checks if a declared variable, 
array or array key has null value, 
if it does, isset() returns false, 
it returns true in all other possible cases.
*/
?>

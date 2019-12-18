<?php
    //require_once('mysqli.php');
    
    function category_create(string $name)
    {
        $err = NULL; // ????
        if (strlen($name) <= 2 || strlen($name) >= 50)
            $err[] = 'name';
        if ($err != NULL)
            return $err;



    }


    function category_create(string $name)
    {
        $err = NULL; // ????
        $db = database_connect();
        
        // if name is invalid
        if (strlen($name) <= 2 || strlen($name) >= 50)
            $err[] = 'name';

        // why not just put below in the above if condition
        if ($err != NULL)
            return $err;
        
        // ???  
        $name = mysqli_real_escape_string($db, $name);
        $sql = "INSERT INTO categories (name) VALUES ('$name')";
        // https://www.w3schools.com/php/func_mysqli_real_escape_string.asp
        $sql = mysqli_query($db, $sql);
        return $sql;
    }
    
?>
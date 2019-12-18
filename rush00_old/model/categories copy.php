<?php
    require_once('mysqli.php');
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
    function category_update(string $oldname, string $newname)
    {
        $err = NULL;
        $db = database_connect();
        if (strlen($newname) <= 2 || strlen($newname) >= 50)
            $err[] = 'name';
        // ??? same issue
        if ($err != NULL)
            return $err;
        $oldname = mysqli_real_escape_string($db, $oldname);
        $newname = mysqli_real_escape_string($db, $newname);
        $sql = "UPDATE categories SET name = '$newname' WHERE name = '$oldname'";
        $sql = mysql_query($db, $sql);
        if ($sql != FALSE)
            return true;
        return $sql;
    }
    function category_delete()
    {
        $db = database_connect();
        $name = mysqli_real_escape_string($db, $name);
        $sql = "DELETE FROM categories WHERE name = '$name'";
        $sql = mysql_query($db, $sql);
        return $sql;
    }
    function category_get(string $name)
    {
        $db = database_connect();
        $name = mysqli_real_escape_string($db, $name);
        $sql = "SELECT * FROM categories WHERE name = '$name'";
        $sql = mysqli_query($db, $sql);
        if ($sql != FALSE)
            $sql = mysqli_fetch_assoc($sql); // why needed ???
            // https://www.w3schools.com/php/func_mysqli_fetch_assoc.asp     
        return $sql;
    }
    /*
    https://www.w3schools.com/php/php_mysql_connect.asp
    //Before we can access data in the MySQL database, 
    we need to be able to connect to the server.
    //
    https://www.w3schools.com/php/func_mysqli_real_escape_string.asp
    //The mysqli_real_escape_string() function escapes special characters 
    in a string for use in an SQL statement.
    //
    https://www.w3schools.com/php/func_mysqli_query.asp
    //
    https://www.w3schools.com/php/func_mysqli_fetch_assoc.asp
    // The mysqli_fetch_assoc() function fetches 
    a result row as an associative array.

    */

?>
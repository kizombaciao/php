<?php
    function database_connect()
    {
        $add = ""; // ???
        $user = "";
        $pwd = "";
        $db = "phprush00";

        $mysqli = mysqli_connect($add, $user, $pwd, $db);
        if (mysqli_connect_errno($mysqli))
        {
            echo "Error in connecting to database: ".mysqli_connect_error();
            return (NULL);
        }
        return $mysqli;
    }
?>
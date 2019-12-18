<?php
    session_start();
    require_once('../model/categories.php');
    require_once('../model/products.php');
    include('../model/prod_has_cat.php');

    // ???
    $functions = array('removecategory', 'addcategory', 'updatecategory');

    function addcategory(array $data)
    {
        $err = NULL;
        if (!$data['name'])


    }








?>

<?php
    session_start();
    require_once('../model/user.php');
    require_once('../model/hash.php');

    $functions = array('login', 'register', 'update', 'validmail', 'unregister');
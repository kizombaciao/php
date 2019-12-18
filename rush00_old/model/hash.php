<?php
    function admin_pwd($pwd)
    {
        return hash('ripemd256', hash('whirlpool', $pwd));
    }
    function user_pwd($pwd)
    {
        return hash('sha256', hash('snefru', $pwd));
    }
    // ??? datas ???
    function get_valid_key()
    {
        return hash('ripemd256', $datas['username']);
    }



?>
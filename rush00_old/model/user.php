<?php

// fix admin_pass and user_pass
function user_create(string $user, string $pwd, string $email, bool $isadmin)
{
    if (strlen($user) > 45 || strlen($user) < 5)
        $err[] = 'pseudo';
    if (filter_var($email, FILTER_VALIDATE_EMAIL) == FALSE)
        $err[] = 'email';

    if (strlen($pwd) < 7)
        $err[] = 'password';
        else
	{
			$pwd = hash('whirlpool', $pwd);
	}
    
    if (!empty($err))
            return ($err);
    
    $list = array(array($user, $pwd, $email, $isadmin)); 
    $file = fopen("user.csv","a");
    foreach ($list as $line) {
        fputcsv($file, $line);
    }
    fclose($file);
}

// not completed !!!
function user_get($user, $pwd)
{
	$pwd = hash('whirlpool', $pwd);


}


// not working yet !!!
function user_delete(string $user)
{
    $file = fopen("user.csv","r");
    while(! feof($file))
    {
        print_r(fgetcsv($file));
    }
    fclose($file);
  

}








?>
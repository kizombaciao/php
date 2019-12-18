

<?php
    if ($_POST['user'] && $_POST['pwd'] && $_POST['submit'] && $_POST['submit'] == "OK")
    {
        if (!file_exists('../private'))
        {
            mkdir("../private");
        }
        if (!file_exists('../private/passwd'))
        {
            file_put_contents('../private/passwd', NULL);
        }
        $accnt = unserialize(file_get_contents('../private/passwd'));
        $exist = 0;
        if ($accnt)
        {
            foreach ($accnt as $k => $v)
            {
                if ($v['user'] == $_POST['user'])
                    $exist = 1;
            }
        }
        if ($exist)
        {
            echo "ERROR\n";
        }
        else
        {
            $tmp['user'] = $_POST['user'];
            $tmp['pwd'] = hash('whirlpool', $_POST['pwd']);
            $accnt[] = $tmp;
            file_put_contents('../private/passwd', serialize($accnt));
            header('Location: index.html');
            echo "OK\n";
        }
    }
    else
    {
        echo "ERROR\n";
    }

<?php
    require_once('auth.php');

    session_start();

    if (!($_POST['user'] && $_POST['pwd'] && auth($_POST['user'], $_POST['pwd'])))
    {
        $_SESSION['logged_on_user'] = "";
        header('Location: index.html');
        echo "ERROR\n";
    }
    else
    {
        $_SESSION['logged_on_user'] = $_POST['user'];
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <title>Logged In</title>
        </head>
        <body>
            <a href="logout.php" style="float: right">Sign Out</a>

        </body>
        </html>
        <?php
    }

/*
<?php
    session_start();

    if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
        header('Location: index.php');
        exit();
    }
    include('partial/head.php');
?>
// html !!!
*/
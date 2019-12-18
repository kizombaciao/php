<?php
session_start();

//include 'functions.php';

foreach ($_POST as $article => $add)
{
    if ($_POST[$article] == "Add Item")
        add_article_to_basket($article);

} 

?>
<!DOCTYPE html>
<html>
	<head>
		<title>E-Commerce</title>
		<meta name="Author" content="" />
		<meta name="Description" content="Rush 00 piscine PHP @ 42" />
		<meta name="Language" content="en" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="google" content="notranslate" />
		<link rel="stylesheet" type="text/css" href="./css/style.css">
		<link rel="stylesheet" type="text/css" href="./css/product.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    </head>
    <body>
        <header>
			<div id="top-bar">
				<div id="top-bar-content">
					<?php
						if ($_SESSION["username"] != NULL)
						{
							if ($_SESSION["level"] != "basic")
								echo '<div id="login-element" style="padding-top: 15px; width: 365px;">';
							else
								echo '<div id="login-element" style="padding-top: 15px; width: 270px;">';
							if ($_SESSION["level"] != "basic")
								echo '<a id="admin" href="./admin.php" title="Administration">Administration</a><a id="orders" href="./orders.php" title="Orders">Orders</a>';
							echo '<a id="my-account" href="./account.php" title="Account">My account</a><a id="logout" href="./logout.php" title="Logout">Logout</a>';
							if ($_SESSION["level"] == "basic")
								echo '<a id="orders" href="./basket.php" title="Basket" style="margin-left: 12px;">My Basket</a>';
							echo '</div>';
						}
						else
						{
							echo '<div id="login-element">';
							echo '<form action="user.php" method="post"><input type="text" name="login" placeholder="Username" /><input type="password" name="pw" placeholder="Password" /><input type="submit" name="submit" value="Log-In"></form><a id="sign-in-button" href="./sign-in.php" title="Sign-In">Sign-In</a>';
							echo '<a id="orders" href="./basket.php" title="Basket" style="margin-left: 12px;">My Basket</a>';
							echo '</div>';
						}
					?>
				</div>
			</div>        
        </header>
    </body>
</html>

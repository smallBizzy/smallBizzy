<?php
	session_start();
	//We will always assume the user intended to log out each time they close their browser. Every new session starts with a 'logged out' state.
	
	//users may be returning to this page from this page by logging in. In that case, check the user's input from the login form. If it matches a username in the database (it should only match one or none), check to see if that user's password matches the user's input. If both cases are true, set the session variable of "logged_in" to true and "username" to the user's username.
	
	//query the 'users' table for users with the given username
	
	/*if ($_POST["login['username']"] == (a single record in the database))
	{
		if ($_POST["login['username']"] == (that user's password))
		{
			$username = username from the database of users;
			$_SESSION["logged_in"] = true;
			$_SESSION["account_type"] = user's account type;
		}
	}
	else //no user with that name was found
	{
		$username = "guest";
	}*/
	//debug
	$_SESSION["Account_Type"] = "Administrator";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>smallBizzy Home</title>
        <link href="../styleSheets/masterpagestyle.css" type="text/css" rel="Stylesheet" />
    </head>
    <body>
	<?php
	include('../pageHeaderScripts/determineHeader.php');
    ?>
        <div id="content">
			Welcome <?php echo $_SESSION['username'] ?><br />
            Browse shops and products<br />
            <input type="text" /><button>Search</button><br />
			<!-- list of featured products and businesses here -->
            <a href="searchResults.php">(test)goes to searh results</a>
        </div>
	<?php
		include('../pageFooterScripts/footer.php');
    ?>
    </body>
</html>
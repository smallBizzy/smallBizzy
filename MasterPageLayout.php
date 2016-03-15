<?php session_start(); ?>
<?php
	//IMPORTANT: we will NOT store the user's password on their computer. They must log in every time they start a new session. We will need to store their name in a session variable to have their name appear in the account link.
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Master Page Design</title>
		<!-- make sure the style sheet is accessible from all web pages -->
        <link href="styleSheets/masterpagestyle.css" type="text/css" rel="Stylesheet" />
    </head>
    <body>
	<?php
		include('../pageHeaderScripts/determineHeader.php');
    ?>
        <div id="content">
            Content will vary for each page design and will be a minimum of 400px tall<br />
            Welcome, <?php echo $username; ?>
        </div>
		<!-- Like the header, the footer will be present on ALL pages, but it will not differ based on account status -->
	<?php
		include('../pageFooterScripts/footer.php');
    ?>
    </body>
</html>
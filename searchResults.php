<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	/* This page will take input from the previous page, index.html or the home page, and use that to get results from a database which match the words given by the user. The query will match description, part number, */
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>search results for (user's input)</title>
        <link href="../styleSheets/masterpagestyle.css" rel="Stylesheet" />
    </head>
    <body>
	<?php
		include('../pageHeaderScripts/determineHeader.php');
    ?>
        <div id="content">
			<!-- if there are zero results returned, display a message saying nothing was found. Otherwise, display the results in a list.

			If our site grows to a considerable size, we will need to break the search results down to 20-record chunks and load the results one chunk at time. At this point, large results are not a concern-->
            <ul>
                <li><a href="../shops/12345home.php">shop 12345</a></li>
            </ul>
        </div>
	<?php
		include('../pageFooterScripts/footer.php');
    ?>
    </body>
</html>
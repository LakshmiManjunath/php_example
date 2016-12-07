<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />
<title>PraLak Crochets - Comments and Reviews</title>
<?php include("php-includes/phtml-head.php"); ?>
<?php include("php-includes/pcomm-reviews.php"); ?>
<link rel="stylesheet" href="css/article-page.css" type="text/css" />
</head>

<body id="comm-reviews">
<form action="http://morpheus.dce.harvard.edu/cgi-bin/echo.cgi" method="POST">
<div class="container">
  <?php include("php-includes/pheader.php"); ?>
  <?php include("php-includes/pbreadcrumb-navigation.php"); ?>
  <?php include("php-includes/pnavigation.php"); ?>
  <div id="main" class="span-20 last">  
	<p class="comm-revi"><strong>Comments &amp; Reviews</strong><br>
   	<textarea class="mytextarea" name="comm-revi" rows="1" cols="1" placeholder="No more than 150 characters long"></textarea><br />
	<input class="mytextarea" type="submit" value="SUBMIT"></p>
	<div id="scomm-srevie"></div>
  </div>
 
  <?php include("php-includes/pfooter.php"); ?>
</div>
</form>
</body>
</html>
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />
<title>PraLak Crochets - Videos</title>
<?php include("php-includes/phtml-head.php"); ?>
<link rel="stylesheet" href="css/videos.css" type="text/css" />
<script type="text/javascript" src="jwplayer/jwplayer.js"></script>

</head>
<body id="videos">
<div class="container">
  <?php include("php-includes/pheader.php"); ?>
  <?php include("php-includes/pbreadcrumb-navigation.php"); ?>
  <?php include("php-includes/pnavigation.php"); ?>
  <div id="main" class="span-20 last">  
	<h3 class="videos-titles"><a href="http://www.youtube.com/watch?v=WDl7J-Q3zYE">CROCHET GREEK</a></h3>
	<div id="video1" class="videos">
		<script>
    			jwplayer("video1").setup({
        		file: "http://www.youtube.com/watch?v=WDl7J-Q3zYE",
        		width: 600,
        		height: 360
    			});
		</script>
	</div><br>
	<h3 class="videos-titles"><a href="http://www.youtube.com/watch?v=VrWqJF60X28">CROCHET BUTTERFLIES</a></h3>
	<div id="video2" class="videos">
	

		<script>
    			jwplayer("video2").setup({
        		file: "http://www.youtube.com/watch?v=VrWqJF60X28",
        		width: 600,
        		height: 360
    			});
		</script>
	</div><br>
	<h3 class="videos-titles"><a href="http://www.youtube.com/watch?v=VrWqJF60X28">CROCHET BRAIDS</a></h3>
	<div id="video3" class="videos">
		<script>
    			jwplayer("video3").setup({
        		file: "http://www.youtube.com/watch?v=hIEus6b7u9U",
        		width: 600,
        		height: 360
    			});
		</script>
	</div>  
  </div>
  <?php include("php-includes/pfooter.php"); ?>
</div>
</body>
</html>
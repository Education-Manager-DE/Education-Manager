<?php
session_start();
require_once("inc/config.inc.php");
require_once("inc/functions.inc.php");
$user = check_user();
include("templates/header.inc.php");
include("./admin/config.php");
?>
<link href="css/youtube.css" rel="stylesheet" type="text/css">
<div class="container main-container">
<h1>Live-Event</h1>
	<br>
	<hr>
	<div class="video-container"><iframe src="https://www.youtube-nocookie.com/embed/<?php echo $youtubeid; ?>?rel=0"  frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>
</div>
 <?php 
include("templates/footer.inc.php")
?>
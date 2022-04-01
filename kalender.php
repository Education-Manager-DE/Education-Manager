<?php
session_start();
require_once("inc/config.inc.php");
require_once("inc/functions.inc.php");
$user = check_user();
include("templates/header.inc.php");
include("./admin/config.php");
?>
<link href="css/kalender.css" rel="stylesheet" type="text/css">
<div class="container main-container">
<h1>Kalender</h1><br><hr>
<div class="responsiveCal">
<iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showDate=0&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=2&amp;hl=de&amp;bgcolor=%23FFFFFF&amp;src=<?php echo $googlekalenderid; ?>&amp;color=%23ffcf03&amp;ctz=Europe%2FBerlin" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no" ></iframe>
</div>
<?php 
include("templates/footer.inc.php")
?>


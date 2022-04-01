<?php
session_start();
require_once("inc/config.inc.php");
require_once("inc/functions.inc.php");
$user = check_user();
include("templates/header.inc.php");
include("./admin/config.php");
?>
<div class="container main-container">
<h1>Impressum</h1>
	<br>
	<h4>Support</h4>
	<p><b>
Bei Fragen zu Schulmanager Online wenden Sie sich bitte ausschließlich an die Schule.</b></p><br>
		<b>
		<?php echo $schulname; ?>
        </b><br>
		 <?php echo $adresse; ?>
        <br>
		<?php echo $ort; ?>
<hr>
<b>Education-Manager</b>
<br>Julian Zillner
<br>Gegenbachstr. 30
<br>94139 Breitenberg
<br>
<br>
<?php 
include("templates/footer.inc.php")
?>

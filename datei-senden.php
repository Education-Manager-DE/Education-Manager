<?php
session_start();
require_once("inc/config.inc.php");
require_once("inc/functions.inc.php");
$user = check_user();

include("templates/header.inc.php");
?>

<div class="container main-container">
<h1>Datei Senden</h1>
	<br>
	<hr>
	<p>Sende eine beliebige Datei an die Schule</p>
	<p>Bennene die Datei in folgenden Format:</p>
	<hr>
	<p>Muster:<p style="font-family: Consolas, 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', Monaco, 'Courier New', 'monospace'">Vorname_Nachname_Dateiname_Lehrername</p></p>
	
	<hr>
	<form action="upload.php" method="post" enctype="multipart/form-data">
<input type="file" name="datei"><br>
<input type="submit" value="Senden">
</form>
<?php 
include("templates/footer.inc.php")
?>





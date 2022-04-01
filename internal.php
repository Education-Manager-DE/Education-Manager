<?php
session_start();
require_once("inc/config.inc.php");
require_once("inc/functions.inc.php");
$user = check_user();
include("templates/header.inc.php");
?>
<link href="css/elemente.css" rel="stylesheet" type="text/css">
<div class="container main-container">
<h1><script src="js/daytime.js"></script> <?php echo htmlentities($user['vorname']); ?>!</h1>
	<br>
<div class="square-container"> <a id="default-b" href="">
		Panel
	</a>
	<a id="default-o" href="elternbriefe.php">
		Elternbriefe
	</a>
	<a id="default-b" href="kalender.php">
		Kalender
	</a>
	<a id="default-o" href="krankenmeldung.php">
		Krankenmeldung
	</a>
	<a id="default-b" href="beurlaubung.php">
		Beurlaubung
	</a>
	<a id="default-o" href="lern-tools.php">
		Lern Tools
	</a>
		<a id="default-b" href="corona-lokal.php">
		Corona Lokal
	</a>
	</a>
		<a id="default-o" href="programme.php">
		Programme
	</a>
	
	</a>
		<a id="default-b" href="live-event.php">
		Live-Event
	</a>
</a>
		<a id="default-o" href="formulare.php">
		Formulare
	</a>
		<a id="default-b" href="datei-senden.php">
		Datei Senden
	</a>
</a>
		<a id="default-o" href="vertretungsplan.php">
		Vertretungsplan
	</a>
	<a id="default-b" href="busfahrplan.php">
		Busfahrplan
	</a>
<a id="default-o" href="videokonferenz.php">
		Videokonferenz
	</a>
<a id="default-b" href="rechner.php">
		Rechner
	</a>
<a id="default-o" href="fotogalerie.php">
		Fotogalerie
	</a>
<a id="default-b" href="mediathek.php">
		Mediathek
	</a>
<a id="default-o" href="chat.php">
		Chat
	</a>
</div>
<?php 
include("templates/footer.inc.php")
?>

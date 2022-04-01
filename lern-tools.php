<?php
session_start();
require_once("inc/config.inc.php");
require_once("inc/functions.inc.php");

//Überprüfe, dass der User eingeloggt ist
//Der Aufruf von check_user() muss in alle internen Seiten eingebaut sein
$user = check_user();

include("templates/header.inc.php");
?>
<div class="container main-container">
<h1>Lern Tools</h1>
	<br>
	<hr>
	<a href="ard-alpha.php" onClick="popup=window.open('ard-alpha.php','','toolbar=0,location=0,directories=0,status=0,menubar=0,scrollbars=0,resizable=0,width=800,height=600'); return false;">ARD alpha</a>
	<br>
	<a href="https://www.schlaukopf.de">Schlaukopf</a>
	<br> 
	<a href="https://www.grammarly.com">Grammarly</a>
	<br> 
	<a href="https://www.planet-wissen.de/index.html">Planet-Wissen</a>
<?php 
include("templates/footer.inc.php")
?>

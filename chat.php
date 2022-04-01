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
<h1>Lehrkräfte</h1>
	<br>
	<hr>
<p>Wähle die Lehrkraft aus, an der du eine Nachricht senden willst.</p>
<h3>Nachricht an Herr/Frau (E-Mail Kontakt):</h3>
	<a href="mailto:wolfgang-schmidt@education-manager.de
         ?body=Hallo%20Herr&20Schmidt,%0D%0A%0D%0Aich%20wollte%20nur%20fragen,%20ob%20">
		Wolfgang Schmidt (Schulleiter)
</a><br>
		<a href="mailto:jonas-wagner@education-manager.de
         ?body=Hallo%20Herr&20Wagner,%0D%0A%0D%0Aich%20wollte%20nur%20fragen,%20ob%20">
		Jonas Wagner
</a><br>
	<a href="mailto:anna-müller@education-manager.de
         ?body=Hallo%20Frau&20Müller,%0D%0A%0D%0Aich%20wollte%20nur%20fragen,%20ob%20">
		Anna Müller
</a><br>
	<hr>
	<h3>Online Chat Zugang:</h3>
	<p>Name und Raum eingeben</p>
	<a href="https://chat.educationmanager-online.de/">Zum Chat </a>
 <?php 
include("templates/footer.inc.php")
?>
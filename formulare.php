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

<h1>Formulare</h1>
	<br>
<hr>
<?php
// Öffnet ein Unterverzeichnis mit dem Namen "daten"
$verzeichnis = openDir("formulare");
// Verzeichnis lesen
while ($file = readDir($verzeichnis)) {
 // Höhere Verzeichnisse nicht anzeigen!
 if ($file != "." && $file != "..") {
 // Link erstellen
  echo "<a href=\"formulare/$file\">$file</a><br>\n";
 }
}
 // Verzeichnis schließen
closeDir($verzeichnis);
?>


<?php 
include("templates/footer.inc.php")
?>

<?php
include "templates/menu.html";
include "config.php"
?>
<?php session_start();
if(!isset($_SESSION['UserData']['Username'])){
header("location:login.php");
exit;
}
?>
<div style="padding-left:16px">
	<button onClick="history.go(0);">Aktualisieren</button>
	<br><br>
	<?php
$verzeichnis = openDir("krankenmeldungen");
while ($file = readDir($verzeichnis)) {
 if ($file != "." && $file != "..") {
  echo "<a href=\"krankenmeldungen/$file\">$file</a><br>\n";
 }
}
closeDir($verzeichnis);
?>
		<form method="post" action="script.php">
	<br><button name="name" value="value" type="submit">Alle Krankenmeldungen löschen</button>
</form>
</div>
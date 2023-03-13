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

		<form method="post" action="script.php">
	<br><button name="name" value="value" type="submit">Alle Krankenmeldungen löschen</button>
</form>
</div>
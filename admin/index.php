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
	<h2>Aktuelle Konfiguration</h2>
	<b>Für Schule:</b><br>
	<?php echo $schulname; ?><br>
	<?php echo $adresse; ?><br>
	<?php echo $ort; ?><br><br>
	<b>Elternbrief Anmerkung: </b> <?php echo $elternbriefanmerkung; ?><br>
	<b>Corona Obejekt ID: </b> <?php echo $coronaid; ?><br>
	<b>Google Kalender ID: </b><?php echo $googlekalenderid; ?><br>
	<b>YouTube ID: </b><?php echo $youtubeid; ?><br>
	</div
<?php
session_start();
require_once("inc/config.inc.php");
require_once("inc/functions.inc.php");
$user = check_user();
include("./admin/config.php");
include("templates/header.inc.php");
?>
<div class="container main-container">
<h1>Elternbriefe</h1>
	<br>
	<hr>
	<h4>Anmerkung:</h4>
	<?php echo $elternbriefanmerkung; ?> 
<hr>
<?php
$verzeichnis = openDir("elternbriefe");
while ($file = readDir($verzeichnis)) {
 if ($file != "." && $file != "..") {
  echo "<a href=\"elternbriefe/$file\">$file</a><br>\n";
 }
}
closeDir($verzeichnis);
?>
<?php 
include("templates/footer.inc.php")
?>

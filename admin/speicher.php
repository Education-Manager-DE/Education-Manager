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
	<?php
$verzeichnis = openDir("upload");
while ($file = readDir($verzeichnis)) {
 if ($file != "." && $file != "..") {
  echo "<a href=\"upload/$file\">$file</a><br>\n";
 }
}
closeDir($verzeichnis);
?>
</div>
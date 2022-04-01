<?php
session_start();
require_once("inc/config.inc.php");
require_once("inc/functions.inc.php");
$user = check_user();
include("templates/header.inc.php");
?>

<div class="container main-container">
	<h1>Fotogalerie</h1>
		<?php 
include("templates/alert-privat.inc.php")
?>
	<br>
	<hr>
<?php
       $dir = "fotogalerie/";
            $i = 0;
            if (is_dir($dir)) {
                if ($dh = opendir($dir)) {
                while (($file = readdir($dh)) !== false) {
                    if(is_file($dir . $file)){
                         echo "<img src='fotogalerie/$file' width='300px' height='180px'>";
                    }
                  }
                closedir($dh);
                }
            } ?>
<?php 
include("templates/footer.inc.php")
?>

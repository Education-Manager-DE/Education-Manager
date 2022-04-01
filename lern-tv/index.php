<?php
session_start();
require_once("../inc/config.inc.php");
require_once("../inc/functions.inc.php");

//Überprüfe, dass der User eingeloggt ist
//Der Aufruf von check_user() muss in alle internen Seiten eingebaut sein
$user = check_user();

include("../templates/header.inc.php");
?>



<div class="container main-container">

<h1>Willkommen zurück!</h1>
	
	    <?php
    /* This sets the $time variable to the current hour in the 24 hour clock format */
    $time = date("H");
    /* Set the $timezone variable to become the current timezone */
    $timezone = date("e");
    /* If the time is less than 1200 hours, show good morning */
    if ($time < "12") {
        echo "Guten Morgen";
    } else
    /* If the time is grater than or equal to 1200 hours, but less than 1700 hours, so good afternoon */
    if ($time >= "12" && $time < "17") {
        echo "Guten Tag";
    } else
    /* Should the time be between or equal to 1700 and 1900 hours, show good evening */
    if ($time >= "17" && $time < "19") {
        echo "Guten Abend";
    } else
    /* Finally, show good night if the time is greater than or equal to 1900 hours */
    if ($time >= "19") {
        echo "Gute Nacht";
    }
    ?>

<?php echo htmlentities($user['vorname']); ?>,<br>
Herzlich Willkommen im Education-Manager Panel!<br><br>


<?php 
include("../templates/footer.inc.php")
?>

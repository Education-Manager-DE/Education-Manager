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

<h1>Busfahrplan</h1>
	<br>
<hr>
<img src="images/busfahrplan.jpg" width="auto" height="335" alt=""/>
<?php 
include("templates/footer.inc.php")
?>

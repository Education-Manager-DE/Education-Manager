<?php
session_start();
require_once("inc/config.inc.php");
require_once("inc/functions.inc.php");
$user = check_user();

include("templates/header.inc.php");
?>
<div class="container main-container">

<h1>LernTV</h1>
	<a href="ard-alpha.php" onClick="popup=window.open('ard-alpha.php','','toolbar=0,location=0,directories=0,status=0,menubar=0,scrollbars=0,resizable=0,width=800,height=600'); return false;">ARD alpha</a>
	





<?php 
include("templates/footer.inc.php")
?>

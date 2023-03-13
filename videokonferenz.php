<?php
session_start();
require_once("inc/config.inc.php");
require_once("inc/functions.inc.php");
$user = check_user();

include("templates/header.inc.php");
?>
<div class="container main-container">
<h1>Videokonferenz</h1>
	<br>
	<hr>    
</head>
    <body>
        <div class="search-box">
            <input class="search-txt" type="text" id="suche" name=" " placeholder="Videokonferenz ID" onkeydown="Event_Key();">
            <a class="search-btn" href="#" onclick="suchen()">
                <i class="fas fa-search"></i>
            </a>
        </div>    
		<p>Um beizutreten, klicken sie auf ENTER</p>
		<br>
		<hr>
		<button OnClick=" location.href='https://educationmanager-online-videkonferenz.julianzillner.repl.co/' ">Videokonferenz erstellen</button>    
<?php 
include("templates/footer.inc.php")
?>
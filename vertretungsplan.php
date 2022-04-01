<?php
session_start();
require_once("inc/config.inc.php");
require_once("inc/functions.inc.php");
$user = check_user();

include("templates/header.inc.php");
?>
<div class="container main-container">
<h1>Vertretungsplan</h1>
	<br>
<hr>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.1.min.js"></script><script type="text/javascript">
            $(document).ready(function(){ $('#inserttext').load('admin/vertretungsplan.txt');            
            });
        </script>
    </head>
    <body>
        <div id="inserttext">
        </div>		
<?php 
include("templates/footer.inc.php")
?>

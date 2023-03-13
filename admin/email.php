<?php
include "templates/menu.html";
include "mail-settings.php"
?>
<?php session_start();
if(!isset($_SESSION['UserData']['Username'])){
header("location:login.php");
exit;
}
?>
<?php include 'config.php' ?>
<!doctype html>
<meta charset="utf-8">
<title>Edu-Admin</title>
<link rel="icon" type="image/png" href="../images/favicon.png" sizes="32x32">
<meta name="viewport" content="width=device-width, initial-scale=1">
<div style="padding-left:16px">
<html>
<head>
</head>
<body>

<h3>E-Mail senden</h3>

<form method="post" action="email.php">

    <p>
        <input type="text" name="name" placeholder="Name" class="form-control" required value=""/>
    </p>

    <p>
        <input type="text" name="email" class="form-control" placeholder="Empfänger E-Mail" required value=""/>
    </p>

    <p>
        <input type="text" name="subject" class="form-control" placeholder="Betreff" required value=""/>
    </p>

    <p>
        <textarea rows="4" cols="50" name="message" class="form-control" placeholder="Nachricht eingeben"
                  required></textarea>
    </p>

    <p>
        <input type="submit" name="submit" value="Senden" class="btn btn-info"/>
    </p>

</form>

</body>
</html>